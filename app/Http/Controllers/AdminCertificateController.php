<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');

        return view('dashboard.admin.certificates.index', [
            'title' => 'Certificates',
            'certificates' => Certificate::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');

        return view('dashboard.admin.certificates.create', [
            'title' => 'Insert Certificate',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');

        $validatedData = $request->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'image' => ['image', 'file', 'max:1024'],
            'category_id' => ['required'],
            'body' => ['required', 'min:10'],
            'link' => ['url']
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public_certificates');
            $image = $request->file('image');
            $input['imageName'] = $validatedData['image'];
            $destinationPath = public_path('/public_certificates');
            $image->move($destinationPath, $input['imageName']);
        }

        $validatedData['user_id'] = auth()->user()->id;

        $exist = Certificate::where('slug', '=', AdminCertificateController::scopeSlugify($request->title)->original['slug'])->first();

        if ($exist) {
            $validatedData['slug'] = AdminCertificateController::scopeSlugify($request->title)->original['slug'] . '-' . strval(time());
        } else {
            $validatedData['slug'] = AdminCertificateController::scopeSlugify($request->title)->original['slug'];
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 70));

        Certificate::create($validatedData);

        return redirect('/dashboard/admin/certificates')->with('success', 'New Certificate Inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        $this->authorize('admin');

        return view('dashboard.admin.certificates.show', [
            'title' => 'Detail Certificate',
            'certificate' => $certificate
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        $this->authorize('admin');

        return view('dashboard.admin.certificates.edit', [
            'title' => 'Edit Certificate',
            'certificate' => $certificate,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        $this->authorize('admin');

        $rules = [
            'title' => ['required', 'min:3', 'max:50'],
            'category_id' => ['required'],
            'body' => ['required', 'min:10'],
            'link' => ['url']
        ];

        if ($request->image) {
            $rules['image'] = ['image', 'file', 'max:3072'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('public_certificates');
                $image = $request->file('image');
                $input['imageName'] = $validatedData['image'];
                $destinationPath = public_path('/public_certificates');
                $image->move($destinationPath, $input['imageName']);
            }
        } else {
            $validatedData['image'] = $certificate->image;
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 70));

        $exist = Certificate::where('slug', '=', AdminCertificateController::scopeSlugify($request->title)->original['slug'])->first();

        if ($certificate->title == $request->title) {
            $validatedData['slug'] = $certificate->slug;
        } else if ($exist) {
            $validatedData['slug'] = AdminCertificateController::scopeSlugify($request->title)->original['slug'] . '-' . strval(time());
        } else {
            $validatedData['slug'] = AdminCertificateController::scopeSlugify($request->title)->original['slug'];
        }

        Certificate::where('id', $certificate->id)
            ->update($validatedData);

        return redirect('/dashboard/admin/certificates')->with('success', 'Certificate has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        $this->authorize('admin');

        Certificate::destroy($certificate->id);
        return redirect('/dashboard/admin/certificates')->with('success', 'Certificate has been deleted');
    }

    public function slugify(Request $request)
    {
        $text = $request->name;
        $divider = '-';

        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return response()->json(['slug' => $text]);
    }

    public static function scopeSlugify($val)
    {
        $text = $val;
        $divider = '-';

        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return response()->json(['slug' => $text]);
    }
}

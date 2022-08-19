<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('certificates', function (BreadcrumbTrail $trail) {
  $trail->push('Certificates', route('certificates.index'));
});


Breadcrumbs::for('certificate', function (BreadcrumbTrail $trail, $certificate) {
  $trail->parent('certificates');
  $trail->push($certificate->title, route('certificates.show', $certificate));
});

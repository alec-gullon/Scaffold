<?php

$mediaLibraryPath =         PROJECT_PATH . "\\cms\home\channels\lancaster\media\\";

$layoutlibPath =            REPOS_PATH . "layoutlib\\";
$cmsLibPath =               REPOS_PATH . "cmslib\\";
$jsLibPath =                REPOS_PATH . "jslib\\";
$foundationStylesPath =     REPOS_PATH . "foundation-styles\\";
$oldStylesPath =            REPOS_PATH . "lancaster-university-scss-compiler\\";

$documentRootPath =         PROJECT_PATH . "\\cms\\";

return [

    $mediaLibraryPath . 'wdp\style-assets\php\lib\src'  => $cmsLibPath . 'lib\src',

    // CSS

    $mediaLibraryPath . 'wdp\style-assets\css\foundation\app.5.css' => $foundationStylesPath . 'css\app.6.css',
	$mediaLibraryPath . 'wdp\style-assets\css\foundation\app.6.css' => $foundationStylesPath . 'css\app.6.css',
	$mediaLibraryPath . 'wdp\style-assets\css\foundation\app-nf.min.css' => $foundationStylesPath . 'css\app.6.css',

    $mediaLibraryPath . 'wdp\style-assets\css\default.1.css'                                => $oldStylesPath . 'compiled\core\default.1.css',
    $mediaLibraryPath . 'wdp\style-assets\css\department\department-default-fd.1.css'       => $oldStylesPath . 'compiled\department\department-default-fd.1.css',
    $mediaLibraryPath . 'wdp\style-assets\css\department\department-media-queries-fd.1.css' => $oldStylesPath . 'compiled\department\department-media-queries-fd.1.css',

    // Javascript

    $mediaLibraryPath . 'wdp\style-assets\javascript\fees\public-fees-lookup.bundle.js'             => $jsLibPath . 'js\compiled\jspm\public-fees-lookup.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\funding\student-funding-calculator.bundle.js'  => $jsLibPath . 'js\compiled\vue\student-funding-calculator.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\foundation\foundationFooter.bundle.js'         => $jsLibPath . 'js\compiled\jspm\foundationFooter.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\foundation\staff-list.bundle.js'               => $jsLibPath . 'js\compiled\jspm\staff-list.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\foundation\vue\pagination.bundle.js'           => $jsLibPath . 'js\compiled\vue\pagination.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\foundation\course-profile-tabs.min.js'         => $jsLibPath . 'js\src\foundation\course-profile-tabs.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\live-search.js'                                => $jsLibPath . 'js\src\js-live-search.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\events\public-events-list.bundle.js'           => $jsLibPath . 'js\compiled\jspm\public-events-list.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\news\public-blog-list.bundle.js'               => $jsLibPath . 'js\compiled\jspm\public-blog-list.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\foundation\publications-list.bundle.js'        => $jsLibPath . 'js\compiled\jspm\publications-list.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\news\public-news-list.bundle.js'               => $jsLibPath . 'js\compiled\jspm\public-news-list.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\foundation\vue\publications-list.bundle.js'    => $jsLibPath . 'js\compiled\vue\publications-list.bundle.js',
	$mediaLibraryPath . 'wdp\style-assets\javascript\foundation\vue\course-search.bundle.js'		=> $jsLibPath . 'js\compiled\vue\course-search.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\foundation\carousel.bundle.js'                 => $jsLibPath . 'js\compiled\jspm\carousel.bundle.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\scriptHandler.min.js'                          => $jsLibPath . 'js\src\scriptHandler.js',
    $mediaLibraryPath . 'wdp\style-assets\javascript\lib\postcode-checker.bundle.js'                => $jsLibPath . 'js\compiled\jspm\postcode-checker.bundle.js'
];
<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\Client::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('test')
//		  ->setUrl(route('admin.clients'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\Client::class);
// });
//
// // or
//
 AdminSection::addMenuPage(\App\Blog::class);
 AdminSection::addMenuPage(\App\User::class);

return [
//    [
//    'title' => 'Blogs',
//    'pages' => [
//        (new Page(\App\Blog::class))->setPriority(10),
//        ]
//        ],
//[
//    'title' => 'Users',
//    'pages' => [
//        (new Page(\App\User::class))->setPriority(10),
//        ]
//    ],
//    [
//        'title' => 'Dashboard',
//        'icon'  => 'fa fa-dashboard',
//        'url'   => route('admin.dashboard'),
//    ],
//
//    [
//        'title' => 'Clients',
//        'icon'  => 'fa fa-exclamation-circle',
//        'url'   => route('admin.clients'),
//    ],

    // Examples
//     [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fa fa-user')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
//            new Page([
//                'title'    => 'Client',
//                'priority' => 200,
//                'model'    => \App\Client::class
//            ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
//     ]
];
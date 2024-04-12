<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'greeting' => 'hi'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'develepor',
                'salary' => 50.000
            ],
            [
                'id' => 2,
                'title' => 'designer',
                'salary' => 100.000
            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salary' => 10.000
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function (int $id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'develepor',
            'salary' => 50.000
        ],
        [
            'id' => 2,
            'title' => 'designer',
            'salary' => 100.000
        ],
        [
            'id' => 3,
            'title' => 'teacher',
            'salary' => 10.000
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] === $id);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

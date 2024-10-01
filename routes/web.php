<?php

    use Illuminate\Support\Facades\Route;
    use App\Models\Job;

    Route::get('/', function () {
        return view('home', [
                'jobs' => [
                   [ 'title' => 'Director',
                    'salary' => '$50,000'
                   ],
                   [ 'title' => 'Programmer',
                    'salary' => '$10,000'
                   ],
                   [ 'title' => 'Teacher',
                    'salary' => '$40,000'
                   ]
                ]
            ]);
    });

    Route::get('/jobs', function () {
        return view('jobs', [
            'jobs' => Job::all()
        ]);
    });

    Route::get('/jobs/{id}', function ($id) {
        $job = Job::find($id);

        return view('job', ['job' => $job]);
    });

    Route::get('/contact', function () {
        return view('contact');
    });


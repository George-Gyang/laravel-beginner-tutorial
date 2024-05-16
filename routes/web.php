<?php

use App\Models\Comment;
use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Product;
// class Job
// {
//     public static function all(): array
//     {
//         return
//             [
//                 [
//                     "id" => 1,
//                     'name' => "Web Developer's",
//                     'salary' => '$100',
//                 ],
//                 [
//                     "id" => 2,
//                     'name' => 'Data Analyst',
//                     'salary' => '$90',
//                 ],
//                 [
//                     "id" => 3,
//                     'name' => 'UI Designer',
//                     'salary' => '$80',
//                 ]
//             ];
//     }
// }

Route::get('/', function () {
    return view('index', ['greeting' => 'hellow World', 'name' => 'Climaxxy']);
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    // optimize method

    $job = Job::find($id);

    return view('job', ['job_details' => $job]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function(){
    return view('products', [
        'products' => Product::all()
    ]);

    // dd( $products);

});

Route::get('/products/{id}', function($id){
    $product = Product::find($id);
    // dd($product);
    return view('product_info', ['job_details' => $product]);
});

Route::get('/comments', function(){
    return view('comments', ['all_comments' => Comment::all()]);
}
);

Route::get('/comments/{id}', function($id){
    $comment = Comment::find($id);
    // dd($comment);
    return view('comments_info', ['comment' => $comment]);
});

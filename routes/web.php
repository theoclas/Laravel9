<?php
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*



Route::get('/',  [pageController::class, 'home'])->name('Home');


Route::get('/blog',   [pageController::class, 'blog'])->name('Blog');

Route::get('/blog/{slug}',   [pageController::class, 'post'])->name('Post');

Route::get('/buscar', function (Request $request) {
    return $request->all();
});
// Route::get('/home ', function () {
//     return view('Home');
// });

*/

Route::controller(pageController::class)->group(function (){

    Route::get('/',  'home')->name('Home');

    Route::get('/blog',   'blog')->name('Blog');

    Route::get('/blog/{slug}',  'post')->name('Post');

});

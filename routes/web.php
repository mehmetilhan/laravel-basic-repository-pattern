<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/find/{id}', [BookController::class, 'find']);

Route::get('/last', [BookController::class, 'last']);


Route::get('/faker', function () {

        $faker = Faker\Factory::create();

        for($i = 0; $i < 1000; $i++) {
            App\Models\Book::create([
                'author' => $faker->name,
                'name' => $faker->sentence(rand(1,7))
            ]);
        }

        echo 'Success!';
});

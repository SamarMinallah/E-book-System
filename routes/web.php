<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\categoryController;
Route::get('/', function () {
    return view('User.welcome');
})->name("Home");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// User Routes:
Route::get("/shop",[bookController::class,"shoppage"])->name("shoppage");
Route::get("/book/detail{id}",[bookController::class,"bookdetail"])->name("bookdetail");
// Contact Page
Route::view("/contact","User.contact")->name("Contact");
Route::view("/competition","User.competition")->name("compitition");





// Admin Routes:
Route::get("/admin/panel",[adminController::class,"index"])->name("admin");
// Add book 
Route::get("/admin/panel/book",[bookController::class,"index"])->name("addbook");
// Add Category
Route::get("/admin/panel/category",[categoryController::class,"index"])->name("addcategory");
// Insert Category
Route::post("/admin/panel/categoryinsert",[categoryController::class,"insert"])->name("insertcategory");
// category fetch
Route::get("/admin/panel/categoryfetch",[categoryController::class,"fetch"])->name("categoryfetch");
// edit category
Route::get("/admin/panel/categoryedit{id}",[categoryController::class,"edit"])->name("editcategory");
// update Category
Route::post("/admin/panel/categoryupdate{id}",[categoryController::class,"update"])->name("updatecategory");
// delete category
Route::get("/admin/panel/categorydelete{id}",[categoryController::class,"delete"])->name("deletecategory");
// book fetch
Route::get("/admin/panel/bookfetch",[bookController::class,"fetch"])->name("bookfetch");
// Insert book
Route::post("/admin/panel/bookinsert",[bookController::class,"insert"])->name("insertbook");
// edit book
Route::get("/admin/panel/bookedit{id}",[bookController::class,"edit"])->name("editbook");
// update book
Route::post("/admin/panel/bookupdate{id}",[bookController::class,"update"])->name("updatebook");
// delete book
Route::get("/admin/panel/bookdelete{id}",[bookController::class,"delete"])->name("deletebook");
// book fetch
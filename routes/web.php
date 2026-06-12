<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
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

// for shop page
Route::get("/shop",[bookController::class,"shoppage"])->name("shoppage");
// welcome page featuered books
Route::get("/welcome",[bookController::class,"welcomepage"])->name("welcomebooks");
// book detail page route
Route::get("/book/detail{id}",[bookController::class,"bookdetail"])->name("bookdetail");
// Contact Page route
Route::view("/contact","User.contact")->name("Contact");
// Compettion route
Route::view("/competition","User.competition")->name("compitition");
// Pricing Page Route
Route::view("/subscription","User.pricing")->name("Pricing");
// reader plan details view
Route::view("/readerplan","User.readerplandetail")->name("readerplandetail");
// readerplan insert
Route::post("/user/readerplan",[SubscriptionController::class,"readerinsert"])->name("readerinsert");
// Scholar Plan
Route::view("/scholarplan","User.scholarplan")->name("scholarplan");
// Luminary Plan
Route::view("/Luminaryplan","User.luminaryplan")->name("Luminaryplan");
// For contact form user
Route::post("/user/contact",[ContactController::class,"insert"])->name("contactinsert");
// add to cart insert order
Route::post("user/order",[OrderController::class,"orderinsert"])->name("orderinsert");
// Add to cart fetch for user
Route::get("/user/cart", [OrderController::class,"fetchcart"])->name("cartpage");
// delete cart 
Route::get("/user/cart/{id}", [OrderController::class, "deletecart"])->name("deletecart");
// Ready for checkout
Route::post("/user/checkout",[CheckoutController::class,"placeorder"])->name("placeorder");








// Admin Routes:
// for bookcount order in dashboard
Route::get("/admin/dashboard",[adminController::class,"dashboard"])->name("bookcount");
// admin panel
Route::get("/admin/dashboard/index",[adminController::class,"index"])->name("admin");
// Add book 
Route::get("/admin/dashboard/book",[bookController::class,"index"])->name("addbook");
// Add Category
Route::get("/admin/dashboard/category",[categoryController::class,"index"])->name("addcategory");
// Insert Category
Route::post("/admin/dashboard/categoryinsert",[categoryController::class,"insert"])->name("insertcategory");
// category fetch
Route::get("/admin/dashboard/categoryfetch",[categoryController::class,"fetch"])->name("categoryfetch");
// edit category
Route::get("/admin/dashboard/categoryedit{id}",[categoryController::class,"edit"])->name("editcategory");
// update Category
Route::post("/admin/dashboard/categoryupdate{id}",[categoryController::class,"update"])->name("updatecategory");
// delete category
Route::get("/admin/dashboard/categorydelete{id}",[categoryController::class,"delete"])->name("deletecategory");
// book fetch
Route::get("/admin/dashboard/bookfetch",[bookController::class,"fetch"])->name("bookfetch");
// Insert book
Route::post("/admin/dashboard/bookinsert",[bookController::class,"insert"])->name("insertbook");
// edit book
Route::get("/admin/dashboard/bookedit{id}",[bookController::class,"edit"])->name("editbook");
// update book
Route::post("/admin/dashboard/bookupdate{id}",[bookController::class,"update"])->name("updatebook");
// delete book
Route::get("/admin/dashboard/bookdelete{id}",[bookController::class,"delete"])->name("deletebook");
// plan fetch
Route::get("/admin/planfetch",[SubscriptionController::class,"fetch"])->name("fetchplandata");
// delete deleteplanuser
Route::get("/admin/planfetch/delete{id}",[SubscriptionController::class,"deleteplanuser"])->name("deleteplanuser");
// contact fetch
Route::get("/admin/contactfetch",[ContactController::class,"fetch"])->name("fetchcontact");
// delete deletecontactuser
Route::get("/admin/contactfetch/delete{id}",[ContactController::class,"deletecontactuser"])->name("deletecontactuser");
// for fetch ordersin admin dashboard
Route::get("/admin/orderfetch",[CheckoutController::class,"fetch"])->name("fetchorder");
// delete order in admin
Route::get("/admin/orderfetch/delete{id}",[CheckoutController::class,"deleteorder"])->name("deleteorder");
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get("/",[MainController::class,"main"])->name("main");
Route::get("/login",function(){return view("login");});
Route::get("/about",function(){return view("about");});
Route::get("/profile",[MainController::class,"profile"]);
Route::get("/workplace",[MainController::class,"workplace"]);
Route::get("/buy/{username}/{money}", [MainController::class, "buy"])->name("buy");

Route::post("login",[MainController::class,'login'])->name("login");
Route::post("/addwordk",[MainController::class,'work'])->name("work");
Route::post("/out",[MainController::class,"out"])->name("out");

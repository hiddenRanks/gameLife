<?php

use Entrance\Route;

Route::get("/", "StaticController@index");
Route::get("/post", "StaticController@post");
Route::get("/allSearch", "SearchController@allSearch");

if(!isset($_SESSION['user'])) {
    Route::get("/login", "UserController@loginPage");
    Route::post("/login", "UserController@loginProcess");
    Route::get("/signup", "UserController@signUp");
    Route::post("/signup", "UserController@signUp");
} else {
    Route::post("/upload", "PostController@uploadHandle");
}
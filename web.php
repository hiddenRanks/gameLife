<?php

use Entrance\Route;

Route::get("/", "StaticController@index");
Route::get("/post", "StaticController@post");

if(!isset($_SESSION['user'])) {
    Route::get("/login", "UserController@loginPage");
    Route::post("/login", "UserController@loginProcess");
} else {
    Route::post("/upload", "PostController@uploadHandle");
}
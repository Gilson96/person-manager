<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Persons;

/*

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


// all of the routes are in the /persons end-point
Route::group([
    "prefix" => "persons",
   // "middleware" => ["auth:api"],
], function () {

    // GET /persons: show all persons
    Route::get("", [Persons::class, "index"]);//->middleware('auth:api');

    // POST /persons: create a new person
    Route::post("", [Persons::class, "store"]);

    // all these routes also have an person ID in the
    // end-point, e.g. /persons/8
    Route::group(["prefix" => "{persons}"], function () {

        // GET /persons/8: show the client
        Route::get("", [Persons::class, "show"]);
        // PUT /persons/8: update the client
        Route::put("", [Persons::class, "update"]);
        // DELETE /persons/8: delete the client
        Route::delete("", [Persons::class, "destroy"]);
    });
});
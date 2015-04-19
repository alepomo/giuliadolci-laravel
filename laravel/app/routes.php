<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to('design');
});

// ------------------------------------------------------------
// CATEGORY
// ------------------------------------------------------------

Route::get('/{category}', function( $category )
{
  $category = Category::whereName( $category )->firstOrFail();
  return View::make('index')
    ->with('title_tag', $category->name )
    ->with('category', $category );
});


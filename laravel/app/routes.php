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

// ------------------------------------------------------------
// POST
// ------------------------------------------------------------

Route::get('/{category}/{post}', function( $category, $post )
{
  $category = Category::whereName( $category )->firstOrFail();
  $post = Post::whereCategory( $category->id )
    ->whereSlug( $post )
    ->firstOrFail();
  return View::make('single')
    ->with('title_tag', $post->title )
    ->with('category', $category )
    ->with('post', $post );
});
Route::get('/{category}/{post}/create', function(){});
Route::post('/{category}/{post}');
Route::get('/{category}/{post}/edit');
Route::put('/{category}/{post}');
Route::get('/{category}/{post}/delete');
Route::delete('/{category}/{post}');

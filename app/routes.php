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

Route::get('/', array(
	'as' => 'home', 
	'uses' => 'PagesController@index'
	)
);

// Creates a controller route for users

Route::resource('users', 'UsersController');

// Creates a route alias for login and creates a new session
Route::get('login', 'SessionsController@create');

// Creates a route alias for logout and destroys the session
Route::get('logout', 'SessionsController@destroy');

// Creates a resource route for Sessions
Route::resource('sessions', 'SessionsController');

/*Route::get('/start', function(){
	$owner = new Role();
    $owner->name = 'Owner';
    $owner->save();
 
    $member = new Role();
    $member->name = 'Member';
    $member->save();
 
    $readPost = new Permission();
    $readPost->name = 'can_read_posts';
    $readPost->display_name = 'Can Read Posts';
    $readPost->save();

    $createPost = new Permission();
    $createPost->name = 'can_create_posts';
    $createPost->display_name = 'Can Create Posts';
    $createPost->save();
 
    $editPost = new Permission();
    $editPost->name = 'can_edit_posts';
    $editPost->display_name = 'Can Edit Posts';
    $editPost->save();

    $deletePost = new Permission();
    $deletePost->name = 'can_delete_posts';
    $deletePost->display_name = 'Can Delete Posts';
    $deletePost->save();

    $deleteUser = new Permission();
    $deleteUser->name = 'can_delete_users';
    $deleteUser->display_name = 'Can Delete Users';
    $deleteUser->save();
 
    $owner->attachPermission($readPost);
    $owner->attachPermission($createPost);
    $owner->attachPermission($editPost);
    $owner->attachPermission($deletePost);
    $owner->attachPermission($deleteUser);

    $member->attachPermission($createPost);
    $member->attachPermission($readPost);
    $member->attachPermission($editPost);
    $member->attachPermission($deletePost);
    
 
    $user1 = User::find(1);

    
 
    $user1->attachRole($owner);
 
    return Redirect::route('users.index');
});*/
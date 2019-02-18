<?php

use App\Notifications\selectionDone;
use App\Selected;
// use App\Redirect;





// Email related routes
//Route::get('send', 'MailController@send')->name('send');



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
Route::get('/members',function(){
    return view('members');
});
Route::get('/apply',function(){
    return view('applications.apply');
});
Route::get('/contactTest',function(){
    return view('pages.contactTest');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/services',function(){
    return view('services');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/resource',function(){
    return view('Resource.resource');
});
Route::get('/adminPanel',function(){
    return view('adminPanel');
});
Route::get('/indexTest',function(){
    return view('projects.indexTest');
});


// Route::get('/profile',function(){
//     return view('profiles.profile');
// });

Route::get('/profiles/{id}/','profilesController@show');
Route::resource('profiles','profilesController');

Route::get('/news',function(){
    return view('news');
});



// Route::get('/random','ProjectsController@index');

Route::get('/mail', function () {
    //Selected::find(1)->notify(new selectionDone);
    $users = App\Selected::all();
   // $users->notify(new selectionDone);
    foreach ($users as $user) {
        $user->notify(new selectionDone);
    }
    //return view('welcome');
 })->name('mail');

Route::resource('resource','resourceController');
Route::resource('members','membersController');
Route::resource('projects','ProjectsController_admin');
// Route::resource('editprofiles','ProjectsController_admin');
Route::resource('applications','ApplicationsController');
Route::resource('selecteds','selectedsController');
Route::resource('profiles','profilesController');

// Route::get('/projects/{id}/edit/','ProjectsController_admin@edit');
// Route::post('/projects/update/{id}/','ProjectsController_admin@update')->name('update');

// Route::get('/index_for_admin', function () {
//     return view('projects.index_for_admin');
// });
// Route::get('contact', 'ContactController@create')->name('contact.create');
// Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('resource','resourceController@index');
;
// Route::get('adminPanelUser','UsersController@index');
// Route::get('edit','ProjectsController@update');
Route::get('adminPanelUser','UsersController@store');
Route::get('adminPanel','ProjectsController@store');
Route::get('indexTest','ProjectsController@index');
// Route::get('index_for_admin','ProjectsController_admin@index');
Route::get('indexApply','ApplicationsController@index');
// Route::get('apply','ApplicationsController@create');
Route::get('indexS','selectedsController@index');
Route::get('create','selectedsController@create');



//Route::get('/mainhome','pagesController@mainhome');

//may need to uncomment
Route::get('/mainhome_for_admin','pagesController@mainhome_for_admin');
Route::get('/mainhome_for_user','pagesController@mainhome_for_user');
// Route::get('/mainhome_for_user', function () {
//                 return view('welcome');
//             });


Route::get('/','ProjectsController@index');
// Route::get('/mainhome_for_user','ProjectsController@index');

// Route::get('/','ProjectsController@index');

//  Route::get('/', function () {
//             return view('welcome');
//         });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web','auth']],function(){
    // Route::get('/', function () {
    //         return view('welcome');
    //     });
    Route::get('/home',function(){
        if(Auth::user()->admin == 0 ){

            return view('home');
            // return view('welcome');
        }else{
            // $users['users'] = \App\User::all();
            // return view('adminhome', $users);
            return view('adminhome');
        }
    });

    // Route::get('/button',function(){
    //     if(Auth::user()->admin == 1 ){

    //         return redirect('/adminPanelUser');
    //         // return view('welcome');
    //     }
    // });

    Route::get('/mainhome',function(){
        if(Auth::user()->admin == 0 ){
            // return redirect()->back()->back();            
            // return view('pages.mainhome_for_user');
            return redirect('/');
            // return view('welcome');
        }else{
            // $users['users'] = \App\User::all();
            // return view('adminPanel');

            // return view('adminPanel');
            return redirect('/adminPanelUser');
        }
    });

});

// Route::post('contactTest','pagesController@postContact');
Route::post('apply','pagesController@postContact');
Route::post('whychoose','ProjectsController_admin@storeWhychoose');
Route::post('destroywhychooseus/{id}/','ProjectsController_admin@destroywhychooseus');
// Route::post('addprofile','ProjectsController_admin@storeProfiles');
Route::resource('profilesadmin','profilesController');
// Route::post('editprofiles','ProjectsController_admin@editprofile');
 Route::resource('editprofiles','profilesController');
 Route::resource('users','UsersController');
 Route::resource('educations','educationsController');
 Route::resource('whychooseus','whychooseusController');
 Route::resource('people','peopleController');


// Route::get('/editprofiles/{id}/edit/',function(){
//     return view('editprofiles.edit');
// });


//Route::get('/apply','pagesController@postContact');
// Route::get('/adminPanelUser/#users',function(){
//         return view('adminPanel');
// });

Route::get('/download/{file}', function ($file='') {
    return response()->file(storage_path('app/public/'.$file)); 
});

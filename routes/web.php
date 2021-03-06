<?php

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


/*Authentication Routes*/
Auth::routes();
/*Application Routes*/
/*Index route(Initial route that loads when users comes to the website)*/

Route::get('/', 'landingPageController@index');

Route::get('/contact', 'contactController@index');


Route::get('/blogs', 'PostsController@index');

Route::get('/ventureDeals', 'landingPageController@getVentures');
Route::get('/aboutVenture/{venture}', 'landingPageController@aboutVenture');

Route::get('/ourimpactstories', 'landingPageController@getImpact');


Route::get('/opportunity', 'landingPageController@getOpportunity');

Route::get('/market', 'landingPageController@getMarketPlace');

Route::get('/market/{id}', 'landingPageController@viewProduct');

Route::get('/market/category/{id}', 'landingPageController@viewProductByCategory');



Route::get('/mentorsConnect', 'landingPageController@getMentors');
/* Routes for viewing Mentors profile by the user*/ 
Route::get('/profile/{mentor}', 'landingPageController@mentorProfile');



/*Dashboard route(Which users gets redirected to after login)*/
Route::resource('/blogposts','PostsController');

/*Grouping all the admin routes under 'Admin' middleware*/
Route::group(['middleware' => 'Admin'],function(){
    /*Dashboard Route*/
    Route::get('/admin','AdminsController@index');
    /*Routes for user management on admin panel*/
    Route::resource('/admin/users','AdminUserController');
    /*Rotues for posts management on admin panel*/
    Route::resource('/admin/posts','AdminPostsController');
    /*Routes for categories management on admin panel*/
    Route::resource('/admin/categories','AdminCategoriesController');
    /*Routes for media management on admin panel*/
    Route::resource('/admin/media','AdminMediaController');
    /*Routes for Market management on admin panel*/
    // Route::resource('/admin/market','AdminMarketController');
    /*Routes for Market Catagories management on admin panel*/
    Route::resource('/admin/market/category','MarketCatagoriesController');

    Route::resource('/admin/market/products','ViewProductsController');
    Route::resource('/admin/market/shop','ViewShopOwnersController');

    /*Routes for comments management on admin panel*/
    Route::resource('/admin/comments','PostCommentsController');
    /*Routes for comments replies management on admin panel*/
    Route::resource('/admin/comments/replies','CommentRepliesController');
    /*For bulk media delete*/
    Route::delete('/admin/delete/media','AdminMediaController@deleteBulkMedia');

    /* for creating mentors */
    Route::get('/createMentor','MentorController@create');
    Route::post('/createMentor','MentorController@store');
    /* For Editing mentors */
    Route::get('/editMentor/{mentor}','MentorController@edit');
    Route::post('/updateMentor/{mentor}','MentorController@update');
    /* For deleting mentors */
    Route::get('/deleteMentor/{mentor}','MentorController@delete');
    /* For displaying mentors detail*/
    Route::get('/mentors','MentorController@index');
    /* For displaying created mentors */
    Route::get('/showMentor/{mentor}', 'MentorController@show');

    /* ********************* */
    /* Routes For Venture Deals */
    Route::get('/ventures','venturesDealController@index');
    Route::get('/createVentures','venturesDealController@create');
    Route::post('/createVentures','venturesDealController@store');
    Route::get('/showVenture/{venturesDeal}', 'venturesDealController@show');
    Route::get('/editVenture/{venturesDeal}','venturesDealController@edit');
    Route::post('/updateVenture/{venturesDeal}','venturesDealController@update');
    Route::get('/deleteVenture/{venturesDeal}','venturesDealController@destroy');

    Route::get('/createVenturesImages/{venturesDeal}','venturesDealImageController@create');
    Route::post('/createVenturesImages/{venturesDeal}','venturesDealImageController@store');
    Route::get('/showVenturesImages/{venturesDeal}','venturesDealImageController@show');


    /* ********************* */
    /* Routes For Opportunities */
    Route::get('/listOpportunities','OpportunitiesController@index');
    Route::get('/createOpportunity','OpportunitiesController@create');
    Route::post('/createOpportunity','OpportunitiesController@store');
    Route::get('/showOpportunity/{opportunity}', 'OpportunitiesController@show');
    Route::get('/editOpportunity/{opportunity}','OpportunitiesController@edit');
    Route::post('/updateOpportunity/{opportunity}','OpportunitiesController@update');
    Route::get('/deleteOpportunity/{opportunity}','OpportunitiesController@destroy');

});
/*Authenticated Route - Accessible when user is logged in */
Route::group(['middleware' => 'auth'],function(){
    Route::post('comment/reply','CommentRepliesController@createReply');
    Route::post('/comment','PostCommentsController@createComment');
    Route::resource('/userposts','UserPostsController');
    /*User saved posts*/
    Route::get('/usersposts/{id}/save','UserPostsController@savePost');
    Route::get('/usersposts/{id}/unsave','UserPostsController@unsavePost');
    Route::get('/usersposts/savedposts','UserPostsController@savePostIndex');
    /*User Profile Settings*/
    Route::resource('dashboard', 'UserProfileController');
    Route::resource('product', 'ProductController');



});

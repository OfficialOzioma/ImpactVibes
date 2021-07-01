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

Route::get('/help', 'contactController@getHelp');


Route::get('/blogs', 'PostsController@index');

Route::get('/venturesdeal', 'landingPageController@getVentures');

Route::get('/venturesdeal/{id}', 'landingPageController@getVenturesDetails');

Route::get('/ourimpactstories', 'landingPageController@getImpact');

/* Routes for Opportunities for users*/
Route::get('/opportunity', 'landingPageController@getOpportunity');

Route::get('/opportunity_search', 'landingPageController@searchOpportunity');

Route::get('/submit_opportunity', 'landingPageController@submitOpportunity');

Route::post('/submit_opportunity', 'landingPageController@submittedOpportunity');

Route::get('/opportunity/{opportunity}', 'landingPageController@getOpportunityInfo');

Route::get('/market', 'landingPageController@getMarketPlace');

Route::get('/market/{id}', 'landingPageController@viewProduct');

Route::get('/market/category/{id}', 'landingPageController@viewProductByCategory');

Route::get('/product_search', 'landingPageController@searchProduct');

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
    Route::get('/createMentor','MentorsController@create');
    Route::post('/createMentor','MentorsController@store');
    /* For Editing mentors */
    Route::get('/editMentor/{mentor}','MentorsController@edit');
    Route::post('/updateMentor/{mentor}','MentorsController@update');
    /* For deleting mentors */
    Route::get('/deleteMentor/{mentor}','MentorsController@destroy');
    /* For displaying mentors detail*/
    Route::get('/mentors','MentorsController@index');
    /* For displaying created mentors */
    Route::get('/showMentor/{mentor}', 'MentorsController@show');

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
    
    Route::resource('/adminVentures', 'adminVentureController');
    /* ********************* */
    /* Routes For Opportunities */
     /* for creating opportunity */
     Route::get('/createOpportunity','OpportunityController@create');
     Route::post('/createOpportunity','OpportunityController@store');
     /* For Editing opportunity */
     Route::get('/editOpportunity/{opportunity}','OpportunityController@edit');
     Route::post('/updateOpportunity/{opportunity}','OpportunityController@update');
     /* For deleting opportunity */
     Route::get('/deleteOpportunity/{opportunity}','OpportunityController@destroy');
     /* For displaying opportunity detail*/
     Route::get('/opportunities','OpportunityController@index');
     /* For displaying created opportunity */
     Route::get('/showOpportunity/{opportunity}', 'OpportunityController@show');

     Route::get('/submitted_opportunities','OpportunityController@getSubmittedOpportunities');

     Route::get('/submitted_opportunities/{submitted_opportunity}','OpportunityController@viewSubmittedOpportunities');

     Route::get('/submitted_opportunities/delete/{submitted_opportunity}','OpportunityController@destroySubmittedOpportunity');
 
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

    /** Ventures deal route */
    Route::resource('ventures', 'VentureDealController');



});

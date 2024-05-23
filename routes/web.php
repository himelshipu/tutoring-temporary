<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//test

Route::get('/clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'done'; //Return anything
});


Route::get('/test', function () {
    return view('web.default.view.layout');
});

// Route::group(['middleware' => 'auth'], function () {
//   Auth::routes(['verify' => true]);
// });


Route::resource('subscriptions', 'SubscriptionController');


Route::group(['namespace' => 'Auth'], function () {
    // Web Auth Routes
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login')->name('auth.login');
    Route::get('/logout', 'LoginController@logout')->name('auth.logout');
    Route::get('/register', 'RegisterController@showRegistrationForm');
    Route::post('/registerUser', 'RegisterController@register')->name('auth.register');

    //Email Verification route
    Route::get('account/verify/{token}', 'EmailVerificationController@verifyAccount')->name('user.verify');
});

Route::group(['middleware' => 'notification'], function () {
    Route::group(['prefix' => 'filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::get('/', 'WebController@home')->name('homepage');

    Route::get('category/{id}', 'WebController@category');
    Route::get('category', 'WebController@category');

    Route::get('search', 'WebController@search');
    Route::get('jsonsearch', 'WebController@jsonSearch');

    ## Blog Section ##
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'WebController@blog');
        Route::get('post/{id}/{title?}', 'WebController@blogPost');
        Route::get('mobile/{id}', 'WebController@blogPostMobile');
        Route::get('category/{id}', 'WebController@blogCategory');
        Route::post('post/comment/store', 'WebController@blogPostCommentStore');
        Route::get('tag/{key}', 'WebController@blogTags');
    });

    ## Gift & Off
    Route::get('gift/{code}', 'WebController@giftChecker');
    Route::get('about-us', 'PageController@about')->name('about');
    Route::get('contact-us', 'PageController@contact')->name('contact');
    Route::get('privacy-policy', 'PageController@privacyPolicy')->name('privacy');
    Route::get('terms-condition', 'PageController@termsCondition')->name('condition');
    Route::get('faq', 'PageController@faq')->name('faq');
    Route::get('career', 'PageController@career')->name('career');
    Route::get('career-jobs/{career_job}', 'PageController@careerJob')->name('career-job');
    Route::get('user-manual', 'PageController@userManual')->name('user-manual');
    Route::get('talent-acquisition', 'PageController@talent')->name('talent-acquisition');

    Route::post('message/store', 'MessageController@store')->name('message');
    Route::post('contact-us', 'ContactUsController@store')->name('contact-us');

    ## Chanel Section
    Route::group(['prefix' => 'chanel'], function () {
        Route::get('{username}', 'WebController@chanel');
        Route::get('follow/{id}', 'WebController@chanelFollow');
        Route::get('unfollow/{id}', 'WebController@chanelUnFollow');
    });

    ## Page Section ##
    Route::group(['prefix' => 'page'], function () {
        Route::get('{key}', 'WebController@page');
    });

    ### Product Section ###
    Route::group(['prefix' => 'product'], function () {
        ## Comment & Support
        Route::post('comment/store/{id}', 'WebController@productCommentStore');
        Route::post('support/store', 'WebController@productSupportStore');
        Route::get('support/rate/{id}/{rate}', 'WebController@productSupportRate');
        ## Favorite ##
        Route::get('fav/{id}', 'WebController@productFavorite');
        Route::get('unfav/{id}', 'WebController@productUnFavorite');
        Route::get('{id}/rate/{rate}', 'WebController@productRate');
        ## Subscribe ##
        Route::get('subscribe/{id}/{type}/{payMode}', 'WebController@productSubscribe');
        ## Product
        Route::get('{id}/{title?}', 'WebController@product');
        Route::get('part/{id}/{pid}', 'WebController@productPart');
        Route::get('captivate/{id}/{pid}','WebController@productCaptivate');
    });

    ## Article Section
    Route::group(['prefix' => 'article'], function () {
//        Route::get('/test', 'WebController@articles');
        Route::get('/list', 'WebController@articles');
        Route::get('item/{id}/{title?}', 'WebController@articleShow');
    });

    ## Request Section
    Route::group(['prefix' => 'request'], function () {
        Route::get('', 'WebController@requests');
        Route::get('new', 'WebController@newRequest');
        Route::post('store', 'WebController@storeRequest');
        Route::get('follow/{id}', 'WebController@followRequest');
        Route::get('unfollow/{id}', 'WebController@unFollowRequest');
        Route::get('suggestion/{id}/{suggest}', 'WebController@suggestionRequest');
    });

    ### Record Section ###
    Route::group(['prefix' => 'record'], function () {
        Route::get('', 'WebController@records');
        Route::get('follow/{id}', 'WebController@recordFollow');
        Route::get('unfollow/{id}', 'WebController@recordUnFollow');
    });

    ## Video Section ##
    Route::group(['prefix' => 'video'], function () {
        Route::get('stream/{id}', 'WebController@videoStream');
        Route::get('download/{id}', 'WebController@videoDownload');
    });
    Route::get('/progress', 'WebController@videoProgress');

    Route::get('login/{user}', 'WebController@loginTrack');

    ## Usage
    Route::get('usage/{product}/{user}', 'WebController@usageTrack');

    Route::any('payment/wallet/status', 'WebController@walletStatus');


    ### Bank Section ###
    Route::group(['prefix' => 'bank'], function () {

        Route::group(['prefix' => 'paypal'], function () {
            Route::any('status', 'WebController@paypalStatus');
            Route::any('cancel/{id}', 'WebController@paypalCancel');
        });

        Route::group(['prefix' => 'paytm'], function () {
            Route::any('status/{product_id}', 'WebController@paytmStatus');
            Route::any('cancel/{id}', 'WebController@paytmCancel');
        });

        Route::group(['prefix' => 'payu'], function () {
            Route::any('status/{product_id}', 'WebController@payuStatus');
            Route::any('cancel/{id}', 'WebController@payuCancel');
        });

        Route::group(['prefix' => 'paystack'], function () {
            Route::any('status/{id}', 'WebController@paystackStatus');
            Route::any('cancel/{id}', 'WebController@paystackCancel');
        });

        Route::group(['prefix' => 'razorpay'], function () {
            Route::any('status/{id}', 'WebController@razorpayStatus');
        });

        Route::group(['prefix' => 'wecashup'], function (){
            Route::any('callback','WebController@wecashupCallback');
            Route::any('hook','WebController@wecashupHook');
        });

        Route::group(['prefix' => 'cinetpay'], function (){
            Route::any('notify','WebController@cinetpaynotify');
            Route::any('return','WebController@cinetpayReturn');
            Route::any('cancel','WebController@cinetpayCancel');
        });

        Route::group(['prefix' => 'stripe'], function (){
            Route::any('successfully','WebController@stripeSuccess');
            Route::any('cancel','WebController@stripeCancel');
        });
    });


});

Route::get('update',function(){
   $users = \App\User::all();
   foreach ($users as $user){
       try {
           $password = decrypt($user->password);
           \App\User::find($user->id)->update(['password'=>\Illuminate\Support\Facades\Hash::make($password)]);
       } catch(\RuntimeException $e) {
       }
   }
});

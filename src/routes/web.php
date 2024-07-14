<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'HossainVendor\EmailSubscription\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('subscription', 'EmailSubscriptionController@index');
    Route::post('subscription', 'EmailSubscriptionController@emailSubscription')->name('subscription');
});

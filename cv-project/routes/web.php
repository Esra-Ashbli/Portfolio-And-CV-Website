<?php
namespace App\Http\Controllers;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/thanks', function () {
    
    $name=request('Name');
    $email=request('Email');
    $message=request('Message');
    if(isset($name)&&isset($email)&&isset($message)){
        return view('/Esra/thanks');
    }else{
        $result = (new HomeController())->message();
        return $result.view('/Esra/contact');
        
    }
});

Route::get('/m',function(){
    return redirect()->route('messages.index');
} );
Route::resource('messages',DataController::class,(array)'index');




Route::get('/contact', function () {
    return view('/Esra/contact');
});
Route::get('/blog', function () {
    return view('/Esra/blog');
});
Route::get('/resume', function () {
    return view('/Esra/resume');
});
Route::get('/home', function () {
   $result = (new HomeController())->hello();
   return view('/Esra/home'); 
   return $result; 
    
});
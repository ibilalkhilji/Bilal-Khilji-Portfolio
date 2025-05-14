<?php

use App\Notifications\ContactEnquiryNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('works', function () {
    return view('pages.works');
})->name('works');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('contact', function (Request $request) {
    defer(function () use ($request) {
        Notification::route('mail', getWorkEmailAddress())
            ->notify(new ContactEnquiryNotification($request));
    });
    return redirect()->route('contact')->with('success', 'Thanks for your message!, we will get back to you soon.');
})->middleware([ProtectAgainstSpam::class])->name('contact');

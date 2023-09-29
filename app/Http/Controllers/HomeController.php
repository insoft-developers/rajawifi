<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.home');
    }

    public function product() {
        return view('frontend.product');
    }

    public function promo() {
        return view('frontend.promo');
    }

    public function latest() {
        return view('frontend.latest');
    }

    public function press() {
        return view('frontend.press');
    }

    public function blog() {
        return view('frontend.blog');
    }

    public function about() {
        return view('frontend.about');
    }

    public function faq() {
        return view('frontend.faq');
    }

    public function payment() {
        return view('frontend.payment');
    }

    public function contact() {
        return view('frontend.contact');
    } 

    public function privacy() {
        return view('frontend.privacy');
    }

    public function term() {
        return view('frontend.term');
    }

    public function coverage() {
        return view('frontend.coverage');
    }
}

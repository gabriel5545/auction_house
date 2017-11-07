<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auctionController extends Controller
{
    public function home()
    {
    	return view("auctions.home");
    }
        public function profile()
    {
    	return view("auctions.profile");
    }
        public function uppbod()
    {
    	return view("auctions.auctions");
    }
}

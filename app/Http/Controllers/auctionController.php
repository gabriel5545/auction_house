<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\auctionHouse;
use Auth;

class auctionController extends Controller
{
    public function home()
    {
        $listings = auctionHouse::latest()->get();

    	return view("auctions.home", compact("listings"));
    }
        public function profile()
    {
    	return view("auctions.profile");
    }
        public function uppbod($id)
    {
        $uppbod = auctionHouse::find($id);
    	return view("auctions.auctions", compact("uppbod"));
    }
}

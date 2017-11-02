<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auctionController extends Controller
{
    public function home()
    {
    	return view("auctions.home");
    }
}

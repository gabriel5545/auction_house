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
  

    	return view("auctions.home");
    }
        public function profile()
    {
    	return view("auctions.profile");
    }
        public function uppbod($id)
    {
        $uppbod = auctionHouse::find($id);
    	return view("auction.auctions", compact("uppbod"));
    }
    public  function auctions()
    {
        $listings = auctionHouse::latest()->get();
        return  view("auctions.auctions",compact(   "listings"));
    }
    public function nyttuppbod()
    {

        return  view("auctions.newauction");
    }
    public function newauction($request)
    {
        $auctionHouse = new auction;
        $auctionHouse->title = $request->title;
        $auctionHouse->description = $request->description; 
        $auctionHouse->price = $request->price;
        $auctionHouse->user_id = auth()->id();
        $auctionHouse->save();

        return redirect("auctions.home");
    }
}

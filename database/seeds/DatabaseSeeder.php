<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table("users")->insert([
    		["name"=>"gabriel galvez" , "email"=> "gabriel@hotmail.com"  , "password"=> bcrypt("lol123lol123") , "balance" => 10000000, "trusted" => true ],
    		["name"=>"johan laukur" , "email"=> "johan@hotmail.com" , "password"=> bcrypt("lol123lol123") , "balance" => 10000000, "trusted" => false ],
    		["name"=>"jón jónsson" , "email"=> "jón@hotmail.com" , "password"=> bcrypt("lol123lol123") , "balance" => 10000000, "trusted" => true ],
    		["name"=>"kallikönguló" , "email"=> "arnar@hotmail.com" , "password"=> bcrypt("lol123lol123") , "balance" =>10000000, "trusted" => false ],
    		]);
        DB::table("auction_house")->insert([
        	["price"=>13256 , "title" => "dutsun 280z" , "description" => "góður bill á ódýruverði og.. blablablablablablablablabla" , "user_id" => 1],
        	["price"=>43000 , "title" => "911" , "description" => "góður bill á ódýruverði og.. blablablablablablablablabla" , "user_id" => 3],
        	["price"=>1000 , "title" => "iphone X" , "description" => "góður bill á ódýruverði og.. blablablablablablablablabla" , "user_id" => 2],
        	["price"=>2500 , "title" => "druslan" , "description" => "góður bill á ódýruverði og.. blablablablablablablablabla" , "user_id" => 2],
        	["price"=>23000 , "title" => "amma min" , "description" => "góð kona á ódýruverði og.. blablablablablablablablabla" , "user_id" => 4],
        	]);
    }
}

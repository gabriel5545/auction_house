@extends('layouts.app')

@section('content')             
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">top auctions</div>
                @foreach($listings as $listing)
                  <div class="panel-body">
                      <img src="/image/nophoto.png" style="float:left;padding:10px"> 
                      <h4> 
                        <a href="/auction/{{$listing -> id}}" >  
                              {{ $listing -> title}}
                        </a>
                      </h4>
                      <p style="margin-bottom: 67px">
                      desc : {{ str_limit($listing -> description, 150)}} <br>
                      </p>
                      current bid : {{ $listing -> price}}
                      

                  </div>
                  <div class="panel panel-default">
                  </div>
                  @endforeach
            </div>
        </div>
    </div>
</div>

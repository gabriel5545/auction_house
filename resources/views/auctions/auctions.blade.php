@extends('layouts.app')

@section('content')             
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">top auctions</div>
                @forelse($listings as $listing)
                  <div class="panel-body">
                      <img src="/image/nophoto.png" style="float:left;padding:10px"> 
                      <h4> 
                        <a href="/auction/{{$listing -> id}}" >  
                              {{ $listing -> title}}
                        </a>
                      </h4>
                      <p>
                      desc : {{ str_limit($listing -> description, 150)}} <br>
                      </p>
                      <b>
                      current bid : {{ $listing -> price}}
                      </b>

                  </div>
                  <div class="panel panel-default">
                  </div>

                  @empty
                  <h1>No ongoing auction's</h1>

                  @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
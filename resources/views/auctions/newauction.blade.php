@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">new auction</div>

                <div class="panel-body">
                    <form method="POST" action="/auctions">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        
                        <div class="forum-group">
                          <label>price: </label>
                            <input type="text" name="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>description: </label>
                            <textarea type="text" name="description" class="form-control" rows="8"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout')

@section('content')
<div class="row">

@foreach ($data as $book)
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="http://placehold.it/320x150" alt="">
            <div class="caption">
                <h4 class="pull-right">$24.99</h4>
                <h4><a href="#">{{$book->title}}}</a>
                </h4>
                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">15 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </p>
            </div>
        </div>
    </div>
@endforeach   

    <div class="col-sm-4 col-lg-4 col-md-4">
        <h4><a href="#">Like this template?</a>
        </h4>
        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
    </div>

</div>
@stop
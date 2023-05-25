@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)
@section('content')

   <article class="mb-4">
            <div class="container">
                <div class="row">
                @include('front.widgets.categoryWidget')
                    <div class="col-md-9 mx-auto">
                    <img src="{{$article->image}}">
                      <p>{{$article->content}}</p>
                      <span class="text-red">Okuma sayısı: <b>{{$article->hit}}</b></span>
                    </div>
                </div>
            </div>
        </article>
@endsection
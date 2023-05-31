@extends('front.layouts.master')
@section('title',$page->title)
@section('bg',$page->image)
@section('content')

<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @include('front.widgets.categoryWidget')
                <div class="col-md-9 mx-auto">
                    <img src="{{$article->image}}">
                    <p>{{$article->content}}</p>
                    <span class="text-red">Okuma sayısı: <b>{{$article->hit}}</b></span>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection
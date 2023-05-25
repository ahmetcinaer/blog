@extends('front.layouts.master')
@section('title',$category->name.' Kategorisi | '.count($articles). ' yazı bulundu. ')
@section('content')

@include('front.widgets.categoryWidget')
<div class="col-md-9 mx-auto">
    @if(count($articles)>0)
        @foreach($articles as $article)
            <div class="post-preview">
                <a href="{{route('single', [$article->category->slug ,$article->slug])}}">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <img src="{{$article->image}}">
                    <h3 class="post-subtitle">{{Str::limit($article->content, 80)}}</h3>
                </a>
                <p class="post-meta">
                    Kategori :
                    <a href="#!">{{$article->category->name}}</a>
                     <span class="float-end"> {{$article->created_at->diffForHumans()}}</span>
                </p>
            </div>
<hr class="my-4" />
    
   @endforeach

   @else
   <div class="alert alert-danger">
    <h2>Bu Kategoriye ait yazı bulunamadı. </h2>
   </div>
   @endif
    <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> -->
</div>
@endsection
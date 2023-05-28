@extends('front.layouts.master')
@section('title','ANASAYFA')
@section('content')

@include('front.widgets.categoryWidget')
<div class="col-md-9 mx-auto">
    @include('front.widgets.articleList')
    <div class="d-flex justify-content-end mb-4">{!! $articles->links() !!}</div>
</div>
@endsection
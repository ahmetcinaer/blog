@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
        <div class="card-body">
            <div class="list-group">
                <li class="list-group-item">
                    <a href="#">Günlük Hayat</a> <span class="badge bg-primary">12</span>
                </li>
                
                <a href="#" class="list-group-item">Eğitim <span class="badge bg-dark">12</span></a>
                <a href="#" class="list-group-item">Teknoloji <span class="badge bg-black">12</span></a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-9 mx-auto">
    <!-- Post preview-->
    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
            <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
        </a>
        <p class="post-meta">
            Posted by
            <a href="#!">Start Bootstrap</a>
            on September 24, 2023
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
    <!-- Post preview-->
    <div class="post-preview">
        <a href="post.html"><h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
        <p class="post-meta">
            Posted by
            <a href="#!">Start Bootstrap</a>
            on September 18, 2023
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
    <!-- Post preview-->
    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title">Science has not yet mastered prophecy</h2>
            <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
        </a>
        <p class="post-meta">
            Posted by
            <a href="#!">Start Bootstrap</a>
            on August 24, 2023
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
    <!-- Post preview-->
    <div class="post-preview">
        <a href="post.html">
            <h2 class="post-title">Failure is not an option</h2>
            <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
        </a>
        <p class="post-meta">
            Posted by
            <a href="#!">Start Bootstrap</a>
            on July 8, 2023
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
    <!-- Pager-->
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
</div>
@endsection
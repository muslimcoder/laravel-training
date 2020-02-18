@extends('layout.bootstrap')
@section('title','Detail Blog')
@section('content')
<h2 id="striped-row">
    <span class="bd-content-title">Detail Blog
        <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;">
    </a></span>
    </h2>
    <h3>{{ $blogs->title }}</h3>
    <hr>
    <p>{{ $blogs->descriptions}}</p>
@endsection

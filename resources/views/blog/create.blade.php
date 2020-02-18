@extends('layout.bootstrap');

@section('name','create new blog')
@section('content')
<span class="bd-content-title">Form Isian
    <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;">
</a></span>
</h2>
{{-- @include('partials.validations-errors') --}}
{{Form::open(['url'=>route('store-blog')])}}
@include('blog.form-blog')
{{Form::close()}}
@endsection



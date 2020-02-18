@extends('layout.bootstrap');
@section('title','edit blog')
@section('content')

 {{-- @include('partials.validations-errors') --}}
 <span class="bd-content-title">Detail Blog
        <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;">
    </a></span>
    </h2>
    {{Form::open(['url'=>route('update-blog',['id'=>$blog->id]),'method'=>'put'])}}
    @include('blog.form-blog')
    {{ Form::close()}}

@endsection


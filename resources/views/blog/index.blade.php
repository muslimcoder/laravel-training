@extends('layout.bootstrap')

@section('title','Halaman Blog')

@section('content')
<h2 id="striped-row">
<span class="bd-content-title">Blog
    <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;">
</a></span>
</h2>
<p>Daftar Blog <code class ="highlighter-rouge"></code></p>

<a href="{{route('create-blog')}}" class="btn btn-primary">Input Data Baru</a> <br>
@include('partials.flash-message')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col" colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
        {{-- @php $no=1 @endphp --}}
        @foreach ($blogs as $index=>$blog)
        <tr>
            <th scope="row">{{$index + $blogs->firstItem()}}</th>
            <td>{{$blog->title}}</td>
            <td>{{ $blog->descriptions}}</td>
            <td>
                <a href="{{route('edit-blog',['id'=>$blog])}}" class="btn btn-warning">
                    Edit</a></td>
                    <td>
                    @component('partials.delete')
                    @slot('id_form')
                    hapus-{{$blog->id}}
                    @endslot

                    @slot('btn_message')
                    Hapus
                    @endslot
                    @slot('action')
                    {{route('delete-blog',['id'=>$blog->id]) }}
                    @endslot

                    @endcomponent


			</td>
          </tr>
        @endforeach


    </tbody>
  </table>
{{$blogs->links()}}


@endsection

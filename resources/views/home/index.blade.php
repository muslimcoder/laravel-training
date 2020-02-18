@extends('layout.master')

@section('title','Home')
@section('content')

   <hr>

   <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>

    <tbody>

        @php $no = 1 @endphp
        @foreach($users as $user)
      <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$user->username }}</td>
        <td>{{$user->password}}</td>
        <td>@component('partials.delete')
            @slot('id_form')
            hapus{{ $user->id }}
            @endslot
            @slot('btn_message')
            hapus User
            @endslot
            @slot('action')
            {{ route('delete.btn',['id'=> $user->id]) }}
            @endslot
        @endcomponent
</td>
      </tr>
      @endforeach
    </tbody>
  </table>









   </ul>


@endsection

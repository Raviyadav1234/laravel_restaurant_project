@extends('layout')

@section('content')
<div>
	<h1>List of Restorant Page</h1>

@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Created_At</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->created_at}}</td>
      <td><a href="delete/{{$item->id}}" class="fa fa-trash"></a></td>
      <td><a href="edit/{{$item->id}}" class="fa fa-edit"></a></td>
    </tr>
    <tr>
    @endforeach  
  </tbody>
</table>

	
</div>
@stop
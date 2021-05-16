@extends('layout')

@section('content')
<div class="col-sm-6">
	<h1>Add New Restorant </h1>

<form action="/edit" method="POST">
  @csrf
  <input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$data->name}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" value="{{$data->email}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" value="{{$data->address}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Created_At</label>
    <input name="created_at" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" value="{{$data->created_at}}">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

	
</div>
@stop
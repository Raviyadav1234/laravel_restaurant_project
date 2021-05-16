@extends('layout')

@section('content')
<div class="col-sm-6">
	<h1>Add New Restorant </h1>

<form action="/add" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Created_At</label>
    <input name="created_at" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

	
</div>
@stop
@extends('layout')

@section('content')
<div>
	<h1>User Register Page</h1>
<div class="col-sm-6">
	<form action="/register" method="POST">
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
    <label for="exampleInputEmail1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Contact</label>
    <input name="contact" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


</div>
@stop
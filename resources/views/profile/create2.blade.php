@extends('layouts.app')
@section('title','Create|profile')
@section('content')

<div class="container ">
  <div class="row">
  <div class="col-md-9">

      @if($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
      <strong><h3>{{$message}}</h3></strong>
      </div>
      @endif

{{-- form starts here --}}

  <form method="post"  enctype="multipart/form-data">

    @csrf

    <label for=""><h3>Edit Profile:</h3></label>
    <div class="form-group">
      <label for="">Name:</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Your Name">
    </div>

    <div class="form-group">
      <label for="">Birthday:</label>
      <input type="date" class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="Birthday">
    </div>

    <div class="form-group">
        <label for="">Mobile:</label>
        <input type="text" class="form-control" name="pos" id="" aria-describedby="helpId" placeholder="Mobile Number">
    </div>
    <div>
            <label for="">upload:</label>
    <input type="file" name="profile_image" id="" class="form-control">
    </div>
     <div class="form-group">
        <label for="">About me</label>
        <textarea class="form-control" name="bio" id="" rows="3" placeholder="about you"></textarea>
     </div>

     <div class="form-group">
        <label for="">attack:</label>
        <input type="text" class="form-control" name="att" id="" aria-describedby="helpId" placeholder="You@email.com">
     </div>
      <div class="form-group">
        <label for="">tec:</label>
        <input type="text" class="form-control" name="tec" id="" aria-describedby="helpId" placeholder="You@email.com">
     </div>
      <div class="form-group">
        <label for="">def:</label>
        <input type="text" class="form-control" name="def" id="" aria-describedby="helpId" placeholder="You@email.com">
     </div>
       <div class="form-group">
        <label for="">TEAM:</label>
        <input type="text" class="form-control" name="nat" id="" aria-describedby="helpId" placeholder="You@email.com">
     </div>
      
     <div class="form-group">
        <label for="">Country:</label>
        <input type="text" class="form-control" name="country" id="" aria-describedby="helpId" placeholder="country">
     </div>
     <input type="submit" class="btn btn-primary" value="Submit">
      @endsection
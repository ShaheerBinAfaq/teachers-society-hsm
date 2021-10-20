@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <!-- <img src="img/teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;"> -->

    <h1 class="display-3">Add a Member</h1>
    <style>h1{text-align:center}</style>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('members.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="cnic">CNIC</label>
              <input type="text" class="form-control" name="cnic"/>
          </div>
          <div class="form-group">
              <label for="fathers_name">Fathers Name:</label>
              <input type="text" class="form-control" name="fathers_name"/>
          </div>
          <div class="form-group">
              <label for="occupation">Occupation:</label>
              <textarea class="form-control" name="occupation"></textarea>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" name="address"></textarea>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>                         
          <!-- <div>
            <label for="">Email</label>
            <input type="email">
          </div> -->
          <button type="submit" class="btn btn-primary-outline">Add Member</button>
      </form>
  </div>
</div>
</div>
@endsection
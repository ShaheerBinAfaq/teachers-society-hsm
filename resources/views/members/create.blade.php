@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Member</h1>
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
              <input type="text" class="form-control" name="occupation"/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Add Member</button>
      </form>
  </div>
</div>
</div>
@endsection
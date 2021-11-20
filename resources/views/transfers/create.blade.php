@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <!-- <img src="img/teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;"> -->

    <h1 class="display-3">Add a Transfer</h1>
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
      <form method="post" action="{{ route('transfer.store') }}">
          @csrf
          <div class="form-group">    
              <label for="member_id">member_id:</label>
              <input type="text" class="form-control" name="member_id"/>
          </div>
          <div class="form-group">
              <label for="transfree_id">transfree_id</label>
              <input type="text" class="form-control" name="transfree_id"/>
          </div>
          
          <button type="submit" class="btn btn-primary-outline">Add Transfer</button>
      </form>
  </div>
</div>
</div>
@endsection
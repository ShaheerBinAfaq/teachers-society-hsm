@extends('base') 
@section('main')
<div class="row">
<img src="teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;">

    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a member</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('members.update', $member->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $member->name }}" />
            </div>
            <div class="form-group">
            <label for="cnic">CNIC</label>
                <input type="text" class="form-control" name="cnic" value={{ $member->cnic }} />
            </div>
            <div class="form-group">
            <label for="fathers_name">Fathers Name:</label>
                <input type="text" class="form-control" name="fathers_name" value="{{ $member->fathers_name }}" />
            </div>
            <div class="form-group">
            <label for="occupation">Occupation:</label>
            <textarea class="form-control" name="occupation">{{ $member->occupation }}</textarea>
            </div>
            <div class="form-group">
            <label for="address">Address:</label>
                <textarea class="form-control" name="address">{{ $member->address }}</textarea>
            </div>
            <div class="form-group">
            <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" value={{ $member->phone }} />
            </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" value={{ $member->email }}>
          </div>
          <div>
            <label for="msid">MS ID</label>
            <input type="number" name="msid" value={{ $member->msid }}>
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
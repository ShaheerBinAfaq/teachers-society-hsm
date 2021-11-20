@extends('base') 
@section('main')
<div class="row">
<img src="teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;">

    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a transfer</h1>
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
        <form method="post" action="{{ route('transfer.update', $transfer->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
              <label for="member_id">member_id:</label>
                <input type="text" class="form-control" name="member_id" value={{ $transfer->member_id }} />
            </div>
            <div class="form-group">
            <label for="transfree_id">transfree_id</label>
                <input type="text" class="form-control" name="transfree_id" value={{ $transfer->transfree_id }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    </div>
    <h1 class="display-3">transfers</h1>  
    <style>h1{text-align:center}</style>
    <div>
    <a style="margin: 19px;" href="{{ route('transfer.create')}}" class="btn btn-primary">New transfer</a>
    </div>  
  <table class="table table-striped display">
    <thead>
        <tr>
          <td>MSID</td>
          <td>member</td>
          <td>transfree</td>          
          <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($transfers as $transfer)
        <tr>
            <td>{{$transfer->msid}}</td>
            @foreach ($members as $member)
              @if ($transfer->member_id == $member->id)
                <td>{{($member->name)}}</td>
              @endif
            @endforeach
            @foreach ($members as $member)
              @if ($transfer->transfree_id == $member->id)
                <td>{{($member->name)}}</td>
              @endif
            @endforeach
            <td>
                <a href="{{ route('transfer.edit',$transfer)}}" class="btn btn-primary">Edit</a>
            
                <form action="{{ route('transfer.destroy', $transfer)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
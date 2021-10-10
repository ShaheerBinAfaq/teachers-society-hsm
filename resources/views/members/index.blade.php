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
    <h1 class="display-3">Members</h1>  
    <div>
    <a style="margin: 19px;" href="{{ route('members.create')}}" class="btn btn-primary">New Member</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>CNIC</td>
          <td>Fathers Name</td>
          <td>Occupation</td>
          <td>Address</td>
          <td>Phone</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->cnic}}</td>
            <td>{{$member->fathers_name}}</td>
            <td>{{$member->occupation}}</td>
            <td>{{$member->address}}</td>
            <td>{{$member->phone}}</td>
            <td>
                <a href="{{ route('members.edit',$member)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('members.destroy', $member)}}" method="post">
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
@extends('base')
@section('main')

<script>
function fnStatusFilter() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("statusFilter");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  if(filter != "SHOW ALL") {
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[7];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase()==filter) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  else {
    for (i = 0; i < tr.length; i++) {
      tr[i].style.display = "";
    }       
  }
}
</script>

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
    <style>h1{text-align:center}</style>
    <div>
    <a style="margin: 19px;" href="{{ route('members.create')}}" class="btn btn-primary">New Member</a>
    </div>
    <div>
      <select id="statusFilter" onchange="fnStatusFilter()">
        <option value="Show all">Show all</option>
        <option value="Defaulter">Defaulter</option>
        <option value="Not Defaulter">Not Defaulter</option>
      </select>
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
          <td>Status</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody id="myTable">
        @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->cnic}}</td>
            <td>{{$member->fathers_name}}</td>
            <td>{{$member->occupation}}</td>
            <td>{{$member->address}}</td>
            <td>{{$member->phone}}</td>
            <td>{{$member->status}}</td>
            <td>
                <a href="{{ route('members.edit',$member)}}" class="btn btn-primary">Edit</a>
                <!-- <a href="{{ route('due.create',$member->id)}}" class="btn btn-primary">Dues</a> -->
                <a href="http://localhost:8000/due/create?mid={{$member->id}}" class="btn btn-primary">Dues</a>
                <a href="http://localhost:8000/bill/create?mid={{$member->id}}" class="btn btn-primary">Bill</a>
           
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
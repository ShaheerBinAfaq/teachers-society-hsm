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
      td = tr[i].getElementsByTagName("td")[9];
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
<style type="text/css">
        label{
            width: 240px;
            display: inline-block;
        }
        /* button{
            font-size: 25px;
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
            width: 20%;
           */
        }
        body{
          background-color:grey;
        }
        div{
text-align: center;
        }
        select{
            text-align: center;
        } */
      
        
         div {
  
  /* background-color: red;
  animation-name: example;
  animation-duration: 10s;
  animation-delay: 2s;
  animation-iteration-count: infinite;
}

@keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: aqua;}
  100% {background-color: green;} */

} */
/* .btn {
  
  
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9; */
}

  input[type=text], input[type=number]  , input[type=textarea], input[type=tel], input[type=email] , select [type=option] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
  /* div{
  background-image: url("../images/teacher.jpg");
  background-size: cover;
  }  */
/* select{
  width: 31.5%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1; 
} */

body{
  background-color:grey;
}

        
    </style>

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
    <a href="{{ route('export') }}">Export Member Data</a>
    <div>
      <select id="statusFilter" onchange="fnStatusFilter()">
        <option value="Show all">Show all</option>
        <option value="Defaulter">Defaulter</option>
        <option value="Not Defaulter">Not Defaulter</option>
        <option value="Alottee">Alottee</option>
        <option value="Returned">Returned</option>
      </select>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <!-- <td>SR NO</td> -->
          <td>MS-ID</td>
          <td>PLOT NO</td>
          <td>ALLOTMENT NO</td>
          <td>Name</td>
          <td>CNIC</td>
          <td>Fathers Name</td>
          <td>Occupation</td>
          <td>Address</td>
          <td>Phone</td>
          <td>Status</td>
          <td>Total Balance</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody id="myTable">
        @foreach($members as $member)
        <tr>
            <!-- <td>{{$member->id}}</td> -->
            <td>{{$member->msid}}</td>
            <td>{{$member->plot_no}}</td>
            <td>{{$member->allotment_no}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->cnic}}</td>
            <td>{{$member->fathers_name}}</td>
            <td>{{$member->occupation}}</td>
            <td>{{$member->address}}</td>
            <td>{{$member->phone}}</td>
            <td>{{$member->status}}</td>
            <td>{{$member->total_balance}}</td>
            <td>
                <a href="{{ route('members.edit',$member)}}" class="btn btn-primary">Edit</a>
                <a href="{{ route('due.edit',$member->id)}}" class="btn btn-primary">Report</a>
                <!-- <a href="/report" class="btn btn-primary">Report</a> -->
                <a href="{{ route('bill.edit',$member->id)}}" class="btn btn-primary">Bills</a>
                <!-- <a href="http://localhost:8000/bill/create?mid={{$member->id}}" class="btn btn-primary">Bill</a> -->
           
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
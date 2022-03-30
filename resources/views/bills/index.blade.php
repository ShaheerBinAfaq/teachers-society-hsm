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
    <h1 class="display-3">Receipts</h1>  
    <style>h1{text-align:center}</style>
    <div>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Receipt Number</td>
          <td>Member</td>
          <td>Date</td>
          <td>Total Received</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody id="myTable">
        @foreach($bills as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->receipt_number}}</td>
            @foreach($members as $member)
              @if($member->id == $bill->member_id)
                <td>{{$member->name}}</td>
              @endif
            @endforeach
            <!-- <td>{{$bill->member_id}}</td> -->
            <td>{{$bill->date}}</td>
            <td>{{$bill->admission_fee_received + $bill->share_money_received + $bill->cost_of_land_received + $bill->cost_of_corner_received + $bill->lease_documentation_received + $bill->cost_of_development_received + $bill->cost_of_transfer_received + $bill->establishment_charges_received + $bill->miscellaneous_received + $bill->cost_of_forms_received + $bill->cost_of_road_facing_received + $bill->cost_of_west_open_received + $bill->cost_of_park_facing_received}}</td>
            <td>
                <form action="{{ route('bill.destroy', $bill)}}" method="post">
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
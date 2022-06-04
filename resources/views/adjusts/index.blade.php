@extends('base')
@section('main')
<style type="text/css">
        label{
            width: 240px;
            display: inline-block;
        }
        body{
          background-color:grey;
        }
        div{
text-align: center;
        }
        select{
            text-align: center;
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
    <h1 class="display-3">Adjust</h1>  
    <style>h1{text-align:center}</style>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>From</td>
          <td>Amount</td>
          <td>Adjust to</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody id="myTable">
        @foreach($adjusts as $adjust)
        <tr>
            <td>{{$adjust->adjust_from}}</td>
            <td>{{$adjust->adjust_amount}}</td>
            <td>{{$adjust->member_id}}</td>
            <td>
                <form action="{{ route('adjusts.destroy', $adjust)}}" method="post">
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
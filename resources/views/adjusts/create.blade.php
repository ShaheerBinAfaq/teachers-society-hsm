@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <!-- <img src="img/teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;"> -->
<style type="text/css">
        label{
          color:white;
          
            width: 240px;
            display: inline-block;
        }
        button{
            font-size: 25px;
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
            width: 20%;
          
        }
        body{
          background-color: grey;
          /* background-image:url('https://cdn-icons-png.flaticon.com/512/21/21104.png'); */
          /* background-image:url('https://ultimateadjust.com/wp-content/uploads/bb-plugin/cache/verified-users-circle.png'); */
          background-repeat: no-repeat;
          background-size:100%
          
          background-attachment: fixed;
  background-position: center;
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
.btn {
  
  
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

  input[type=text], input[type=number]  , input[type=textarea], input[type=tel], input[type=email] , select [type=option] {
    color:white;
    
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border-color: white;
  background: transparent;
  border-radius: 10px;
}

  /* div{
  background-image: url("../images/teacher.jpg");
  background-size: cover;
  }  */
select{
  color:white;
  
  width: 31.5%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border-color: white;
  background: transparent; 
  border-radius: 10px;
}
select option {
    background-color: grey;
    font-weight: bold;
    color: white;
}





        
    </style>
    <h1 class="display-3">Add Adjust</h1>
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
    <center>
      <form method="post" action="{{ route('adjusts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Adjust From:</label>
              <input type="text" class="form-control" name="adjust_from" required/><br>
          </div>
          <br>
          <div class="form-group">
              <label for="cnic">Adjust Amount:</label>
                <input type="text" class="form-control" name="adjust_amount" required/><br>
          </div>
        
          <br>
          <div class="form-group">
              <label for="fathers_name">Adjust To Head:</label>
              <select name="adjust_to" id="adjust_to">
                <option value="admission_fee_received">admission_fee</option>
                <option value="share_money_received">share_money</option>
                <option value="cost_of_land_received">cost_of_land</option>
                <option value="cost_of_corner_received">cost_of_corner</option>
                <option value="lease_documentation_received">lease_documentation</option>
                <option value="cost_of_development_received">cost_of_development</option>
                <option value="cost_of_transfer_received">cost_of_transfer</option>
                <option value="establishment_charges_received">establishment_charges</option>
                <option value="miscellaneous_received">miscellaneous</option>
                <option value="cost_of_forms_received">cost_of_forms</option>
                <option value="cost_of_road_facing_received">cost_of_road_facing</option>
                <option value="cost_of_west_open_received">cost_of_west_open</option>
                <option value="cost_of_park_facing_received">cost_of_park_facing</option>
                <option value="cost_of_extra_land_facing_received">cost_of_extra_land_facing</option>
            </select>
          </div>
          <br>
              <input type="number" class="form-control" name="member_id" value="{{$member->id}}" style="display:none;"><br>
          <div class="form-group">
              <label for="occupation">Receipt Number:</label>
              <input type="number" class="form-control" name="receipt_no"><br>
          </div>
          <br>
          <div class="form-group">
              <label for="address">Receipt Date:</label>
              <input type="date" class="form-control" name="receipt_date" ><br>
          </div> 
          <br>
          <button type="submit" >Add Adjust</button>
          </center>
      </form>
      </center>
    

  </div>
  
</div>

</div>

@endsection
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
          /* background-image:url('https://ultimatemember.com/wp-content/uploads/bb-plugin/cache/verified-users-circle.png'); */
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
    <h1 class="display-3">Add a Member</h1>
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
      <form method="post" action="{{ route('members.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" required/><br>
          </div>
          <br>
          <div class="form-group">
              <label for="cnic">CNIC</label>
              <input type="text" class="form-control" name="cnic" required pattern="[0-9]{13}" title="Please enter the cnic no in the required format ex:4210165405091"/><br>
          </div>
        
          <br>
          <div class="form-group">
              <label for="fathers_name">Fathers Name:</label>
              <input type="text" class="form-control" name="fathers_name" required/><br> 
          </div>
          <br>
          <div class="form-group">
              <label for="occupation">Occupation:</label>
              <input type="text" class="form-control" name="occupation"><br>
          </div>
          <br>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address" required><br>
          </div> 
          <br>
          <div class="form-group">
              <label for="phone">Phone:</label> 
              <input type="tel" class="form-control" name="phone" pattern="[0-9]{11}" title="please enter cnic in right format"> </div>                         
          </div>
          <br>
          <center>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <br>
          <div class="form-group">
            <label for="msid">MS ID</label>
            <input type="number" class="form-control" name="msid">
          </div>
          <br>
          <div>
            <label for="dei">DEI:</label>
            <select name="dei" id="dei">
              <option value="SELECT DEI">SELECT DEI</option>
              <option value="ALLAH PAI">ALLAH PAI</option>
              <option value="SHAHI CHIB">SHAHI CHIB</option>
              <option value="LOHAR KOLANG">LOHAR KOLANG</option>
              
            </select>
          </div>
          <br>
          <div>
            <label for="survey">SURVEY:</label>
            <select name="survey" id="survey">
                <option value="select survey">SELECT SURVEY</option>
                <option value="15">15</option>
                <option value="124">124</option>
                <option value="125">125</option>
            </select>
        </div>
        <br>
        <div>
          <label for="phase">PHASE:</label>
          <select name="phase" id="phase">
              <option value="select phase">SELECT PHASE</option>
              <option value="1">1</option>
              <option value="2">2</option>
          </select>
        </div>
        <br>
        <div>
          <label for="block">BLOCK:</label>
          <select name="block" id="block">
              <option value="select block">SELECT BLOCK</option>
              <option value="1">1</option>
              <option value="2">2</option>
          </select>
        </div>
        <br>
        <div>
        <label for="plot_category">PLOT CATEGORY</label>
        <input type="text" name="plot_category" id="plot_category" required> 
        </div>
        <br>
        <div>
          <label for="plot_no">PLOT NO:</label>
          <input type="number" name="plot_no" id="plot_no" required>
        </div>
          <button type="submit" >Add Member</button>
          </center>
      </form>
      </center>
    

  </div>
  
</div>

</div>

@endsection
@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <!-- <img src="img/teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;"> -->
<style type="text/css">
        label{
            width: 240px;
            display: inline-block;
        }
        button{
            font-size: 25px;
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
        }
        #container{
text-align: center;
        }
        select{
            text-align: center;
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
              <textarea class="form-control" name="occupation"></textarea><br>
          </div>
          <br>
          <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" name="address" required></textarea><br>
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
          <button type="submit" >Add Member</button>
          </center>
      </form>
      </center>
    

  </div>
  
</div>

</div>

@endsection
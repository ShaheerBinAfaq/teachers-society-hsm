@extends('base') 
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#dei").val('{{ $member->dei }}');
    $("#survey").val('{{ $member->survey }}');
    $("#phase").val('{{ $member->phase }}');
    $("#block").val('{{ $member->block }}');

    });
</script>
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
           /* background-image:url("https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png");  */
       /* background-image:url('https://cdn-icons-png.flaticon.com/512/21/21104.png'); */
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

<div class="row">
<img src="teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;">

    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a member</h1>
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
        <form method="post" action="{{ route('members.update', $member->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $member->name }}" />
            </div>
            <div class="form-group">
            <label for="cnic">CNIC</label>
                <input type="text" class="form-control" name="cnic" value={{ $member->cnic }} />
            </div>
            <div class="form-group">
            <label for="fathers_name">S/o D/o W/o:</label>
                <input type="text" class="form-control" name="fathers_name" value="{{ $member->fathers_name }}" />
            </div>
            <div class="form-group">
            <label for="occupation">Occupation:</label>
            <textarea class="form-control" name="occupation">{{ $member->occupation }}</textarea>
            </div>
            <div class="form-group">
            <label for="address">Address:</label>
                <textarea class="form-control" name="address">{{ $member->address }}</textarea>
            </div>
            <div class="form-group">
            <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" value={{ $member->phone }} />
            </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" value={{ $member->email }}>
          </div>
          <div>
            <label for="msid">MS ID</label>
            <input type="number" name="msid" value={{ $member->msid }}>
          </div>
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
            <div class="form-group">
            <label for="plot_no">plot_no:</label>
                <input type="text" class="form-control" name="plot_no" value={{ $member->plot_no }} />
            </div>
            <div class="form-group">
            <label for="plot_category">plot_category:</label>
                <input type="text" class="form-control" name="plot_category" value={{ $member->plot_category }} />
            </div>
            <label for="allotment_no">allotment no:</label>
                <input type="text" class="form-control" name="allotment_no" value={{ $member->allotment_no }} />
            </div>
            <div>
              <label for="">Membership Date</label>
              <input type="date" name="date" id="date" value={{ $member->date }}>
            </div>
            <div>
                <label for="">Allotment Date</label>
                <input type="date" name="allotment_date" id="allotment_date" value={{ $member->allotment_date }}>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
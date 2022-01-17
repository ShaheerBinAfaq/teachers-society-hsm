@extends('base')
@section('main')

<style type="text/css">
  *{
    margin: 0;
    padding: 0;
  }
  div.form-group{
    width: 400px;
    /* margin:  auto; */
  }
        label{
          margin: auto;
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
        div{
          margin-center:300px;
        }
        
    </style>

<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <!-- <img src="img/teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;"> -->

    <h1 class="display-3">Add a Transfer</h1>
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
    
      <form method="post" action="{{ route('transfer.store') }}">
          @csrf
    
          
     
          <br>
         
          <div class="form-group">    
              <label for="member_id">Member:</label>
              <select name="member_id" id="select_member_id">
                <option value=""></option>
                @foreach($members as $member)
                <option value="{{$member->id}}" msid="{{$member->msid}}" status="{{$member->status}}">{{$member->name}}</option>
                @endforeach
              </select>
          <br>
              <label for="msid">Membership ID:</label>
              <input id="msid" type="number" name="msid"/>
      
          <br>
              <label for="transfree_id">Transfree:</label>
              <select name="transfree_id">
                @foreach($members as $member)
                <option value="{{$member->id}}">{{$member->name}}</option>
                @endforeach
              </select>
          <br>
              <!-- <label for="dei">DEI:</label>
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
        <input type="text" name="plot_category" id="plot_category" required> <small>yds</small>
        
        </div>
        <br>
        <div>
            
        <label for="plot_no">PLOT NO:</label>
        <input type="number" name="plot_no" id="plot_no" required>
        
          </div> -->
          
          <button type="submit" class="btn btn-primary-outline">Add Transfer</button>
      </form>
      
  </div>
</div>
</div>
<script>
  $('#select_member_id').change(function () {
    let optionVal = this.value;
    let optionMsid = $('#select_member_id option:selected').attr('msid');
    $('#msid').val(optionMsid);
    let optionStatus = $('#select_member_id option:selected').attr('status');
    if(optionStatus == "Defaulter") {
      alert('This member is Defaulter!');
      window.location.href = "/transfer";
    }
  });
</script>
@endsection
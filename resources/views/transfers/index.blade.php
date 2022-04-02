@extends('base')
@section('main')

<script>
function filter() {
  fnStatusFilter();
}
function fnStatusFilter() {
  var table, tr, td, i;
  var filterDei = document.getElementById("deiFilter").value.toUpperCase();
  var filterSurvey = document.getElementById("surveyFilter").value.toUpperCase();
  var filterPhase = document.getElementById("phaseFilter").value.toUpperCase();
  var filterBlock = document.getElementById("blockFilter").value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    tdDei = tr[i].getElementsByTagName("td")[3];
    tdSurvey = tr[i].getElementsByTagName("td")[4];
    tdPhase = tr[i].getElementsByTagName("td")[5];
    tdBlock = tr[i].getElementsByTagName("td")[6];
  
    var txtValueDei = tdDei.textContent || tdDei.innerText;
    var txtValueSurvey = tdSurvey.textContent || tdSurvey.innerText;
    var txtValuePhase = tdPhase.textContent || tdPhase.innerText;
    var txtValueBlock = tdBlock.textContent || tdBlock.innerText;

    //for empty values
    if(filterDei=='') {
      txtValueDei = filterDei
      //alert("*"+txtValueDei.toUpperCase()+"* "+"*"+filterDei+"*");
    }
    if(filterSurvey=='') {
      txtValueSurvey = filterSurvey
    }
    if(filterPhase=='') {
      txtValuePhase = filterPhase
    }
    if(filterBlock=='') {
      txtValueBlock = filterBlock
    }

    if (txtValueDei.toUpperCase()==filterDei && txtValueSurvey.toUpperCase()==filterSurvey && txtValuePhase.toUpperCase()==filterPhase && txtValueBlock.toUpperCase()==filterBlock) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }

}
</script>
<style type="text/css">
  body{
    background-color:grey;
  }
  select{
  color:white;
  
 
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
input[type=button]{
  padding: 15px;
  margin: 5px 0 22px 0;
  border-color: white;
  background: white; 
  border-radius: 10px;
}
tr{
  background-color:transparent;
}


  /* td{
    color: white;
  
  font-weight: bold;
            
            text-transform: uppercase;
            font-size:18px;
            width: 24%;
            display: inline-block;
  } */
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
    <h1 class="display-3">transfers</h1>  
    <style>h1{text-align:center}</style>
    <div>
    <a style="margin: 19px;" href="{{ route('transfer.create')}}" class="btn btn-primary">New transfer</a>
    </div>
    <div style="margin: 19px;">
      <p>Filter:</p>
       <table>
            <div>
                <thead>
                    <td>DEI</td>
                    <td>SURVEY</td>
                    <td>PHASE</td>
                    <td>BLOCK</td>

                </thead>
            </div>
            <div>
      <td>
      <select id="deiFilter">
        
        
        <option value="">SELECT DEI</option>
        <option value="ALLAH PAI">ALLAH PAI</option>
        <option value="SHAHI CHIB">SHAHI CHIB</option>
        <option value="LOHAR KOLANG">LOHAR KOLANG</option>
        
      </select>
      </td>
      <td>
      <select name="survey" id="surveyFilter">
        <option value="">SELECT SURVEY</option>
        <option value="15">15</option>
        <option value="124">124</option>
        <option value="125">125</option>
      </select>
      </td>
      <td>
      <select name="phase" id="phaseFilter">
        <option value="">SELECT PHASE</option>
        <option value="1">1</option>
        <option value="2">2</option>
      </select>
      
    </td>
    <td>
        <select name="block" id="blockFilter">
        <option value="">SELECT BLOCK</option>
        <option value="1">1</option>
        <option value="2">2</option>
      </select>
      <input type="button" value="Apply filters" onclick="filter();">

      </td>
      </table>
    </div>
    </table>
    <br><br>
  <table class="table table-striped display">
    <thead>
        <tr>
          <td>MSID</td>
          <td>member</td>
          <td>transfree</td>          
          <!-- <td>Actions</td> -->
          <td>dei</td>
          <td>survey</td>
          <td>phase</td>
          <td>block</td>
          <td>plot_category</td>
          <td>plot_no</td>
          <td>Transfer no</td>
          <td>Status</td>
        </tr>
    </thead>
    <tbody id="myTable">
        @foreach($transfers as $transfer)
        <tr>
            <td>{{$transfer->msid}}</td>
            @foreach ($members as $member)
              @if ($transfer->member_id == $member->id)
                <td>{{($member->name)}}</td>
              @endif
            @endforeach
            @foreach ($members as $member)
              @if ($transfer->transfree_id == $member->id)
                <td>{{($member->name)}}</td>
              @endif
            @endforeach
            <!-- <td>
                <a href="{{ route('transfer.edit',$transfer)}}" class="btn btn-primary">Edit</a>
            
                <form action="{{ route('transfer.destroy', $transfer)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> -->
            <td>{{$transfer->dei}}</td>
            <td>{{$transfer->survey}}</td>
            <td>{{$transfer->phase}}</td>
            <td>{{$transfer->block}}</td>
            <td>{{$transfer->plot_category}}</td>
            <td>{{$transfer->plot_no}}</td>
            <td>{{$transfer->tran_no}}</td>
            <td title="Payment Transferred To:{{$transfer->return_to}}&#10;Transferred Amount:{{$transfer->return_amount}}">{{$transfer->status}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
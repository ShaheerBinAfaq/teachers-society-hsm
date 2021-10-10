@extends('base') 
@section('main')
<div>
    <table>
        <thead>
            <td>Name</td>
            <td>Amount</td>
            <td>Received</td>
            <td>Balance</td>
        </thead>
        <tbody>
            <td>Cost of land</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b"></td>
        </tbody>
    </table>
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#col-r").change( function() {
    $('#col-b').val($('#col-a').val() - $('#col-r').val());
  });
});
</script>
@endsection

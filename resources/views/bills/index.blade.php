@extends('base') 
@section('main')
<div>
  <img src="teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;">
 
  <h1>Receipt</h1>
  <style>h1{text-align:center}</style>
    <table>
        <thead>
            <td>Name</td>
            <td>Amount</td>
            <td>Received</td>
            <td>Balance</td>
        </thead>
        <tbody>
          <tr>
            <td>Admission Fee</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Share Money</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Cost of Land</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Cost of Corner/West Open Changes</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Lease Documentation Charges</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Cost of Outernal Development/Internal Development</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Cost of Transfer Fees (Transfer Vide A/c no.)</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>From Mr/Mrs/Miss</td>
            <td><input type="number" id="col-a"></td>
          </tr>
          <tr>
            <td>Vide A/c no.</td>
            <td><input type="number" id="col-a"></td>
          </tr>
          <tr>
            <td>Establishemnt Charges</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Miscellaneous or other charges</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Cost of Forms/by-laws etc.</td>
            <td><input type="number" id="col-a"></td>
            <td><input type="number" id="col-r"></td>
            <td><input type="number" id="col-b" disabled></td>
          </tr>
          <tr>
            <td>Ledger A/c no.</td>
            <td><input type="number" id="col-a"></td>
          </tr>          
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

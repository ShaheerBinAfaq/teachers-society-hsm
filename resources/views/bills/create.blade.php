@extends('base') 
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bill</title>
    <script src="bills.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script>
        $(document).ready(function()
{
    $("#admission_fee_received").change(function()
    {
        $("#admission_fee_balance").val($("#admission_fee_amount").val() - $("#admission_fee_received").val());

    });
    $("#share_money_received").change(function()
    {
        $("#share_money_balance").val($("#share_money_amount").val() - $("#share_money_received").val());

    });
    $("#cost_of_land_received").change(function()
    {
        $("#cost_of_land_balance").val($("#cost_of_land_amount").val() - $("#cost_of_land_received").val());

    });
    $("#cost_of_corner_received").change(function()
    {
        $("#cost_of_corner_balance").val($("#cost_of_corner_amount").val() - $("#cost_of_corner_received").val());

    });
    
    $("#lease_documentation_received").change(function()
    {
        $("#lease_documentation_balance").val($("#lease_documentation_amount").val() - $("#lease_documentation_received").val());

    });
    $("#cost_of_development_received").change(function()
    {
        $("#cost_of_development_balance").val($("#cost_of_development_amount").val() - $("#cost_of_development_received").val());

    });
    $("#cost_of_transfer_received").change(function()
    {
        $("#cost_of_transfer_balance").val($("#cost_of_transfer_amount").val() - $("#cost_of_transfer_received").val());

    });
    $("#establishment_charges_received").change(function()
    {
        $("#establishment_charges_balance").val($("#establishment_charges_amount").val() - $("#establishment_charges_received").val());

    });
    $("#miscellaneous_received").change(function()
    {
        $("#miscellaneous_balance").val($("#miscellaneous_amount").val() - $("#miscellaneous_received").val());

    });
    $("#cost_of_forms_received").change(function()
    {
        $("#cost_of_forms_balance").val($("#cost_of_forms_amount").val() - $("#cost_of_forms_received").val());

    });
    $('#btnpdf').click(function () {
        var fileName = $('#fileName').val();
        var worker = html2pdf().from(document.getElementById('receiptbody')).save(fileName);
    });
});
    </script> 
   
    <style type="text/css">
        
        .button{
            font-size: 25px;
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
        }
        #container{
text-align: center;
        }

    </style>
   
</head>
<body>
<form method="post" action="">
<div><center><h1>RECEIPT</h1></center>
    <div id="receiptbody">
    <center>
        <label for="member_id">Member:</label>
            <select name="member_id" id="select_member_id">
            <option value=""></option>
            @foreach($members as $member)
            <option value="{{$member->id}}" msid="{{$member->msid}}">{{$member->name}}</option>
            @endforeach
            </select>
    <table>
        <div>
            <thead>
                <td>NAME</td>
                <td>AMOUNT</td>
                <td>RECEIVED</td>
                <td>BALANCE</td>
            </thead>
        </div>
        <div>
            <tbody>
                <div>
                <tr>
                    <td>ADMISSION FEE </td>
                    <td><input type="number" name="admission_fee_amount" id="admission_fee_amount"></td>
                    <td><input type="number" name="admission_fee_received" id="admission_fee_received"></td>
                    <td><input type="text" name="admission_fee_balance" id="admission_fee_balance" readonly></td>
                </tr>
                </div>
                <div>
                <tr>
                    
                    <td>SHARE MONEY</td>
                    <td><input type="number" name="share_money_amount" id="share_money_amount"></td>
                    <td><input type="number" name="share_money_received" id="share_money_received"></td>
                    <td><input type="text" name="share_money_balance" id="share_money_balance"readonly  ></td>
                </tr>
                </div>
                <div>
                <tr>
                    <td>COST OF LAND</td>
                        <td><input type="number" name="cost_of_land_amount" id="cost_of_land_amount"></td>
                        <td><input type="number" name="cost_of_land_received" id="cost_of_land_received"></td>
                        <td><input type="text" name="cost_of_land_balance" id="cost_of_land_balance"readonly></td>
                </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF CORNER</td>
                        <td><input type="number" name="cost_of_corner_amount" id="cost_of_corner_amount"></td>
                        <td><input type="number" name="cost_of_corner_received" id="cost_of_corner_received"></td>
                        <td><input type="text" name="cost_of_corner_balance" id="cost_of_corner_balance"readonly></td>
                    </tr>
                </div>
                <div>
                    <tr>
                    <td>LEASE DOCUMENTATION</td>
                    <td><input type="number" name="lease_documentation_amount" id="lease_documentation_amount"></td>
                    <td><input type="number" name="lease_documentation_received" id="lease_documentation_received"></td>
                    <td><input type="text" name="lease_documentation_balance" id="lease_documentation_balance"readonly></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF DEVELOPMENT</td>
                        <td><input type="number" name="cost_of_development_amount" id="cost_of_development_amount"></td>
                        <td><input type="number" name="cost_of_development_received" id="cost_of_development_received"></td>
                        <td><input type="text" name="cost_of_development_balance" id="cost_of_development_balance"readonly></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF TRANSFER</td>
                        <td><input type="number" name="cost_of_transfer_amount" id="cost_of_transfer_amount"></td>
                        <td><input type="number" name="cost_of_transfer_received" id="cost_of_transfer_received"></td>
                        <td><input type="text" name="cost_of_transfer_balance" id="cost_of_transfer_balance"readonly></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>FROM MR/MRS/MISS</td><br>
                        <td><label for="mr"><input type="radio" name="from" id="mr" required>MR</label><br>
                        <label for="mrs"> <input type="radio" name="from" id="mrs" required>MRS</label><br>
                        <label for="miss"><input type="radio" name="from" id="miss" required>MISS</label><br>
                        <input type="text" name="from" id="from" placeholder="enter name"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>VIDE ACCOUNT NO:</td>
                        <td>below column only<br>refer vide a/c no <br><input type="number" name="vide_account_no" id="vide_account_no" placeholder="Enter a/c no"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>ESTABLISHMENT CHARGES</td>
                        <td><input type="number" name="establishment_charges_amount" id="establishment_charges_amount"></td>
                        <td><input type="number" name="establishment_charges_received" id="establishment_charges_received"></td>
                        <td><input type="text" name="establishment_charges_balance" id="establishment_charges_balance"readonly></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>MISCELLANEOUS</td>
                        <td><input type="number" name="miscellaneous_amount" id="miscellaneous_amount"></td>
                        <td><input type="number" name="miscellaneous_received" id="miscellaneous_received"></td>
                        <td><input type="text" name="miscellaneous_balance" id="miscellaneous_balance"readonly></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF FORMS</td>
                        <td><input type="number" name="cost_of_forms_amount" id="cost_of_forms_amount"></td>
                        <td><input type="number" name="cost_of_forms_received" id="cost_of_forms_received"></td>
                        <td><input type="text" name="cost_of_forms_balance" id="cost_of_forms_balance" readonly></td>
                    </tr>
                </div>
                <div>
    
                    <tr>
                        <td>LEDGER ACCOUNT NO: <br></td>
                        <td><small>below column only refer <br> ledger a/c no</small><br>
                        <input type="number" name="ledger_account_no" id="ledger_account_no" placeholder="Enter a/c no"></td>
                    </tr>
                </div>
            </tbody>
        </div>
    </table>
    <br><input type="text" id="fileName" placeholder="Enter File Name" required class=button>
    </center>
    </div>
    <br>
    <div id="container">
        <!-- <button type="print_invoice" id="btnpdf">GET INVOICE</button> -->
        <input type="button" value="GET INVOICE" id="btnpdf" class="button">
      </div>
    </form>
</body>
</html>
@endsection

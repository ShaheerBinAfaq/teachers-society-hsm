@extends('base') 
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <script src="bills.js"></script>
    
<style type="text/css">
      <style>
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
    button{
            font-size: 25px;
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
        }
        #container{
            text-align: center;
        }
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

  input[type=text], input[type=number]  , input[type=textarea], input[type=tel], input[type=date] , select [type=option] {
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
table{
    
  border: 10px solid;
}
thead td{
    color:black;
}
td{
    color:white;
}


</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script>
$(document).ready(function()
{
    $("#admission_fee_received").blur(function()
    {
        $("#admission_fee_balance").val($("#admission_fee_amount").val() - $("#admission_fee_received").val());

    });
    $("#share_money_received").blur(function()
    {
        $("#share_money_balance").val($("#share_money_amount").val() - $("#share_money_received").val());

    });
    $("#cost_of_land_received").blur(function()
    {
        $("#cost_of_land_balance").val($("#cost_of_land_amount").val() - $("#cost_of_land_received").val());

    });
    $("#cost_of_corner_received").blur(function()
    {
        $("#cost_of_corner_balance").val($("#cost_of_corner_amount").val() - $("#cost_of_corner_received").val());

    });
    $("#cost_of_road_facing_received").blur(function()
    {
        $("#cost_of_road_facing_balance").val($("#cost_of_road_facing_amount").val() - $("#cost_of_road_facing_received").val());
    });
    $("#cost_of_extra_land_facing_received").blur(function()
    {
        $("#cost_of_extra_land_facing_balance").val($("#cost_of_extra_land_facing_amount").val() - $("#cost_of_extra_land_facing_received").val());
    });
$("#cost_of_west_open_received").blur(function()
    {
        $("#cost_of_west_open_balance").val($("#cost_of_west_open_amount").val() - $("#cost_of_west_open_received").val());
    });
$("#cost_of_park_facing_received").blur(function()
    {
        $("#cost_of_park_facing_balance").val($("#cost_of_park_facing_amount").val() - $("#cost_of_park_facing_received").val());
    });
    $("#lease_documentation_received").blur(function()
    {
        $("#lease_documentation_balance").val($("#lease_documentation_amount").val() - $("#lease_documentation_received").val());

    });
    $("#cost_of_development_received").blur(function()
    {
        $("#cost_of_development_balance").val($("#cost_of_development_amount").val() - $("#cost_of_development_received").val());

    });
    $("#cost_of_transfer_received").blur(function()
    {
        $("#cost_of_transfer_balance").val($("#cost_of_transfer_amount").val() - $("#cost_of_transfer_received").val());

    });
    $("#establishment_charges_received").blur(function()
    {
        $("#establishment_charges_balance").val($("#establishment_charges_amount").val() - $("#establishment_charges_received").val());

    });
    $("#miscellaneous_received").blur(function()
    {
        $("#miscellaneous_balance").val($("#miscellaneous_amount").val() - $("#miscellaneous_received").val());

    });
    $("#cost_of_forms_received").blur(function()
    {
        $("#cost_of_forms_balance").val($("#cost_of_forms_amount").val() - $("#cost_of_forms_received").val());

    });
    $('#btnpdf').click(function () {
        window.scrollTo(0, 0);
        var fileName = $('#fileName').val();
        var worker = html2pdf().set({
            pagebreak: { after: '#vide' }
        }).from(document.getElementById('receiptbody')).save();
    });

    //setting all number values to 0
    var inputElemArr = document.getElementsByTagName('input');
    for(let i=0; i<inputElemArr.length; i++ ){
        if(inputElemArr[i].getAttribute('type') == 'number' && inputElemArr[i].value == '') {
            inputElemArr[i].value = 0;
        }
    }

    

    //populating inputs a/c to db
    @if(count((array)$bill))
    $('#transfer_id').val({{ $bill->transfer_id }});
$('#member_id').val({{ $bill->member_id }});
$('#admission_fee_amount').val({{ $bill->admission_fee_amount }});
$('#admission_fee_received').val({{ $bill->admission_fee_received }});
$('#admission_fee_balance').val({{ $bill->admission_fee_balance }});
$('#share_money_amount').val({{ $bill->share_money_amount }});
$('#share_money_received').val({{ $bill->share_money_received }});
$('#share_money_balance').val({{ $bill->share_money_balance }});
$('#cost_of_land_amount').val({{ $bill->cost_of_land_amount }});
$('#cost_of_land_received').val({{ $bill->cost_of_land_received }});
$('#cost_of_land_balance').val({{ $bill->cost_of_land_balance }});
$('#cost_of_corner_amount').val({{ $bill->cost_of_corner_amount }});
$('#cost_of_corner_received').val({{ $bill->cost_of_corner_received }});
$('#cost_of_corner_balance').val({{ $bill->cost_of_corner_balance }});
$('#cost_of_road_facing_amount').val({{ $bill->cost_of_road_facing_amount }});
$('#cost_of_road_facing_received').val({{ $bill->cost_of_road_facing_received }});
$('#cost_of_road_facing_balance').val({{ $bill->cost_of_road_facing_balance }});
$('#cost_of_west_open_amount').val({{ $bill->cost_of_west_open_amount }});
$('#cost_of_west_open_received').val({{ $bill->cost_of_west_open_received }});
$('#cost_of_west_open_balance').val({{ $bill->cost_of_west_open_balance }});
$('#cost_of_park_facing_amount').val({{ $bill->cost_of_park_facing_amount }});
$('#cost_of_park_facing_received').val({{ $bill->cost_of_park_facing_received }});
$('#cost_of_park_facing_balance').val({{ $bill->cost_of_park_facing_balance }});
$('#lease_documentation_amount').val({{ $bill->lease_documentation_amount }});
$('#lease_documentation_received').val({{ $bill->lease_documentation_received }});
$('#lease_documentation_balance').val({{ $bill->lease_documentation_balance }});
$('#lease_documentation_amount').val({{ $bill->lease_documentation_amount }});
$('#cost_of_development_received').val({{ $bill->cost_of_development_received }});
$('#cost_of_development_balance').val({{ $bill->cost_of_development_balance }});
$('#cost_of_transfer_amount').val({{ $bill->cost_of_transfer_amount }});
$('#cost_of_transfer_received').val({{ $bill->cost_of_transfer_received }});
$('#cost_of_transfer_balance').val({{ $bill->cost_of_transfer_balance }});
$('#from').val('{{ $bill->from }}');
$('#vide_account_no').val('{{ $bill->vide_account_no }}');
$('#establishment_charges_amount').val({{ $bill->establishment_charges_amount }});
$('#establishment_charges_received').val({{ $bill->establishment_charges_received }});
$('#establishment_charges_balance').val({{ $bill->establishment_charges_balance }});
$('#miscellaneous_amount').val({{ $bill->miscellaneous_amount }});
$('#miscellaneous_received').val({{ $bill->miscellaneous_received }});
$('#miscellaneous_balance').val({{ $bill->miscellaneous_balance }});
$('#cost_of_forms_amount').val({{ $bill->cost_of_forms_amount }});
$('#cost_of_forms_received').val({{ $bill->cost_of_forms_received }});
$('#cost_of_forms_balance').val({{ $bill->cost_of_forms_balance }});
$('#ledger_account_no').val({{ $bill->ledger_account_no }});
// $('#admission_fee_amount').val({{ $bill->admission_fee_balance }});
// $('#share_money_amount').val({{ $bill->share_money_balance }});
// $('#cost_of_land_amount').val({{ $bill->cost_of_land_balance }});
// $('#cost_of_corner_amount').val({{ $bill->cost_of_corner_balance }});
// $('#cost_of_road_facing_amount').val({{ $bill->cost_of_road_facing_balance }});
// $('#cost_of_extra_land_facing_amount').val({{ $bill->cost_of_extra_land_facing_balance }});
// $('#cost_of_west_open_amount').val({{ $bill->cost_of_west_open_balance }});
// $('#cost_of_park_facing_amount').val({{ $bill->cost_of_park_facing_balance }});
// $('#lease_documentation_amount').val({{ $bill->lease_documentation_balance }});
// $('#lease_documentation_amount').val({{ $bill->lease_documentation_balance }});
// $('#cost_of_transfer_amount').val({{ $bill->cost_of_transfer_balance }});
// $('#establishment_charges_amount').val({{ $bill->establishment_charges_balance }});
// $('#miscellaneous_amount').val({{ $bill->miscellaneous_balance }});
// $('#cost_of_forms_amount').val({{ $bill->cost_of_forms_balance }});

    @else
    @endif
    setDefaultBalance();
});

function setDefaultBalance() {
    $("#admission_fee_balance").val($("#admission_fee_amount").val() - $("#admission_fee_received").val());
    $("#share_money_balance").val($("#share_money_amount").val() - $("#share_money_received").val());
    $("#cost_of_land_balance").val($("#cost_of_land_amount").val() - $("#cost_of_land_received").val());
    $("#cost_of_corner_balance").val($("#cost_of_corner_amount").val() - $("#cost_of_corner_received").val());
    $("#cost_of_road_facing_balance").val($("#cost_of_road_facing_amount").val() - $("#cost_of_road_facing_received").val()); 
    $("#cost_of_extra_land_facing_balance").val($("#cost_of_extra_land_facing_amount").val() - $("#cost_of_extra_land_facing_received").val()); 
    $("#cost_of_west_open_balance").val($("#cost_of_west_open_amount").val() - $("#cost_of_west_open_received").val());
    $("#cost_of_park_facing_balance").val($("#cost_of_park_facing_amount").val() - $("#cost_of_park_facing_received").val());
    $("#lease_documentation_balance").val($("#lease_documentation_amount").val() - $("#lease_documentation_received").val());
    $("#cost_of_development_balance").val($("#cost_of_development_amount").val() - $("#cost_of_development_received").val());
    $("#cost_of_transfer_balance").val($("#cost_of_transfer_amount").val() - $("#cost_of_transfer_received").val());
    $("#establishment_charges_balance").val($("#establishment_charges_amount").val() - $("#establishment_charges_received").val());
    $("#miscellaneous_balance").val($("#miscellaneous_amount").val() - $("#miscellaneous_received").val());
    $("#cost_of_forms_balance").val($("#cost_of_forms_amount").val() - $("#cost_of_forms_received").val());
}

function fnPayMethod(val){
    if(val != 'Cash') {
        document.getElementById('dvbank').style.display = '';
        if(val == 'Cheque') {
        document.getElementById('dvcheck').style.display = '';
    }
    }
}
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
<form method="post" action="{{ route('bill.store') }}">
    @csrf
<div><center><h1>RECEIPT</h1></center>
    <div id="receiptbody" style="background-color: grey;">
    <center>
        <label for="member_id">Member:</label>
        <select name="member_id" id="select_member_id">
        <option value="{{$member->id}}" msid="{{$member->msid}}">{{$member->name}}</option>
        </select>
        <br />
        <br />
        <label for="receipt_number">Receipt Number</label>
        <input type="number" name="receipt_number" id="receipt_number">
        <br />
        <br />
        <label for="">Receipt Date</label>
        <input type="date" name="date" id="date" required>
        <br />
        <label for="">Payment Method</label>
        <select name="payment_method" id="payment_method" onchange="fnPayMethod(this.value)">
            <option value="Cash">Cash</option>
            <option value="Cheque">Cheque</option>
            <option value="Pay Order">Pay Order</option>
        </select>
        <br />
        <div id="dvbank" style="display: none; ">
            <label for="">Bank</label>
            <input type="text" name="bank_name" id="bank_name" >
        </div>
        <br />
        <div id="dvcheck" style="display: none; ">
            <label for="">Cheque Number</label>
            <input type="text" name="check_number" id="check_number" >
            <br />
            <label for="">Cheque Date</label>
            <input type="date" name="check_date" id="check_date" >
        </div>
        <br />
        <label for="">Others</label>
        <input type="text" name="others" id="others" >
        
    <table>
            <thead>
                <td>NAME</td>
                <td>AMOUNT</td>
                <td>RECEIVED</td>
                <td>BALANCE</td>
            </thead>
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
                <tr>
                        <td>COST OF ROAD FACING</td>
                        <td><input type="number" name="cost_of_road_facing_amount" id="cost_of_road_facing_amount"></td>
                        <td><input type="number" name="cost_of_road_facing_received" id="cost_of_road_facing_received"></td>
                        <td><input type="text" name="cost_of_road_facing_balance" id="cost_of_road_facing_balance"readonly></td>
                </tr>
                <tr>
                        <td>COST OF WEST OPEN</td>
                        <td><input type="number" name="cost_of_west_open_amount" id="cost_of_west_open_amount"></td>
                        <td><input type="number" name="cost_of_west_open_received" id="cost_of_west_open_received"></td>
                        <td><input type="text" name="cost_of_west_open_balance" id="cost_of_west_open_balance"readonly></td>
                </tr>
                <tr>
                        <td>COST OF PARK FACING</td>
                        <td><input type="number" name="cost_of_park_facing_amount" id="cost_of_park_facing_amount"></td>
                        <td><input type="number" name="cost_of_park_facing_received" id="cost_of_park_facing_received"></td>
                        <td><input type="text" name="cost_of_park_facing_balance" id="cost_of_park_facing_balance"readonly></td>

                    </tr>   
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
                        <td>
                        <!-- <td><label for="mr"><input type="radio"  id="mr" required>MR</label><br>
                        <label for="mrs"> <input type="radio"  id="mrs" required>MRS</label><br>
                        <label for="miss"><input type="radio"  id="miss" required>MISS</label><br> -->
                        <input type="text" name="from" id="from" placeholder="enter name"></td>
                    </tr>
                </div>
                <div>
                    <tr id="vide">
                        <td>ADJUSTED FROM:</td>
                        <td><input type="number" name="vide_account_no" id="vide_account_no"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>ADJUSTED AMOUNT:</td>
                        <td><input type="number" name="adjust_amount" id="adjust_amount"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>ESTABLISHMENT CHARGES / OFFICE EMPLOYEE /<br /> OFFICE MAINTENANCE CHARGES</td>
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
                    <tr>
                        <td>COST OF EXTRA LAND</td>
                        <td><input type="number" name="cost_of_extra_land_facing_amount" id="cost_of_extra_land_facing_amount"></td>
                        <td><input type="number" name="cost_of_extra_land_facing_received" id="cost_of_extra_land_facing_received"></td>
                        <td><input type="text" name="cost_of_extra_land_facing_balance" id="cost_of_extra_land_facing_balance"readonly></td>
                </tr>
                </div>
                <div>
    
                    <tr>
                        <td>LEDGER ACCOUNT NO: <br></td>
                        <td><small>below column only refer <br> ledger a/c no</small><br>
                        <input type="number" name="ledger_account_no" id="ledger_account_no" placeholder="Enter a/c no"></td>
                    </tr>
                    <tr>
                        <td>PENALTY(IF ANY): <br></td>
                        <td>
                        <input type="number" name="penalty" id="penalty"></td>
                    </tr>
                    <!-- <tr>
                        <td>Receipt Date: <br></td>
                        <td>
                            
                        </td>
                    </tr> -->
                </div>
            </tbody>
        </div>
    </table>
    <!-- <br><input type="text" id="fileName" placeholder="Enter File Name" class=button> -->
    </center>
    </div>
    <br>
    <div id="container">
        <!-- <button type="print_invoice" id="btnpdf">GET INVOICE</button> -->
        <input type="button" value="GET INVOICE" id="btnpdf" class="button">
        <button type="submit" class="button" >Save Bill</button>
      </div>
    </form>
</body>
</html>
@endsection

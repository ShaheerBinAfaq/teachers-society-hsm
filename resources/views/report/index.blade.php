@extends('base')
@section('main')


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

  input[type=text], input[type=number]  , textarea, input[type=tel], input[type=email] , select [type=option] {
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

    //populating inputs a/c to db
    @if(count((array)$member))
    $("#msid").val('{{ $member->msid }}');
    $("#name").val('{{ $member->name }}');
    $("#cnic").val('{{ $member->cnic }}');
    $("#fathers_name").val('{{ $member->fathers_name }}');
    $("#occupation").val('{{ $member->occupation }}');
    $("#address").val('{{ $member->address }}');
    $("#phone_no").val('{{ $member->phone }}');

    $("#dei").val('{{ $member->dei }}');
    $("#survey").val('{{ $member->survey }}');
    $("#phase").val('{{ $member->phase }}');
    $("#block").val('{{ $member->block }}');

    $("#plot_no").val('{{ $member->plot_no }}');
    $("#plot_category").val('{{ $member->plot_category }}');
    $("#allotment_no").val('{{ $member->allotment_no }}');


    @else
    @endif
});
</script> 

    <form action="">
        <div>
            <h1><center >MEMBER BIO DATA  </center></h1>
            </div>
            <form action="" method="get">
            <div>
                <div>
                    <label for="">MSID</label>
                    <input type="number" id="msid" name="msid">

                </div>
                <br>
            <label for="">NAME </label>
            <input type="text" placeholder="Enter your name" name="name" id="name"required display:inline-block  >
            <br>
        </div>
        <div>
            <br>
        </div>
        <div>
            <br>
            <label for="">CNIC</label>
            <input type="text" placeholder="Enter your CNIC" name="cnic"  id="cnic" required pattern="[0-9]{5}[0-9]{7}[0-9]{1}" title="Please enter the cnic no in the required format ex:4210165405091">
            <br>
            </div>
            <div>
                <br>
            <label for="">S/o D/o W/o</label>
            <input type="text" placeholder="yours father name" name="fathers_name" id="fathers_name">
            <br>
            </div>    
            <div>
                <br>
            <label for="">OCCUPATION</label>
            <input type="text" name="occupation" id="occupation" placeholder="your occupation" >
            <br>
            </div>
            <div>
                <br>
            <label for="">ADDRESS</label>
            <input type="text" name="address" id="address" ></input>
            <br>
            </div>
            <div>
                <br>
            <label for="">PHONE NO:</label>
            <input type="text" name="phone_no" id="phone_no" >
    
           
        </div>
        <div>
            <center>
                <h1>PLOT DETAILS</h1>
                </center>
        
            
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
        <br>
        <div>
            
        <label for="allotment_no">ALLOTMENT NO:</label>
        <input type="number" name="allotment_no" id="allotment_no" required>
        
        </div>
<div><center><h1>Billing details according to the date</h1></center>
    <center>
        @foreach($bills as $bill)
        <h2>{{ $bill->date}}</h2>
        <h2>Receipt #: {{ $bill->receipt_number}}</h2>
        <h2>Payment Method: {{ $bill->payment_method}}</h2>
        <h2>Bank Name: {{ $bill->bank_name}}</h2>
        <h2>Cheque Number: {{ $bill->check_number}}</h2>
        <h2>Cheque Date: {{ $bill->check_date}}</h2>
        <h2>Others: {{ $bill->others}}</h2>
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
                    <td><input type="number" name="admission_fee_amount" id="admission_fee_amount" value="{{ $bill->admission_fee_amount }}"></td>
                    <td><input type="number" name="admission_fee_received" id="admission_fee_received" value="{{ $bill->admission_fee_received }}"></td>
                    <td><input type="number" name="admission_fee_balance" id="admission_fee_balance" value="{{ $bill->admission_fee_balance }}"></td>

                </tr>
                </div>
                <div>
                <tr>
                    
                    <td>SHARE MONEY</td>
                    <td><input type="number" name="share_money_amount" id="share_money_amount" value="{{ $bill->share_money_amount }}"></td>
                    <td><input type="number" name="share_money_received" id="share_money_received" value="{{ $bill->share_money_received }}"></td>
                    <td><input type="number" name="share_money_balance" id="share_money_balance" value="{{ $bill->share_money_balance }}"></td>

                </tr>
                </div>
                <div>
                <tr>
                    <td>COST OF LAND</td>
                        <td><input type="number" name="cost_of_land_amount" id="cost_of_land_amount" value="{{ $bill->cost_of_land_amount }}"></td>
                        <td><input type="number" name="cost_of_land_received" id="cost_of_land_received" value="{{ $bill->cost_of_land_received }}"></td>
                        <td><input type="number" name="cost_of_land_balance" id="cost_of_land_balance" value="{{ $bill->cost_of_land_balance }}"></td>

                </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF CORNER</td>
                        <td><input type="number" name="cost_of_corner_amount" id="cost_of_corner_amount" value="{{ $bill->cost_of_corner_amount }}"></td>
                        <td><input type="number" name="cost_of_corner_received" id="cost_of_corner_received" value="{{ $bill->cost_of_corner_received }}"></td>
                        <td><input type="number" name="cost_of_corner_balance" id="cost_of_corner_balance" value="{{ $bill->cost_of_corner_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF ROAD FACING</td>
                        <td><input type="number" name="cost_of_road_facing_amount" id="cost_of_road_facing_amount" value="{{ $bill->cost_of_road_facing_amount }}"></td>
                        <td><input type="number" name="cost_of_road_facing_received" id="cost_of_road_facing_received" value="{{ $bill->cost_of_road_facing_received }}"></td>
                        <td><input type="number" name="cost_of_road_facing_balance" id="cost_of_road_facing_balance" value="{{ $bill->cost_of_road_facing_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF WEST OPEN</td>
                        <td><input type="number" name="cost_of_west_open_amount" id="cost_of_west_open_amount" value="{{ $bill->cost_of_west_open_amount }}"></td>
                        <td><input type="number" name="cost_of_west_open_received" id="cost_of_west_open_received" value="{{ $bill->cost_of_west_open_received }}"></td>
                        <td><input type="number" name="cost_of_west_open_balance" id="cost_of_west_open_balance" value="{{ $bill->cost_of_west_open_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF PARK FACING</td>
                        <td><input type="number" name="cost_of_park_facing_amount" id="cost_of_park_facing_amount" value="{{ $bill->cost_of_park_facing_amount }}"></td>
                        <td><input type="number" name="cost_of_park_facing_received" id="cost_of_park_facing_received" value="{{ $bill->cost_of_park_facing_received }}"></td>
                        <td><input type="number" name="cost_of_park_facing_balance" id="cost_of_park_facing_balance" value="{{ $bill->cost_of_park_facing_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                    <td>LEASE DOCUMENTATION</td>
                    <td><input type="number" name="lease_documentation_amount" id="lease_documentation_amount" value="{{ $bill->lease_documentation_amount }}"></td>
                    <td><input type="number" name="lease_documentation_received" id="lease_documentation_received" value="{{ $bill->lease_documentation_received }}"></td>
                    <td><input type="number" name="lease_documentation_balance" id="lease_documentation_balance" value="{{ $bill->lease_documentation_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF DEVELOPMENT</td>
                        <td><input type="number" name="cost_of_development_amount" id="cost_of_development_amount" value="{{ $bill->cost_of_development_amount }}"></td>
                        <td><input type="number" name="cost_of_development_received" id="cost_of_development_received" value="{{ $bill->cost_of_development_received }}"></td>
                        <td><input type="number" name="cost_of_development_balance" id="cost_of_development_balance" value="{{ $bill->cost_of_development_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF TRANSFER</td>
                        <td><input type="number" name="cost_of_transfer_amount" id="cost_of_transfer_amount" value="{{ $bill->cost_of_transfer_amount }}"></td>
                        <td><input type="number" name="cost_of_transfer_received" id="cost_of_transfer_received" value="{{ $bill->cost_of_transfer_received }}"></td>
                        <td><input type="number" name="cost_of_transfer_balance" id="cost_of_transfer_balance" value="{{ $bill->cost_of_transfer_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>FROM MR/MRS/MISS</td>
                        <td><input type="number" name="from" id="from" value="{{ $bill->from }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>ADJUSTED FROM:</td>
                        <td><input type="number" name="vide_account_no" id="vide_account_no" value="{{ $bill->vide_account_no }}"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>ADJUSTED AMOUNT:</td>
                        <td><input type="number" name="adjust_amount" id="adjust_amount" value="{{ $bill->adjust_amount }}"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>ESTABLISHMENT CHARGES / OFFICE EMPLOYEE /<br /> OFFICE MAINTENANCE CHARGES</td>
                        <td><input type="number" name="establishment_charges_amount" id="establishment_charges_amount" value="{{ $bill->establishment_charges_amount }}"></td>
                        <td><input type="number" name="establishment_charges_received" id="establishment_charges_received" value="{{ $bill->establishment_charges_received }}"></td>
                        <td><input type="number" name="establishment_charges_balance" id="establishment_charges_balance" value="{{ $bill->establishment_charges_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>MISCELLANEOUS</td>
                        <td><input type="number" name="miscellaneous_amount" id="miscellaneous_amount" value="{{ $bill->miscellaneous_amount }}"></td>
                        <td><input type="number" name="miscellaneous_received" id="miscellaneous_received" value="{{ $bill->miscellaneous_received }}"></td>
                        <td><input type="number" name="miscellaneous_balance" id="miscellaneous_balance" value="{{ $bill->miscellaneous_balance }}"></td>

                    </tr>
                </div>
                <div>
                    <tr>
                        <td>COST OF FORMS</td>
                        <td><input type="number" name="cost_of_forms_amount" id="cost_of_forms_amount" value="{{ $bill->cost_of_forms_amount }}"></td>
                        <td><input type="number" name="cost_of_forms_received" id="cost_of_forms_received" value="{{ $bill->cost_of_forms_received }}"></td>
                        <td><input type="number" name="cost_of_forms_balance" id="cost_of_forms_balance" value="{{ $bill->cost_of_forms_balance }}"></td>

                    </tr>
                </div>
                <div>
    
                    <tr>
                        <td>LEDGER ACCOUNT NO: <br></td>
                        <td><small>below column only refer <br> ledger a/c no</small><br>
                        <input type="number" name="ledger_account_no" id="ledger_account_no" value="{{ $bill->ledger_account_no }}"></td>

                    </tr>
                    <tr>
                        <td>PENALTY(IF ANY): <br></td>
                        <td>
                        <input type="number" name="penalty" id="penalty"  value="{{ $bill->penalty }}"></td>

                    </tr>
                </div>
            
            </tbody>
        </div>
    </table>
    @endforeach

    @endsection
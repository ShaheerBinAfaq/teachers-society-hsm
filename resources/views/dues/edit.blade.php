@extends('base')
@section('main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
{
    $("#internal_development_received").change(function()
    {
        $("#internal_development_balance").val($("#internal_development_amount").val() - $("#internal_development_received").val());

    });
    $("#society_lease_received").change(function()
    {
        $("#society_lease_balance").val($("#society_lease_amount").val() - $("#society_lease_received").val());

    });
    $("#cost_of_land_received").change(function()
    {
        $("#cost_of_land_balance").val($("#cost_of_land_amount").val() - $("#cost_of_land_received").val());

    });
    $("#maintenance_received").change(function()
    {
        $("#maintenance_balance").val($("#maintenance_amount").val() - $("#maintenance_received").val());

    });
});
    </script>
    
    <div><center><h1>MEMBER DUES</h1></center>
        <center>
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
                        <td>INTERNAL DEVELOPMENT</td>
                        <td><input type="number" name="internal_development_amount" id="internal_development_amount"></td>
                        <td><input type="number" name="internal_development_received" id="internal_development_received"></td>
                        <td><input type="text" name="internal_development_balance" id="internal_development_balance" disabled></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        
                        <td>SOCIETY LEASE</td>
                        <td><input type="number" name="society_lease_amount" id="society_lease_amount"></td>
                        <td><input type="number" name="society_lease_received" id="society_lease_received"></td>
                        <td><input type="number" name="society_lease_balance" id="society_lease_balance"disabled  ></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>COST OF LAND</td>
                            <td><input type="number" name="cost_of_land_amount" id="cost_of_land_amount"></td>
                            <td><input type="number" name="cost_of_land_received" id="cost_of_land_received"></td>
                            <td><input type="text" name="cost_of_land_balance" id="cost_of_land_balance"disabled></td>
                    </tr>
                    </div>
                    <div>
                        <tr>
                            <td>MAINTENANCE</td>
                            <td><input type="number" name="maintenance_amount" id="maintenance_amount"></td>
                            <td><input type="number" name="maintenance_received" id="maintenance_received"></td>
                            <td><input type="text" name="maintenance_balance" id="maintenance_balance"disabled></td>
                        </tr>
                    </div>
@endsection

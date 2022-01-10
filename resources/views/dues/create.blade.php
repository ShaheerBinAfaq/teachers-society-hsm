@extends('base')
@section('main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

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
    $('#btnpdf').click(function () {
      html2pdf(document.getElementById('receiptbody'));
    });

    const queryString = window.location.search;
    const mid = queryString.split('=')[1];
    $('#member_id').val(mid);
});
    </script>
    
    <div id="receiptbody"><center><h1>MEMBER DUES</h1></center>
        <center>
        <form method="post" action="{{ route('due.store') }}">
            <label for="member_id">Member:</label>
            <input type="text" id="member_id" name="member_id">
          @csrf
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
                        <td><input type="number" id="internal_development_amount" name="internal_development_amount"></td>
                        <td><input type="number" id="internal_development_received" name="internal_development_received"></td>
                        <td><input type="number" id="internal_development_balance" name="internal_development_balance" readonly></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        
                        <td>SOCIETY LEASE</td>
                        <td><input type="number" id="society_lease_amount" name="society_lease_amount"></td>
                        <td><input type="number" id="society_lease_received" name="society_lease_received"></td>
                        <td><input type="number" id="society_lease_balance" name="society_lease_balance" readonly ></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>COST OF LAND</td>
                            <td><input type="number" id="cost_of_land_amount" name="cost_of_land_amount"></td>
                            <td><input type="number" id="cost_of_land_received" name="cost_of_land_received"></td>
                            <td><input type="number" id="cost_of_land_balance" name="cost_of_land_balance" readonly></td>
                    </tr>
                    </div>
                    <div>
                        <tr>
                            <td>MAINTENANCE</td>
                            <td><input type="number" id="maintenance_amount" name="maintenance_amount"></td>
                            <td><input type="number" id="maintenance_received" name="maintenance_received"></td>
                            <td><input type="number" id="maintenance_balance" name="maintenance_balance" readonly></td>
                        </tr>
                    </div>
    </div>
</tbody>

</table>
        <button type="submit">Save</button>
        <button type="print invoice"id="btnpdf">Print</button>
</form>

@endsection

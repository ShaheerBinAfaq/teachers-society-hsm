<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLOTEE/TRANSFER</title>
</head>
<body>
<img src="teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;">

    <style>h1{text-align:center}</style>
    <h1>WELCOME TO THE TEACHER TRANSFER/ALLOTEE SECTION</h1>
    <form action="form.php">
        <label>OWNER NAME</label>
        <select name="allotee" id="allotee">
            <option value="">SELECT ALLOTEE</option>
            <option value="">SHAHEER</option>
            <option value="">HAMZA</option>
           

        </select>
        <br>
        <label for="date">DATE</label>
        <input type="date">
        <br>
        <label for="plot">PLOT NO:</label>
        <input type="text" placeholder="Enter plot no">
        <br>
        <label for="">TRANSFREE NAME</label>
        <select name="transfer" id="transfer">
            <option value="">TRANSFREE</option>
            <option value="">SHAHEER</option>
            <option value="">HAMZA</option>
        </select>
        <br>
        <input type="button" value="submit">

        
    </form>
    
</body>
</html>
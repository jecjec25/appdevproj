<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/barangay">
    <button type="sumbit">back</button>
    </form>
    <form action="/Infos" method ="post">
        <label>Name: </label>
    <input type="text" name="BarangayName" placeholder ="Barangay Name">    
    <input type="text" name = "barangayPopulation" placeholder ="Barangay Population">
    <!-- <input type="text" name="populationYear" placeholder ="Year"> -->
    <Select name="populationYear">
    <option>2020</option>
    <option>2023</option>
    </Select>
    <button type ="submit">save</button>
    </form>
     
       
</body>
</html>
<?php include('financesert.php')

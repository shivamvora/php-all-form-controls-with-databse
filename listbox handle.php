<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTBOX</title>
</head>
<body>
    <form action="listbox serverside.php" method="POST">
        <select name="location[]" multiple>
            <option value="Delhi">Delhi</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Ranchi">Ranchi</option>
            <option value="Mumbai">Mumbai</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
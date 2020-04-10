<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RETRIEVE ALL DATA FROM FORM</title>
</head>
<body>
            <form action="serverside full form data.php" method="post">
            
                NAME: <input type="text" name="name">   <br><br>
                ROLL: <input type="text" name="roll">   <br><br>
                Course:<br>
                <select name="course[]" multiple>
                <option value="PHP">PHP</option>
                <option value="Java">Java</option>
                <option value="HTML5">HTML5</option>
                <option value="CSS3">CSS3</option>
                <option value="Javascript">Javascript</option>
                <option value="Python">Python</option>
                <option value="Android">Android</option>
                <option value="Node js">Node js</option>
                <option value="Laravel">Laravel</option>
                </select> <br><br>

                    <input type="submit" value="SUBMIT">



            
            </form>    
</body>
</html>
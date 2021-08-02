<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer team</title>
</head>
<body>
<br>
    <form method = "get">
        Your name : <input type = "text" name = "age"> 
        <br>
        Your age : <input type = "text" name = "age">
        <br>
        <p>Are you a man or a woman ? </p>
        <input type="radio" id='man' name="gender" value="male">
            <label for='man'>Man</label>
        <input type="radio" id='woman' name="gender" value="female">
            <label for='man'>Woman</label>
        <input type='submit' name='submit' value='Greet me now !'>
    </form>
    <?php
    //echo $_REQUEST['age'];  
    $default = "Sorry you don't fit the criteria.";

    if(isset($_GET['age']) and isset($_GET['gender'])) {

        $age = $_GET['age'];
        $gender = $_GET['gender'];

        if (($gender == 'female' and $age >= 21 AND $age <= 40) == true) { 
        $default = "Welcome to the team !";
        } 
    }

    echo $default
    ?>
</body>
</html>
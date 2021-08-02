<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary</title>
</head>
<body>
    <form action="" method='get'>
        <input type='radio' id='man' name='gender' value='male'>
        <label for='man'>Man</label>
        <input type='radio' id='woman' name='gender' value='female'>
        <label for='woman'>Woman</label>
        <input type='submit' name='submit' value='submission'>
    </form>
    <?php 
    /*if(isset($_GET['gender'])) {
        $gender = $_GET['gender'];
        if ($gender == 'male') {
            echo 'Hello Sir!';
        } else {
            echo 'Hello Madam!';
        }
    }*/
    if (isset($_GET['gender'])) {

        $gender = $_GET['gender'];

        $hello = ($gender == 'male') ? 'Hello Sir!' : 'Hello Madam!';
    } 
    echo $hello;
    ?>
</body>
</html>
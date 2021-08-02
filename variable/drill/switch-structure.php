<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch-structure</title>
</head>
<body>
<form method = "get">
            Student's result : <input type = "text" name = "note"> 
            <input type='submit' name='submit' value='submission'>
    </form>
    <?php

    

if(isset($_GET['note'])) {
    $note = $_GET['note'];
    $note1 = $note <= 4;
    $note2 = ($note >= 5 AND $note <= 9);
    $note4 = ($note >= 11 AND $note <= 14);
    $note5 = ($note >= 15 AND $note <= 18);
    $note6 = ($note >= 19 AND $note == 20);

    switch ($note) {

        case $note1:
            echo "This work is really bad. What a dumb kid!";
            break;

        case $note2:
            echo "This is not sufficient. More studying is required.";
            break;

        case 10:
            echo "barely enough!";
            break;

        case $note4:
            echo "Not bad!";
            break;

        case $note5:
            echo "Bravo, bravissimo!";
            break;

        case $note6:
            echo "Too good to be true : confront the cheater!";
            break;
        
    } 
}
    // if(isset($_GET['note'])) {

    //     $note = $_GET['note'];

    //     if ($note <= 4) { 
    //         echo "This work is really bad. What a dumb kid!";
    //     } else if ($note >= 5 AND $note <= 9) {
    //         echo "This is not sufficient. More studying is required.";  
    //     } else if ($note == 10) {
    //         echo "barely enough!";  
    //     } else if ($note >= 11 AND $note <= 14) {
    //         echo "Not bad!";  
    //     } else if ($note >= 15 AND $note <= 18) {
    //         echo "Bravo, bravissimo!";  
    //     } else if ($note >= 19 AND $note == 20) {
    //         echo "Too good to be true : confront the cheater!";  
    //     }
    // }
    ?>
</body>
</html>
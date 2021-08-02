<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
</head>
<body>
    <?php 
    //$room_is_filthy = true;
    /*$possible_states = [
        0 => 'health hazard',
        1 => 'filthy',
        2 => 'dirty',
        3 => 'clean',
        4 => 'immaculate'
    ];
    $room_filthiness = $possible_states[2];
    if ($room_filthiness == $possible_states[0]) {
        echo "Yuk, Room is Disgusting! Let's clean it up !";
    } else if ($room_filthiness == $possible_states[1]) {
        echo "Yuk, Room is dirty : let's clean it up !";
    } else if ($room_filthiness == $possible_states[2]) {
        echo "Room is not clean enough ! Let's clean it up !";
    } elseif ($room_filthiness == $possible_states[3]) {
        echo "Room seems to be pretty clean !";
    } else {
        echo "<br>Nothing to do, room is neat.";
    }

    $now = date ('h:i:s');
    echo $now;
    if ($now >= ('05:00:00') AND $now <= ('09:00:00')) {
        echo "<br>Good morning !";
    } else if ($now >= ('09:01:00') AND $now <= ('12:00:00')) {
        echo "<br>Good day !";
    } else if ($now >= ('12:01:00') AND $now <= ('16:00:00')) {
        echo "<br>Good afternoon !";
    } elseif ($now >= ('12:01:00') AND $now <= ('16:00:00')) {
        echo "<br>Good evening !";
    } else {
        echo "<br>Good night !";
    }*/ ?>
    <br>
    <form method = "get">
        Age : <input type = "text" name = "age">
        <br>
        <p>Are you a man or a woman ? </p>
        <input type="radio" id='man' name="gender" value="male">
            <label for='man'>Man</label>
        <input type="radio" id='woman' name="gender" value="female">
            <label for='man'>Woman</label>
        <br>
        <p>Do you speak English ? </p>
        <input type="radio" id='yes' name="english" value="yes">
            <label for='yes'>Yes</label>
        <input type="radio" id='no' name="english" value="no">
            <label for='no'>No</label>
        <input type='submit' name='submit' value='Greet me now !'>
    </form>
    <?php
    //echo $_REQUEST['age'];  
    if(isset($_GET['age']) and isset($_GET['gender']) and isset($_GET['english'])) {

        $age = $_GET['age'];
        $gender = $_GET['gender'];
        $english = $_GET['english'];

        if($english == 'yes') {

            if ($gender == 'female') {
                
                if ($age < 12) {
                    echo '<br>Hello baby girl !';
                } else if ($age >= 12 AND $age < 18) {
                    echo '<br>Hello Miss Teen!';
                } else if ($age >= 18 AND $age < 115) {
                    echo '<br>Hi Madam !';
                } else {
                    echo '<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
                }
            } 
            else if ($gender == 'male') {
                if ($age < 12) {
                    echo '<br>Hello baby boy !';
                } else if ($age >= 12 AND $age < 18) {
                    echo '<br>Hello Mister Teen!';
                } else if ($age >= 18 AND $age < 115) {
                    echo '<br>Hi Sir !';
                } else {
                    echo '<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
                }
            }
        } else {
            if ($gender == 'female') {
                if ($age < 12) {
                    echo '<br>Aloha baby girl !';
                } else if ($age >= 12 AND $age < 18) {
                    echo '<br>Aloha Miss Teen!';
                } else if ($age >= 18 AND $age < 115) {
                    echo '<br>Aloha Madam !';
                } else {
                    echo '<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
                }
            } 
            else if ($gender == 'male') {
                if ($age < 12) {
                    echo '<br>Aloha baby boy !';
                } else if ($age >= 12 AND $age < 18) {
                    echo '<br>Aloha Mister Teen!';
                } else if ($age >= 18 AND $age < 115) {
                    echo '<br>Aloha Sir !';
                } else {
                    echo '<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
                }
            }
        }
    }

    ?>
</body>
</html>
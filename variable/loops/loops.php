<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body>
    <?php

//     $names= array('John', 'jeanne', 'Joan', 'émile');
//     var_dump($names);

//     foreach ($names as $key=> $value){
// 	$names[$key] = ucfirst($value);
// }
//     var_dump($names);
    
    $pronouns = array('I', 'You', 'He/She','We', 'You', 'They');

    foreach($pronouns as $pronouns) {
        
        if ($pronouns == 'He/She') { 
            echo "$pronouns codes <br>";
            continue;
            //break;
        }
        
        echo "$pronouns code <br>";
    }
    $i = 1;
    while($i <= 120) {
        echo "$i <br>";
        $i++;
    };
    echo "<br> Now with for : <br>";
    for($e = 1; $e <= 120; $e++){
        echo "$e <br>";
    };

    echo '<br>';

    $firtsname = [
        'Evelyne',
        'Marianne',
        'Maxime',
        'Laura',
        'Mathieu',
        'Martin',
    ];

    foreach($firtsname as $firtsname) {
        echo "$firtsname <br>";
    };

    /*$countries = [
        'Belgium',
        'France',
        'USA',
        'Canada',
        'Japan',
        'Germany',
        'Scotland',
        'Austria',
        'Finland',
        'Norway'
    ];

    echo "<pre>";
    echo "<br><select name='coutries id='country-select>
            <option value=''> -- Select a country -- </option>";

    foreach($countries as $countries) {
        echo "<option value=$countries> $countries </option>";
    };

    echo "</select>";
    echo "</pre>";*/

    $countries = [
        'BE'=>'Belgium',
        'FRA'=>'France',
        'USA'=>'United States of America',
        'CAN'=>'Canada',
        'JPN'=>'Japan',
        'DEU'=>'Germany',
        'GB-SCT'=>'Scotland',
        'AUT'=>'Austria',
        'FIN'=>'Finland',
        'NOR'=>'Norway'
    ];

    echo "<pre>";
    echo "<br><select name='coutries id='country-select>
            <option value=''> -- Select a country -- </option>";

    foreach($countries as $key => $value) {
        echo "<option value=$key> $value </option>";
    };

    echo "</select>";
    echo "</pre>";

    ?>


</body>
</html>
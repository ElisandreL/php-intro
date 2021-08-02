<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php 

    $family = ['Dominique', 'Arian', 'Iris', 'Ethan'];
    print_r($family);
    $recipe = ['Spaghetti', 'Lemon Curd', 'Amaretti', 'Couilles de Suisse'];
    print_r($recipe);
    $movie = ['Star Wars', 'Harry Potter', 'The Nightmare Before Christmas', 'The pianist'];
    echo '<br>';
    print_r($movie[2]);
    echo '<br>';
    var_dump($family);
    $family['me'] = 'Elisandre';
    echo '<br>';
    print_r($family);
    echo '<br>';
    $me = array(
        'firstname' => 'Elisandre',
        'lastname' => 'Laenens',
        'cat name' => 'Furby',
        'favourite_movies' => $movie,
        'mum_hobbies' => array('painting', 'cooking', 'complaining')
    );
    $me['hobbies'] = array('Gaming', 'Movies', 'Music');
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    $mum_hobbies = count($me['mum_hobbies']);
    echo $mum_hobbies;
    echo ' + ';
    $me_film = count($me['favourite_movies']);
    echo $me_film;
    echo ' = ';
    echo $mum_hobbies + $me_film;
    $me['hobbies'][] = 'taxidermy';
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    $me['lastname'] = 'Durand';
    echo '<pre>';
    print_r($me);
    echo '</pre>';

    $me2 = [
        'hobbies' => array('Gaming', 'Movies', 'Music')
    ];
    $soulmate = [
        'hobbies' => array('Gaming', 'Web Dev', 'Music', 'Sport')
    ];
    $possible_hobbies_via_intersection = array_intersect($me2['hobbies'], $soulmate['hobbies']);
    $possible_hobbies_via_merge = array_merge($me2['hobbies'], $soulmate['hobbies']);
    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    echo '<br>';
    print_r($possible_hobbies_via_merge);
    echo '</pre>';
    $web_development = [
        'frontend' => array(),
        'backend' => array(),
    ];
    $web_development['frontend'][] = 'xhtml';
    $web_development['backend'][] = 'Ruby on Rails';
    $web_development['frontend'][] = 'CSS';
    $web_development['backend'][] = 'Flash';
    $web_development['frontend'][] = 'JavaScript';
    array_splice($web_development['frontend'], 0, 1, 'html');
    array_splice($web_development['backend'], 1, 2);

    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

    ?>
</body>
</html>
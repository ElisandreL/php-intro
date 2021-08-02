<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions theory</title>
</head>
<body>
    <?php 
    
    /*$txt = "According to a researcher at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
    $txt_array = explode(" ", $txt);
    echo '<pre>';
    var_dump ($txt_array);
    echo '</pre>';

    foreach ($txt_array as $txt_array) {
        echo substr($txt_array, 0, 1);
        if(substr($txt_array, 1)){
        echo str_shuffle($txt_array) . " ";};
    };*/

    
    function capitalize(){
        $name= 'émile';
        return mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
    };
    echo capitalize() . "<br>";
    echo date("D d, M Y - g:i:s a");

    
    function add() {
        //$arr = [2, 'maman'];
        $arr = [2, 5];
        
        if (gettype($arr[0]) and gettype($arr[1]) == 'integer') {
          echo "<br>" . $arr[0] + $arr[1];  
        } else {
            echo "<br> Error: argument is the not a number.";
        };
    };

    echo add() . '<br>';

        $sentence = "In code we trust!";
        $sent_array = explode(" ", $sentence);
        foreach($sent_array as $value) {
        $first_letter = substr($value, 0, 1);
        echo mb_convert_case($first_letter, MB_CASE_UPPER, "UTF-8");
    };

    echo '<br>';
    $words = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
    foreach ($words as $words){
    echo str_replace("ae", "æ", $words) . '<br>';
    };

    echo'<br>';

    $words2 = ["cæcotrophie", "chænichthys","microsphæra", "sphærotheca"];
    foreach ($words2 as $words2){
    echo str_replace("æ", "ae", $words2) . '<br>';
    };

    function feedback($css_class = 'info', $msg = 'Please enter your email address.') {
        
        if ($css_class == 'info' or $css_class == 'error' or $css_class == 'warning') { 
            return '<div class="' . $css_class . '"> ' . $msg . "</div>";
        };
    };

    echo feedback();

//'Please enter your email address.'
//'Incorrect email address!'
//'Warning: Your email address is not complete.';

    
    if(isset($_POST["submit"])) { 

        function generate_word(){

            $words_until_5 = [ 
                'mood', 
                'ad',
                'goal',
                'poem',
                'map',
                'tea',
                'bath',
                'oven',
                'disk',
                'hat',
                ];

            $words_until_15 = [
                    'argument',
                    'quantity',
                    'judgment',
                    'difficulty',
                    'engineering',
                    'customer',
                    'bathroom',
                    'chocolate',
                    'teacher',
                    'impression'
                    ];
            $index = rand(0, 9);
            $index2 = rand(0, 9);
            return $words_until_5[$index] . '<br>' . $words_until_15[$index2];
        };
    
    };
    echo "<h2> Generate a new word </h2>";
    echo generate_word();
    echo "<form method = 'post'> <input type='submit' name='submit' value='Generate'> </form>";
    
    $capitalized_string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
    echo mb_convert_case($capitalized_string, MB_CASE_LOWER_SIMPLE, "UTF-8") . '<br>';

    function calculate_cone_volume($ray, $height) {
        return $ray * $ray * M_PI * $height * (1/3);
    };

    $ray = 3;
    $height = 4;

    echo 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' = ' . intval(calculate_cone_volume($ray, $height)) . ' cm<sup>3</sup><br />';

    ?>
</body>
</html>
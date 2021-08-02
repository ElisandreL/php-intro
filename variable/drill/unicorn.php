<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn are real</title>
</head>
<body>
    <form action='' method='post'>
        <p>Are you a human, a cat, or a unicorn ? </p>
        <input type='text' name='species'>
        <input type='submit' name='submit' value='submission'>
    </form>

    <?php
    
        $human = '<img src ="https://media.giphy.com/media/DlJqDfBkYxG5G/giphy.gif" alt="human"/>';
        $cat = '<img src ="https://media.giphy.com/media/Zx1ZEctOOvxK5VCwwE/giphy.gif" alt="cat"/>';
        $unicorn = '<img src ="https://media.giphy.com/media/mjo3HtlPnEuNq/giphy.gif" alt="unicorn"/>';
    
        /*if(isset($_POST['species'])) {
        $species = $_POST['species'];
        $gif = ($species == 'human') ? $human : (($species == 'cat') ? $cat : $unicorn);
        echo $gif;
        } */

        $gif = (isset($_POST['species'])) ? (($_POST['species'] == 'human') ? $human : (($_POST['species'] == 'cat') ? $cat : $unicorn)) : NULL;
        echo $gif;
    ?>
</body>
</html>
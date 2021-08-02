<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Note Generator</title>
</head>
<body>
    <form action='' method='post'> 
        <p>Name of the child :</p>
        <input type='text' name='name'>
        <p>Gender of the child : </p>
        <input type='radio' id='girl' name='gender' value='girl'>
        <label for='girl'> Girl </label>
        <input type='radio' id='boy' name='gender' value='boy'>
        <label for='boy'> Boy </label>
        <p> Name of the teacher : </p>
        <input type='text' name='teacher'>
        <p> Reason for the absence : </p>
        <input type='radio' id='ill' name='reason' value='jargon aphasia crisis'>
        <label for='ill'> jargon aphasia crisis </label>
        <br>
        <input type='radio' id='pet' name='reason' value='death of his favorite Phasmatoptera'>
        <label for='pet'> death of his favorite Phasmatoptera </label>
        <br>
        <input type='radio' id='raid' name='reason' value='guild raid in Icecrown Citadel'>
        <label for='raid'> guild raid in Icecrown Citadel </label>
        <br>
        <input type='radio' id='walk' name='reason' value='climate walk'>
        <label for='walk'> climate walk </label>
        <br>
        <input type='submit' name='submit' value='submission'>
    </form>

    <?php 
    $gender = (isset($_POST['gender'])) ? ((($_POST['gender']) == 'girl') ? "My daughter will be absent and won't be able to go to school today." : "My son will be absent and won't be able to go to school today.") : NULL;
    $reason = (isset($_POST['reason'])) ? ((($_POST['reason']) == 'jargon aphasia crisis') ? "I can't speak because of an unfortunate jargon aphasia crisis" : ((($_POST['reason']) == 'death of his favorite Phasmatoptera') ? "My poor kid is crying the death of his favorite Phasmatoptera. " : ((($_POST['reason']) == 'guild raid in Icecrown Citadel') ? 'The school hours are the same of an important raid in the Icecrown Citadel. This is the time to save Azeroth !' : 'My eco-conscious kid is participating to a climate walk in Brussels before going on a date at McDonald. Our planet deserves it !'))) : NULL;
    ?>

    <p> Dear Mr/Mrs <?php echo $_POST['teacher'] ?>, </p>
    <p> I ask you to excuse the absence of my child, <?php echo $_POST['name'] ?>. <?php echo $gender ?> </p>
    <p> <?php echo $reason ?> </p>
    <p> If planets are aligned, everything should be ok for his return tomorrow.</p>
    <p> Please accept, Mr, Mrs <?php echo $_POST['teacher'] ?>, the expression of my sincere feelings.</p>

</body>
</html>
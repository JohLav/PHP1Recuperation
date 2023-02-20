<?php
// if (isset($_POST['submit'])) {
//     $lastname = $_POST['lastname'];
//     $firstname = $_POST['firstname'];
//     $mail = $_POST['mail'];
//     $tel = $_POST['tel'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];
// };

// $subject = if(isset($_POST[]))
// {
//
// }
// $_POST['subject'];
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My test page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Votre message a bien été envoyé !</h1>
        <p>
            Merci
            <?php echo $_POST['firstname'];
            $_POST['lastname']; ?> de nous avoir contacté à propos 
            <?php echo $_POST['subject']; ?>. L'un de nos conseillers prendra contact avec vous dans les plus brefs
            délais pour traiter votre demande à l'adresse
            <?php echo $_POST['mail']; ?> ou par téléphone au
            <?php echo $_POST['tel']; ?>.
        </p>
        <p>
            Pour rappel, voici votre message : <?php echo $_POST['message']?>
        </p>
    </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avis formation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    </br>
    <form action="/thanks.php" method="POST">
        <h1>Avis formation Back-End</h1>
        <section>
            <h2>Contact information</h2>
            <p class="row">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname" id="lastname">
            </p>
            <p class="row">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname">
            </p>
            <p class="row">
                <label for="mail">E-mail :</label>
                <input type="mail" name="mail" id="mail">
            </p>
            <p class="row">
                <label for="tel">Téléphone :</label>
                <input type="tel" name="tel" id="tel">
            </p>
            <p class="row">
                <label for="subject">Sujet :</label>
                <select name="subject" id="subject">
                    <option value="">--Choisi un sujet--</option>
                    <option value="de la connexion Wi-Fi">Connexion Wi-Fi</option>
                    <option value="de la durée de formation">Durée de formation</option>
                    <option value="du contenu des quêtes">Contenu des quêtes</option>
                </select>
            </p>
            <p class="row">
                <label for="message">Message :</label>
                <textarea id="message" name="message"></textarea>
            </p>
            </br>
            <p class="button">
                <button type="submit" value="Send Request" />Envoyer l'avis</button>
            </p>
        </section>
    </form>

</body>

</html>
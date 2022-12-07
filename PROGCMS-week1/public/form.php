<?php
$email = "john(.doe)@exa//mple.com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email adress");
} else {
    echo("$email is not a valid email address");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basis formulier</title>
</head>
<body>
    <form method="post" action="../private/shared/forms/voorbeeld.php">
        <input type="text" name="user" placeholder="Naam" id="user" required>
        <input type="email" name="email" placeholder="Email" id="email" required>
        <input type="text" name="comment" placeholder="commentaar" id="comment" required>

        <input type="submit" value="Subscribe">
    </form>
</body>
</html>
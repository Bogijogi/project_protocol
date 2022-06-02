<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protokoły</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="get">
        <h2><p>Wybierz protokoł do opisania</p></h2>
        <select name="id" >
            <option value="" disabled="disabled" selected="true">--Select--</option>
            <option value="1">FTP</option>
            <option value="2">HTTP</option>
        </select><br><br>
        <input type="submit" id="button" value="Potwierdź">
    </form>
    <div id="result">
    <?php
        require_once './scripts/script.php';
    ?>
    </div>
</body>
</html>
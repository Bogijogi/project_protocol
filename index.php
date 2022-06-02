<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protokoły</title>
</head>
<body>
    <form action="scripts/script.php" method="get">
        <select name="protocols" >
            <option value="" disabled="disabled" selected="true">--Select--</option>
            <option value="ftp">FTP</option>
            <option value="http">HTTP</option>
        </select><br>
        <input type="button" id="button" value="Potwierdź">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8000/css/style.css">
    <title>Gestion Article</title>
</head>

<body>
    <ul style="display: flex;justify-content:center; ">
        <li style="list-style-type: none; padding:10px; margin:10px 10px 0 0 ; background-color:whitesmoke">
            <a href="http://localhost:8000/?page=1" style="text-decoration: none;">Liste
                1</a>
        </li>
        <li style="list-style-type: none; margin:10px 10px 0 0;  padding:10px; background-color:whitesmoke"> <a
                href="http://localhost:8000/?page=2" style="text-decoration: none;">Liste
                2</a>
        </li>
    </ul>
    <?php  include_once("../controller/controller.php") ;?>
</body>

</html>
<?php
// declaration variables names

$names = ["Hasna", "Rihab", "Laura", "Quentin", "MaximeL", "MaximeE", "Dylan", "Pierre", "Yannick", "Tony", "David", "Tristan"];

shuffle($names);




?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container blop">
        <div class="row">
            <?php for ($i = 0; $i < count($names) / 2; $i++) { ?>
                <div class="col-2 text-center">
                    <i class="material-icons">event_seat</i>
                    <p><?php echo $names[$i]; ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <?php for ($i = 6; $i < count($names); $i++) { ?>
                <div class="col-2 text-center">
                    <p><?php echo $names[$i]; ?></p>

                    <i class="icons material-icons">event_seat</i>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>
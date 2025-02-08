<?php
date_default_timezone_set('EST');

$CurrentHour = date('H');

if ($CurrentHour <= 10) {
    $Greeting = "Good Morning. Its a while before Noon.";
    } elseif ($CurrentHour <= 16) {
        $Greeting = "Good afternoon. were getting closer to Night.";
    } else {
        $Greeting = "Good Night. Its a while after Noon";
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1> <?php echo $Greeting ?> </h1>
</body>
</html>
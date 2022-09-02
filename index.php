<?php 
    require_once __DIR__ . '/Classes/Movie.php';

    $movieOne = new Movie("Fight Club", 1999, "David Fincher");
    $movieTwo = new Movie("The Big Lebowski", 1998, "Joel Coen & Ethan Coen");
    var_dump($movieOne);
    var_dump($movieTwo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>OOP 1</title>
</head>
<body>
    <h1>Movies:</h1>
    <ul>
        <ul>
            <h2><?php echo $movieOne->getTitle(); ?></h2>
            <li><?php echo $movieOne->getYear(); ?></li>
            <li><?php echo $movieOne->getDirector(); ?></li>
        </ul>
        <ul>
            <h2><?php echo $movieTwo->getTitle(); ?></h2>
            <li><?php echo $movieTwo->getYear(); ?></li>
            <li><?php echo $movieTwo->getDirector(); ?></li>
        </ul>
    </ul>
</body>
</html>
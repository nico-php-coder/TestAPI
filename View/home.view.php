<?php
// echo "<br>";
// echo "home.view.php";

// echo "<pre>";
// print_r($movieList);
// echo "</pre>";

// echo "hello";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.view.css">
    <title>Top Movies</title>
</head>
<body>
    <div class="main-view">
        <section class="top-movies">Top 10 section
            <div><?=$movieList[0]->m_title?></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </section>
    
        <section class="slider-movies">Slider
    
        </section>
    </div>
</body>
</html>
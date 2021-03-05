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
        <section class="top-movies">
            <!-- <div><?=$movieList[0]->m_title?></div> -->
            <!-- <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div>
            <div class="top-10"></div> -->
            <?php
                for($i = 0; $i < 10; ++$i) {
                    $test = '\'https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$movieList[$i]->m_image.'\'';
                    echo '<div class="top-10" style="background-image: url('.$test.');"></div>';
                }
            ?>
        </section>
    
        <section class="slider-movies">Slider
    
        </section>
    </div>
</body>
</html>
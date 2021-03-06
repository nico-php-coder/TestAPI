<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flickity.css">
    <link rel="stylesheet" href="home.view.css">
    <title>Top Movies</title>
</head>
<body>
    <div class="main-view">
        
        <section class="top-movies">
            <?php
                for($i = 0; $i < 10; ++$i) {
                    $imgURL = '\'https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$movieList[$i]->m_image.'\'';
                    $genreString = '';
                    
                    foreach($movieList[$i]->m_genreStrList as $value) {
                        $genreString .= $value.", ";
                    }
                    
                    $titleDiv = '<div class="title"><b>#'.($i+1).' '.$movieList[$i]->m_title.'</b></div>';
                    $genreDiv = '<div class="genre">'.$genreString.'</div>';
                    $descriptionDiv = '<div class="description">'.$movieList[$i]->m_description.'</div>';
                    echo '<div class="top-10" style="background-image: url('.$imgURL.');">'.$titleDiv.'<br>'.$genreDiv.'<br>'.$descriptionDiv.'</div>';
                }
            ?>
        </section>
    
        <section class="slider-movies"> 
            <!-- Flickity HTML init -->
            <div class="gallery js-flickity"
            data-flickity-options='{ "wrapAround": true }'>
                <?php
                    for($i = 10; $i < 40; ++$i) {
                        $imgURL = '\'https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$movieList[$i]->m_image.'\'';
                        $genreString = '';
                        
                        foreach($movieList[$i]->m_genreStrList as $value) {
                            $genreString .= $value.", ";
                        }
                        
                        $galleryDiv = '<div class="gallery-div"><b>#'.($i+1).' '.$movieList[$i]->m_title.'</b><br>'.$genreString.'</div>';
                        echo '<div class="gallery-cell" style="background-image: url('.$imgURL.');">'.$galleryDiv.'</div>';
                    }
                ?>
            </div>
        </section>

    </div>
    <script src="flickity.pkgd.min.js"></script>
</body>
</html>
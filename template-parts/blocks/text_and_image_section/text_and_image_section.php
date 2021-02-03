<?php

$header = get_field('header');
$intro = get_field('description');
$txtimgs = get_field('text_and_image');

?>
<div id="text-image-section-wrapper">

    <div class="container" id="header-intro-container">

        <div class="row" id="header-intro-box">

            <div class="col-md-12" id="header-intro-header-box">

                <h2> <?php echo $header; ?> </h2>

            </div>

            <div class="col-md-12" id="header-intro-intro-box">

                <p> <?php echo $intro; ?> </p>

            </div>

        </div>

    </div>

    <div class="container" id="text-image-container">

        <?php foreach($txtimgs as $txtimg ) : 
            
        $header = $txtimg['header'];
        $text = $txtimg['text'];
        $img = $txtimg['image']['sizes']['imgtxt-section-image-2'];
        $side = $txtimg['side'];
        $link = $txtimg['link'];
            
        ?>

        <?php if($side == 'right') : ?>

        <div class="row text-image-box" >

            <div class="col-md-6 text-image-text-box">

                <h2> <?php echo $header; ?> </h2>

                <p> <?php echo $text ?> </p>

            </div> 

            <div class="col-md-6 text-image-image-box">

                <img src="<?php echo $img; ?> " alt="">

            </div>

        </div>

        <?php else : ?>  

        <div class="row text-image-box">

            <div class="col-md-6 text-image-image-box"> 

                <img src="<?php echo $img; ?> " alt="">

            </div>

            <div class="col-md-6 text-image-text-box">

                <h2> <?php echo $header; ?> </h2>

                <p> <?php echo $text ?> </p>

            </div> 

        </div>

        <?php endif; ?>

        <?php endforeach; ?>

    </div>

</div>



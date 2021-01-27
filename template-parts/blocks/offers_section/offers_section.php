<?php

$header = get_field('header');
$offers = get_field('offers_boxes');
$button = get_field('read_more_button');
$button_link = get_field('read_more_button_link');

?>

<div class="row" id="offers-container">

    <div class="col-md-12" id="offers-header-container">

        <h2> <?php echo $header; ?> </h2>

    </div>

    <div class="col-md-12" id="offers-boxes-container">

        <?php foreach($offers as $offer) : 
         
         $image = $offer['image']['sizes']['offers-image-square'];
         $descr = $offer['description'];
         $linktxt = $offer['link_text'];
         $link = $offer['link'];
          
        ?>

        <div id="offers-boxes-box">

            <div id="offers-boxes-image-container">
                
                <img src="<?php echo $image; ?>" alt="" class="img-fluid">

            </div>

            <div id="offers-boxes-descr-container">
    
                <h3> <?php echo $descr; ?> </h3>

            </div>

            <div id="offers-boxes-readmore-container">

                <a href=" <?php echo $link; ?> "> <?php echo $linktxt; ?> </a>

            </div>
        
        </div>

        <?php endforeach; ?>

    </div>

    <div class="col-md-12" id="more-offers-button-box">

        <a href="">
            
            <button type="button" class="btn btn-dark" id="more-offers-button"> 
                
                <p> <?php echo $button; ?> </p>

            </button>

        </a>

    </div>

</div>
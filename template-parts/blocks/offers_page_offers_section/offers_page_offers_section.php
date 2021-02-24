
<?php 

$header = get_field('header');
$offers = get_field('offers_boxes');

?>

<div class="row" id="offers-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $header; ?> </h1>

    </div>

    <div class="col-md-12" id="offers-boxes-container">

        <?php foreach($offers as $offer) : 
         
         $image = $offer['image']['sizes']['offers-image-square-large'];
         $descr = $offer['description'];
         $linktxt = $offer['link_text'];
         $link = $offer['link'];
          
        ?>

        <div id="offers-boxes-box">

            <a href=" <?php echo $link; ?> ">
        
                <div id="offers-boxes-image-container">
                    
                    <img src="<?php echo $image; ?>" alt="" class="img-fluid">

                </div>

                <div id="offers-boxes-descr-container">
        
                    <h3> <?php echo $descr; ?> </h3>

                </div>

                <div id="offers-boxes-readmore-container">

                    <a href=" <?php echo $link; ?> "> <?php echo $linktxt; ?> </a>

                </div>
            
            </a>      
            
        </div>

        <?php endforeach; ?>

    </div>

</div>

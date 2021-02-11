
<?php

$main_header = get_field('main_header');
$header = get_field('header');
$descr = get_field('description');
$image = get_field('image')['sizes']['services-pages-main-section-image'];
$reference = get_field('reference');

?>

<div class="row" id="services-pages-main-section-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $main_header; ?> </h1>

    </div>

    <div class="col-md-12" id="text-image-container">

        <div class="col-md-4" id="reference-container">

             <p> <?php echo $reference; ?> </p>

        </div>

        <div class="col-md-4" id="header-description-container">

            <h2> <?php echo $header; ?> </h2>
            <p> <?php echo $descr; ?> </p>

        </div>

        <div class="col-md-4" id="image-container">

            <img src="<?php echo $image; ?> " alt="" class="img-fluid">

        </div>
    
    </div>

</div>
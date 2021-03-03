
<?php

$img = get_field('image')['sizes']['hero-image-narrow'];
$qte = get_field('quote');
$auth = get_field('author');
$lnk = get_field('link');

?>

<div class="row" id="quote-section-container">

    <div class="col-md-12" id="quote-section-container-image">
        <img src="<?php echo $img; ?>" alt="" class="img-fluid">
    </div>

    <div class="col-md-12" id="quote-section-quote-box">

        <div>

            <h3> <?php echo $qte; ?> </h3>
            <p> <?php echo $auth; ?> </p>
        
        </div>

    </div>

</div>




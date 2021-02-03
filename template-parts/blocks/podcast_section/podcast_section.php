<?php 

$header = get_field('header');
$descr = get_field('description');
$link = get_field('link');

?>

<div class="row" id="podcast-section-container">
        
    <div class="col-md-12"> 
        <h2> <?php echo $header; ?> </h2>
    </div>

    <div class="col-md-12">
        <p> <?php echo $descr; ?> </p>
    </div>

    <a class="col-md-12" id="podcast-button-box" href=" <?php echo $link; ?> ">

        <button type="button" class="btn btn-dark" id="podcast-button">
    
            <h4>Exitpodden</h4>
        
        </button>
    </a>
        
</div>

<?php

$main_header = get_field('main_header'); 
$refs = get_field('references');

?>

<div class="row" id="reference-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $main_header; ?> </h1>

    </div>

    <div class="col-md-12" id="reference-items-container">

        <?php foreach($refs as $ref) : 

        $img = $ref['image']['sizes']['offers-image'];
        $header = $ref['header'];
        $location = $ref['location'];
        $descr = $ref['description'];

        ?>

        <div class="col-md-4" id="reference-items-box">

            <img src=" <?php echo $img; ?> " alt="" class="img-fluid">

            <h2> <?php echo $header; ?> </h2>

            <p> <?php echo $location; ?> </p>

            <div>
                <p> <?php echo $descr; ?> </p>
            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>
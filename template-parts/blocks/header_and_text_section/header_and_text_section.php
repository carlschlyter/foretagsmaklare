
<?php

$main_header = get_field('main_header');
$sub_header = get_field('sub_header');
$descr = get_field('description');
$link = get_field('link');

?>

<div class="row" id="header-and-text-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $main_header; ?> </h1>

    </div>

    <div class="col-md-12" id="sub-header-box">

        <h3> <?php echo $sub_header; ?> </h3>

    </div>

    <div class="col-md-12" id="text-box">

        <p> <?php echo $descr; ?> </p>

    </div>

</div>
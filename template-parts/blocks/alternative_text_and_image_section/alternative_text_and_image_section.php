
<?php

$sections = get_field('sections');

?>

<div class="container" id="text-image-container">

    <?php foreach($sections as $section ) : 

    $header = $section['header'];
    $descr = $section['description'];
    $img = $section['image']['sizes']['network-image'];
    $side = $section['side'];
    $link = $section['link'];

    ?>

        <?php if($side == 'right') : ?>

            <div class="row text-image-box" >

                <div class="col-md-6 text-image-text-box">

                    <h2> <?php echo $header; ?> </h2>

                    <p> <?php echo $descr; ?> </p>

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

                    <p> <?php echo $descr; ?> </p>

                </div> 

            </div>

        <?php endif; ?>

    <?php endforeach; ?>

</div>

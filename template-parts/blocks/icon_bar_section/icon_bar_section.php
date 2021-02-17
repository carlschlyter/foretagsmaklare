<?php 

$header = get_field('header');
$icons = get_field('icons');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>

<div class="row" id="icon-bar-container">

    <div class="col-md-12" id="icon-header-container">
        <h2> <?php echo $header; ?> </h2>
    </div>
    
    <div class="col-md-12" id="icon-container">

        <?php foreach($icons as $icon) : 
            
        $pic = $icon['icon']['sizes']['icon-image-large'];    
        $label = $icon['label'];
        $link = $icon['link'];

        ?>

            <div id="icon-box">

                <div>
                    <div id="icon-img-box">
                        <img src="<?php echo $pic; ?>" alt="" class="img-fluid"> 
                    </div>
                </div>
                
                <div>
                    <h3><?php echo $label; ?></h3>
                </div>
                                                                                        
            </div>   

        <?php endforeach; ?>

    </div>

    <div class="col-md-12" id="readmore-button-box">

        <a href=" <?php echo $button_link; ?> ">
            
            <button type="button" class="btn btn-dark" id="readmore-button"> 
                
                <p> <?php echo $button_text; ?> </p>

            </button>

        </a>

    </div>

</div>




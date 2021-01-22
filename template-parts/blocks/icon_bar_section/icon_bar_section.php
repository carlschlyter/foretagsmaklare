<?php 

$header = get_field('header');
$icons = get_field('icons');

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

</div>




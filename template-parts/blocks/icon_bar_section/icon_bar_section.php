<?php 

$header = get_field('header');
$icons = get_field('icons');

?>

<div class="row" id="icon-bar-wrap">

    <div class="col-md-12" id="icon-bar-container">

        <div id='icon-header-container'>
            <h2> <?php echo $header; ?> </h2>
        </div>
        
        <div class="row" id="icon-container">

            <?php foreach($icons as $icon) : 
                
            $pic = $icon['icon']['sizes']['icon-image-large'];    
            $label = $icon['label'];
            $link = $icon['link'];

            ?>

                <div class="col-md-2" id="icon-box">

                    <div>
                        <img src="<?php echo $pic; ?>" alt="" class="img-fluid"> 

                        <div>
                            <h3><?php echo $label; ?></h3>
                        </div>

                    </div>
                                                                                          
                </div>   

            <?php endforeach; ?>

        </div>

    </div>

</div>



<?php

$web_refs = get_field('web_refs');
$copy_right = get_field('copy_right_notion');
$info = get_field('info');
$creds = get_field('exitpartner_cred');

?>

<div class="row" id="footer-section-container">

    <?php foreach($web_refs as $web_ref) : 
     
     $ref = $web_ref['web_ref'];
     $link = $web_ref['link'];
        
    ?>

    <div class="col-md-6" id="footer-section-web-refs">

        <a href="<?php echo $link; ?> ">
            <p> <?php echo $ref; ?> </p>   
        </a>

        <p> <?php echo $copy_right; ?> </p>
         
    </div>

    <?php endforeach; ?>    

    <div class="col-md-6" id="footer-section-info-cred">

        <p> <?php echo $info; ?> </p>

        <?php foreach($creds as $cred) : 
            
        $text = $cred['cred_text'];
        $logo = $cred['exit_partner_logo'];
            
        ?>

        <p> <?php echo $text; ?> </p> 
        <img src="<?php echo $logo; ?>" alt="">  

        <?php endforeach; ?>
        
    </div>

</div>
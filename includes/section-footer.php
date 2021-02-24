
<?php

$web_refs = get_field('web_refs');
$adress_parts = get_field('adress_parts');
$copy_right = get_field('copy_right_notion');
$info = get_field('info');
$creds = get_field('exitpartner_cred');

?>

<div class="row" id="footer-section-container">


    <div class="col-md-6" id="footer-section-web-refs">


        <?php foreach($adress_parts as $adress_part) : 
        
        $street = $adress_part['street_adress'];
        $post_code = $adress_part['post_code_and_city'];
        $phone = $adress_part['phone'];
        $email = $adress_part['email'];
            
        ?>

            <div id="adress-parts">

                <p> <?php echo $street; ?> </p>   
    
                <p> <?php echo $post_code; ?> </p>

                <p> <?php echo $phone; ?> </p>

                <a href=" mailto: <?php echo $email; ?> "> <p> <?php echo $email; ?> </p> </a>
                
            </div>

        <?php endforeach; ?> 

        <?php foreach($web_refs as $web_ref) : 
        
        $ref = $web_ref['web_ref'];
        $link = $web_ref['link'];
            
        ?>

            <div>

                <a href="<?php echo $link; ?> ">
                    <p> <?php echo $ref; ?> </p>   
                </a>

                <p> <?php echo $copy_right; ?> </p>

            </div>

        <?php endforeach; ?>  
        
    </div>

    <div class="col-md-6" id="footer-section-info-cred">

        <p> <?php echo $info; ?> </p>

        <?php foreach($creds as $cred) : 
            
        $text = $cred['cred_text'];
        $logo = $cred['exitpartner_logo']['sizes']['exitpartner-logo'];
            
        ?>

            <div class="exitpartner-logo-box">

                <p> <?php echo $text; ?> </p> 
                <img src="<?php echo $logo; ?>" alt="">  

            </div>
    
        <?php endforeach; ?>
        
    </div>

</div>
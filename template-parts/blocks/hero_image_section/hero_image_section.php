
<?php 

$image = get_field('hero_image')['sizes']['hero-image-max'];
$header = get_field('hero_header');
$buttons = get_field('hero_buttons');
$messages = get_field('hero_messages');
$quote = get_field('quote');

?>

<div id="hero-container">

    <div class="row" id="hero-box">

        <img src="<?php echo $image; ?>" alt="Hero Image" class="img-fluid">
        
        <div class="col-md-12" id="hero-header">

            <div>
                <h1> <?php echo $header; ?> </h1>
            </div>

        </div>

        <div class="col-md-12" id="button-container">
        
            <?php foreach($buttons as $button) : 
                
            $text = $button['button_text'];
            $link = $button['button_link'];
                
            ?>
               
                <div id="button-box">

                    <a href="">
                        
                        <button type="button" class="btn btn-dark" id="header-button"> 
                            
                            <p> <?php echo $text; ?> </p>

                        </button>

                    </a>

                </div>

            <?php endforeach; ?>
        
        </div>

        <div class="col-md-12" id="message-container">
        
            <?php foreach($messages as $message) : 
                
            $header = $message['message_header'];
            $text = $message['message_text'];
            $link = $message['message_link'];
                
            ?>

                <div id="message-box">

                    <h2> <?php echo $header; ?> </h2>
                    <p> <?php echo $text; ?> </p>

                </div>

            <?php endforeach; ?>
    
       </div>

       <div class="col-md-12" id="quote-container">

            <h2> <?php echo $quote ?> </h2>

       </div>

    </div>

</div>





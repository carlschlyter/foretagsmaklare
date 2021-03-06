
<?php 

$image = get_field('hero_image')['sizes']['hero-image-max'];
$header = get_field('hero_header');
$buttons = get_field('hero_buttons');
$messages = get_field('hero_messages');
$quote = get_field('quote');

?>

<div id="hero-container">

    <div class="row" id="hero-box">

        <div id="hero-subcontainer-video"  class="col-md-12">
            <video 
            id="alternative-hero"
            autoplay 
            muted 
            loop 
            preload="auto"
            >
                <source src="wp-content/themes/foretagsmaklare/media/hero-video-3b.mp4" type="video/mp4" >
                Din webbläsare stödjer inte videouppspelning.
            </video>
        </div>
   
        <div class="col-md-12" id="hero-subcontainer-img">
            <img src="<?php echo $image; ?>" alt="Hero Image" class="img-fluid">
        </div>
    
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
               
                <div class="button-box">

                    <a href=" <?php echo $link; ?> ">
                        
                        <button type="button" class="btn btn-dark header-button"> 
                            
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

                <div class="message-box">

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





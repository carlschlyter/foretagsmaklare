
<?php

$header = get_field('header');
$img = get_field('image')['sizes']['imgtxt-section-image-2'];
$side = get_field('side');
$questions = get_field('questions');

?>

<div class="container" id="faq-container">

    <div class="row" id="faq-row">

        <?php if($side == 'left') : ?>

            <div class="col-md-6 faq-box">   

                <h2> <?php echo $header; ?> </h2>

                <?php foreach($questions as $question) : 

                $quest = $question['question'];
                $answ = $question['answer'];
                    
                ?>

                <div class="accordion">

                    <div class="icon"></div>
                    <h4> <?php echo $quest; ?></h4>

                </div>
                 
                <div class="panel">
                        
                    <p> <?php echo $answ; ?> </p>
                
                </div>                

                <?php endforeach; ?>

            </div>

            <div class="col-md-6 faq-img-box" id="faq-img-box-right">

                <img src="<?php echo $img; ?> " alt="" class="img-fluid">

            </div>

        <?php else: ?>

            <div class="col-md-6 faq-img-box" id="faq-img-box-left">

                <img src="<?php echo $img; ?> " alt="" class="img-fluid">

            </div>

            <div class="col-md-6 faq-box">   

                <h2> <?php echo $header; ?> </h2>

                <?php foreach($questions as $question) : 

                $quest = $question['question'];
                $answ = $question['answer'];
                    
                ?>

                <div class="accordion">

                    <div class="icon"></div>
                    <h4> <?php echo $quest; ?></h4>

                </div>

                <div class="panel">

                    <p> <?php echo $answ; ?> </p>

                </div>            

                <?php endforeach; ?>

            </div>

        <?php endif; ?>


    </div>

</div>

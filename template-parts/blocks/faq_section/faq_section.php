
<?php

$header = get_field('header');
$img = get_field('image')['sizes']['imgtxt-section-image-2'];
$side = get_field('side');
$questions = get_field('questions');

?>

<div class="container" id="faq-container">

    <div class="row" id="faq-box">

        <?php if($side == 'left') : ?>

            <div class="col-md-6">   

                <h2> <?php echo $header; ?> </h2>

                <?php foreach($questions as $question) : 

                $quest = $question['question'];
                $answ = $question['answer'];
                    
                ?>

                <div onclick="openAnswer()">

                    <h4> <?php echo $quest; ?></h4>

                </div>
                 
                    <div class="answer">
                        <p class="answer-text"> <?php echo $answ; ?> </p>
                    </div>                

                <?php endforeach; ?>

            </div>

            <div class="col-md-6" id="img-box-right">

                <img src="<?php echo $img; ?> " alt="" class="img-fluid">

            </div>

        <?php else: ?>

            <div class="col-md-6" id="img-box-left">

                <img src="<?php echo $img; ?> " alt="" class="img-fluid">

            </div>

            <div class="col-md-6">   

                <h2> <?php echo $header; ?> </h2>

                <?php foreach($questions as $question) : 

                $quest = $question['question'];
                $answ = $question['answer'];
                    
                ?>

                <div onclick="openAnswer()">

                    <h4> <?php echo $quest; ?></h4>

                </div>

                    <div class="answer">
                        <p class="answer-text"> <?php echo $answ; ?> </p>
                    </div>            

                <?php endforeach; ?>

            </div>

        <?php endif; ?>


    </div>

</div>
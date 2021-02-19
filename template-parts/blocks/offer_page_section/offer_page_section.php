
<?php 

$main_header = get_field('main_header');
$descr = get_field('description');
$turnover = get_field('turnover_info');
$result = get_field('result_info');
$contact = get_field('contact_info');
$email = get_field('email');
$phone = get_field('phone');
$image = get_field('image')['sizes']['offer-page-image'];

?>

<div class="row" id="offer-page-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $main_header; ?> </h1>

    </div>

    <div class="row" id="offer-page-text-and-image-box">

        <div class="col-md-6" id="offer-page-text-box">

            <div>
                <div class="offer-page-text-parts" id="offer-page-descr">
                    <p> <?php echo $descr; ?> </p>
                </div>
                <div class="offer-page-text-parts" id="offer-page-data">
                    <p> <?php echo $turnover; ?> </p>
                    <p> <?php echo $result; ?> </p>
                </div>
                <div class="offer-page-text-parts">
                    <p> <?php echo $contact; ?> </p>
                    <a href=" mailto:<?php echo $email; ?> "> <?php echo $email; ?> </a>
                    <p> <?php echo $phone; ?> </p>
                </div>
                
            </div>
            
        </div>

        <div class="col-md-6" id="offer-page-image-box">

            <div>
    
                <img src=" <?php echo $image; ?> " alt="" class="img-fluid">
        
            </div>

        </div>

    </div>

</div>
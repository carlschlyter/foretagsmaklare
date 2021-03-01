
<?php 

$main_header = get_field('main_header');
$descr = get_field('description');
$turnover = get_field('turnover_info');
$result = get_field('result_info');
$contact = get_field('contact_info');
$email = get_field('email');
$phone = get_field('phone');
$image = get_field('image')['sizes']['offers-image-square'];
$link_text = get_field('next_offer_link_text');
$link = get_field('next_offer_link');

?>

<div class="row" id="offer-page-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $main_header; ?> </h1>

    </div>

    <div id="next-offer">
        <a href="<?php echo $link; ?> ">
           <div id="next-offer-content-box">
                <h4>Andra bolag till salu: >></h4>
                <h4> <?php echo $link_text; ?> </h4>
            </div>
        </a>
    </div>

    <div class="row" id="offer-page-text-and-image-box">

        <div class="col-md-6" id="offer-page-text-box">

            <div>
                <div id="offer-page-sub-header">
                    <h3> <?php echo $main_header; ?> </h3>
                </div>
                <div class="offer-page-text-parts" id="offer-page-descr">
                    <p> <?php echo $descr; ?> </p>
                </div>
                <div class="offer-page-text-parts" id="offer-page-data">
                    <ul>
                        <?php if($turnover) : ?>
                            <li> <?php echo $turnover; ?> </li>
                        <?php endif; ?>    
    
                        <?php if($result) : ?>
                            <li> <?php echo $result; ?> </li>                            
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="offer-page-text-parts" id="offer-page-contact-parts">
                    <p> Kontakta <?php echo $contact; ?> för mer information. </p>
                    <p>Email: <a href=" mailto:<?php echo $email; ?> "> <?php echo $email; ?> </a></p>
                    <p> Mobil: <?php echo $phone; ?> </p>
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
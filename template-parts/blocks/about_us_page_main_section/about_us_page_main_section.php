
<?php 

$main_header = get_field('main_header');
$contacts = get_field('contacts');

?>

<div class="row" id="contacts-page-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $main_header; ?> </h1>

    </div>

    <div class="col-md-12" id="contact-container">

        <?php foreach($contacts as $contact) : 
            
        $img = $contact['image']['sizes']['contact-image'];
        $name = $contact['contact_name'];
        $title = $contact['contact_title'];
        $email = $contact['email'];
        $phone = $contact['phone'];
        $link_text = $contact['link_text'];
        $link = $contact['link'];
        $descr = $contact['description'];
            
        ?>
            <div class="row" id="contact-sub-container">

                <div class="col-md-4" id="img-box">
                    
                    <img src=" <?php echo $img; ?> " alt="" class="img-fluid"> 
                
                </div>

                <div class="col-md-4" id="contact-info-box">

                    <div>

                        <h3> <?php echo $name; ?> </h3>
                        <p> <?php echo $title; ?> </p>
                        <p> <?php echo $email; ?> </p>
                        <p> <?php echo $phone; ?> </p>
                        <a href="<?php echo $link; ?> "> <?php echo $link_text; ?> </a>

                    </div>
                    
                </div>

                <div class="col-md-4" id="contact-description-box">

                    <p> <?php echo $descr; ?> </p>    

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>
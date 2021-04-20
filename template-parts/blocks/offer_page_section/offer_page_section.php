
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

                <div class="offer-page-text-parts" id="contact-box">

                    <h4>Vill du veta mer om det här objektet?</h4>  
                    <p>Fyll i uppgifterna nedan och skicka, så återkommer vi inom kort.</p>      

                    <div class="row" >
                        <div id="success_message_2" class="alert alert-success col-md-12" style="display:none"></div>
                    </div>

                    <form id="contact_2">

                        <div class="form-group row">

                            <div class="col-md-12" id="prospect">
                                <input type="text" name="Prospekt" value="<?php echo $main_header ?>" class="form-control" >
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input type="email" name="E-post" placeholder="E-post" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <input type="tel" name="Mobil" placeholder="Mobil" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-dark btn-block" id="send-query-button">Kontakta mig!</button>

                        </div>

                    </form>

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

<script>

(function($){

$('#contact_2').submit(function(event){

    event.preventDefault();

    let endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';

    let form = $('#contact_2').serialize();

    let formdata = new FormData;

    formdata.append('action', 'contact_2');
    formdata.append('contact_2', form);

    $.ajax(endpoint, {

        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,

        success: function(res){

            $('#contact_2').fadeOut(1000);

            $('#success_message_2').text('Tack för ditt meddelande').show();

            $('#contact_2').trigger('reset');

            $('#contact_2').fadeIn(5000);

            $('#success_message_2').fadeOut(3000);

        },

        error: function(err){

        }
    })

})

})(jQuery)

</script>
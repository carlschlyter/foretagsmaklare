
<?php

$header = get_field('header');
$intro = get_field('introduction');
$img = get_field('image');

?>

<div class="container" id="contact-container">

    <div class="row" >
        <div id="success_message" class="alert alert-success col-md-12" style="display:none"></div>
    </div>

    <div class="row">

        <div class="col-md-6" id="contact-message">

            <h2> <?php echo $header; ?> </h2>
            <h4> <?php echo $intro; ?> </h4>

        </div>
    
        <form class="col-md-6" id="contact">

            <div class="form-group row">

                <div class="col-md-6">
                    <input type="text" name="Förnamn" placeholder="Förnamn" class="form-control" required>
                </div>
                
                <div class="col-md-6">
                    <input type="text" name="Efternamn" placeholder="Efternamn" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <input type="email" name="E-post" placeholder="E-post" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <input type="tel" name="Mobil" placeholder="Mobil" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">

                <div-md-6>
                    <textarea name="Meddelande" placeholder="Meddelande" class="form-control" required></textarea>
                </div-md-6>

            </div>

            <div class="form-group row">

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block">Skicka din fråga</button>
                </div>

            </div>

        </form>

    </div>

</div>

<script>

(function($){

    $('#contact').submit(function(event){

        event.preventDefault();

        let endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';

        let form = $('#contact').serialize();

        let formdata = new FormData;

        formdata.append('action', 'contact');
        formdata.append('contact', form);

        $.ajax(endpoint, {

            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,

            success: function(res){

                $('#contact').fadeOut(1000);

                $('#success_message').text('Tack för ditt meddelande').show();

                $('#contact').trigger('reset');

                $('#contact').fadeIn(5000);

                $('#success_message').fadeOut(3000);

            },

            error: function(err){


            }
        })



    })

})(jQuery)


</script>
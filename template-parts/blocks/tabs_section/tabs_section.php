
<?php 

$main_header = get_field('main_header');
$sub_header_1 = get_field('sub_header_1');
$sub_header_2 = get_field('sub_header_2');
$sub_header_3 = get_field('sub_header_3');
$info_text_1 = get_field('info_text_1');
$info_text_2 = get_field('info_text_2');
$info_text_3 = get_field('info_text_3');

?>

<div class="row" id="tabs-container">

    <div>

        <div class="col-md-6" id="tabs-box">

            <div class="col-md-6" id="main-header-container">

                <h2> <?php echo $main_header; ?> </h2>

            </div>

            <div>

                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> <?php echo $sub_header_1; ?> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <?php echo $sub_header_2; ?> </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> <?php echo $sub_header_3; ?> </button>
                    </li>
                </ul>
                
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <h4> <?php echo $sub_header_1; ?> </h4>
                                <p> <?php echo $info_text_1 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                            <div class="col-md-6">
                                <h4> <?php echo $sub_header_2; ?> </h4>
                                <p> <?php echo $info_text_2 ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                            <div class="col-md-6">
                                <h4> <?php echo $sub_header_3; ?> </h4>
                                <p> <?php echo $info_text_3 ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
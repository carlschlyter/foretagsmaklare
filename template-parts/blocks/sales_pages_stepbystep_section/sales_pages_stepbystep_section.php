
<?php

$main_header = get_field('main_header');
$sub_header = get_field('sub_header');
$steps = get_field('steps');

?>

<div class="row" id="sales-pages-step-by-step-container">

    <div class="col-md-12" id="header-box">

        <h1> <?php echo $main_header; ?> </h1>

    </div>

    <div class="col-md-12" id="sub-header-box">

        <h2> <?php echo $sub_header; ?> </h2>

    </div>

    <div class="col-md-12" id="step-by-step-box">

        <?php foreach($steps as $step) : 
            
        $img = $step['image']['sizes']['icon-image'];
        $header = $step['header'];
        $descr = $step['description'];
        $list = $step['list'];    
            
        ?>

            <div id="step-by-step-sub-box">

                <div class="col-md-1" id="step-by-step-icon-box">

                    <img src="<?php echo $img; ?>" alt="">

                </div>

                <div class="col-md-11 step-by-step-header-descr-box">

                    <div class="col-md-11" id="step-by-step-header-box">

                        <h3> <?php echo $header; ?> </h3>

                    </div>

                    <div class="col-md-11" id="step-by-step-descr-box">

                        <p> <?php echo $descr; ?> </p>

                    </div>

                    <ul class="col-md-6" id="step-by-step-list-box">

                        <?php foreach($list as $list_item) : 
                        
                        $item = $list_item['list_item'];

                        ?>

                            <li> <?php echo $item; ?> </li>    
                        
                        <?php endforeach; ?>

                    </ul>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

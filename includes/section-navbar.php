
<div class="container-fluid" id="nav-wrap">
        
    <nav class="row navbar">

        <input type="checkbox" class="toggler">

        <div class="hamburger"><div></div></div>

            <div id="nav-container">

                <?php 
                    wp_nav_menu(

                        array(
                            'theme_location' => 'top-menu',
                            'menu-class' => 'top-bar'               
                        )

                    );
                ?>
                
            </div>

    </nav>

</div>
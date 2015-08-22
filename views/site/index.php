<div class="page-content">

    <!-- BEGIN PROJECT SECTION -->
    <section id="project">
        <div class="page-slider">
            <div class="fullwidthbanner-container slider">
                <div id="slider1" class="slider-img">
                    <div class="img"><img src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/bg/pag_02/slider1.jpg" alt="1"></div>
                    <div class="img"><img src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/bg/pag_02/slider2.jpg" alt="2"></div>
                </div>
                <div class="slider-button">
                    <div class="left col-md-6"><a style="display: none;" href="javascript:void(0);"><i class="fa fa-angle-left fa-3x"></i></a></div> 
                    <div class="right col-md-6"><a href="javascript:void(0);"><i class="fa fa-angle-right fa-3x"></i></a></div>
                </div>    
            </div>            
        </div>
    </section>
    <!-- END PROJECT SECTION -->

    <!-- BEGIN OFFICES SECTION -->
    <section id="offices">
        <?= $this->render('_offices'); ?>
    </section>
    <!-- END OFFICES SECTION -->

    <!-- BEGIN LOCATION SECTION -->
    <section id="location">
        <?= $this->render('_location'); ?>
    </section>
    <!-- END LOCATION SECTION -->

    <!-- BEGIN VIDEO SECTION -->
    <section id="video">
        <?php $this->render('_video'); ?>
    </section>
    <!-- END VIDEO SECTION -->

    <!-- BEGIN CONTACT SECTION -->
    <section id="contact">
        <?= $this->render('_contact'); ?>
    </section>
    <!-- END CONTACT SECTION -->

</div>
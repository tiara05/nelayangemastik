    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>/assets/Market/img/dasar.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: black;">Diskon</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo base_url('index.php/Marketplace'); ?>" style="color: black;">Home</a>
                            <span style="color: black;">Diskon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <?php foreach($promo as $b) { ?>
                <div class="col-sm-6" style="margin-bottom: 20px;">
                          <div class="card" >
                            <div class="card-body">
                                <img class="card-img-top" src="<?php echo base_url();?>/assets/Market/img/promo.png" alt="Card image" style="width: 30%; float: left; padding-right: 15px;">
                              <h4 class="card-title" style="font-weight: bold;"><?php echo ''.$b->namapromo.''?></h4>
                              <p class="card-text"><?php echo ''.$b->detailpromo.''?></p>
                              <a href="#" class="btn btn-outline-info" style="float: right;">Klaim</a>
                            </div>
                          </div>
                </div>
            <?php }?>
            </div>
            </div>
                
        </div>
    </section>
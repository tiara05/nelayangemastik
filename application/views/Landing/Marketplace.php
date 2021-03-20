    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#tombol").click(function(){
            $("#box2").fadeIn();
            $("#tombol").hide();
          });
        });
        $(document).ready(function(){
          $("#palinglaku").click(function(){
            $("#box3").fadeIn();
            $("#box1").hide();
            $("#box2").hide();
            $("#box4").hide();
            $("#tombol").hide();
            $("#BOX").hide();
          });
        });
        $(document).ready(function(){
          $("#diskon").click(function(){
            $("#box4").fadeIn();
            $("#box1").hide();
            $("#box2").hide();
            $("#box3").hide();
            $("#tombol").hide();
            $("#BOX").hide();
          });
        });
        $(document).ready(function(){
          $("#all").click(function(){
            $("#box3").hide();
            $("#box1").fadeIn();
            $("#box2").fadeIn();
            $("#box4").hide();
            $("#tombol").hide();
          });
        });
        $(document).ready(function(){
          $("#laut").click(function(){
            $("#ikanlaut").fadeIn();
            $("#ikantawar").hide();
            $("#olahankaleng").hide();
            $("#olahankerupuk").hide();
            $("#BOX").show(1000);
          });
        });
        $(document).ready(function(){
          $("#tawar").click(function(){
            $("#ikanlaut").hide();
            $("#ikantawar").fadeIn();
            $("#olahankaleng").hide();
            $("#olahankerupuk").hide();
            $('#BOX').show(1000);
          });
        });
        $(document).ready(function(){
          $("#kaleng").click(function(){
            $("#ikanlaut").hide();
            $("#ikantawar").hide();
            $("#olahankaleng").fadeIn();
            $("#olahankerupuk").hide();
            $("#BOX").show(1000);
          });
        });
        $(document).ready(function(){
          $("#kerupuk").click(function(){
            $("#ikanlaut").hide();
            $("#ikantawar").hide();
            $("#olahankaleng").hide();
            $("#olahankerupuk").fadeIn();
            $("#BOX").show(1000);
          });
        });

    </script>
    <style type="text/css">
        
    
    </style>
        
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo base_url();?>/assets/Market/img/c1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url();?>/assets/Market/img/c2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url();?>/assets/Market/img/cc3.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
    <!-- Hero Section End -->

    

    <!-- Featured Section Begin -->
    <section class="featured spad" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Featured Product</h2>
                        </div>
                    
                    <div class="featured__controls">
                        <ul>
                            <li class="activee" data-filter=".all" id="all">All</li>
                            <li data-filter=".oranges" id="palinglaku">Paling Laku</li>
                            <li data-filter=".fresh-meat" id="diskon">Promo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filterr" id="box1" >
                <?php foreach($barang as $b) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix all">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                            <ul class="featured__item__pic__hover">
                                <form action="<?php echo base_url('index.php/transaksi/cari_buku') ?>" method="post">
                                    
                                </form>
                            </ul>
                        </div>
                        
                        <div class="featured__item__text">
                            <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>

                            <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                        </div>
                    </div>

                </div>

                <?php } ?>
            </div>
            <div class="row featured__filterr" id="BOX" style="display:none;">
                <?php foreach($barang as $b) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                            
                        </div>
                        
                        <div class="featured__item__text">
                            <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>
                            <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                        </div>
                    </div>

                </div>

                <?php } ?>
            </div>
            <center><button id='tombol' class="btn btn-success btn-sm" >SELENGKAPNYA</button></center>

            <div class="row featured__filterr" id="box2" style="display:none;">
                <?php foreach($barang2 as $b) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                            
                        </div>
                        
                        <div class="featured__item__text">
                            <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>
                            <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                        </div>
                    </div>

                </div>

                <?php } ?>
            </div>

            <div class="row featured__filter" style="display:none;" id="box3">
                <?php foreach($barang3 as $b) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges" >
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                            
                        </div>
                        
                        <div class="featured__item__text">
                            <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>
                            <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>

            <div class="row featured__filter" style="display:none;" id="box4">
                <?php foreach($barang4 as $b) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat" >
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                            
                        </div>
                        
                        <div class="featured__item__text">
                            <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>
                            <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>

    </section>
    <!-- Featured Section End -->
    

    <!-- Banner Begin -->
    <div class="banner" id='box'>
        <div class="container">
            <img src="<?php echo base_url();?>/assets/Market/img/bg2.png" style="width: 100%" >

        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="latest-product__text">
                    <h4>Kategori</h4>
                    <div class="featured__controlss">
                        <ul>
                            <li class="activee" data-filter=".laut" style="margin-bottom: 15px;" id='laut'>Air Laut</li><br>
                            <li data-filter=".tawar" style="margin-bottom: 15px;" id='tawar'>Air Tawar</li><br>
                            <li data-filter=".kaleng" style="margin-bottom: 15px;" id="kaleng">Olahan Kaleng</li><br>
                            <li data-filter=".kerupuk" style="margin-bottom: 15px;" id="kerupuk">Olahan Kerupuk</li><br>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="row featured__filter" id="ikanlaut" >
                            <?php foreach($barangg1 as $b) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mix laut">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                                        <ul class="featured__item__pic__hover">
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="featured__item__text">
                                        <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>
                                        <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row featured__filter" id="ikantawar" style="display:none;">
                            <?php foreach($barangg2 as $b) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mix tawar">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                                        <ul class="featured__item__pic__hover">
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="featured__item__text">
                                        <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>
                                        <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row featured__filter" id="olahankaleng" style="display:none;">
                            <?php foreach($barangg3 as $b) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mix kaleng">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                                        <ul class="featured__item__pic__hover">
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="featured__item__text">
                                        <h6><a href=""><?php echo ''.$b->namabarang.''?></a></h6>
                                        <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row featured__filterr" id="olahankerupuk" style="display:none;">
                            <?php foreach($barangg4 as $b) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mix kerupuk">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url('assets/Admin/fotoikan/'.$b->fotoikan.'');?>">
                                        <ul class="featured__item__pic__hover">
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="featured__item__text">
                                        <h6><a href="<?php echo base_url('index.php/detail/get_detil_barang_by_id/'.$b->id_barang.'');?>"><?php echo ''.$b->namabarang.''?></a></h6>
                                        <h5><?php echo 'Rp '.$b->harga.',-'?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



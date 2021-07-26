   <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>/assets/Market/img/dasar.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: black;">Detail Produk</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo base_url('index.php/Marketplace'); ?>" style="color: black;">Home</a>
                            <span style="color: black;">Detail Produk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <?php
            $notif = $this->session->flashdata('notif');
            if($notif != NULL){
                echo '
                    <div class="alert alert-danger">'.$notif.'</div>
                ';
            }
            ?>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <?php foreach ($detail_barang as $detail) :?>
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="<?php echo base_url('assets/Admin/fotoikan/'.$detail->fotoikan.'')?>" alt="" id="data_foto">
                        </div>
                        <?php endforeach; ?>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <?php foreach ($detail_barang as $detail) :?>
                    <div class="product__details__text">
                        <h3><?php echo $detail->namabarang ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product__details__price">Rp <?php echo $detail->harga ?>;</div>
                        <p><?php echo $detail->Deskripsi ?></p>
                        
                        <form action="<?php echo base_url('index.php/detail/favorit') ?>" method="post">
                            <input type="hidden" class="form-control input-lg" placeholder="NAMA BUKU" name="id_barang" value="<?php echo $detail->id_barang ?>" required>
                            
                            <input type="submit" class="btn btn-outline-info btn-lg btn-block" name="submit" value="FAVORIT"> 
                                
                        </form>
                        <br>

                        <form action="<?php echo base_url('index.php/detail/barang') ?>" method="post">
                            <input type="hidden" class="form-control input-lg" placeholder="NAMA BUKU" name="id_barang" value="<?php echo $detail->id_barang ?>" required>
                               
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="ADD TO CARD">
                                
                        </form>
                        <br>
                        
                        <form action="<?php echo base_url('index.php/detail/preorder') ?>" method="post">
                            <input type="hidden" class="form-control input-lg" placeholder="NAMA BUKU" name="id_barang" value="<?php echo $detail->id_barang ?>" required>
                               
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="PREORDER">
                                
                        </form>
                        
                        
                        <ul>
                            <li><b>Stok</b> <span><?php echo $detail->stok ?></span></li>
                            <li><b>Pengiriman</b> <span>01 Hari. <samp>Pakai Styrofoam</samp></span></li>
                            <li><b>Berat</b> <span>1 kg</span></li>
                            <li><b>Nelayan</b>
                                <span><?php echo $detail->namanelayan ?></span>
                            </li>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            
                            <div class="tab-pane active" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    
                        <center>
                        <div class="col-sm-8" style="margin-bottom: 20px; ">
                          <div class="card" >
                            
                            <div class="card-body">
                                <img class="card-img-top" src="<?php echo base_url();?>/assets/img/team/team-1.jpg" alt="Card image" style="width: 20%; float: left; padding-right: 15px;">
                              <h4 class="card-title" style="font-weight: bold;">Susanto</h4>
                              <p class="card-text">Ikan yang dijual sangat segar dan fresh. Puas sekali dengan pelayanan di NelayanKu</p>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right; "></i>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right;"></i>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right;"></i>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right;"></i>
                            </div>
                          </div>
                        </div>
                        </center>

                        <center>
                        <div class="col-sm-8" style="margin-bottom: 20px; ">
                          <div class="card" >
                            
                            <div class="card-body">
                                <img class="card-img-top" src="<?php echo base_url();?>/assets/img/team/team-2.jpg" alt="Card image" style="width: 20%; float: left; padding-right: 15px;">
                              <h4 class="card-title" style="font-weight: bold;">Soimah</h4>
                              <p class="card-text">Pengiriman ikan sangat cepat dan masih fresh juga ikan nya. Pengemasan sangat bagus.</p>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right; "></i>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right;"></i>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right;"></i>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right;"></i>
                                <i class="fa fa-heart" aria-hidden="true" style="color: red; float: right;"></i>
                            </div>
                          </div>
                        </div>
                        </center>
                        
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
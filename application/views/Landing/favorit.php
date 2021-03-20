    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>/assets/Market/img/dasar.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: black;">Favorit</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo base_url('index.php/Marketplace'); ?>" style="color: black;">Home</a>
                            <span style="color: black;">Favorit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form action="<?php echo base_url('index.php/detail/barang') ?>" method="post">
                                <?php
                                $no = 1;
                                foreach ($favorit as $b) {
                                    echo '
                                        <tr>
                                            <td style="float: left;">'.$b->namabarang.'</td>
                                            <td>Rp '.$b->harga.'</td>
                                            <td>
                                                <input type="hidden" class="form-control input-lg" placeholder="NAMA BUKU" name="id_barang" value="'.$b->id_barang.'?>" required>
                            
                                                <input type="submit" class="btn btn-outline-info " name="submit" value="ADD TO CART">

                                                
                                            </td>
                                            
                                        </tr>
                                    ';
                                    $no++;
                                }
                            ?>
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>
    </section>


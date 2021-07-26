    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<SB-Mid-client-a0-fFzde0ENByRsG>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#transfer").click(function(){
            $("#bank").fadeIn();
            $("#bank1").fadeIn();
          });
        });
    </script>
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>/assets/Market/img/dasar.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: black;">Pembayaran</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo base_url('index.php/Marketplace'); ?>" style="color: black;">Home</a>
                            <span style="color: black;">Pembayaran</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="shoping-cart spad">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('index.php/checkout/bayar'); ?>" method="post">
                       
                    <strong>Alamat Pengiriman</strong>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><strong><?php echo $this->session->userdata('username'); ?></strong><br>081332496225</p>
                        </div>
                        <div class="col-lg-6">
                            <p>alamat</p>
                        </div>
                    </div>
                    <hr>
                     <div class="shoping__cart__table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Products</th>
                                                    <th></th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                if($cart != NULL){
                                                foreach ($cart as $b) {
                                                    echo '
                                                        <tr>
                                                            <input type="hidden" name="id_barang[]" value="'.$b->id_barang.'">
                                                            <td><img src="'.base_url().'assets/Admin/fotoikan/'.$b->fotoikan.'" width="120px" height="90px" /></td>
                                                            <td id="namabarang" >'.$b->namabarang.'</td>
                                                            <td id="harga">Rp '.$b->harga.'</td>
                                                            <td>
                                                               <input type="number" name="jumlah[]" class="form-control" onchange="hitung_subtotal('.$b->id_cart.','.$b->harga.',this.value,'.$b->id_barang.')" value="'.$b->jumlah.'"> 
                                                            </td>
                                                            <td id="total"><span id="subtot_'.$b->id_cart.'">Rp '.$b->harga*$b->jumlah.'</span></td>
                                                            
                                                        </tr>
                                                    ';
                                                    $no++;
                                                }} else {
                                                        echo '
                                                            <tr>
                                                                <td colspan="8">
                                                                    Keranjang belanja kosong.
                                                                </td>
                                                            </tr>
                                                        ';
                                                    }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                    
                    <div class="row">
                        <div class="col-lg-5">
                            <strong>Ekspedisi Pengiriman : </strong>
                        </div>
                        <div class="col-lg-7">
                            <strong>Sicepat Reguler</strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                                <div class="col-lg-12">
                                    <strong>Metode Pembayaran</strong>
                                    <br><br>
                                    <button type="button" class="btn btn-outline-secondary" id="transfer">Transfer Bank</button>
                                    <button type="button" class="btn btn-outline-info">COD (Bayar Di Tempat)</button>
                                </div>
                                <div class="col-lg-2" id="bank1" style="display:none;">
                                     <br><br>
                                    <strong>Pilih Bank</strong>
                                </div>
                                <div class="col-lg-4" id="bank" style="display:none;">
                                    <br><br>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Bank BCA">
                                      <img src="<?php echo base_url();?>/assets/img/bca.png">
                                      <label class="form-check-label" for="flexRadioDefault1">
                                        Bank BCA
                                      </label>
                                    </div>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Bank Mandiri">
                                        <img src="<?php echo base_url();?>/assets/img/mandiri.png">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Bank Mandiri
                                        </label>
                                    </div>
                                    <br>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Bank BNI">
                                       <img src="<?php echo base_url();?>/assets/img/bni.png">
                                      <label class="form-check-label" for="flexRadioDefault3">
                                        Bank BNI
                                      </label>
                                    </div>
                                    <br>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="Bank BRI">
                                       <img src="<?php echo base_url();?>/assets/img/bri.png">
                                      <label class="form-check-label" for="flexRadioDefault4">
                                        Bank BRI
                                      </label>
                                    </div>
                                </div>
                    </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        if($cart_transaksi != NULL)
                                        {
                                            echo'
                                                    <div class="shoping__checkout" style="background-color: white;">
                                                        <center><h4 style="font-weight: bold;">Total Pembayaran</h4></center>
                                                        <br>
                                                        
                                                                        <ul>
                                                                            <li>Total <span id="total_belanja" style="font-size: 30px;"></span><span style="font-size: 30px;">Rp </span></li>
                                                                            
                                                                        </ul>
                                                        
                                                        

                                                    </div>
                                                    ';
                                                }
                                            ?>
                                </div>
                                <input type="hidden" name="nama_pembeli" value="<?php echo $this->session->userdata('username'); ?>" placeholder="NAMA PEMBELI" class="form-control input-lg" required>
                            </div>
                        
                    
                    <input type="submit" name="submit" value="PESAN" class="btn btn-lg btn-block btn-primary" >
                    </form>
                </div>
            </div>
        </div>
    </section>

<script type="text/javascript">
    $.getJSON("<?php echo base_url('index.php/cart/get_total_belanja') ?>", function(data){
        $("#total_belanja").text(data.total);
    });

    function prepare_hapus_cart(id)
    {
        $("#hapus_id").val(id);
    }

    function hitung_subtotal(id,harga,jumlah,id_barang)
    {
        var price;
        price = harga*jumlah;
        $("#subtot_"+id).text(price);
        //update qty ke tabel cart
        $.post("<?php echo base_url('index.php/cart/ubah_jumlah_cart') ?>",
        {
            id_cart: id,
            id_barang: id_barang,
            jumlah: jumlah
        }, function(data, status){
            console.log(data);
            if(data == '0'){
                alert("Stok buku tidak mencukupi!");
            }
        });
        //mengganti total belanja di cart
        $.getJSON("<?php echo base_url('index.php/cart/get_total_belanja') ?>", function(data){
            $("#total_belanja").text(data.total);
        });
    }
</script>

    

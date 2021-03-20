    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="<SB-Mid-client-a0-fFzde0ENByRsG>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>/assets/Market/img/dasar.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: black;">Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo base_url('index.php/Marketplace'); ?>" style="color: black;">Home</a>
                            <span style="color: black;">Shopping Cart</span>
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
                    <form action="<?php echo base_url('index.php/cart/bayar'); ?>" method="post">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
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
                                            <td id="namabarang" style="float: left;">'.$b->namabarang.'</td>
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
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo base_url('index.php/Marketplace')?>" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        
                    </div>
                </div>

                <div class="col-lg-12">
                    <?php
                        if($cart_transaksi != NULL)
                        {
                            echo'
                                    <div class="shoping__checkout">
                                        <center><h4 style="font-weight: bold;">Cart Total</h4></center>
                                        <br>
                                        
                                                        <ul>
                                                            <li>Total <span id="total_belanja" style="font-size: 30px;"></span><span style="font-size: 30px;">Rp </span></li>
                                                            
                                                        </ul>
                                        
                                        <input type="submit" name="submit" value="CHECK OUT" class="btn btn-lg btn-block btn-primary">

                                    </div>
                                    ';
                                }
                            ?>
                </div>
                <input type="hidden" name="nama_pembeli" value="<?php echo $this->session->userdata('username'); ?>" placeholder="NAMA PEMBELI" class="form-control input-lg" required>
            </div>
        </form>
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

    
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo base_url();?>/assets/Market/img/dasar.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: black;">Pre Order</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo base_url('index.php/Marketplace'); ?>" style="color: black;">Home</a>
                            <span style="color: black;">Pre Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <?php
            $notif = $this->session->flashdata('notif');
            if($notif != NULL){
                echo '
                    <div class="alert alert-danger">'.$notif.'</div>
                ';
            }
        ?>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="col-lg-12 pt-4 pt-lg-0 " data-aos="fade-left" data-aos-delay="100" style="float: center;">
                <center>
                  <h5 data-toggle="collapse" class="collapsed" ><span></span>Ingin membeli ikan untuk yang akan datang, bisa Pre Order dulu LOH...  <br></h5><br>
                  <center><button style="" type="button" class="btn btn-info" data-toggle="modal" data-target="#preordertambah">Klik Disini !</button></center><br><br>
                </center>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <form action="<?php echo base_url('index.php/preorder/Bayar'); ?>" method="post">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nama Products</th>
                                    <th>Jumlah</th>
                                    <th>Total Belanja</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if($preorder != NULL){
                                foreach ($preorder as $b) {
                                    echo '
                                        <tr>
                                            <input type="hidden" name="id_barang[]" value="'.$b->id_preeorder.'">
                                            <td id="namabarang">'.$b->namabarang.'</td>
                                            <td id="harga">'.$b->jumlah.' kg</td>
                                            <td id="total"><span id="subtot_'.$b->id_preeorder.'">Rp '.$b->harga*$b->jumlah.'</span></td>
                                            <td>'.$b->status.'<td>
                                            <td><button style="" type="button" class="btn btn-warning" data-toggle="modal" data-target="#preorder" onclick="prepare_ubah_buku('.$b->id_preeorder.')">Data Selengkapnya !</button>
                                                <button type="submit" class="btn btn-secondary">Bayar</button>
                                            </td>
                                            
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
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div id="preorder" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SELAMAT DATANG SILAHKAN TULISKAN PESANAN ANDA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <form action="<?php echo base_url('index.php/Preorder/ubah'); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                <input type="hidden" class="form-control"  name="id" id="id">
                <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="<?php echo $this->session->userdata('username'); ?>">
                <br>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat">
                <br>
                <input type="text" class="form-control" placeholder="Nomor Telepon" name="telepon" id="telepon">
                <br>
                <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah">
                <br>
                <input type="date" class="form-control" placeholder="Tanggal Kirim" name="kirim" id="kirim">
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" name="submit" value="SIMPAN">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </form>
    </div>

  </div>
</div>

<div id="preordertambah" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SELAMAT DATANG SILAHKAN TULISKAN PESANAN ANDA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <form action="<?php echo base_url('index.php/Preorder/tambah'); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $this->session->userdata('username'); ?>">
                <br>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" >
                <br>
                <input type="text" class="form-control" placeholder="Nomor Telepon" name="telepon">
                <br>
                <select name="barang" class="form-control">
                    <?php
                        foreach ($barang as $b) {
                            echo '
                                <option value="'.$b->id_barang.'">'.$b->namabarang.'</option>
                            ';
                        }
                    ?>                  
                </select>
                <br>
                <br><br>
                
                <input type="number" class="form-control" placeholder="Jumlah" name="jumlah">
                <br>
                <input type="date" class="form-control" placeholder="Tanggal Kirim" name="kirim">

          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" name="submit" value="SIMPAN">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    
    function prepare_ubah_buku(id)
    {
        $("#id").empty();
        $("#nama").empty();
        $("#alamat").empty();
        $("#telepon").empty();
        $("#jumlah").empty();   
        $("#kirim").empty();

        $.getJSON('<?php echo base_url(); ?>index.php/Preorder/get_data_preorder_by_id/' + id,  function(data){
            $("#id").val(data.id_preeorder);
            $("#nama").val(data.nama);
            $("#alamat").val(data.alamat);
            $("#telepon").val(data.telepon);
            $("#jumlah").val(data.jumlah);   
            $("#kirim").val(data.kirim);
            
        });
    }
</script>
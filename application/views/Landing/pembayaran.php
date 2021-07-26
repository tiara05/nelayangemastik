    <?=$this->session->flashdata('pesan');?>
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
                    <h5 style="text-align: center;">Terimakasih telah melakukan transaksi dengan menggunakan aplikasi nelayanku...<br><br>Silahkan melakukan pembayaran dengan mmetode transfer melalui rekening berikut ini </h5><br><br>
                    
                    
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Bank Mandiri
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body" style="text-align: center;">
                            <br>
                            <h5>Bank Mandiri</h5>
                            <br>
                            <p>No Rekening : <br><strong>896 0819 1017 5601</strong></p>
                            <p>Pembayaran diberi waktu sampai 1x24 jam<br><br>No. Rekening atas nama Mark Lee</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Bank BNI
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body" style="text-align: center;">
                            <br>
                            <h5>Bank Mandiri</h5>
                            <br>
                            <p>No Rekening : <br><strong>896 0819 1017 5601</strong></p>
                            <p>Pembayaran diberi waktu sampai 1x24 jam<br><br>No. Rekening atas nama Mark Lee</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Bank BCA
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body" style="text-align: center;">
                            <br>
                            <h5>Bank Mandiri</h5>
                            <br>
                            <p>No Rekening : <br><strong>896 0819 1017 5601</strong></p>
                            <p>Pembayaran diberi waktu sampai 1x24 jam<br><br>No. Rekening atas nama Mark Lee</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFour">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Bank BRI
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                          <div class="card-body" style="text-align: center;">
                            <br>
                            <h5>Bank Mandiri</h5>
                            <br>
                            <p>No Rekening : <br><strong>896 0819 1017 5601</strong></p>
                            <p>Pembayaran diberi waktu sampai 1x24 jam<br><br>No. Rekening atas nama Mark Lee</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br><br>
                    <h5 style="text-align: center;">Silahkan upload bukti pembayaran pada form dibawah ini... </h5><br><br>
                    <form action="<?php echo base_url('index.php/pembayaran/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <center>
                        <input type="hidden" name="nama_pembeli" value="<?php echo $this->session->userdata('username'); ?>" placeholder="NAMA PEMBELI" class="form-control">
                        <input type="file" name="foto_bukti">
                        <br><br>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </section>
   



    

<?php
 error_reporting(0);
 
if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form

  $no_pinjam                = $_POST['no_pinjam'];
  $tgl_pinjam               = $_POST['tgl_pinjam'];
  $kode_barang              = $_POST['kode_barang'];
  $nama_brg                 = $_POST['nama_brg'];
  $jml_pinjam               = $_POST['jml_pinjam'];      
  $peminjam                 = $_POST['peminjam'];
  $tgl_kembali              = $_POST['tgl_kembali'];   
  $keterangan               = $_POST['keterangan'];   
        
     
  $myQry = $mysqli->query("INSERT INTO pinjam_barang (no_pinjam,tgl_pinjam,kode_barang,nama_brg,jml_pinjam,peminjam,tgl_kembali,keterangan)
  VALUES ('$no_pinjam','$tgl_pinjam','$kode_barang','$nama_brg','$jml_pinjam','$peminjam','$tgl_kembali','$keterangan')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=barang_pinjam/data_barang_pinjam'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
    
   
} // Penutup POST
  
  
 

?>

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->
    <style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
    </style>
    

   
<div class="row">
                 <header class="panel-heading">
                              <h3 align="center">Input Data Barang yang di pinjam </h3><br>
                             
                          </header>
<form class="form-horizontal form-label-left"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO PINJAM: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="no_pinjam"  required type="text">
                </div>
            </div>
           <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAL PINJAM: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="tgl_pinjam"  required type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KODE BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="kode_barang"  required type="text">
                </div>
            </div>
           <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NAMA BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="nama_brg"  required type="text">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JUMLAH PINJAM: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="jml_pinjam"  required type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PEMINJAM: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="peminjam"  required type="text">
                </div>
            </div>

	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAL KEMBALI: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="tgl_kembali"  required type="text">
                </div>
            </div>

           <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KETERANGAN: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="keterangan"  required type="text">
                </div>
            </div>

            <div class="item form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnSimpan">Simpan..</button>  
                </div>
            </div>
        </div>   
        
                                                                                        
  </div>
</form>
 </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

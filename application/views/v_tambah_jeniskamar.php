<br>
<br>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HOTEL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?=base_url("assets/")?>assets/favicon.icon"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url("assets/")?>css/styles.css" rel="stylesheet" />
    </head>
<body>
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">

        <form action="<?=base_url('Hotel/upload_foto') ?>" method="post" enctype="multipart/form-data">
         
        </div>
        <div class="form-group">
            <label >id_jenis</label>
            <input type="text" class="form-control" id_jenis="id_jenis" name="id_jenis"required="">
        </div>
        <div class="form-group">
            <label >jenis_kamar</label>
            <input type="text" class="form-control" jenis_kamar="jenis_kamar" name="jenis_kamar"required="">
        </div>

        <div class="form-group">
            <label >keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required="" >
        </div>
        <div class="form-group">
            <label >harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required="" >
        </div>
        <div class="form-group">
            <label >foto</label>
        <input type="file" name="foto" id="foto" accept="image/jpg,image/jpeg,image/png" size="20" required="" />
        </div>
        
        <button type="submit" class=" btn btn-info  float-right">simpan</button>
        </form>
                  </div>
</div> 
               </div>
            </div>
        </div>
    </div>
 </div>
</body>
</html>
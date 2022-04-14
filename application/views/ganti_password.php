<hr>
<hr>
<hr>
<hr>

<section align = center class="page-section portfolio" id="portfolio">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <form action="<?=  base_url('index.php/Auth/proses_ganti_password')?>"method="post">
            <div class="form-group">
                <label for="">Username</label>
                <input  type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" readonly>
                <small id="helpId" class="text-muted">Masukkan username anda</small>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Masukkan password anda</small>
            </div>
            <div class="form-group">
                <label for="">konfirmasi password</label>
                <input type="password" name="password2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Masukkan password anda</small>
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
            
            
        </form>
    </div>
</section>

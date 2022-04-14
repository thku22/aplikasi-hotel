<section class="page-section bg-light" id="team">
            <div class="container">
             
            <h3>Register Disini ↓</h3>
            <marquee><h6>Sudah Punya Akun ???</h6></marquee>
           
            
<form action="<?= base_url('index.php/register/proses_register') ?>" method="post">
  <div class="container">
    <label for="exampleInputusername" class="form-label">username</label>
    <input name="username" type="username" class="form-control" id="exampleInputusername" aria-describedby="usernameHelp">
    <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
  </div>
  <div class="container">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="container"><button type="submit" class="btn btn-primary">Daftar</button>
  <a href="<?= base_url("index.php/auth")?>">kembali</a>
</form>
</div>
</section>
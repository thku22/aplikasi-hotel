<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TABEL USER</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">TAMBAH  USER</a></li>
                         
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DATA TEBEL USER
                            </div>
                            <div class="card-body">
                            <table class="table table-hover table table-bordered">
                            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Hak akses</th>
                <th>Aktivasi</th>
                <th>No hp</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($user as $h){ ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $h->username ?></td>
                <td><?= $h->password ?></td>
                <td><?= $h->hak_akses ?></td>
                <td><?= $h->aktivasi ?></td>
                <td><?= $h->no_hp ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
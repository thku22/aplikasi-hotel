<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TABEL KONSUMEN</h1>
                      
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DATA TEBEL KONSUMEN
                            </div>
                            <div class="card-body">
                            <table class="table table-hover table table-bordered">
                            <thead>
            <tr>
                <th>No</th>
                <th>Id konsumen</th>
                <th>Nama depan</th>
                <th>Nama tengah</th>
                <th>Nama belakang</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Negara</th>
                <th>No identitas</th>
                <th>No tlp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $no= 1; foreach($konsumen as $h){ ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $h->id_konsumen ?></td>
                <td><?= $h->nama_depan ?></td>
                <td><?= $h->nama_tengah ?></td>
                <td><?= $h->nama_belakang ?></td>
                <td><?= $h->alamat ?></td>
                <td><?= $h->kota ?></td>
                <td><?= $h->provinsi ?></td>
                <td><?= $h->negara ?></td>
                <td><?= $h->no_identitas ?></td>
                <td><?= $h->no_tlp ?></td>
                <td><?= $h->email ?></td>
                <td><a href="<?= base_url('Hotel/hapus_konsumen/'. $h->id_konsumen)?>">Hapus </a></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
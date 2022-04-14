<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TABEL KAMAR</h1>
                        <ol class="breadcrumb mb-4">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/Hotel/tambah_kamar')?>">TAMBAH  KAMAR</a></li>  
                        
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DATA TABEL KAMAR
                            </div>
                            <div class="card-body">
                            <table class="table table-hover table table-bordered ">
                            <thead>
                            <tr>
                                <th>Id_kamar</th>
                                <th>Nomor_kamar</th>
                                <th>Id_jenis</th>
                             
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; foreach($kamar as $h) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $h->nomor_kamar ?></td>
                                <td><?= $h->id_jenis ?></td>
                            </tr>
                            <?php $no++;} ?>
                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
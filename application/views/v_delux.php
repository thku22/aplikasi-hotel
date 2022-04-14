<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">JENIS KAMAR</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('Hotel/tambah_jeniskamar/')?>"> TAMBAH JENIS KAMAR</a></li>
                          
                        </ol>
                      
                        <div class="card mb-4">
                            <div class="card-body">
                            <table class="table table-hover table table-bordered">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Id JENIS</th>
                                            <th>KAMAR</th>
                                            <th>KETERANGAN</th>
                                            <th>HARGA </th>
                                            <th>FOTO </th>
                                            <th>AKSI </th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no= 1; foreach($delux as $jk){ ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $jk->id_jenis?></td>
                                            <td><?= $jk->jenis_kamar ?></td>
                                            <td><?= $jk->keterangan ?></td>
                                            <td><?= $jk->harga ?></td>
                                            <td><img src="<?= base_url('foto/').$jk->foto;?>"width="80px"></td>
                                            <td><a href="<?=  base_url('Hotel/hapus_jeniskamar/'.$jk->id_jenis)?>"class="badge badge-success"><i class="fa fa-edit"></i>hapus</a></td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
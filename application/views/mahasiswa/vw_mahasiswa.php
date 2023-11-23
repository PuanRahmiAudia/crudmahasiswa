<section class="page-section">
            <div class="container px-4 px-lg-5">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                <hr class="row" />
                <div class="col-md-6"><a href="<?php echo base_url('index.php/Mahasiswa/tambah') ?>" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
                    <div class = "col-md-12">
                    <?= $this->session->flashdata('message'); ?>
                        <table class = "table">
                            <thead>
                                <tr>
                                    <td> NO </td>
                                    <td> Nama </td>
                                    <td> NIM </td>
                                    <td> Jenis Kelamin </td>
                                    <td> Email</td>
                                    <td> Prodi </td>
                                    <td> Asal Sekolah </td>
                                    <td> No HP </td>
                                    <td> Alamat </td>
                                    <td> Aksi </td>
                                </tr>
                            </tread>
                            <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($mahasiswa as $us): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>.
                                    </td>
                                    <td>
                                        <?= $us['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $us['nim']; ?>
                                    </td>
                                    <td>
                                        <?= $us['jenis_kelamin']; ?>
                                    </td>
                                    <td>
                                        <?= $us['email']; ?>
                                    </td>
                                    <td>
                                        <?php foreach ($prodi as $p) :
                                        if ($us['prodi']==$p['id']){?>
                                        <?= $p['nama'];?>
                                        <?php }?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td>
                                        <?= $us['asal_sekolah']; ?>
                                    </td>
                                    <td>
                                        <?= $us['no_hp']; ?>
                                    </td>
                                    <td>
                                        <?= $us['alamat']; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('index.php/Mahasiswa/hapus/') . $us['id']; ?>"
                                            class="btn btn-danger">Delete</a>
                                        <a href="<?= base_url('index.php/Mahasiswa/edit/') . $us['id']; ?>"
                                            class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('index.php/Mahasiswa/detail/') . $us['id']; ?>"
                                            class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
       
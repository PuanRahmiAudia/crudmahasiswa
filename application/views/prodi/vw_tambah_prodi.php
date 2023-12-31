<section class="page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card”">
                    <div class=" card-header justify-content-center">
                        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama Prodi</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama','<small class="text-danger p1-3">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="nim">Ruangan</label>
                                <input type="text" name="ruangan" class="form-control" id="ruangan"
                                    placeholder="ruangan">
                                <?= form_error('ruangan','<small class="text-danger p1-3">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" class="form-control" id="jurusan" class="form-control">
                                    <option value="">Jurusan</option>
                                    <option value="JTI">JTI</option>
                                    <option value="Industri">Industri</option>
                                    <option value="Akuntan">Akuntansi Perpajakan</option>
                                </select>
                                <?= form_error('jurusan','<small class="text-danger p1-3">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="nim">Akreditasi</label>
                                <input type="text" name="akreditasi" class="form-control" id="akreditasi"
                                    placeholder="akreditasi">
                                <?= form_error('akreditasi','<small class="text-danger p1-3">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="email">Nama Kaprodi</label>
                                <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi"
                                    placeholder="nama kapordi">
                                <?= form_error('nama_kaprodi','<small class="text-danger p1-3">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="email">Tahun Berdiri</label>
                                <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri"
                                    placeholder="tahun berdiri">
                                <?= form_error('tahun_berdiri','<small class="text-danger p1-3">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="output_lulusan">Output Lulusan</label>
                                <input type="text" name="output_lulusan" class="form-control" id="output_lulusan"
                                    placeholder="Output Lulusan">
                                <?= form_error('output_lulusan','<small class="text-danger p1-3">','</small>');?>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" name="gambar" value="<?= set_value('gambar')?>" class="custom-file-input" id="gambar">
                                    <label for="gambar" class="custom-file-label">Chooose File</label>
                                    <?= form_error('gambar','<small class="text-danger p1-3">','</small>');?>
                                </div>
                            </div>
                            <a href="<?=base_url('Prodi')?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Program Studi
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="d-lg-flex half">
    <img src="<?= base_url('assets/images/bg_1.jpg')?>" alt="">
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3>Sign Up</h3>
                        <p class="mb-4">Selamat Datang di Kampus Politeknik Caltex Riau</p>
                    </div>
                    <form class="user" method="POST" action="<?=base_url('Auth/registrasi');?>">
                        <div class="form-group">
                            <input type="text" name="nama" value="<?=set_value('nama');?>"
                                class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                            <?= form_error('nama','<small class="text-danger">','</small>');?>
                        </div><br>
                        <div class="form-group">
                            <input type="text" name="email" value="<?=set_value('email');?>"
                                class="form-control form-control-user" id="email" placeholder="Alamat Email">
                            <?= form_error('email','<small class="text-danger ">','</small>');?>
                        </div><br>
                        <div class="form-group">
                            <input type="password" name="password1" value="<?=set_value('password1');?>"
                                class="form-control form-control-user" id="password1" placeholder="Password">
                            <?= form_error('password1','<small class="text-danger">','</small>');?>
                        </div><br>
                        <div class="form-group">
                            <input type="password" name="password2" value="<?=set_value('password2');?>"
                                class="form-control form-control-user" id="password2" placeholder="Ulangi Password">
                            <?= form_error('password2','<small class="text-danger ">','</small>');?>
                        </div><br>
                        <button type="submit" class="btn btn-primary w-100">
                            Submit
                        </button>
                    </form>
                    <span class="d-block text-center my-4 text-muted">&mdash; Sudah punya akun? <a href="<?= base_url('Auth'); ?>">Login Disini!</a>
                        &mdash;</span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
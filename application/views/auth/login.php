<div class="d-lg-flex half">
    <img src="<?= base_url('assets/images/bg_1.jpg') ?>" alt="">
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3>Sign In</h3>
                        <p class="mb-4">Selamat Datang di Kampus Politeknik Caltex Riau</p>
                    </div>
                    <?= $this->session->flashdata('message');?>
                    <form class="user" method = "post" action="<?= base_url('auth');?>" >
                        <div class="form-group last">
                            <label for="email last">Email</label>
                            <input type="text" name = "email" class="form-control" id="email">
                        </div>
                        <?= form_error('email','<small class="text-danger">','</small>');?>
                        <div class="form-group last mt-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <?= form_error('password','<small class="text-danger">','</small>');?>
                        <div class="d-flex mt-3 mb-5 align-items-center">
                            <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                <input type="checkbox" checked="checked" />
                                <div class="control__indicator"></div>
                            </label>
                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                        </div>
                        <input type="submit" value="Log In" class="btn btn-block btn-primary">
                    </form>
                    <span class="d-block text-center my-4 text-muted">&mdash; Tidak punya akun? <a href="<?= base_url('Auth/registrasi'); ?>">Daftar Disini!</a>
                        &mdash;</span>
                </div>
            </div>
        </div>
    </div>


</div>
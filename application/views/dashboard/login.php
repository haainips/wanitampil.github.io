
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5 mt-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">

                                        <?= $this->session->flashdata('message');   ?>

                                        <h1 class="h4 text-gray-900 mb-4">Sign In</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('dashboard');  ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email"
                                                placeholder="Masukkan email" name="email" value="<?= set_value('email');  ?>">
                                                <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Masukkan Password" name="password">
                                                <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-gradient btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <div class="text-center mt-2">
                                        <a class="small" href="<?= base_url('dashboard/registrasi'); ?> ">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
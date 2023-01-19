
<div class="container">
    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Produk <strong>Berhasil </strong><?= $this->session->flashdata('flash') ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6 mt-4 ms-4">        
            <a href="<?= base_url(); ?>dashboard/tambah" class="btn btn-dark">Tambah Produk</a>
        </div>
    </div>

    <div class="container mt-4 ms-3">
        <h3>Daftar Katalog</h3>
    </div>

    <div class="row mt-3">
        <div class="col-md-4 ms-4 mb-3">
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Produk" name="keyword">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div>
            </form>
        </div>
    </div>

    <div class="row">
    <?php 
    $i = 1;
    foreach ( $katalog as $ktgr) { ?>
        <div class="col-sm-3  m-4">
            <div class="card">
                <h5 class="card-header text-center"><?= $ktgr["nama"] ?></h5>
                <div class="p-3">
                    <p><img class="rounded container" src="<?= $ktgr["url"]; ?>" class="rounded"></p>
                    <table class="table table-striped table-responsive-sm">
                            <div class="text-center mt-1 mb-2"><strong>Rp<?= $ktgr["harga"]; ?></strong></div>
                        <tr>
                            <div class= "row  p-3">
                                <a href="<?= base_url(); ?>dashboard/hapus/<?= $ktgr['id']; ?>" class="btn btn-danger btn-gradient mt-2 mb-3 " onclick="return confirm('Yakin?');">Hapus</a>
                                <a href="<?= base_url(); ?>dashboard/ubah/<?= $ktgr['id']; ?>" class="btn btn-primary ">Ubah</a>
                            </div>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php $i++; } ?>
    </form>
</div>
</div>
</div>
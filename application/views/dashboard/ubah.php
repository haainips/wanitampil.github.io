<div class="container">

    <div class="row">
        <div class="col-mid-6">

            <div class="card mt-5">
                <div class="card-header">
                    Ubah Data Produk
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $katalog['id']; ?>">
                    <div class="form-group mt-1">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Produk" value="<?= $katalog['nama']; ?>" required="" />
                    </div>
                    <div class="form-group mt-2">
                        <label for="harga" class="form-labeSl">Harga Produk</label>
                        <input min="0" type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Produk" value="<?= $katalog['harga']; ?>" required=""/>
                    </div>

                    <div class="form-group mt-2">
                        <label for="url" class="form-label">Link Gambar</label>
                        <input class="form-control" type="text" name="url" id="url" value="<?= $katalog['url']; ?>" required=""/>
                    </div>

                    <label for="kategori" class="form-group mt-2">Pilih Kategori </label>
                    <select class="form-select" name="kategori" id="kategori">
                        <?php foreach( $kategori as $k) :  ?>
                            <?php if($k == $katalog['katalog']) : ?>
                                <option value="<?= $k; ?>" selected><?= $k;  ?></option>
                            <?php else : ?>
                                <option value="<?= $k; ?>"><?= $k;  ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select> 

                    <div class="col-md-6 mt-4">        
                        <button type="submit" name="tambah" class="btn btn-primary">Ubah</button>
                    </div>
                </form> 

                </div>
            </div>


            
        </div>
    </div>
</div>
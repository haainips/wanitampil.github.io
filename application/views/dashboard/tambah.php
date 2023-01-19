<div class="container">

    <div class="row">
        <div class="col-mid-6">

            <div class="card mt-5">
                <div class="card-header">
                    Tambah Produk
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-1">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Produk" required=""/>
                        <small class="form-text text-danger"><?= form_error('nama') ?></small>
                    </div>
                    <div class="form-group mt-2">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input min="0" type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Produk" required=""/>
                        <small class="form-text text-danger"><?= form_error('harga') ?></small>
                    </div>

                    <div class="form-group mt-2">
                        <label for="url" class="form-label">Link Gambar</label>
                        <input class="form-control" type="text" name="url" id="url" placeholder="Masukkan Link Gambar" required=""/>
                    </div>

                    <label for="kategori" class="form-group mt-2">Pilih Kategori </label>
                    <select class="form-select" name="kategori" aria-label="Default select example">
                        <option selected>Pilih Kategori</option>
                        <option value="hoodie">Hoodie</option>
                        <option value="tshirt">T-Shirt</option>
                        <option value="shortpants">Short Pants</option>
                        <option value="socks">Socks</option>
                    </select> 

                    <div class="col-md-6 mt-4">        
                        <button type="submit" name="tambah" class="btn btn-dark">Tambah</button>
                    </div>
                </form> 

                </div>
            </div>


            
        </div>
    </div>
</div>
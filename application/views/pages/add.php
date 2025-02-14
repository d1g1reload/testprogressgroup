<div class="container">


    <div class="row mt-3">
        <div class="col-md-12">
            <form action="<?php echo base_url('save') ?>" method="post">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input name="name" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Produk</label>
                    <input name="price" type="number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Stok</label>
                    <input name="stock" type="number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Status Produk</label>
                    <select name="is_sell" class="form-control" required>
                        <option value="0">Tidak Di Jual</option>
                        <option value="1">Di Jual</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="<?php echo base_url() ?>" class="btn btn-outline-dark">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
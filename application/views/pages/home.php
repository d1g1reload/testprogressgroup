<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $this->session->flashdata('success') ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <a href="<?php echo base_url('add') ?>" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table" id="produk">
                    <thead>
                        <tr>
                            <th class="text-center">Nama Produk</th>
                            <th class="text-center">Harga Produk</th>
                            <th class="text-center">Jumlah Stok</th>
                            <th class="text-center">Status Prdouk</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($products as $val) {
                            if ($val->is_sell == 0) {
                                $status = '<span class="badge badge-secondary">Tidak Di Jual</span>';
                            } else {
                                $status = '<span class="badge badge-success">Di Jual</span>';
                            }
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $val->name ?></td>
                                <td class="text-center"><?php echo $val->price ?></td>
                                <td class="text-center"><?php echo $val->stock ?></td>
                                <td class="text-center"><?php echo $status ?></td>
                                <td class="text-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $val->id ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                                        Delete
                                    </button>
                                </td>
                                <!-- Edit -->
                                <div class="modal fade" id="edit<?php echo $val->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Produk</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('update') ?>" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $val->id; ?>">
                                                    <div class="form-group">
                                                        <label for="">Nama Produk</label>
                                                        <input name="name" type="text" class="form-control" value="<?php echo $val->name ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Harga Produk</label>
                                                        <input name="price" type="number" class="form-control" value="<?php echo $val->price ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Jumlah Stok</label>
                                                        <input name="stock" type="number" class="form-control" value="<?php echo $val->stock ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Status Produk</label>
                                                        <select name="is_sell" class="form-control">
                                                            <option value="0" <?php if ($val->is_sell == 0) {
                                                                                    echo 'selected';
                                                                                } ?>>Tidak Di Jual</option>
                                                            <option value="1" <?php if ($val->is_sell == 1) {
                                                                                    echo 'selected';
                                                                                } ?>>Di Jual</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">Update</button>
                                                        <a href="<?php echo base_url() ?>" class="btn btn-outline-dark">Batal</a>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- delete -->
                                <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?php echo base_url('delete') ?>" method="post">
                                                <div class="modal-body">
                                                    Anda yakin ingin menghapus data ini ?
                                                    <input type="hidden" name="id" value="<?php echo $val->id ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Ya</button>
                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tidak</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
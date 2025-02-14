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
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        Delete
                                    </button>
                                </td>
                                <!-- Edit -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
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
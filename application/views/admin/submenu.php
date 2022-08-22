<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 ml-1 text-gray-800">Daftar Sub Menu</h5>

    <div class="row">

        <div class="col-lg ml-1">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message') ?>

            <div class="card shadow">
                <div class="card-header bg-success border-bottom-warning text-right">
                    <a href="" class="btn btn-outline-warning btn-sm mb-3" data-toggle="modal" data-target="#SubmenuModal"><i class="fas fa-plus fa-sm"></i> Tambah Sub Menu</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-bordered table-hover table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Sub Menu</th>
                                    <th scope="col">Nama Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($submenu as $sm) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $sm['tittle']; ?></td>
                                        <td><?= $sm['menu']; ?></td>
                                        <td><?= $sm['url']; ?></td>
                                        <td><?= $sm['icon']; ?></td>
                                        <td><?= $sm['is_active']; ?></td>
                                        <!-- <td>
                                <?php
                                    if ($sm['is_active'] == 1) { ?>
                                    <div class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal2<?= $sm['id']  ?>">
                                        <i>Aktif</i>
                                    </div>
                                <?php } else { ?>
                                    <div class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal2<?= $sm['id']  ?>">
                                        <i>Non-Aktif</i>
                                    </div>
                                <?php } ?>

                                <div class="modal fade" id="modal2<?= $sm['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <?php
                                                if ($sm['is_active'] == 1) { ?>
                                                    <h5 class="modal-title" id="exampleModalLabel">Non-Aktifkan Menu</h5>
                                                <?php } else { ?>
                                                    <h5 class="modal-title" id="exampleModalLabel">Aktifkan Menu</h5>
                                                <?php } ?>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <?php
                                                if ($sm['is_active'] == 1) { ?>
                                                    <p>Apakah anda yakin untuk mengnon-aktifkan submenu <?= $sm['tittle']  ?> ?</p>
                                                <?php } else { ?>
                                                    <p>Apakah anda yakin untuk mengaktifkan submenu <?= $sm['tittle']  ?> ?</p>
                                                <?php } ?>
                                            </div>

                                            <div class="modal-footer"></div>
                                            <form action="<?php echo base_url() . 'menu/status_submenu'; ?>" method="post">
                                                <input type="hidden" name="id" class="form-control" value="<?= $sm['id'] ?>">
                                                <?php
                                                if ($sm['is_active'] == 1) { ?>
                                                    <input type="hidden" name="is_active" class="form-control" value="0">\
                                                <?php } else { ?>
                                                    <input type="hidden" name="is_active" class="form-control" value="1">\
                                                <?php } ?>
                                                <center>
                                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                    <br>
                                                </center>
                                            </form>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </td> -->

                                        <td>
                                            <a href="" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editsub<?= $sm['id'] ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>
                                            <!-- Modal Edit-->
                                            <div class="modal fade" id="editsub<?= $sm['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editsubLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editLabel">Edit Submenu</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url('admin/editsub'); ?>" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="tittle" name="tittle" value="<?= $sm['tittle'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="menu_id" id="menu_id" class="form-control">
                                                                        <option value="<?= $sm['menu_id'] ?>" selected><?= $sm['menu']; ?> </option>
                                                                        <?php foreach ($menu as $m) : ?>
                                                                            <option value="<?= $m['id'] ?>"><?= $m['menu']; ?> </option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="hidden" id="id" name="id" value="<?= $sm['id'] ?>">
                                                                    <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon'] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-check">
                                                                        <input class=" form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                                                        <label class="form-check-label" for="is_active">
                                                                            Aktif?
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"> </div>
                                                            <center>
                                                                <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                                                            </center>
                                                            <br>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Hapus SUbmenu -->
                                        <td>
                                            <a href="" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#hapussub<?= $sm['id']  ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>

                                            <div class="modal fade" id="hapussub<?= $sm['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="hapussubModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="hapussubModalLabel">Hapus Submenu</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>Apakah anda yakin ingin menghapus submenu <?= $sm['tittle']  ?> ?</p>
                                                        </div>

                                                        <div class="modal-footer"></div>
                                                        <center>
                                                            <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                            <?php echo anchor('admin/hapus_sub/' . $sm['id'], '<div class="btn btn-outline-danger btn-sm">Hapus</div>') ?>
                                                        </center>
                                                        <br>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="SubmenuModal" tabindex="-1" role="dialog" aria-labelledby="SubmenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SubmenuModalLabel">Tambah Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Submenu tittle">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <?php foreach ($menu as $m) : ?>

                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Aktif?
                        </label>
                    </div>
                </div>
                <div class="modal-footer"></div>
                <center>
                    <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Tambah</button>
                </center>
                <br>
            </form>
        </div>
    </div>
</div>
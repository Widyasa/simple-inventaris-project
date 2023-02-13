<div class="container-fluid mt-5 pt-3">

    <!-- Page Heading -->
    <div class = "d-flex flex-row justify-content-between">
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <button type="button" class="btn-primary btn mr-0" data-toggle="modal" data-target="#tambahModal">
            Tambah
        </button>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Ruang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ruang</th>
                        <th>Kode Ruang</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1?>
                    <?php foreach($data['total_ruang'] as $ruang) :?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td><?=$ruang['nama_ruang']?></td>
                            <td><?=$ruang['kode_ruang']?></td>
                            <td><?=$ruang['keterangan']?></td>
                            <td class = "d-flex flex-row">
                                <button class="btn-warning btn mr-0" href="#" data-toggle="modal" data-target="#editModal<?=$ruang['id_ruang']?>">
                                    Edit
                                </button>
                                <form action="<?=BASEURL?>ruang/delete/<?=$ruang['id_ruang']?>" method="post">
                                    <input type="hidden" name="id_ruang" value="<?=$ruang['id_ruang']?>">
                                    <button type="submit" class="btn-danger btn ml-3" href="#" data-toggle="modal" onclick="return confirm('Yakin mau Hapus?')" data-target="#deleteModal">
                                        Hapus
                                    </button>
                                </form>


                            </td>



                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php foreach ($data['total_ruang'] as $ruang) :?>
    <div class="modal fade" id="editModal<?=$ruang['id_ruang']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Ruang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASEURL?>ruang/edit" method=post>
                        <input type="hidden" value="<?=$ruang['id_ruang']?>" name="id_ruang">
                        <div class="d-flex flex-column">
                            <label for="">Nama Ruang</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="nama_ruang" aria-describedby="emailHelp"
                                       value="<?=$ruang['nama_ruang']?>">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="">Kode Ruang</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                           name="kode_ruang" aria-describedby="emailHelp"
                                           value="<?=$ruang['kode_ruang']?>">
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="">Keterangan</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control form-control-user" name="keterangan" aria-describedby="emailHelp" ><?=$ruang['keterangan']?></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="reset" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach?>


<div class="modal fade" id="tambahModal" tabindex="-1"  aria-labelledby="tambahModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Petugas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=BASEURL?>ruang/add" method=post>
                    <div class="d-flex flex-column">
                        <label for="">Nama Ruang</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                   name="nama_ruang" aria-describedby="emailHelp">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Kode Ruang</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="kode_ruang" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Keterangan</label>
                            <div class="form-group">
                                <textarea type="text" class="form-control form-control-user" name="keterangan" aria-describedby="emailHelp" ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="reset" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<div class="container-fluid mt-5 pt-3">

    <!-- Page Heading -->
    <div class = "d-flex flex-row justify-content-between">
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <button class="btn-primary btn mr-0" href="#" data-toggle="modal" data-target="#addModal">
            Tambah
        </button>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1?>
                    <?php foreach($data['total_inventaris'] as $inventaris) :?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td><?=$inventaris['nama']?></td>
                            <td><?=$inventaris['jumlah']?></td>
                            <td><?=$inventaris['keterangan']?></td>
                            <td class = "d-flex flex-row">
                                <button class="btn-primary btn mr-0" href="#" data-toggle="modal" data-target="#detailModal<?=$inventaris['id_inventaris']?>">
                                    Detail
                                </button>
                                <button class="btn-warning ml-3 btn mr-0" href="#" data-toggle="modal" data-target="#editModal<?=$inventaris['id_inventaris']?>">
                                    Edit
                                </button>
                                <form action="<?=BASEURL?>inventaris/delete/<?=$inveninventaris['id_inveninventaris']?>" method="post">
                                    <input type="hidden" name="id_jenis" value="<?=$inveninventaris['id_inveninventaris']?>">
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
<?php foreach ($data['total_inventaris'] as $inventaris) :?>
    <div class="modal fade" id="editModal<?=$inventaris['id_inventaris']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Inventaris</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASEURL?>inventaris/edit" method=post>
                        <input type="hidden" value="<?=$inventaris['id_inventaris']?>" name="id_jenis">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <label for="">Nama Inventaris</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               name="nama_jenis" aria-describedby="emailHelp"
                                               value="<?=$inventaris['nama']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <label for="">Nama Jenis</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               name="nama_jenis" aria-describedby="emailHelp"
                                               value="<?=$inventaris['nama_jenis']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <label for="">Jumlah</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user"
                                               name="kode_jenis" aria-describedby="emailHelp"
                                               value="<?=$inventaris['jumlah']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <label for="">Ruangan</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               name="kode_jenis" aria-describedby="emailHelp"
                                               value="<?=$inventaris['nama_ruang']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column">
                                    <label for="">Kode</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               name="kode_jenis" aria-describedby="emailHelp"
                                               value="<?=$inventaris['kode_inventaris']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <label for="">Keterangan</label>
                                    <div class="">
                                        <textarea type="text" class="form-control" name="keterangan"><?=$inventaris['keterangan']?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>





                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="reset" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php endforeach?>


<?php foreach ($data['total_inventaris'] as $inventaris) :?>
    <div class="modal fade" id="editModal<?=$inventaris['id_inventaris']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Jenis</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASEURL?>jenis/edit" method=post>
                        <input type="hidden" value="<?=$jenis['id_jenis']?>" name="id_jenis">
                        <div class="d-flex flex-column">
                            <label for="">Nama Jenis</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="nama_jenis" aria-describedby="emailHelp"
                                       value="<?=$jenis['nama_jenis']?>">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Kode Jenis</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="kode_jenis" aria-describedby="emailHelp"
                                       value="<?=$jenis['kode_jenis']?>">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Keterangan</label>
                            <div class="">
                                <textarea type="text" class="form-control" name="keterangan"><?=$jenis['keterangan']?></textarea>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="reset" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php endforeach?>


<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=BASEURL?>jenis/add" method=post>
                    <div class="d-flex flex-column">
                        <label for="">Nama Jenis</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                   name="nama_jenis" aria-describedby="emailHelp"
                                   placeholder="Input nama jenis">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Kode Jenis</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="kode_jenis" aria-describedby="emailHelp"
                                       placeholder="Input nama jenis">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="">Keterangan</label>
                                <div class="">
                                    <textarea type="text" class="form-control" name="keterangan"></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="reset" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
                    <?php foreach($data['total_jenis'] as $jenis) :?>
                    <tr>
                            <td><?=$i++;?></td>
                            <td><?=$jenis['nama_jenis']?></td>
                            <td><?=$jenis['kode_jenis']?></td>
                            <td><?=$jenis['keterangan']?></td>
                            <td class = "d-flex flex-row">
                                <button class="btn-warning btn mr-0" href="#" data-toggle="modal" data-target="#editModal<?=$jenis['id_jenis']?>">
                                    Edit
                                </button>
                                <form action="<?=BASEURL?>jenis/delete/<?=$jenis['id_jenis']?>" method="post">
                                    <input type="hidden" name="id_jenis" value="<?=$jenis['id_jenis']?>">
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
<?php foreach ($data['total_jenis'] as $jenis) :?>
<div class="modal fade" id="editModal<?=$jenis['id_jenis']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
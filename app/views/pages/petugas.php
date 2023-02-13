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
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1?>
                    <?php foreach($data['total_petugas'] as $petugas) :?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td><?=$petugas['nama_petugas']?></td>
                            <td><?=$petugas['username']?></td>
                            <td><?=$petugas['password']?></td>
                            <td class = "d-flex flex-row">
                                <button class="btn-warning btn mr-0" href="#" data-toggle="modal" data-target="#editModal<?=$petugas['id_petugas']?>">
                                    Edit
                                </button>
                                <form action="<?=BASEURL?>petugas/delete/<?=$petugas['id_petugas']?>" method="post">
                                    <input type="hidden" name="id_jenis" value="<?=$petugas['id_petugas']?>">
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
<?php foreach ($data['total_petugas'] as $petugas) :?>
<div class="modal fade" id="editModal<?=$petugas['id_petugas']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=BASEURL?>petugas/edit" method=post>
                    <input type="hidden" value="<?=$petugas['id_petugas']?>" name="id_petugas">
                    <div class="d-flex flex-column">
                        <label for="">Nama Petugas</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                   name="nama_petugas" aria-describedby="emailHelp"
                                   value="<?=$petugas['nama_petugas']?>">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Username</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="username" aria-describedby="emailHelp"
                                       value="<?=$petugas['username']?>">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Username</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="password" aria-describedby="emailHelp"
                                       value="<?=$petugas['password']?>">
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
                <form action="<?=BASEURL?>petugas/add" method=post>
                <div class="modal-body">
                        <div class="d-flex flex-column">
                            <label for="">Nama Petugas</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="nama_petugas" aria-describedby="emailHelp"
                                       placeholder="Input nama jenis">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="">Username</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                           name="username" aria-describedby="emailHelp"
                                           placeholder="Input nama jenis">
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="">Password</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                           name="password" aria-describedby="emailHelp"
                                           placeholder="Input nama jenis">
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

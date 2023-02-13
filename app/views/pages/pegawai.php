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
                        <th>Nama Pegawai</th>
                        <th>NIP</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1?>
                    <?php foreach($data['total_pegawai'] as $pegawai) :?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td><?=$pegawai['nama_pegawai']?></td>
                            <td><?=$pegawai['nip']?></td>
                            <td><?=$pegawai['alamat']?></td>
                            <td><?=$pegawai['username']?></td>
                            <td><?=$pegawai['password']?></td>
                            <td class = "d-flex flex-row">
                                <button class="btn-warning btn mr-0" href="#" data-toggle="modal" data-target="#editModal<?=$pegawai['id_pegawai']?>">
                                    Edit
                                </button>
                                <form action="<?=BASEURL?>pegawai/delete/<?=$pegawai['id_pegawai']?>" method="post">
                                    <input type="hidden" name="id_pegawai" value="<?=$pegawai['id_pegawai']?>">
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
<?php foreach ($data['total_pegawai'] as $pegawai) :?>
    <div class="modal fade" id="editModal<?=$pegawai['id_pegawai']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASEURL?>pegawai/edit" method=post>
                        <input type="hidden" value="<?=$pegawai['id_pegawai']?>" name="id_pegawai">
                        <div class="d-flex flex-column">
                            <label for="">Nama Petugas</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="nama_pegawai" aria-describedby="emailHelp"
                                       value="<?=$pegawai['nama_pegawai']?>">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">NIP</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="nip" aria-describedby="emailHelp"
                                       value="<?=$pegawai['nip']?>">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">NIP </label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="alamat" aria-describedby="emailHelp"
                                       value="<?=$pegawai['alamat']?>">
                            </div>
                        </div>
                            <div class="d-flex flex-column">
                                <label for="">Username</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                           name="username" aria-describedby="emailHelp"
                                           value="<?=$pegawai['username']?>">
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="">Password</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                           name="password" aria-describedby="emailHelp"
                                           value="<?=$pegawai['password']?>">
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
                <h5 class="modal-title" id="tambahModalLabel">Tambah Pegawai</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?=BASEURL?>pegawai/add" method=post>
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        <label for="">Nama Pegawai</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                   name="nama_pegawai" aria-describedby="emailHelp"
                                   placeholder="Input nama pegawai">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <label for="">NIP</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                   name="nip" aria-describedby="emailHelp"
                                   placeholder="Input NIP pegawai">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <label for="">Alamat</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                   name="alamat" aria-describedby="emailHelp"
                                   placeholder="Input nama alamat">
                        </div>
                    </div>
                        <div class="d-flex flex-column">
                            <label for="">Username</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="username" aria-describedby="emailHelp"
                                       placeholder="Input Username Petugas">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="">Password</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                       name="password" aria-describedby="emailHelp"
                                       placeholder="Input Password">
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


<?= $this->extend('layouts/admin')?>

<?= $this->section('content')?>
<div class="container">
    <h1>Biodata <?= $list['username']?></h1>
    <div class="row">
        <div class="row">
        <div class="col-md-7">
            <table class="table table-bordered table-striped">
   
                <tbody>
                   <tr>
                       <td>Nama</td>
                       <td><?= $list['nama']?></td>
                   </tr>
                   <tr>
                       <td>Alamat</td>
                       <td><?= $list['alamat']?></td>
                   </tr>
                   <tr>
                       <td>Jenis Kelamin</td>
                       <td><?= $list['jenis_kelamin']?></td>
                   </tr>
                   <tr>
                       <td>Tempat Tanggal Lahir</td>
                       <td><?= $list['tempat_lahir']?>/<?= $list['tanggal_lahir']?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $list['email']?></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><?= $list['telepon']?></td>
                    </tr>
                    <tr>
                        <td>Terdaftar Sejak</td>
                        <td><?= $list['created_at']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <div class="container">
            <img src="/img/<?= $list['avatar'] ?>" alt="" width="400px">
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-12">
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-warning">Hapus</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>
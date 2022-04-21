<?= $this->extend('layouts/admin')?>

<?= $this->section('content')?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Avatar</th>
            <th>Username</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($list as $item) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><img src="/img/<?= $item['avatar'] ?>" alt="" width="100px"></td>
            <td><?= $item['username']?></td>
            <td><?= $item['email']?></td>
            <td><a class="btn btn-success" href="<?= base_url('user/' . $item['username'])?>">Detail</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?= $this->endSection()?>
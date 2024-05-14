<div>
    <h1>Daftar Kamar</h1>
    <table border=1px>
        <thead>
            <td>No.</td>
            <td>Jenis_Kamar</td>
            <td>Harga</td>
        </thead>

        <?php foreach($data['kamar'] as $kamar) : ?>
        <tr>
            <td><?= $kamar['id'] ?></td>
            <td><?= $kamar['jenis_kamar'] ?></td>
            <td><button><a href="<?= BASEURL; ?> /kamar/detail/<?= $kamar['id'] ?>">Detail</a></button></td>
        </tr>
        <?php endforeach ?>

    </table>

    <!-- <table border=1px>
        <thead>
            <td>No.</td>
            <td>Jenis_Kamar</td>
            <td>Harga</td>
            <td>Deskripsi</td>
        </thead>

        <?php foreach($data['kamar'] as $kamar) : ?>
        <tr>
            <td><?= $kamar['id'] ?></td>
            <td><?= $kamar['jenis_kamar'] ?></td>
            <td><?= $kamar['harga'] ?></td>
            <td><?= $kamar['deskripsi'] ?></td>
        </tr>
        <?php endforeach ?>

    </table> -->
</div>
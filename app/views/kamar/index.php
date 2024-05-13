<div>
    <h1>Daftar Kamar</h1>
    <table border=1px>
        <thead>
            <td>No.</td>
            <td>Jenis_Kamar</td>
            <td>Harga</td>
            <td>Deskripsi</td>
        </thead>

        <?php foreach($data['kmr'] as $kmr) : ?>
        <tr>
            <td><?= $kmr['id'] ?></td>
            <td><?= $kmr['nama'] ?></td>
            <td><?= $kmr['harga'] ?></td>
            <td><?= $kmr['deskripsi'] ?></td>
        </tr>
        <?php endforeach ?>

    </table>
</div>
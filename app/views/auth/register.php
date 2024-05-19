<div>

    <h1>Register</h1>
    <div><?= Flasher::flash(); ?>
    </div>
    
    <form action="<?= BASEURL; ?>/register/register" method="post" onsubmit="return validateForm()">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        <label for="no_telp">No. Telp</label>
        <input type="number" name="no_telp" id="no_telp" required>
        <label for="kabupaten">Kabupaten</label>
        <select name="kabupaten_id" id="kabupaten" required>
            <option value="">Pilih Kabupaten</option>
            <?php foreach ($data['kabupaten'] as $kabupaten) : ?>
                <option value="<?= $kabupaten['id']; ?>"><?= $kabupaten['kabupaten']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="kecamatan">Kecamatan</label>
        <select name="kecamatan_id" id="kecamatan" required>
            <option value="">Pilih Kecamatan</option>
            <?php foreach ($data['kecamatan'] as $kecamatan) : ?>
                <option value="<?= $kecamatan['id']; ?>"><?= $kecamatan['kecamatan']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Register</button>
    </form>
</div>
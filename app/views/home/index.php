<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash();?>
    </div>
</div>
<h1>Ini home. Halo <?= $data['nama']; ?> </h1>
<a href="<?= BASEURL; ?>/auth/logout">Logout</a>
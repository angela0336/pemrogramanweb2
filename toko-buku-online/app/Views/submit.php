<?= $this->extend('layout');?>

<?= $this->section('main');?>
<div class="container p-5">
    <div class="alert alert-success">
        <strong>Success!!!</strong>Order anda telah berhasil di proses.
        silahkan konfirmasi pemabayaran anda ke whatapp admin
        <a href="https://wa.me/6285273493263" class="btn btn-success">hubungi</a>
    </div>
</div>
<?= $this->endSection() ?>
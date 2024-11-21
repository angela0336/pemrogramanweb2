<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>

<div class="container">
    <h3>Review dan submit order</h3>
    <hr />
    <table>
        <tr>
            <td>Rindu</td>
            <td>@1</td>
            <td>Rp. 120000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr />
    <span>Rp. 120000</span>
    <h3 class="mt-3">alamat pengiriman</h3>
    <p>JL. simpang sungai duren, mr. jambi</p>
    <h3 class="mt-3">metode bayar</h3>
    <hr />
    <p>Transfer bank</p>
    <p>No Rekening: Angela, BCA, 12345678</p>
    <div class="mt-5">
        <form action="<?= base_url('submit') ?>" method="POST">
            <button class="btn btn-success">Submit order</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
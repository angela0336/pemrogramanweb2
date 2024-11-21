<?= $this->extend('layout');?>

<?= $this->section('main');?>
  <div class="container">
    <div class="row bg-primary-subtle">
      <div class="col-6 p-5">
        <h1>Selamata Datang Di Toko Buku Online</h1>
        <p>Kamni menyediakan berbagai jenis buku dari berbagai penerbit terkemuka.</p>
        <button class="btn btn-warning">Lihat Produk</button>
      </div>

      <div class="col-6 p-5">
        <h1>temukan buku favorit</h1>
        <form action="">
          <div class="mb-3">
            <input type="text" name="judul" id="judul"
              class="form-control" placeholder="judul buku">
          </div>

          <div class="mb-3">
            <select name="kategori" id="kategori"
              class="form-control">
              <option value="">--- pilih kategori ---</option>

            </select>
          </div>
          <div class="mb-3">
            <input type="text" name="pengarang" id="pengarang" placeholder="pengarang" class="form-control">
          </div>

          <div class="mb-3">
            <button class="btn btn-primary">cari</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2>Hasil Pencarian</h2>
        <div class="row">
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="<?= base_url() ?>/images/1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">RINDU</h5>
                <p class="card-text">Rp 120.000</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="<?= base_url() ?>/images/2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Laskar Pelangi</h5>
                <p class="card-text">Rp 119.900</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="<?= base_url() ?>/images/3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CLANDESTINE</h5>
                <p class="card-text">Rp 110.500</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="<?= base_url() ?>/images/4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dikta Dan Hukum</h5>
                <p class="card-text">Rp 99.900</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="<?= base_url() ?>/images/5.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pulang Pergi</h5>
                <p class="card-text">Rp 76.700</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="<?= base_url() ?>/images/6.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Selamat Tinggal</h5>
                <p class="card-text">Rp 66.700</p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <?= $this->endSection(); ?>
<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>
<div class="px-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Buku</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi bi-plus-circle me-2"></i>Tambah Buku
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Thumbnail URL</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>Lavender</td>
                            <td>Afrozi Laksana</td>
                            <td>PT. Rizki Sentosa</td>
                            <td>2024</td>
                            <td>localhost:8080/assets/1.jpg</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>1000 Resep Makanan</td>
                            <td>Zidan Gemilang</td>
                            <td>PT. Rizki Sentosa</td>
                            <td>2024</td>
                            <td>localhost:8080/assets/2.jpg</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>Mawar</td>
                            <td>Afrozi Laksana</td>
                            <td>PT. Rizki Sentosa</td>
                            <td>2024</td>
                            <td>localhost:8080/assets/3.jpg</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>0004</td>
                            <td>Belajar Membaca</td>
                            <td>Zidan Gemilang</td>
                            <td>PT. Rizki Sentosa</td>
                            <td>2024</td>
                            <td>localhost:8080/assets/4.jpg</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Tambah Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tambahBukuForm">
                        <div class="mb-3">
                            <label for="judulbuku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judulbuku" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengarang" class="form-label">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" required>
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="number" class="form-control" id="tahun" min="1900" max="2024" required>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnailurl" class="form-label">Thumbnail URL</label>
                            <input type="url" class="form-control" id="thumbnailurl" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" form="tambahBukuForm" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editBukuForm">
                        <div class="mb-3">
                            <label for="judulbuku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judulbuku" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengarang" class="form-label">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" required>
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="number" class="form-control" id="tahun" min="1900" max="2024" required>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnailurl" class="form-label">Thumbnail URL</label>
                            <input type="url" class="form-control" id="thumbnailurl" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" form="editBukuForm" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="hapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
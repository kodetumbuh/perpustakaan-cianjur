<?= $this->extend('layout_dashboard/template') ?>
<?= $this->section('content') ?>

<main>
<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header fw-bold">
        Form Edit Kategori
    </div>

    <div class="card-body">
        <form action="<?= base_url('admin/detail-buku/kategori/update/' . $kategori['id_kategori']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Kode Kategori</label>
                <input
                    type="text"
                    name="kode_kategori"
                    class="form-control"
                    value="<?= esc($kategori['kode_kategori']) ?>"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input
                    type="text"
                    name="nama_kategori"
                    class="form-control"
                    value="<?= esc($kategori['nama_kategori']) ?>"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="4"
                ><?= esc($kategori['deskripsi']) ?></textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

</div>
</main>

<?= $this->endSection() ?>
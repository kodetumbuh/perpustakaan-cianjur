<?= $this->extend('layout_dashboard/template') ?>

<?= $this->section('content') ?>

<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">kategori</li>
    </ol>

<div class="card">
    <div class="card-header fw-bold">
        Form Tambah Kategori
    </div>
    

    <div class="card-body">
        <form action="<?= base_url('admin/detail-buku/kategori/post') ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Kode Kategori</label>
                <input
                    type="text"
                    name="kode_kategori"
                    class="form-control"
                    placeholder="Contoh: KTG-001"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input
                    type="text"
                    name="nama_kategori"
                    class="form-control"
                    placeholder="Nama kategori"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="4"
                    placeholder="Deskripsi kategori"
                ></textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection();
<?= $this->extend('layout_dashboard/template') ?>

<?= $this->section('content') ?>

<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Penerbit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">penerbit</li>
    </ol>

<div class="card">
    <div class="card-header fw-bold">
        Form Tambah Penerbit
    </div>
    

    <div class="card-body">
        <form action="<?= base_url('admin/detail-buku/penerbit/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Nama Penerbit</label>
                <input
                    type="text"
                    name="nama_penerbit"
                    class="form-control"
                    placeholder="Nama penerbit"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                    type="text"
                    name="email"
                    class="form-control"
                    placeholder="Nama Email"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Kota</label>
                <input
                    type="text"
                    name="kota"
                    class="form-control"
                    placeholder="Nama kota"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input
                    type="text"
                    name="no_telepon"
                    class="form-control"
                    placeholder="Nomor telepon"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea
                    name="alamat"
                    class="form-control"
                    rows="4"
                    placeholder="Deskripsi alamat"
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
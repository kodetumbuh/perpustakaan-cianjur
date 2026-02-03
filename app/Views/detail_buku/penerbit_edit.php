<?= $this->extend('layout_dashboard/template') ?>
<?= $this->section('content') ?>

<main>
<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header fw-bold">
        Form Edit Penerbit
    </div>

    <div class="card-body">
        <form action="<?= base_url('admin/detail-buku/penerbit/update/' . $penerbit['id_penerbit']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label class="form-label">Nama Penerbit</label>
                <input
                    type="text"
                    name="nama_penerbit"
                    class="form-control"
                    value="<?= esc($penerbit['nama_penerbit']) ?>"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                    type="text"
                    name="email"
                    class="form-control"
                    value="<?= esc($penerbit['email']) ?>"
                >
            </div>


            <div class="mb-3">
                <label class="form-label">Kota</label>
                <input
                    type="text"
                    name="kota"
                    class="form-control"
                    value="<?= esc($penerbit['kota']) ?>"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input
                    type="text"
                    name="no_telepon"
                    class="form-control"
                    value="<?= esc($penerbit['no_telepon']) ?>"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea
                    name="alamat"
                    class="form-control"
                    rows="4"
                ><?= esc($penerbit['alamat']) ?></textarea>
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
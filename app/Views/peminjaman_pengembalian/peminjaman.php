<?= $this->extend('layout_dashboard/template') ?>

<?= $this->section('content') ?>

<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">kategori</li>
    </ol>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


    <hr>
    <table id="table-users" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No Peminjaman</th>
                <th>Id Anggota</th>
                <th>Id User</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian Rencana</th>
                <th>Tanggal Pengembalian Aktual</th>
                <th>Denda</th>
                <th>Jumlah Buku Pinjam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>



<?= $this->endSection() ?>

<?= $this->section('title') ?>
Dashboard - Perpustakaan Cianjur
<?= $this->endSection() ?>


<?= $this->section('script') ?>
    <script>
        $(document).ready(function() {
        $('#table-users').DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?= base_url('admin/peminjaman-pengembalian/peminjaman/json') ?>',
            stateSave: true,    

            // ⬇️ penting untuk Buttons
            dom: 'lBfrtip',

            buttons: [
                {
                    text: ' <i class="fas fa-plus"></i> Tambahkan Data',
                    className: 'btn btn-success mt-2 mb-3',
                    attr: {
                        class: 'btn btn-success btn-sm mt-2 mb-3' // Memaksa class masuk ke atribut HTML
                    },
                    action: function (e, dt, node, config) {
                        window.location.href = '<?= base_url('admin/peminjaman-pengembalian/peminjaman/create') ?>';
                    }
                }
            ],

            columns: [
                { data: 'no_peminjaman' },
                { data: 'id_anggota' },
                { data: 'id_user' },
                { data: 'nama_peminjam' },
                { data: 'tgl_peminjaman' },
                { data: 'tgl_kembali_rencana' },
                { data: 'tgl_kembali_aktual' },
                { data: 'denda' },
                { data: 'jumlah_buku_pinjam' },
                { data: 'status' },
                {
                    data: "id_peminjaman",
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        if (type === 'display') {
                            var urlEdit  = '<?= base_url('admin/peminjaman-pengembalian/peminjaman/edit') ?>/' + data;
                            var urlHapus = '<?= base_url('admin/peminjaman-pengembalian/peminjaman/delete') ?>/' + data;

                            return `
                                <div class="d-flex gap-2">
                                    <a href="${urlEdit}" class="btn btn-primary btn-sm" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-delete"
                                       data-id="${data}" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            `;
                        }
                        return data;
                    }
                }
            ]
        });

        // Event Delegation for delete button
        $(document).on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            var urlHapus = '<?= base_url('admin/detail-buku/kategori/delete') ?>/' + id;

            if (confirm('Apakah anda yakin ingin menghapus data ini?')) {
                // Save scroll position
                var scrollPos = $(window).scrollTop();

                $.ajax({
                    url: urlHapus,
                    type: 'GET', // Or DELETE if your controller handles it
                    dataType: 'JSON',
                    success: function(response) {
                        if (response.status) {
                            alert(response.message);
                            // Reload DataTable without resetting pagination (null, false)
                            $('#table-users').DataTable().ajax.reload(function(){
                                $(window).scrollTop(scrollPos);
                            }, false);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                         // Fallback in case controller doesn't return JSON or fails
                         alert('Gagal menghapus data atau terjadi kesalahan server');
                    }
                });
            }
        });
    });
    </script>

<?= $this->endSection() ?>
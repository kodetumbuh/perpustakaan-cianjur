<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Perpustakaan Cianjur</title>
        <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
        
    
    </head>
<body class="sb-nav-fixed">
    <?= $this->include('layout_dashboard/navbar') ?>

    <div id="layoutSidenav">
        <?= $this->include('layout_dashboard/menu') ?>

        <div id="layoutSidenav_content">
            <main>
                <?= $this->renderSection('content') ?>
            </main>
            
            <?= $this->include('layout_dashboard/footer') ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('assets/demo/chart-bar-demo.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url('assets/demo/datatables-simple-demo.js') ?>"></script>

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>


    <script>
       $(document).ready(function() {
    $('#table-users').DataTable({
        processing: true,
        serverSide: true,
        ajax: '<?= base_url('admin/detail-buku/kategori/json') ?>',
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
                    window.location.href = '<?= base_url('admin/detail-buku/kategori/create') ?>';
                }
            }
        ],


        columns: [
            { data: 'kode_kategori' },
            { data: 'nama_kategori' },
            { data: 'deskripsi' },
            {
                data: "id_kategori",
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    if (type === 'display') {
                        var urlEdit  = '<?= base_url('admin/detail-buku/kategori/edit') ?>/' + data;
                        var urlHapus = '<?= base_url('admin/detail-buku/kategori/delete') ?>/' + data;

                        return `
                            <div class="d-flex gap-2">
                                <a href="${urlEdit}" class="btn btn-primary btn-sm" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="${urlHapus}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin hapus?')" title="Hapus">
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
});
    </script>
    <script>
    const BASE_URL = '<?= base_url() ?>';
    document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const suggestionBox = document.getElementById('suggestionBox');
    let activeIndex = -1;

    // Data halaman
    const pages = [
        { name: 'Dashboard', url: `${BASE_URL}admin/dashboard` },
        { name: 'Buku', url: `${BASE_URL}admin/detail-buku/buku` },
        { name: 'Kategori', url: `${BASE_URL}admin/detail-buku/kategori` },
        { name: 'Penerbit', url: `${BASE_URL}admin/detail-buku/penerbit` },
        { name: 'Pengarang', url: `${BASE_URL}admin/detail-buku/pengarang` },
        { name: 'Peminjaman', url: `${BASE_URL}admin/peminjaman-pengembalian/peminjaman` },
        { name: 'Peminjaman Detail', url: `${BASE_URL}admin/peminjaman-pengembalian/peminjaman-detail` },
        { name: 'Pengembalian', url: `${BASE_URL}admin/peminjaman-pengembalian/pengembalian` },
        { name: 'Reservasi', url: `${BASE_URL}admin/peminjaman-pengembalian/reservasi` },
        { name: 'Rak Buku', url: `${BASE_URL}admin/penyimpanan/rak-buku` },
        { name: 'Anggota', url: `${BASE_URL}admin/pengaturan-pengguna/anggota` },
        { name: 'User', url: `${BASE_URL}admin/pengaturan-pengguna/user` },
    ];

    // Shortcut Ctrl + K
    document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && e.key === 'k') {
            e.preventDefault();
            searchInput.focus();
        }
    });

    // Event saat mengetik
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        suggestionBox.innerHTML = '';
        activeIndex = -1;

        if (query.length > 0) {
            const filtered = pages.filter(page => page.name.toLowerCase().includes(query));
            
            if (filtered.length > 0) {
                filtered.forEach((page, index) => {
                    const item = document.createElement('a');
                    item.href = page.url;
                    item.className = 'list-group-item list-group-item-action border-1';
                    item.textContent = page.name;
                    item.setAttribute('data-index', index);
                    
                    item.addEventListener('click', (e) => {
                        window.location.href = page.url;
                    });

                    suggestionBox.appendChild(item);
                });
                suggestionBox.classList.remove('d-none');
            } else {
                suggestionBox.classList.add('d-none');
            }
        } else {
            suggestionBox.classList.add('d-none');
        }
    });

    // Navigasi Keyboard
    searchInput.addEventListener('keydown', function(e) {
        const items = suggestionBox.querySelectorAll('.list-group-item');
        
        if (e.key === 'ArrowDown') {
            e.preventDefault();
            activeIndex = (activeIndex + 1) % items.length;
            updateActiveItem(items);
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            activeIndex = (activeIndex - 1 + items.length) % items.length;
            updateActiveItem(items);
        } else if (e.key === 'Enter') {
            if (activeIndex > -1) {
                e.preventDefault();
                items[activeIndex].click();
            }
        } else if (e.key === 'Escape') {
            suggestionBox.classList.add('d-none');
            this.blur();
        }
    });

    function updateActiveItem(items) {
        items.forEach((item, index) => {
            if (index === activeIndex) {
                item.classList.add('active');
                item.scrollIntoView({ block: 'nearest' });
            } else {
                item.classList.remove('active');
            }
        });
    }

    // Tutup suggest jika klik di luar area
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !suggestionBox.contains(e.target)) {
            suggestionBox.classList.add('d-none');
        }
    });
});
    </script>
    </body>
</html>
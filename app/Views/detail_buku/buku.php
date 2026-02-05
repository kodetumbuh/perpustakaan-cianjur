<?= $this->extend('layout_dashboard/template') ?>

<?= $this->section('content') ?>

<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Buku</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Buku</li>
    </ol>


<?= $this->endSection();
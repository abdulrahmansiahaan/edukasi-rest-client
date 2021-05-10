<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : 
        unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>soal/tambah" class="btn btn-primary">Tambah
                Data Soal</a>
        </div>
    </div> -->

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar soal</h3>
            <?php if (empty($soal)) : ?>
                <div class="alert alert-danger" role="alert">
                data soal tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($soal as $recSoal) : ?>
                <li class="list-group-item">
                    <?= $recSoal['soal']; ?>
                    <a href="<?= base_url(); ?>soal/hapus/<?= $recSoal['id']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>soal/ubah/<?= $recSoal['id']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>soal/detail/<?= $recSoal['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
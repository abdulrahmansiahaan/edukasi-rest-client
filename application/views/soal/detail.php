<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Soal
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $soal['soal']; ?></h5>
                    <p class="card-text"><?= $soal['is_active']; ?></p>
                    <a href="<?= base_url(); ?>soal" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>
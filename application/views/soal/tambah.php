<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Soal
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="soal">Soal</label>
                            <input type="text" name="soal" class="form-control" id="soal">
                            <small class="form-text text-danger"><?= form_error('soal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="is_active">IS Active</label>
                            <input type="text" name="is_active" class="form-control" id="is_active">
                            <small class="form-text text-danger"><?= form_error('is_active'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
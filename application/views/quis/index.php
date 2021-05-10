<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : 
        unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">

        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Quis</h3>
            <hr>
            <?php if (empty($quis)) : ?>
                <div class="alert alert-danger" role="alert">
                data quis tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($quis as $recQuis) : ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title"><?= $recQuis['soal']; ?></h5>
                                
                                <?php if ( ! empty($recQuis['pilihanPertanyaan'])) { ?>
                                <table>
                                <?php
                                foreach ($recQuis['pilihanPertanyaan'] as $recPP): ?>

                                <tr>
                                    <td>#</td>
                                    <td>
                                        <div class="text-dark"><?= $recPP['pilihan']; ?>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <?php endforeach ?>
                                </table>                                
                                <?php } else { ?>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <textarea class="form-control form-control-sm <?php echo form_error('jawaban') ? 'is-invalid':'' ?>"
                                            name="jawaban" rows="6" placeholder="Tulis Jawaban..."></textarea>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="col-md-4">
                                <?php if ($recQuis['gambar'] == 'default.jpg') { ?>

                                <?php } else { ?>                                  
                                <img class="card-img-top" src="https://check-assignment.my.id/assets/images/<?= $recQuis['gambar']; ?>" alt="Card image cap">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <span class="badge badge-info float-right">Done</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title font-weight-bold text-primary"><?= $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form">
                    <form action="<?= base_url('Admin/tambah_faq_aksi') ?>" class="form" method="POST">
                        <div class="form-group row">
                            <label for="curl" class="control-label col-lg-2">Pertanyaan</label>
                            <div class="col-lg-10">
                                <input type="text" name="question" class="form-control" value="<?php echo set_value('question') ?>">
                                <?= form_error('question', ' <small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="curl" class="control-label col-lg-2">Jawaban</label>
                            <div class="col-lg-10">
                                <input type="text" name="answer" class="form-control" value="<?php echo set_value('answer') ?>">
                                <?= form_error('answer', ' <small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                                <button class="btn btn-success btn-icon-split" type="submit">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah</span>
                                </button>
                                <a href="<?= base_url('Admin/data_faq') ?>" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
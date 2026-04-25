<form class="kt-form" action="<?= $save_url ?>" method="post" id="kt_form_validation" data-kt-redirect-url="/hakakses">
    <div class="card shadow-sm">
        <div class="card-header ribbon ribbon-end ribbon-clip">
            <?php $color = $status_page == 'Create' ? 'bg-primary' : ($status_page == 'Update' ? 'bg-warning' : 'bg-info') ?>
            <div class="ribbon-label">
                <?= $status_page ?>
                <span class="ribbon-inner <?= $color ?>"></span>
            </div>
            <h3 class="card-title"><?= strtoupper($page_judul) ?></h3>
        </div>
        <div class="card-body">
            <input type="hidden" name="sgroupNamaOld" value="<?= $datas != FALSE ? $datas->sgroupNama : '' ?>">

            <div class="fv-row">
                <label>Hak Akses</label>
                <input type="text" class="form-control input_validated" name="sgroupNama" placeholder="Hak Akses"
                    aria-describedby="Hak Akses" value="<?= $datas != FALSE ? $datas->sgroupNama : '' ?>">
            </div>

            <div class="fv-row">
                <label>Keterangan</label>
                <input type="text" class="form-control input_validated" name="sgroupKeterangan" placeholder="Keterangan"
                    aria-describedby="Keterangan" value="<?= $datas != FALSE ? $datas->sgroupKeterangan : '' ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" id="kt_btn_submit" class="btn btn-primary hover-scale">
                <span class="indicator-label">Simpan</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <a href="/<?= $back_url ?>" class="btn btn-secondary ms-2 hover-scale">Kembali</a>
        </div>
    </div>
</form>
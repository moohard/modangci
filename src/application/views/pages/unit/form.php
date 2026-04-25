<form class="kt-form" action="<?= $save_url ?>" method="post" id="kt_form_validation"
    data-kt-redirect-url="/<?= $back_url ?>">
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
            <input type="hidden" name="unitIdOld" value="<?= $datas != FALSE ? $datas->unitId : '' ?>">
            <div class="fv-row mb-3">
                <label>Kode Unit</label>
                <input type="text" class="form-control" name="unitKode" placeholder="Kode Unit"
                    aria-describedby="Kode Unit" value="<?= $datas != FALSE ? $datas->unitKode : '' ?>">
            </div>
            <div class="fv-row mb-3">
                <label>Nama Unit</label>
                <input type="text" class="form-control" name="unitNama" placeholder="Nama Unit"
                    aria-describedby="Nama Unit" value="<?= $datas != FALSE ? $datas->unitNama : '' ?>">
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
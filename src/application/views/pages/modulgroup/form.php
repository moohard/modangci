<form class="kt-form" action="<?= $save_url ?>" method="post" id="kt_form_validation" data-kt-redirect-url="/<?= $this->uri->segment(1)
      ?>">
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
            <input type="hidden" name="susrmdgroupNamaOld"
                value="<?= $datas != FALSE ? $datas->susrmdgroupNama : '' ?>">

            <div class="fv-row mb-3">
                <label>Group Nama</label>
                <input type="text" class="form-control" name="susrmdgroupNama" placeholder="Group Nama"
                    aria-describedby="Group Nama" value="<?= $datas != FALSE ? $datas->susrmdgroupNama : '' ?>">
            </div>
            <div class="fv-row mb-3">
                <label>Group Display</label>
                <input type="text" class="form-control" name="susrmdgroupDisplay" placeholder="Group Display"
                    aria-describedby="Group Display" value="<?= $datas != FALSE ? $datas->susrmdgroupDisplay : '' ?>">
            </div>
            <div class="fv-row mb-3">
                <label>Group Icon</label>
                <textarea class="form-control"
                    name="susrmdgroupIcon"><?= $datas != FALSE ? $datas->susrmdgroupIcon : '' ?></textarea>
                <span class="form-text text-muted"><a
                        href="https://preview.keenthemes.com/html/metronic/docs/icons/keenicons" target="_blank"
                        rel="noopener noreferrer"> Lihat Referensi Icon</a></span>
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
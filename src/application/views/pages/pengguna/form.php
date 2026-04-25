<form class="kt-form" action="<?= $save_url ?>" method="post" id="kt_form_validation"
    data-kt-redirect-url="/<?= $this->uri->segment(1) ?>">
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
            <input type="hidden" name="susrNamaOld" value="<?= $datas != FALSE ? $datas->susrNama : '' ?>">
            <div class="fv-row mb-3">
                <label>Username</label>
                <input type="text" class="form-control input_validated" name="susrNama" placeholder="Username"
                    aria-describedby="Username" value="<?= $datas != FALSE ? $datas->susrNama : '' ?>">
            </div>
            <div class="fv-row mb-3">
                <div class="form-group">
                    <label>Hak Akses</label>
                    <select class="form-select input_validated" data-control="select2" data-placeholder="Pilih Role"
                        name="susrSgroupNama">
                        <option value=""></option>
                        <?php

                        foreach ($s_user_group as $row) :
                            echo '<option value="' . $row->sgroupNama . '" ' . ($datas != FALSE ? $datas->susrSgroupNama == $row->sgroupNama ? 'selected' : '' : '') . '>' . $row->sgroupNama . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
            </div>
            <div class="fv-row mb-3">
                <label>Profile Name</label>
                <input type="text" class="form-control input_validated" name="susrProfil" placeholder="Profile Name"
                    aria-describedby="Profile Name" value="<?= $datas != FALSE ? $datas->susrProfil : '' ?>">
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
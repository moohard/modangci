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
            <input type="hidden" name="susrmodulNamaOld" value="<?= $datas != FALSE ? $datas->susrmodulNama : '' ?>">

            <div class="fv-row mb-3">
                <label>Modul</label>
                <input type="text" class="form-control input_validated" name="susrmodulNama" placeholder="Modul"
                    aria-describedby="Modul" value="<?= $datas != FALSE ? $datas->susrmodulNama : '' ?>">
            </div>

            <div class="fv-row mb-3">
                <label>Group</label>
                <select class="form-select input_validated" data-control="select2" data-placeholder="Pilih Role"
                    name="susrmodulSusrmdgroupNama">
                    <option value=""></option>
                    <?php

                    foreach ($s_user_modul_group_ref as $row) :
                        echo '<option value="' . $row->susrmdgroupNama . '" ' . ($datas != FALSE ? $datas->susrmodulSusrmdgroupNama == $row->susrmdgroupNama ? 'selected' : '' : '') . '>' . $row->susrmdgroupDisplay . '</option>';
                    endforeach;
                    ?>
                </select>
            </div>
            <div class="fv-row mb-3">
                <label>Display</label>
                <input type="text" class="form-control input_validated" name="susrmodulNamaDisplay" placeholder="Display"
                    aria-describedby="Display" value="<?= $datas != FALSE ? $datas->susrmodulNamaDisplay : '' ?>">
            </div>
            <div class="fv-row mb-3">
                <label>Urut</label>
                <input type="number" class="form-control input_validated" name="susrmodulUrut" placeholder="Urut"
                    aria-describedby="Urut" value="<?= $datas != FALSE ? $datas->susrmodulUrut : '' ?>">
                <span class="form-text text-muted">Urutan menu dalam 1 grup, 1 - 10..</span>
            </div>
             <div class="fv-row">
                <div class="form-check form-switch mt-5">
                    <input <?= $datas != false ? $datas->susrmodulIsLogin == 1 ? 'checked="checked"' : '' : '' ?> value="1" name="susrmodulIsLogin" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Is Login?</label>
                </div>
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
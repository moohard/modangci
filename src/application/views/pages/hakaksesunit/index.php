<div class="card shadow-sm mb-5">
    <form action="<?= $show_url ?>" method="POST" id="kt_form_show">
        <div class="card-header">
            <h3 class="card-title"><?= strtoupper($page_judul) ?></h3>
        </div>
        <div class="card-body">
            <div class="fv-row">
                <div class="form-floating">
                    <select class="form-select input_validated" data-control="select2" name="hakakses"
                        data-placeholder="Pilih Role" id="floating-select">
                        <option value=""></option>
                        <?php

                        foreach ($s_user_group as $row) :
                            echo '<option value="' . $row->sgroupNama . '" >' . $row->sgroupNama . ' - ' . $row->sgroupKeterangan . '</option>';
                        endforeach;
                        ?>
                    </select>
                    <label for="floating-select">Role</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" id="kt_btn_show" class="btn btn-primary hover-scale">
                <span class="indicator-label">Show</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
</div>
<div id="response"></div>
<div id="response"></div>
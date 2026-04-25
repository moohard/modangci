<form action="<?= $save_url ?>" method="post" id="kt_form_validation" data-kt-redirect-url="/">
    <div class="card card-bordered shadow-sm">
        <div class="card-header">
            <h3 class="card-title"><?= strtoupper($judul) ?></h3>
        </div>
        <div class="card-body">
            <div class="w-75 me-auto ms-auto">
                <div class="fv-row">
                    <div class="form-floating">
                        <input type="text" name="susrNama" class="form-control" id="floatingInput"
                            placeholder="Masukkan Nama" value="<?=$susrNama!=false?$susrNama:''?>" readonly />
                        <label for="floatingInput">Username</label>
                    </div>
                </div>
				<div class="fv-row">
                    <div class="form-floating mt-7">
                        <input type="text" name="susrProfil" class="form-control" id="floatingInput"
                            placeholder="Masukkan Nama" value="<?=$susrProfil!=false?$susrProfil:''?>" readonly />
                        <label for="floatingInput">Nama Profil</label>
                    </div>
                </div>
                <div class="fv-row">
                    <div class="form-floating mt-7">
                        <select class="form-select" data-control="select2" data-placeholder="Pilih Hak Akses"
                            data-allow-clear="true" name="hakakses" id="hak_akses" data-hide-search="true">
                            <option value=""></option>
                            <?php
                            foreach ($hakakses as $row):
                                echo '<option value="' . $row->sgroupNama . '" >'.$row->sgroupNama.' - '.$row->sgroupKeterangan.'</option>';
                            endforeach;
                            ?>
                        </select>
                        <label>Hak Akses</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button id="kt_btn_submit" type="submit" class="btn btn-primary hover-elevate-down" data-redirecturl="/home">
                    <i class="ki-duotone ki-save-2 fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="indicator-label">
                        Simpan
                    </span>
                    <span class="indicator-progress">
                        Sedang menyimpan... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <a href="/home" class="btn btn-secondary hover-elevate-down ms-2">
                    <i class="ki-duotone ki-arrow-left fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i> Kembali
                </a>
            </div>
        </div>
    </div>
</form>
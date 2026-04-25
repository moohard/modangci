<form action="<?= $save_url ?>" method="post" id="kt_form_save">
    <input type="hidden" name="sgroupNama" value="<?= !empty($sgroupNama) ? $sgroupNama : '' ?>">
    <div class="card shadow-sm">
        <div class="card-header justify-content-end ribbon ribbon-start ribbon-clip">
            <div class="ribbon-label">
                Pilih Unit Kerja
                <span class="ribbon-inner bg-info"></span>
            </div>
            <div class="card-toolbar flex-end">
                <button type="submit" id="kt_btn_save" class="btn btn-primary hover-scale">
                    <span class="indicator-label">Simpan</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Unit Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($datas != FALSE)
                        {
                            $i = 1;
                            foreach ($datas as $row)
                            {
                                if (!empty($row->sgroupunitUnitId))
                                    $cek = "checked";
                                else
                                    $cek = "";
                                ?>
                                <tr>
                                    <th scope="row"><input type="checkbox" class="checked" <?= $cek ?> name="cekModul[]"
                                            value="<?= $row->unitId ?>" /></th>
                                    <td><?= $row->unitKode ?></td>
                                    <td><?= $row->unitNama ?></td>
                                    <?php

                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
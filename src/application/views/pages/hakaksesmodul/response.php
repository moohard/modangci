<form action="<?= $save_url ?>" method="post" id="kt_form_save">
    <input type="hidden" name="sgroupNama" value="<?= !empty($sgroupNama) ? $sgroupNama : '' ?>">
    <div class="card shadow-sm">
        <div class="card-header justify-content-end ribbon ribbon-start ribbon-clip">
            <div class="ribbon-label">
                Pilih Menu
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
                            <th>Modul</th>
                            <th>Modul Display</th>
                            <th>Group Modul</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($datas != FALSE)
                        {
                            $i = 1;
                            foreach ($datas as $row)
                            {
                                if (!empty($row->sgroupmodulSgroupNama))
                                    $cek = "checked";
                                else
                                    $cek = "";
                                ?>
                                <tr>
                                    <th scope="row"><input type="checkbox" class="checked" <?= $cek ?> name="cekModul[]"
                                            value="<?= $row->susrmodulNama ?>" /></th>
                                    <td><?= $row->susrmodulNama ?></td>
                                    <td><?= $row->susrmodulNamaDisplay ?></td>
                                    <td><?= $row->susrmdgroupDisplay ?></td>
                                </tr>
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
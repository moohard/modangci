<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title"><?= strtoupper($page_judul) ?></h3>
        <div class="card-toolbar">
            <a href="<?= $create_url ?>" class="btn btn-light-primary">
                <i class="ki-duotone ki-abstract-10 fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i> Create
            </a>
        </div>
    </div>
    <div class="card-body">
        <div id="overlay-element">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="table_general">
                    <thead class="fw-bold fs-6 text-gray-800">
                        <tr>
                            <th class="text-center w-20px">No</th>
                            <th class="text-center">Kode Unit</th>
                            <th class="text-center">Nama Unit</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($datas != FALSE)
                        {
                            $i = 1;
                            foreach ($datas as $row)
                            {
                                $key = $this->encryptions->encode($row->unitId, $this->config->item('encryption_key'));
                                ?>
                                <tr>
                                    <th scope="row" class="text-end"><?= $i++ ?></th>
                                    <td><?= $row->unitKode ?></td>
                                    <td><?= $row->unitNama ?></td>
                                    <td class="text-center">
                                        <a href="<?= $update_url . $key ?>"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Pengguna">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="<?= $delete_url . $key ?>"
                                            class="ts_remove_row btn btn-icon btn-bg-light btn-active-color-danger btn-sm"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Pengguna">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
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
</div>
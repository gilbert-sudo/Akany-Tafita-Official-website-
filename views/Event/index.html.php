<div class="card-body">
    <?= $error_msg; ?>
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table style="text-align:center;" id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Titre</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Heure</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Images</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($events as $event) {
                        ?>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0"><?= $event['title_event']; ?></td>
                                <td><?=$event['date_event']; ?></td>
                                <td><?= $event['time_event']; ?></td>
                                <td style=""><?= $event['description_event']; ?></td>
                                <td style="padding:4px"><img src="views/images/<?php echo $event['image']; ?>" width="120px" height="86px"></td>
                                <td style="padding:38px">
                                    <span>
                                        <button type="button"  style="background-color:royalblue;border:none;width:26px;height:26px" class="edit" id="edit<?=$i++;?>" onclick="editRow(<?=$i++;?>);"><i class="fa fa-edit"></i></button>
                                        &nbsp;
                                        <button type="button" style="background-color:royalblue;border:none;width:26px;height:26px" class="save" id="save<?=$i++;?>" onclick="saveRow(<?=$i++;?>);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M216.1 408.1C207.6 418.3 192.4 418.3 183 408.1L119 344.1C109.7 335.6 109.7 320.4 119 311C128.4 301.7 143.6 301.7 152.1 311L200 358.1L295 263C304.4 253.7 319.6 253.7 328.1 263C338.3 272.4 338.3 287.6 328.1 296.1L216.1 408.1zM128 0C141.3 0 152 10.75 152 24V64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0zM400 192H48V448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192z" />
                                            </svg>
                                        </button>
                                        &nbsp;<a href="index.php?controller=Events&task=suppress&id=<?= $event['id']; ?>"><button style="width:26px;height:26px; border-raduis:1px;background-color:darkred;border:none; color:white" class="delete" id="delete<?=$i++;?>" onclick="deleteRow(<?=$i++;?>);">X</button></a>
                                    </span>
                                </td>

            </div>
            </td>
            </tr>
        <?php
                        }
        ?>
        <tr>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="time"></td>
            <td><input type="text"></td>
            <td><input type="file"></td>
            <td>
                <button type="button" class="add" onclick="addRow();">ajouter </button>
            </td>
        </tr>
        </tbody>

        </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
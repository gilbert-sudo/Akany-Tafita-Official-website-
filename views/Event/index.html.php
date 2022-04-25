<div class="card-body">
    <?= $error_msg; ?>
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="wrapper">
                    <table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1>
                        <tr>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $i = 0;
                        foreach ($events as $event) {
                            $i++;

                        ?>
                            <tr id="<?= 'row' . $i; ?>">
                                <td id="<?= 'title_row' . $i; ?>"><?= $event['title_event']; ?></td>
                                <td id="<?= 'date_row' . $i; ?>"><?= $event['date_event']; ?></td>
                                <td id="<?= 'time_row' . $i; ?>"><?= $event['time_event']; ?></td>
                                <td id="<?= 'desc_row' . $i; ?>"><?= $event['description_event']; ?></td>
                                <td id="img_row<?= $i; ?>"><img id="<?= 'event_img' . $i; ?>" src="./views/images/<?= $event['image']; ?>" alt="" width="100px" height="100px"></td>
                                <td>
                                    <input type="button" id="<?= 'edit_button' . $i; ?>" value="Edit" class="edit" onclick="edit_row('<?= $i; ?>')">
                                    <input type="button" id="<?= 'save_button' . $i; ?>" value="Save" class="save" style="display:none;" onclick="save_row('<?= $i; ?>')">
                                    <input type="button" value="Delete" class="delete" onclick="delete_row('<?= $i; ?>')">
                                </td>
                            </tr>
                        <?php
                        } ?>
                        <br>
                        <tr>
                            <td><input type="text" id="new_title"></td>
                            <td><input type="date" id="new_date"></td>
                            <td><input type="time" id="new_time"></td>
                            <td><input type="text" id="new_desc"></td>
                            <td>
                                <img id="blah" style="display:none;" src="" alt="your image" width="100px" height="100px" />
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><input type="file" class="img" id="imgInp" onchange="showPreview(event);"></span>
                                </div>
                            </td>
                            <td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
                        </tr>

                    </table>
                </div>
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
<div class="card-body">
    <?=$error_msg;?>
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
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date et Heure</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Images</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($events as $event) {
                        ?>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0"><?= $event['title_event']; ?></td>
                                <td><?= $event['time_event']; ?><br><?= $event['date_event']; ?></td>
                                <td style=""><?= $event['description_event']; ?></td>
                                <td style="padding:4px"><img src="views/images/<?php echo $event['image']; ?>" width="120px" height="86px"></td>
                                <td style="padding:38px">
                                <a href="index.php?controller=Events&task=suppress&id=<?= $event['id']; ?>"><button style="width:26px;height:26px; border-raduis:1px;background-color:darkred;border:none; color:white">X</button></a>
                                    &nbsp;&nbsp;<button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:royalblue;border:none;width:26px;height:26px"><i class="fa fa-edit"></i></button>


                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#007bff;border-color:#007bff">
                                                    <h5 style="color:white" class="modal-title" id="exampleModalLabel">Editer cette partie du tableau</h5>
                                                    <button type="button" style ="color:white" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" enctype="multipart/form-Data" action="index.php?controller=Events&task=update&id=<?=$event['id'];?>">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Titre</label>
                                                            <input type="text" class="form-control" id="recipient-name" value  ="<?=$event['title_event'];?>">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Date</label>
                                                                    <input type="date" name="date_event" class="form-control" id="recipient-name" value  ="<?=$event['date_event'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Heure</label>
                                                                    <input type="time" name="time_event" class="form-control" id="recipient-name" value  ="<?=$event['time_event'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Image</label>
                                                                    <input type="file" name="image" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>
                                                           </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">description </label>
                                                                <textarea class="form-control" name="description_event" rows="1" id="message-text"><?=$event['description_event'];?></textarea>
                                                            </div>
                                                        
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                    <button type="submit" name="update_event" class="btn btn-primary">OK</button>
                                                </div>
                                                </form>

                                            </div>

                                        </div>
                                    </div>
            </div>
            </td>
            </tr>
        <?php
                        }
        ?>
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
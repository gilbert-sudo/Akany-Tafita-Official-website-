<div class="card card-info">
    <p id="error_msg"> <?= $error_msg; ?></p>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Ajouter un blog</h3>
        </div>
        <div class="card-body">
            <!-- Color Picker -->
            <form method="POST" enctype="multipart/form-Data" action=" ">
                <div class="form-group">
                    <labe>Objet</label>
                        <input type="text" id="event_title" class="form-control my-colorpicker1 colorpicker-element" required <?= \renderer::resetValue($object); ?> data-colorpicker-id="1" data-original-title="" name="object">
                </div>


                <div class="form-group" style="border-color:white">
                    <label>Image</label>
                    <img id="blah" style="display:none;" src="" alt="your image" width="200px" height="200px" />
                    <div>
                        <span class="btn btn-file btn-success"><span id="selectImg" class="fileupload-new">Select image</span><input type="file" name='image' class="img" id="blah" required onchange="showPreview(event);"></span>
                    </div>


                </div>


                <div class="form-group">
                    <label>contenues</label>
                    <textarea type="text" class="form-control float-right" id="event_desc" rows="1" name="contain_1" required><?= \renderer::resetValue($contain_1, 'textarea'); ?></textarea>
                </div>
                <div class="form-group">
                    <label>deuxième contenues</label>
                    <textarea type="text" class="form-control float-right" id="event_desc" rows="1" name="contain_2" required><?= \renderer::resetValue($contain_2, 'textarea'); ?></textarea>
                </div>
                <div style="margin-top:60px; ">
                    <button type="submit" id="insertEvent" class="btn btn-primary" name="add_blog">ajouter</button>
                </div>
            </form>
        </div>

    </div>

    <!-- /.card-body -->
</div>
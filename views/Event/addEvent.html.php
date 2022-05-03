<div class="card card-info">
<p id="error_msg"> <?= $error_msg; ?></p>
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Ajouter un événement</h3>
    </div>
    <div class="card-body">
      <!-- Color Picker -->
      <form method="POST" enctype="multipart/form-Data" action="#">
        <div class="form-group">
          <label>Titre</label>
          <input type="text" id="event_title" class="form-control my-colorpicker1 colorpicker-element" required <?= \renderer::resetValue($title_event); ?> data-colorpicker-id="1" data-original-title="" name="title_event">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-3 order-last">
              <div class="form-group">
                <label>Heure</label>
                <input type="time" class="form-control float-right" id="event_time" required <?= \renderer::resetValue($time_event); ?> name="time_event">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control float-right" id="event_date" required <?= \renderer::resetValue($date_event); ?> name="date_event">
              </div>
            </div>
            <div class="col order-first">
              <div class="form-group" style="border-color:white">
                <label>Image</label>
                <img id="blah" style="display:none;" src="" alt="your image" width="200px" height="200px" />
                <div>
                  <span class="btn btn-file btn-success"><span id="selectImg" class="fileupload-new">Select image</span><input type="file" name='image' class="img" id="blah" required onchange="showPreview(event);"></span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea type="text" class="form-control float-right" id="event_desc" rows="1" name="description_event" required><?= \renderer::resetValue($description_event, 'textarea'); ?></textarea>
        </div>
        <div style="margin-top:60px; ">
          <button type="submit" id="insertEvent" class="btn btn-primary" name="add_event">ajouter</button>
        </div>
      </form>
    </div>

  </div>

  <!-- /.card-body -->
</div>
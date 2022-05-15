<div class="card card-info">
  <p id="error_msg"> <?= $error_msg; ?></p>
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Ajouter un responsable</h3>
    </div>
    <div class="card-body">
      <!-- Color Picker -->
      <form method="POST" enctype="multipart/form-Data" action=" ">

        <div class="container">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nom</label>
                <input type="text" id="name_resp" class="form-control my-colorpicker1 colorpicker-element" required <?= \renderer::resetValue($name_resp); ?> data-colorpicker-id="1" data-original-title="" name="name_resp">
              </div>
            </div>
            <div class="col-6 order-last">
              <div class="form-group">
                <label>Prénom</label>
                <input type="text" class="form-control float-right" id="firstname_resp" required <?= \renderer::resetValue($firstname_resp); ?> name="firstname_resp">
              </div>
            </div>
          </div>



        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group" style="border-color:white">
              <label>Image</label>
              <img id="blah" style="display:none;" src="" alt="your image" width="200px" height="200px" />
              <div>
                <span class="btn btn-file btn-success"><span id="selectImg" class="fileupload-new">Select image</span><input type="file" name='image' class="img" id="blah" required onchange="showPreview(event);"></span>
              </div>
            </div>
          </div>
            <div class="col-6">
              <div class="form-group">
                <label>fonction</label>
                <textarea type="text" class="form-control float-right" id="event_desc" rows="1" name="function_resp" required> <?= \renderer::resetValue($function_resp, 'textarea'); ?></textarea>
              </div>
            </div>
          
        </div>

        <div style="margin-top:60px; ">
          <button type="submit" id="insertEvent" class="btn btn-primary" name="add_resp">ajouter</button>
        </div>
      </form>
    </div>

  </div>

  <!-- /.card-body -->
</div>
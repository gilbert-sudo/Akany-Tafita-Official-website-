<div class="card card-info">
<p id="error_msg"> <?= $error_msg; ?></p>
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Ajouter un témoignage</h3>
    </div>
    <div class="card-body">
      <!-- Color Picker -->
      <form method="POST" enctype="multipart/form-Data" action=" ">
        <div class="form-group">
          <label>Nome du témoin</label>
          <input type="text" id="" class="form-control my-colorpicker1 colorpicker-element" required <?= \renderer::resetValue($name_witness); ?> data-colorpicker-id="1" data-original-title="" name="name_witness">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-7">
              <div class="form-group">
                <label>Titre</label>
                <input type="text" class="form-control float-right" id="" required <?= \renderer::resetValue($title); ?> name="title">
              </div>
            </div>
            <div class="col-5">
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
                <label>Fonction</label>
                <input type="text" class="form-control float-right" id="" required <?= \renderer::resetValue($function); ?> name="function">
              </div>
        <div class="form-group">
          <label>Lien du vidéo</label>
          <textarea type="text" class="form-control float-right" id="event_desc" rows="1" name="link_video" required><?= \renderer::resetValue($link_video, 'textarea'); ?></textarea>
        </div>
        <div style="margin-top:60px; ">
          <button type="submit" id="insertEvent" class="btn btn-primary" name="add_witness">ajouter</button>
        </div>
      </form>
    </div>

  </div>

  <!-- /.card-body -->
</div>
<div class="card card-primary">
  <?=$error_msg;?>
  <div class="card-header">
    <h3 class="card-title">Editer mon compte</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form method="POST" enctype="multipart/form-data" action=" ">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nouveau nom d' Administrateur</A></label>
        <input type="text" class="form-control" id="" name="newAdminName" <?php \renderer::resetValue($newAdminName);?> placeholder="Enter email">
      </div>

      <div class="form-group" style="border-color:white">
        <label>Image</label>
        <img id="blah" style="display:none;" src="" alt="your image" width="200px" height="200px" />
        <div>
          <span class="btn btn-file btn-success"><span id="selectImg" class="fileupload-new">Selectionner un image</span><input type="file" name='image' class="img" id="blah"  required onchange="showPreview(event);"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe actuel</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
          </div>
          <input type="password" class="input form-control" id="password0"  required name="currentPass" placeholder="Password">
          <div class="input-group-append">
                <span class="input-group-text" id="spanEye">
                  <i class="fas fa-eye" id="show_eye0"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye0"></i>
                </span>
              </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nouveau mot de passe</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
          </div>
          <input type="password" class="form-control" name="newPass" id="password1" <?php \renderer::resetValue($newPass);?> required  placeholder="Password">
          <div class="input-group-append">
                <span class="input-group-text" id="spanEye">
                  <i class="fas fa-eye" id="show_eye1"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                </span>
              </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirmer le nouveau mot de passe</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
          </div>
          <input type="password" class="form-control" name="newPassConfirm" <?php \renderer::resetValue($newPassConfirm);?> required id="passoword2" placeholder="Password">
          <div class="input-group-append">
                <span class="input-group-text" id="spanEye">
                  <i class="fas fa-eye" id="show_eye2"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
                </span>
              </div>
      </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" name="update">Mettre à jour</button>
    </div>
  </form>
</div>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Editer mon compte</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form>
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nouveau nom d' Administrateur</A></label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>

      <div class="form-group" style="border-color:white">
        <label>Image</label>
        <img id="blah" style="display:none;" src="" alt="your image" width="200px" height="200px" />
        <div>
          <span class="btn btn-file btn-success"><span id="selectImg" class="fileupload-new">Selectionner un image</span><input type="file" name='image' class="img" id="blah" required onchange="showPreview(event);"></span>
        </div>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe actuel</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
          </div>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nouveau mot de passe</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
          </div>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirmer le nouveau mot de passe</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
          </div>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

      </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>
  </form>
</div>
<div class="card card-danger">
  <div class="card-header">
    <h3 class="card-title">Mettre les contactes à jour</h3>
  </div>
  <div class="card-body">
    <!-- Date dd/mm/yyyy -->
    <div class="form-group">
      <label>Addresse:</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->

    <!-- Date mm/dd/yyyy -->

    <!-- /.form group -->

    <!-- phone mask -->
    <div class="form-group">
      <label>Numéro de teléphone:</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text">
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->

    <!-- phone mask -->
    <div class="form-group">
      <label>Addresse email:</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa-solid fa-envelope-open-text"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" inputmode="text">
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->

    <!-- IP mask -->
    <div class="form-group">
      <label>Page facebook:</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa-brands fa-facebook"></i></span>
        </div>
        <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" inputmode="decimal">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->

  </div>
  <!-- /.card-body -->
</div>
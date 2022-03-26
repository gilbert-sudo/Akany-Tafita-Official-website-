<div class="card card-info">
    <?php
    \Renderer::showError('babababbababababbababababab.');
    ?>
    <div class="card-header">
        <h3 class="card-title">Demande de don</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Votre sujet:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Le motant que vous demander:</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Motif de la demande:</label>
                <textarea class="form-control" rows="3" placeholder="Ecriver ici ..."></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ajouter une image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choisir une image</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Publier</button>
        </div>
    </form>

</div>
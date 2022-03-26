<div class="card card-info">
    <?=$error_msg;?>
    <div class="card-header">
        <h3 class="card-title">Demande de don</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form method="POST" enctype="multipart/form-data" action="#">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Votre sujet:</label>
                <input type="text" name="sujet" class="form-control" id="exampleInputEmail1" placeholder="Ecriver ici ..." required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Le motant que vous demander:</label>
                <input type="number" name="montant" class="form-control" id="exampleInputPassword1" placeholder="Ecriver un chiffre" required>
            </div>
            <div class="form-group">
                <label>Motif de la demande:</label>
                <textarea class="form-control" name="motif" rows="3" placeholder="Ecriver ici ..." required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ajouter une image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="file" required>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="submit" value="Publier" class="btn btn-primary">
        </div>
    </form>

</div>
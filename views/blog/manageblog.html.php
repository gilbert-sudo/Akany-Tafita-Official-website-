<div class="card">
    <div class="card-header">
        <h3 class="card-title">Toutes les demandes</h3>

        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <?php echo"bon voyage";?>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                    <th>Date</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                $i = 0;
                foreach ($donations as $key) {
                ++$i;
                ?>

                    <tr>
                        <td><?= $i ?>.</td>
                        <td><?= $key['but'] ?></td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-danger">55%</span></td>
                        <td><?= $key['created_at'] ?></td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
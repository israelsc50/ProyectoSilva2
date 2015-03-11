        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->



                <div class="row">
                    <div class="col-lg-6">
                        <h2>Bordered Table</h2>
                        <div class="table-responsive">
                            
                            <table class="table table-bordered table-hover">
                                
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>titulo</th>
                                        <!-- <th>contenido</th> -->
                                        <th>autor</th>
                                        <th>imagen</th>
                                        <th>categoria</th>
                                        <th>created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($publicaciones as $publicacion): ?>
                                    <tr>
                                        <td><?php echo $publicacion['Publicacion']['id']; ?></td>
                                        <td><?php echo $publicacion['Publicacion']['titulo']; ?></td>
                                        <!-- <td><?php echo $publicacion['Publicacion']['contenido']; ?></td> -->
                                        <td><?php echo $publicacion['Autor']['nombre']; ?></td>
                                        <td><?php echo $publicacion['Publicacion']['imagen']; ?></td>
                                        <td><?php echo $publicacion['Publicacion']['categoria']; ?></td>
                                        <td><?php echo $publicacion['Publicacion']['created']; ?></td>
                                    </tr>

                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
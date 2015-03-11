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
                                        <th>nombres</th> 
                                        <th>apellidos</th>
                                        <th>NickName</th>
                                        <th>Publicaciones Recientes</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    
                                    <?php foreach($autores as $autor): ?>
                                    <?php $Publicaciones =$autor['Publicacion'] ?>
                                    <tr>
                                        <td><?php echo $autor['Autor']['id']; ?></td>
                                        <td><?php echo $autor['Autor']['nombre']; ?></td>
                                        <td><?php echo $autor['Autor']['apellido']; ?></td>
                                        <td><?php echo $autor['Autor']['nick']; ?></td>
                                        <td>
                                        <?php foreach($Publicaciones as $publicacion): ?>
                                        <?php echo $publicacion['id']; ?>
                                        <?php endforeach; ?></td>
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
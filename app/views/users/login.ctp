        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form id="frmAutor" action="http://localhost/cakephp-1.3.20/autor/save_autor" role="form" method="POST">

                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="data[nombre]" class="form-control">
                            </div>



                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="password" name="data[apellido]" class="form-control">
                            </div>
      

                            <a onclick="Autor.guardar()" class="btn btn-default">Submit Button</a>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
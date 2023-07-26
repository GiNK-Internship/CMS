@extends('sidebar')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tabel Item</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td> <a class="btn btn-info btn-sm" href="linkedin.com/bayunindioko ">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>

                                                <a class="btn">
                                                    <form action="https://hmif.if.itera.ac.id/adminArticle/2"
                                                        method="POST">
                                                        <input type="hidden" name="_token"
                                                            value="l69MCcpN3xTeJdlxybk6AzlDbTxB3QPp0wwsqQgO"> <input
                                                            type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </button>
                                                    </form>
                                                </a>
                                            </td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td> <a class="btn btn-info btn-sm" href="linkedin.com/bayunindioko ">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>

                                            <a class="btn">
                                                <form action="https://hmif.if.itera.ac.id/adminArticle/2"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="l69MCcpN3xTeJdlxybk6AzlDbTxB3QPp0wwsqQgO"> <input
                                                        type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </a>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td> <a class="btn btn-info btn-sm" href="linkedin.com/bayunindioko ">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>

                                            <a class="btn">
                                                <form action="https://hmif.if.itera.ac.id/adminArticle/2"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="l69MCcpN3xTeJdlxybk6AzlDbTxB3QPp0wwsqQgO"> <input
                                                        type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </a>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5
                                            </td>
                                            <td>Win 95+</td>
                                            <td>5.5</td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td> <a class="btn btn-info btn-sm" href="linkedin.com/bayunindioko ">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>

                                            <a class="btn">
                                                <form action="https://hmif.if.itera.ac.id/adminArticle/2"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="l69MCcpN3xTeJdlxybk6AzlDbTxB3QPp0wwsqQgO"> <input
                                                        type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </a>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 6
                                            </td>
                                            <td>Win 98+</td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td> <a class="btn btn-info btn-sm" href="linkedin.com/bayunindioko ">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>

                                            <a class="btn">
                                                <form action="https://hmif.if.itera.ac.id/adminArticle/2"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="l69MCcpN3xTeJdlxybk6AzlDbTxB3QPp0wwsqQgO"> <input
                                                        type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </a>
                                        </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection

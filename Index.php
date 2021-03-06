<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

    <link rel='stylesheet' type='text/css' media='screen' href='lib/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/bootstrap-4.3.1-dist/css/bootstrap.min.css'>

    <link rel='stylesheet' type='text/css' media='screen' href='lib/fontawesome-5.8.2-web/css/all.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/fontawesome-5.8.2-web/css/brands.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/fontawesome-5.8.2-web/css/fontawesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/fontawesome-5.8.2-web/css/regular.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/fontawesome-5.8.2-web/css/solid.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/fontawesome-5.8.2-web/css/svg-with-js.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='lib/fontawesome-5.8.2-web/css/v4-shims.min.css'>
    <title>Teste</title>
</head>

<body class="bg-light">
    <div class="container-fluid ">

        <div class="row">
            <div class="col-sm-2 pt-3 bg-white d-none d-lg-block">
                <div class="logo border border-dark">
                    <h3 class="p-3 text-center text-dark">Logo</h3>
                </div>
                <ul class="nav flex-column text-sm-center text-md-left">
                    <li class="nav-item d-inline">
                        <a class="nav-link pl-0" href="Index.php"><i class="fas fa-cubes pr-3"></i>index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="Paginas/Dashboard.php"><i class="far fa-file  pr-3"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="Paginas/DataTable.php"><i class="far fa-star  pr-3"></i>Data Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="#"><i class="far fa-id-badge  pr-3"></i>Opção 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="#"><i class="fas fa-shield-alt  pr-3"></i>Opção 5</a>
                    </li>
                </ul>
            </div>

            <nav class="navbar navbar-expand-lg col-12 navbar-light bg-white d-block d-lg-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item d-inline">
                            <a class="nav-link" href="Index.php"><i class="fas fa-cubes pr-3"></i>index</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Paginas/Dashboard.php"><i
                                    class="far fa-file  pr-3"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Paginas/DataTable.php"><i class="far fa-star  pr-3"></i>Data
                                Table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-id-badge  pr-3"></i>Opção 4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shield-alt  pr-3"></i>Opção 5</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-12 col-lg-10 pt-3">
                <h3 class="pb-2 border-bottom pl-1">Título da página</h3>

                <div class="col-12 mt-4 border rounded bg-caixa shadow-box-princ">
                    <form class="form-inline">
                        <div class="col-12 pt-3 pl-0 ">
                            <h5>Subtitulo</h5>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6  col-lg-4">
                                <div class="form-group">
                                    <label for="input1">Textarea Label</label>
                                    <input type="text" class="form-control" id="input1" placeholder="Placeholder Text">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="input2">Example select</label>
                                    <select class="form-control" id="input2">
                                        <option selected class="muted">Selecione...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="input3">Textarea Label</label>
                                    <input type="text" class="form-control" id="input3" placeholder="Placeholder Text">
                                </div>
                            </div>
                            <!-- </div> -->



                            <!-- <div class="row mt-lg-4"> -->
                            <div class="col-12 col-md-6 col-lg-4 mt-auto mt-lg-4">
                                <div class="form-group">
                                    <label for="input4">Textarea Label</label>
                                    <input class="form-control" type="text" placeholder="Placeholder Text" readonly>
                                </div>
                            </div>

                            <div class="col-12 col-md-6  col-lg-4 mt-lg-4">
                                <div class="form-group">
                                    <label for="input5">Textarea Label</label>
                                    <input type="text" class="form-control" id="input5" placeholder="Placeholder Text">
                                </div>
                            </div>

                            <div class="col-12 col-md-6  col-lg-4 mt-lg-4">
                                <div class="form-group">
                                    <label for="input6">Textarea Label <span class="ml-5 pl-3">(opcional)</span></label>
                                    <input type="text" class="form-control " id="input6" placeholder="Placeholder Text">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-3 pl-0 mt-3">
                            <h5>Subtitulo</h5>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="input7">Example select<span class="ml-5 pl-3">(opcional)</span></label>
                                    <select class="form-control" id="input7">
                                        <option selected class="muted">Selecione...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="input8">Example select</label>
                                    <select class="form-control" id="input8">
                                        <option selected class="muted">Selecione...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="input9">Example select</label>
                                    <select class="form-control" id="input9">
                                        <option selected class="muted">Selecione...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-12  col-lg-4">
                                <!-- <a class="btn btn-green" href="#" role="button">Main<button></button></a> -->
                                <button type="button" class="btn btn-green">MAIN BUTTON</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src='js/index.js'></script>
    <script src='js/jquery/jquery-3.3.1.min.js'></script>
    <script src='js/jquery/jquery-ui.min.js'></script>

    <script src='lib/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js'></script>
    <script src='lib/bootstrap-4.3.1-dist/js/bootstrap.min.js'></script>

</body>

</html>
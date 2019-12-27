<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/index.css'>

    <link rel='stylesheet' type='text/css' media='screen' href='../lib/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css'>
    <link rel='stylesheet' type='text/css' media='screen'
        href='../lib/bootstrap-4.3.1-dist/css/bootstrap-reboot.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../lib/bootstrap-4.3.1-dist/css/bootstrap.min.css'>

    <link rel='stylesheet' type='text/css' media='screen' href='../lib/fontawesome-5.8.2-web/css/all.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../lib/fontawesome-5.8.2-web/css/brands.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../lib/fontawesome-5.8.2-web/css/fontawesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../lib/fontawesome-5.8.2-web/css/regular.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../lib/fontawesome-5.8.2-web/css/solid.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../lib/fontawesome-5.8.2-web/css/svg-with-js.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../lib/fontawesome-5.8.2-web/css/v4-shims.min.css'>
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
                        <a class="nav-link" href="../Index.php"><i class="fas fa-cubes pr-3"></i>Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.php"><i class="far fa-file  pr-3"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="DataTable.php"><i class="far fa-star  pr-3"></i>Data Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-id-badge  pr-3"></i>Opção 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shield-alt  pr-3"></i>Opção 5</a>
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
                            <a class="nav-link" href="../Index.php"><i class="fas fa-cubes pr-3"></i>index</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Dashboard.php"><i class="far fa-file  pr-3"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="DataTable.php"><i class="far fa-star  pr-3"></i>Data Table</a>
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
                <h3 class="pb-2 border-bottom">Dashboard</h3>

                <div class="col-12 mt-4 border rounded bg-caixa shadow-box-princ">
                    <div class="row">
                        <div class="col-12 px-0">
                            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-left pl-4" id="home-tab" data-toggle="tab" href="#indgerais"
                                        role="tab" aria-controls="home" aria-selected="true">Indicadores gerais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-left pl-4" id="profile-tab" data-toggle="tab" href="#indetapas" role="tab"
                                        aria-controls="etapas" aria-selected="false">Indicadores de etapas</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="indgerais" role="tabpanel">
                            <div class="row my-3">
                                <div class="col-12 col-md-4">
                                    <div class="card  mt-3 mt-md-auto mb-3 mb-md-auto">

                                        <div class="card-body">
                                            <p class="card-title text-secondary  mb-3">Cartões disponíveis</p>
                                            <p class="card-text text-left">
                                                <span class="border rounded-circle bg-light p-2 txt-green">
                                                    <i class="far fa-credit-card"></i></span> 
                                                    <span class="px-4 mx-3">0000</span>
                                                    <i class="fas fa-angle-right float-right"></i>
                                                    
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="card mt-3 mt-md-auto mb-3 mb-md-auto">

                                        <div class="card-body">
                                            <p class="card-title text-secondary  mb-3">Membros em análise</p>
                                            <p class="card-text text-left">
                                                <span class="border rounded-circle bg-light p-2 text-primary"><i
                                                        class="far fa-id-badge p-1"></i></span> <span
                                                    class="px-4 mx-3">0000</span> <i
                                                    class="fas fa-angle-right float-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="card mt-3 mt-md-auto mb-3 mb-md-auto">

                                        <div class="card-body">
                                            <p class="card-title text-secondary mb-3">Membros cadastrados</p>
                                            <p class="card-text text-left">
                                                <span class="border rounded-circle bg-light p-2 text-primary"><i class="fas fa-user-check p-1"></i></span> <span
                                                    class="px-4 mx-3">0000</span> <i
                                                    class="fas fa-angle-right float-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="tab-pane fade show text-align form-new" id="indetapas" role="tabpanel">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src='../js/index.js'></script>
    <script src='../js/jquery/jquery-3.3.1.min.js'></script>
    <script src='../js/jquery/jquery-ui.min.js'></script>

    <script src='../lib/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js'></script>
    <script src='../lib/bootstrap-4.3.1-dist/js/bootstrap.min.js'></script>
</body>

</html>
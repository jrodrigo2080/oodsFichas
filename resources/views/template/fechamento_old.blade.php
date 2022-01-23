<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>ODDS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="/painel">ODDS</a>
        <ul class="app-nav">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                        <li><button class="dropdown-item" ><i class="fa fa-sign-out fa-lg"></i> Logout</button></li>
                    </ul>
                </li>
            </form>

        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div style="text-align: center">
                <p class="app-sidebar__user-name" >ODDS Fichas</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item active" href="/home"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Início</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Fechamento</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/agentes"><i class="icon fa fa-circle-o"></i>Agentes</a></li>
                    <li><a class="treeview-item" href="/clubes"><i class="icon fa fa-circle-o"></i>Clubes</a></li>
                    <li><a class="treeview-item" href="/usuario"><i class="icon fa fa-circle-o"></i>Usuários</a></li>
                    <li><a class="treeview-item" href="/vinculacao"><i class="icon fa fa-circle-o"></i>Vinculação</a></li>
                    <li><a class="treeview-item" href="/fechamento"><i class="icon fa fa-circle-o"></i>Fechamento</a></li>
                </ul>
            </li>
        </ul>
    </aside>

</body>
</html>
@include('template._includes.style2')
<div class="app-content">
    <div class="app-title">
        <div class="div">
            <h1><i class="fa fa-laptop"></i> Fechamento</h1>
        </div>
    </div>

    <div class="tile mb-1">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="mb-3 line-head" id="buttons">Dados do Fechamento</h2>
                        <div class="row">
                            <div class="borda">
                                <div style="flex-direction: row;" id="div1">
                                    <table style="margin:0; width: max-content;"  class="border-estilo">
                                        <tr>
                                            <th style="background-color:#CF9E33;">PRINT</th>
                                            <th style="background-color:#CF9E33;">AGÊNCIA</th>
                                            <th style="background-color:#CF9E33;">
                                            <th style="background-color:#CF9E33;">
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td><span class="input-group-text">$</span></td>
                                            <td><input type="text"></td><th><button type="button" class="btn btn-warning">Inserir</button>
                                            </th>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td><span class="input-group-text">$</span></td>
                                            <td><input type="text"> <th><button type="button" class="btn btn-warning">Inserir</button></th></td>
                                        </tr>

                                    </table>
                                </div>
                                <div id="div1">
                                    <table id="border-estilo">
                                        <tr>
                                            <th style="flex-direction:row;  border-radius: 8px; padding: 55px; background-color:#CF9E33;">SUPREMA</th>
                                        </tr>
                                    </table>
                                </div>
                                <div style="flex-direction: row;" id="div3">
                                    <table id="border-estilo">
                                        <tr>
                                            <th style="border-radius: 5px;  padding: -20px; background-color: #CF9E33;">Porcentagem</th>
                                            <input placeholder="50%" disabled height="80px" width="150px" padding="200px" alt=""></input>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card" style="width:104rem; height: 729px; padding:225px; margin: 45px; margin-left: 0px; ">
                                    <div class="card1" style =" display:block; width: 780px;  margin-left:-315px;  margin-top:-210px; margin-left: -220px;  padding: 70px;"  alt="">
                                      <!-- partial:index.partial.html -->
                                        <form class="upload-imagem">
                                            <h6>Insira uma nova imagem</h6> <img src="https://img.icons8.com/cute-clipart/40/000000/image-file.png"/>
                                            <button class="btn btn-warning"> <input type="file" class="upload" required></button>
                                        </form>
                                        <img class="imagem" src="http://via.placeholder.com/350x150" alt="Sua imagem" width="680" height="442">
                                        <div>
                                            <button class="btnAtualiza btn btn-lg btn-warning">Atualiza imagem</button>
                                        </div>
                                    </div>

                                    <div class="cortada">
                                        <img style=" flex-direction: row; float: right; width: 695px; padding: -50px; margin-top: -650px; margin-right: -200px;";
                                             src="images/cortada.jpeg" alt="">

                                        <div class="div-table" style="margin: 698px; margin-top: -310px;">
                                            <table class="table" style="width: 60%">
                                                <thead class="thead-dark">
                                                <div >
                                                    <tr >
                                                        <th class="col-xs-10 text-center">Resultado:<input type="text"></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-xs-10 text-center">RaAKE TOTAL: <input type="text"></th>
                                                    </tr>
                                                    <tr>
                                                       <th class="col-xs-10 text-center">RAKEBACK: <input type="text"></th>
                                                    </tr>
                                                </div>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <br>

                            @include('template._includes.script')
                        </div>
                </div>
            </div>
        </div><br>
    </div>
</div>

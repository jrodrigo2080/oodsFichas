<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Main CSS-->
    <?php echo $__env->make('template._includes.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('template._includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="app sidebar-mini">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="/painel">ODDS</a>
    <ul class="app-nav">
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
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
                <li><a class="treeview-item" href="/relatoriofechamento"><i class="icon fa fa-circle-o"></i>Relatorio</a></li>
            </ul>
        </li>
    </ul>
</aside>
<?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/template/_includes/cabecalho.blade.php ENDPATH**/ ?>
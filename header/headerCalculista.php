<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MARFRA | Calculista</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
     <link href="css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="skin-1">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <a href="index.php"><img alt="image" class="img-circle" width="170px" src="img/MARFRA-BRASIL.png"/></a>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-md"> <strong class="font-bold">Marcos Rua</strong>
                             </span> <span class="text-muted text-xs block">Master Admin<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="perfil.php">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="OrcamentoCalculo.php">Calculista</a></li>
                            <li class="divider"></li>
                            <li><a href="login.php">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <img src="img/logo_top.png" alt="logotipo" width="50">
                    </div>
                </li>
                <li>
                    <a href="TodosUsuarios_master.php"><i class="fa fa-users"></i> <span class="nav-label">Usuários</span><span class="label label-primary pull-right" title="Todos usuários cadastrados visualizados">8 / 8</span></a>
                </li>
                <li>
                    <a href="orcamento_definitivo.php"><i class="fa fa-suitcase"></i> <span class="nav-label">Clientes</span><span class="label label-primary pull-right" title="Todos clientes cadastrados visualizados">8 / 8</span></a>
                </li>
                <li>
                    <a href="orcamento_tecnico.php"><i class="fa fa-dollar"></i> <span class="nav-label">Orçamento</span><span class="label label-warning pull-right" title="Restam 8 orçamentos para serem visualizados">16 / 24</span></a>
                </li>
                <li>
                    <a href="orcamento_definitivo.php"><i class="fa fa-money"></i> <span class="nav-label">Pedido</span><span class="label label-primary pull-right" title="Nenhum pedido novo">8 / 8</span></a>
                </li>
            </ul>
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
            <span>Retrair / Expandir menu</span>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bem vindo ao SGi+ da MAFRA BRASIL</span>
                </li>
                <li class="dropdown">
                    <a class="count-info" title="calendário" href="calendario_notificacao.php">
                        <i class="fa fa-calendar"></i> 
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" title="notificações gerais" data-toggle="dropdown" href="notificacoes_todas.php">
                        <i class="fa fa-certificate" ></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.php">
                                <div>
                                    <i class="fa fa-user fa-cogs"></i> Orçamento 'A' editado
                                    <span class="pull-right text-muted small">4 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.php">
                                <div>
                                    <i class="fa fa-user fa-fw"></i> Orçamento 'B' editado
                                    <span class="pull-right text-muted small">12 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.php">
                                <div>
                                    <i class="fa fa-dollar fa-fw"></i> Novo orçamento
                                    <span class="pull-right text-muted small">4 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notificacoes_todas.php">
                                    <strong>Veja todas as notificações</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" title="notificações calculista" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.php">
                                <div>
                                    <i class="fa fa-user fa-cogs"></i> Orçamento 'A' editado
                                    <span class="pull-right text-muted small">4 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.php">
                                <div>
                                    <i class="fa fa-user fa-fw"></i> Orçamento 'B' editado
                                    <span class="pull-right text-muted small">12 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.php">
                                <div>
                                    <i class="fa fa-dollar fa-fw"></i> Novo orçamento
                                    <span class="pull-right text-muted small">4 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="#">
                                    <strong>Veja todas as notificações do calculista</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.php">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                </li>
            </ul>

        </nav>
        </div>
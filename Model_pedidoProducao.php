<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MARFRA | Pedido Produção</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

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
                            <a href="index.html"><img alt="image" class="img-circle" width="170px" src="img/MARFRA-BRASIL.png"/></a>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-md"> <strong class="font-bold">João Dias</strong>
                             </span> <span class="text-muted text-xs block">Produção<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="perfil.html">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <img src="img/logo_top.png" alt="logotipo" width="50">
                    </div>
                </li>
                <li class="active">
                    <a href="orcamento_tecnico.html"><i class="fa fa-dollar"></i> <span class="nav-label">Orçamento</span><span class="label label-warning pull-right" title="Restam 8 orçamentos para serem finalizados">16 / 24</span></a>
                </li>
                <li>
                    <a href="orcamento_definitivo.html"><i class="fa fa-money"></i> <span class="nav-label">Pedido</span><span class="label label-primary pull-right" title="Todos orçamentos definitivos finalizados">8 / 8</span></a>
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
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-user fa-cogs"></i> Orçamento 'A' editado
                                    <span class="pull-right text-muted small">4 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-user fa-fw"></i> Orçamento 'B' editado
                                    <span class="pull-right text-muted small">12 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-dollar fa-fw"></i> Novo orçamento
                                    <span class="pull-right text-muted small">4 minutos atrás</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notificações.html">
                                    <strong>Veja todas as notificações</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                </li>
            </ul>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Acompanhamento da Produção</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <strong><a href="orcamento.html">Orçamento # MF 2015000001</a></strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <!--Modal ocorrencia-->
                            <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12"><h3 class="m-t-none m-b">Ocorrência # 2</h3>
                                                        <div class="form-group"><label>Data</label> 
                                                         <div class="input-group date" id="data_1">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="dd/mm/yyyy">
                                                        </div>
                                                        </div>
                                                        <div class="form-group"><label>Hora</label> <input type="text" placeholder="10:30" class="form-control" data-mask="00:00"></div>
                                                        <div class="form-group"><label>Status</label> 
                                                            <select class="form-control m-b" name="account">
                                                                <option>Selecione</option>
                                                                <option>Autorizado para produção</option>
                                                                <option>Início da produção</option>
                                                                <option>Produção concluída</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group"><label>Descrição</label><textarea class="form-control" id="message" rows="8" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel libero eu lectus tempus mollis. Nunc at pulvinar mi. Fusce justo libero, lacinia nec tincidunt id, vulputate a magna. Sed luctus pretium nulla, ac eleifend orci suscipit finibus. Fusce vitae velit laoreet, vestibulum ex ac, interdum massa. Aenean a posuere justo. Cras ultrices porttitor leo ut vestibulum. Sed eu tincidunt erat. Nulla at erat a"></textarea></div>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <!--Fim Modal ocorrencia-->
                        <table class="table dataTables-example table-striped" id="editable">
                            <thead>
                            <tr>
                                <th>#&nbsp;&nbsp;</th>
                                <th>Data da ocorrência</th>
                                <th>Hora&nbsp;&nbsp;</th>
                                <th>Descrição</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-warning">Autorizado para produção</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-info">Início da produção</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>27/11/2015</td>
                                <td>18:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-info">Início da produção</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>27/11/2015</td>
                                <td>13:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-warning">Autorizado para produção</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>5</td>
                                <td>27/11/2015</td>
                                <td>9:00</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>6</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>7</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>8</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>9</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>10</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>11</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>12</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>13</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>14</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <F#a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Produção concluída</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="footer">
            <div class="text-center">
                <strong>Dúvidas?</strong> 2014-2015
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!--<script src="js/plugins/jeditable/jquery.jeditable.js"></script>-->


    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>


    <script>
        $(document).ready(function() {


            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#464f88"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
    <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-greenMarfra',
                    radioClass: 'iradio_square-greenMarfra',
                });
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
            });
        </script>
</body>
</html>

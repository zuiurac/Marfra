<?php include('header/headerTecOrcamentista.php'); ?>

        
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Registros de Ocorrência</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <strong><a href="orcamento.php">Orçamento # MF 2015000001</a></strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row m-b-lg">
                <div class="col-lg-4">
                    <a href="nova_ocorrencia.php"><button type="button" class="btn btn-primary">Nova ocorrência</button></a>
                </div>
            </div>
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
                                                        <div class="form-group"><label>Data</label> <input type="date" placeholder="22/10/2015" class="form-control" disabled></div>
                                                        <div class="form-group"><label>Status</label> <input type="text" placeholder="Cliente não atendeu" class="form-control" disabled></div>
                                                        <div class="form-group"><label>Descrição</label><textarea disabled class="form-control" id="message" rows="8" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel libero eu lectus tempus mollis. Nunc at pulvinar mi. Fusce justo libero, lacinia nec tincidunt id, vulputate a magna. Sed luctus pretium nulla, ac eleifend orci suscipit finibus. Fusce vitae velit laoreet, vestibulum ex ac, interdum massa. Aenean a posuere justo. Cras ultrices porttitor leo ut vestibulum. Sed eu tincidunt erat. Nulla at erat a"></textarea></div>
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
                                <th>Descrição</th>
                                <th>Status</th>
                                <th>Visualizar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-warning">Remarcado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-warning">Remarcado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-warning">Remarcado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-warning">Remarcado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>5</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>6</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>7</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>8</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>9</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>10</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>11</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>12</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>13</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>14</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <F#a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>27/11/2015</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-primary">Atendimento finalizado</label></th>
                                <td>
                                    <a href="#modal-form" title="desabilitar" data-toggle="modal"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <?php include('footer/footerTecOrcamentista.php'); ?>

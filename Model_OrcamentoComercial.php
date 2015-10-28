<?php include('header/headerComercial.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Vendas</h2>
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
                    <div class="ibox-title">
                            <h5>Propostas emitidas</h5>
                        </div>
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
                                                                <option>Pendência Cliente</option>
                                                                <option>Pendência Marfra</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group"><label>Atividades</label><textarea class="form-control" id="message" rows="8" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel libero eu lectus tempus mollis. Nunc at pulvinar mi. Fusce justo libero, lacinia nec tincidunt id, vulputate a magna. Sed luctus pretium nulla, ac eleifend orci suscipit finibus. Fusce vitae velit laoreet, vestibulum ex ac, interdum massa. Aenean a posuere justo. Cras ultrices porttitor leo ut vestibulum. Sed eu tincidunt erat. Nulla at erat a"></textarea></div>
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
                                <th>Atividades</th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>5</td>
                                <td>27/11/2015</td>
                                <td>9:00</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>6</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>7</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>8</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>9</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>10</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>11</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>12</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>13</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>14</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
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
                                <th><label class="label label-danger">Pendência Marfra</label></th>
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
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <F#a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
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
                                <th><label class="label label-danger">Pendência Marfra</label></th>
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
                                <th><label class="label label-danger">Pendência Marfra</label></th>
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
                                <th><label class="label label-danger">Pendência Marfra</label></th>
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


            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                            <h5>Contrato</h5>
                        </div>
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
                                                                <option>Pendência Cliente</option>
                                                                <option>Pendência Marfra</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group"><label>Atividades</label><textarea class="form-control" id="message" rows="8" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel libero eu lectus tempus mollis. Nunc at pulvinar mi. Fusce justo libero, lacinia nec tincidunt id, vulputate a magna. Sed luctus pretium nulla, ac eleifend orci suscipit finibus. Fusce vitae velit laoreet, vestibulum ex ac, interdum massa. Aenean a posuere justo. Cras ultrices porttitor leo ut vestibulum. Sed eu tincidunt erat. Nulla at erat a"></textarea></div>
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
                                <th>Atividades</th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
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
                                <th><label class="label label-warning">Pendência Cliente</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>5</td>
                                <td>27/11/2015</td>
                                <td>9:00</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
                                <td>
                                    <a href="#modal-form" title="editar" data-toggle="modal"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="novo_orcamento_projetista.html" title="visualizar orçamento"><i class="fa fa-eye text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>6</td>
                                <td>27/11/2015</td>
                                <td>10:50</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus Phasellus lobortis nibhlobortis nibh ultortis nibh ultibh ult...</td>
                                <th><label class="label label-danger">Pendência Marfra</label></th>
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
       <?php include('footer/footerComercial.php'); ?>
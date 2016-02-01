<?php include('header/headerTecOrcamentista.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Listagem de Orçamentos</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <strong><a href="orcamento.php">Listagem de Orçamentos</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <table class="table dataTables-example table-striped orcamento_tecnico" id="editable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome do cliente</th>
                                <th>Bairro</th>
                                <th>Tipo de cliente</th>
                                <th>Data da abertura</th>
                                <th>Nº Orçamento</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="#"><tr>
                                <td>1</td>
                                <td>Mark Ltda. Company</td>
                                <td>Glória</td>
                                <td>Condomínio</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-danger">A fazer</label></th>
                                <td>
                                    <a href="novo_orcamento_tecnico.php" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr></a>
                            <tr>
                                <td>2</td>
                                <td>Jacob Ltda. Company</td>
                                <td>Vila Valqueire</td>
                                <td>Empresa</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-danger">A fazer</label></th>
                                <td>
                                    <a href="novo_orcamento_tecnico.php" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry Ltda. Company</td>
                                <td>Glória</td>
                                <td>Governo</td>
                                <td>23/10/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-warning">Em andamento</label></th>
                                <td>
                                    <a href="novo_orcamento_tecnico.php" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-warning">Em andamento</label></th>
                                <td>
                                    <a href="novo_orcamento_tecnico.php" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>5</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>6</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Copacabana</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>7</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Barros Filho</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>8</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>9</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>10</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>11</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>12</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>13</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>14</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Anchieta</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Hudson Ltda. Company</td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                                <th><label class="label label-primary">Concluído</label></th>
                                <td>
                                    <a href="#" title="Acessar"><i class="fa fa-arrow-right text-navy"></i></a>
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
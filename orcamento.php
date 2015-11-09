<?php include('header/headerAtendimento.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Listagem de Orçamentos</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Cliente</a>
                        </li>
                        <li class="active">
                            <strong><a href="orcamento.php">Listagem de Orçamentos</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row m-b-lg">
                <div class="col-lg-4">
                    <a href="novo_orcamento.php"><button type="button" class="btn btn-primary">Cadastrar novo</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <table class="table dataTables-example table-striped" id="editable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo de cliente</th>
                                <th>Nome do cliente</th>
                                <th>Tipo de serviço</th>
                                <th>Bairro</th>
                                <th>Data da visita orçamentária</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="#"><tr>
                                <td>1</td>
                                <td>Condomínio</td>
                                <td>Mark</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr></a>
                            <tr>
                                <td>2</td>
                                <td>Empresa</td>
                                <td>Jacob</td>
                                <td>Reparo na garantia</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Governo</td>
                                <td>Larry</td>
                                <td>Serviço extra</td>
                                <td>Glória</td>
                                <td>23/10/2015</td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Serviço extra</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>5</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>6</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Reparo na garantia</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>7</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Serviço extra</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>8</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>9</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>10</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>11</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>12</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>13</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td>14</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>27/11/2015</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>27/11/2015</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>27/11/2015</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>27/11/2015</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>27/11/2015</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Pessoa Física</td>
                                <td>Hudson</td>
                                <td>27/11/2015</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        
        </div>

       <?php include('footer/footerAtendimento.php'); ?>

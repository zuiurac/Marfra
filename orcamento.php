<?php include('header/headerAtendimento.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
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
                 <div class="col-lg-4">
                    <div class="title-action">
                        <a href="#" class="btn btn-white"><i class="fa fa-phone"></i> Sem telefone </a>
                        <a href="#" class="btn btn-white"><i class="fa fa-phone "></i> Telefone </a>
                        <a href="impressao_orcamento.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir </a>
                    </div>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row m-b-md m-b-12">
                <div class="col-lg-8">
                    <a href="novo_orcamento.php"><button type="button" class="btn btn-primary">Cadastrar novo</button></a>
                </div>
            </div>
            <!--menu superior-->
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content p-b5">
                <div class="col-sm-3">
                    <div class="dataTables_length" id="editable_length">
                        <label>
                            <select name="editable_length" aria-controls="editable" class="form-control">
                                <option value="10">-- Ações em massa</option>
                                <option value="25">Gerar baixa no orçamento</option>
                                <option value="50">atendido</option>
                            </select>
                        </label>
                            <button type="button" class="btn btn-default m-l-sm">Aplicar</button>
                    </div>
                </div>
                <div class="col-sm-2 acoes_massa">
                        <a href="#">Ferramentas de pesquisa</a>
                </div>
                 <div class="col-lg-6">
                    <div class="col-lg-3">
                        <select class="form-control m-b" name="account">
                            <option>Selecione</option>
                            <option>opção 1</option>
                            <option>opção 4</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-control m-b" name="account">
                            <option>Selecione</option>
                            <option>opção 3</option>
                            <option>opção 4</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-control m-b" name="account">
                            <option>Selecione</option>
                            <option>opção 3</option>
                            <option>opção 4</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;&nbsp;Pesquisar</button>
                    </div>
                </div>
                <div class="hr-line-dashed clear_both visibility_none m-n"></div>
              </div>
                    <div class="ibox-content">
                        <table class="table dataTables-example table-striped table_listagem" id="editable">
                            <thead>
                            <tr>
                                <th><input type="checkbox" class="i-checks" name="input[]"></th>
                                <th>Cliente</th>
                                <th>Bairro</th>
                                <th>nº Orçamento</th>
                                <th>Responsável</th>
                                <th>Cargo</th>
                                <th>Telefone</th>
                                <th>Produto</th>
                                <th>Data</th>
                                <th>Tempo decorrido</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="#">
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Souza Cruz</td>
                                <td>Flamengo</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Porteiro</td>
                                <td>(21) 98073-3837</td> 
                                <td>Grade simples</td>
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="não atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr></a>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Souza Cruz</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Síndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Portões e outros</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="não atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Souza Cruz</td>
                                <td>Botafogo</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Subsíndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>
                                <td>23/10/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="não atendido"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Vila Isabel</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Morador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="não atendido"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="não atendido"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="não atendido"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Porteiro</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Síndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger">26h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Subsíndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Morador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>2015000001</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning">6h</label></td>
                                <td>
                                    <a href="#" title="acessar"><i class="fa fa-arrow-right text-navy"></i></a>
                                    <a href="#" title="atendido"><i class="fa fa-check text-navy"></i></a>
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

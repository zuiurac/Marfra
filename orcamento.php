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
            <div class="row m-b-xs m-b-12">
                <div class="col-lg-8">
                    <a href="novo_orcamento.php"><button type="button" class="btn btn-primary">Cadastrar novo</button></a>
                </div>
                <div class="form-group col-lg-3">
                  <label class="control-label col-sm-3 m-t-sm">Telefone</label>
                  <div class="checkbox i-checks col-sm-3">
                    <label class="primeiro_produto">
                      <div class="icheckbox_square-blueMarfra checked" style="position: relative;"><div class="icheckbox_square-greenMarfra checked" style="position: relative;"><input type="checkbox" value="" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                      <i></i> Sim
                    </label>
                  </div>
                  <div class="checkbox i-checks col-sm-3">
                    <label class="">
                      <div class="icheckbox_square-blueMarfra" style="position: relative;"><div class="icheckbox_square-greenMarfra" style="position: relative;"><input type="checkbox" value="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                      <i></i> Não
                    </label>
                  </div>
                </div>
                <div class="col-lg-1">
                    <a href="#"><button type="button" class="btn btn-default">Imprimir</button></a>
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
                                <option value="50">Desabilitar</option>
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
                                <th>Orçamento</th>
                                <th>Data</th>
                                <th>Responsável - técnico</th>
                                <th>Responsável - projeto</th>
                                <th>Telefone - Responsável projeto</th>
                                <th>Bairro</th>
                                <th>Prazo</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="#">
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr></a>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>23/10/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="novo_cliente.php" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr><tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 2</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-danger">6h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
                                <td>
                                    <a href="#" title="editar"><i class="fa fa-edit text-navy"></i></a>
                                    <a href="#" title="desabilitar"><i class="fa fa-times text-navy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                <td>#MF 2015000001</td>  
                                <td>27/11/2015</td>
                                <td>Responsável 1</td>
                                <td>Mark</td>
                                <td>(21) 98073-3837</td>
                                <td>Glória</td>
                                <td><label class="label label-warning">24h</label></td>
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

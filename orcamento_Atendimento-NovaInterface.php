<?php include('header/headerAtendimento2.php'); ?>

        <div class="wrapper wrapper-content animated fadeInRight">
            <!--menu superior-->
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content p-b5">
                        <!--Modal ocorrencia-->
                            <div id="modal-form" class="modal fade impressao" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12"><h3 class="m-t-none m-b">Como deseja imprimir a listagem de orçamento?</h3>
                                                    <a href="impressao_orcamento.php">
                                                        <div class="telefone">
                                                            <span>
                                                                <button class="btn btn-circle" type="button"><img src="img/no-phone.png" alt="sem telefone"></button>
                                                                Sem telefone
                                                            </span>
                                                            <span>
                                                                <button class="btn btn-phone btn-circle" type="button"><i class="fa fa-phone"></i></button>
                                                                Com telefone
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <!--Fim Modal ocorrencia-->
                 <div class="col-lg-8 padding-0">
                     <div class="dataTables_filter">
                        <label>
                            <input placeholder="Procurar:" type="search" class="form-control input-sm" placeholder="" aria-controls="editable">
                        </label>
                     </div>
                 </div>   
                 <div class="col-lg-4 p_r_0">
                    <div class="col-lg-6">
                        <select class="form-control m-b" name="account">
                            <option>- Selecionar Bairro -</option>
                            <option>opção 1</option>
                            <option>opção 2</option>
                        </select>
                    </div>
                    <div class="col-lg-6 p_r_0">
                        <select class="form-control m-b" name="account">
                            <option>- Selecionar Produto -</option>
                            <option>Grade Simples</option>
                            <option>Grade Composta</option>
                            <option>Portões e outros</option>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed clear_both visibility_none m-n"></div>
              </div>
                    <div class="ibox-content">
                        <table class="table dataTables-example table-striped orcamento_tecnico" id="editable">
                            <thead>
                            <tr>
                                <th><input type="checkbox" value=""></th>
                                <th>Cliente</th>
                                <th>Bairro</th>
                                <th>nº Orçamento</th>
                                <th>Responsável</th>
                                <th>Cargo</th>
                                <th>Telefone</th>
                                <th>Produto</th>
                                <th>Data de abertura</th>
                                <th>Tempo decorrido</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php" title="Acessar">Souza Cruz</a></td>
                                <td>Botafogo</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Subsíndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>
                                <td>23/10/2015</td>
                                <td><label class="label label-danger" title="Prioridade Máxima">13 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Vila Isabel</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Morador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger" title="Prioridade Máxima">13 dias</label></td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-danger" title="Prioridade Máxima">13 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Souza Cruz</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Síndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Portões e outros</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning" title="Prioridade Média">7 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-warning" title="Prioridade Média">5 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Antônio LTDA.</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Bruno Ltda.</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Souza Cruz</a></td>
                                <td>Flamengo</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Porteiro</td>
                                <td>(21) 98073-3837</td> 
                                <td>Grade simples</td>
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Carlos LTDA.</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Porteiro</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Síndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Subsíndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Morador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_cadastrado.php">Mark</a></td>
                                <td>Glória</td>
                                <td>20150000</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td><label class="label label-default" title="Prioridade Baixa">3 dias</label></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        
        </div>

       <?php include('footer/footerAtendimento.php'); ?>

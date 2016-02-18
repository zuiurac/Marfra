<?php include('header/headerAtendimento.php'); ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Listagem de Orçamentos</h2>
                </div>
                 <div class="col-lg-4 ferramentas">
                    <a href="#modal-form" title="imprimir" data-toggle="modal">
                        <button class="btn" type="submit">Imprimir</button>
                    </a>
                    <a href="novo_orcamento.php">
                        <button class="btn btn-primary" type="submit">Novo orçamento</button>
                    </a>
                </div>
            </div>
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
                                <th>Nº Orçamento</th>
                                <th>Cliente</th>
                                <th>Bairro</th>
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
                                <td><a href="orcamento_cadastrado.php" title="Acessar">20150000</a></td>
                                <td>Souza Cruz</td>
                                <td>Botafogo</td>
                                <td>Carlos</td>
                                <td>Subsíndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>
                                <td>23/10/2015</td>
                                <td title="Prioridade Máxima">13 dias<span class="red"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Vila Isabel</td>
                                <td>Carlos</td>
                                <td>Morador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td class="red" title="Prioridade Máxima">13 dias<span class="red"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td class="red" title="Prioridade Máxima">13 dias<span class="red"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Souza Cruz</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Síndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Portões e outros</td>  
                                <td>27/11/2015</td>
                                <td class="orange" title="Prioridade Média">7 dias<span class="orange"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td class="orange" title="Prioridade Média">5 dias<span class="orange"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td class="orange" title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Antônio LTDA.</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td class="yellow" title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Bruno Ltda.</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td class="yellow" title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Souza Cruz</td>
                                <td>Flamengo</td>
                                <td>Carlos</td>
                                <td>Porteiro</td>
                                <td>(21) 98073-3837</td> 
                                <td>Grade simples</td>
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Carlos LTDA.</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr><tr>
                            <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Porteiro</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr><tr>
                            <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr><tr>
                            <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Síndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Subsíndico</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Morador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            <tr>
                                <td><a href="orcamento_cadastrado.php">20150000</a></td>
                                <td>Mark</td>
                                <td>Glória</td>
                                <td>Carlos</td>
                                <td>Zelador</td>
                                <td>(21) 98073-3837</td>
                                <td>Grade composta</td>  
                                <td>27/11/2015</td>
                                <td title="Prioridade Baixa">3 dias<span class="yellow"></span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>

       <?php include('footer/footerAtendimento.php'); ?>

<?php include('header/headerTecOrcamentista.php'); ?>
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
          <h2>Orçamento técnico</h2>
          <ol class="breadcrumb">
            <li>
              <a href="orcamento.html">Listagem de orçamentos</a>
            </li>
            <li class="active">
              <strong>Orçamento técnico</strong>
            </li>
          </ol>
        </div>
        <div class="col-lg-2">
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
              <div class="col-lg-12 padding-0">
                    <div class="col-sm-10 padding-0">
                        <h2 class="orcamento m-b-none">Orçamento:
                          <span class="text-navy"> #MF 2015000001</span> <span class="version">(Opção 01)</span>
                        </h2>
                        <div class="col-sm-2 padding-0">
                          <h3><span class="version produto"><strong>Status: </strong>Orçamento novo</span></h3>
                        </div>
                        <div class="col-sm-2">
                          <h3><span class="version"><strong>Produto: </strong>Grade composta</span></h3>
                        </div>
                        <clear class="both"></clear>
                     </div> 
                        <div class="col-sm-2 text-right padding-0 p_r_0">
                        <p>
                          <strong>Cargo: </strong>Zelador
                          <br>
                          <span>
                          <strong>Responsável 2: </strong> Augusto</span><br>
                          <abbr title="Phone">Telefone:</abbr> (21) 9601-4590
                          <br>
                        </p>
                        </div>
                   <div class="row">
                      <div class="col-sm-4">
                        <address>
                          <strong>Nome da Empresa LTDA.</strong>
                          <br> Rua Frederico Edelweiss, 1080 - Bloco 2, Apto.2201
                          <br> Rio de Janeiro, RJ - Flamengo
                          <br>
                          <br>
                          <strong>Cargo: </strong>Zelador
                          <br>
                          <strong>Responsável: </strong>Maicon
                          <br>
                          <abbr title="Phone">Telefone:</abbr> (21) 3358-4321
                        </address>
                      </div>
                      <div class="col-sm-8 text-right">
                        <p>
                          <strong>Cargo: </strong>Zelador
                          <br>
                          <span>
                          <strong>Responsável 3:</strong> Francisco</span><br><abbr title="Phone">Telefone:</abbr> (21) 9601-4590
                          <br>
                        </p>
                        <br>
                        <p>
                          <span>
                            <strong>Data realização:</strong> Março 18, 2014</span>
                          <br>
                          <span>
                            <strong>Data máxima de visita:</strong> Março 24, 2014</span>
                        </p>
                      </div>
                    </div>
                  </div>   
          <div class="col-lg-12 padding-0">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5>Opções</h5>
                    <div class="ibox-tools">
                      <a class="collapse-link">
                          <i class="fa fa-chevron-up"></i>
                      </a>
                    </div>
                  </div>
                    <div class="ibox-content">
                        <table class="table dataTables-example table-striped" id="editable">
                            <thead>
                            <tr>
                                <th>Opção</th>
                                <th>Resp.técnico</th>
                                <th>Status</th>
                                <th>Bairro</th>
                                <th>Data</th>
                                <th>Projeto (linha de produção)</th>
                                <th>Responsável</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="#"><tr>
                                <td>
                                    01
                                </td>
                                <td>Responsável 1</td>
                                <td>Novo produto</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>Tubular quadrado / retangular</td>
                                <td>Mark</td>
                            </tr></a>
                            <tr>
                                <td>
                                   02
                                </td>
                                <td>Responsável 2</td>
                                <td>Reparo na garantia</td>
                                <td>Glória</td>
                                <td>27/11/2015</td>
                                <td>Tubular quadrado / retangular</td>
                                <td>Jacob</td>
                            </tr>
                            <tr>
                                <td>
                                    03
                                </td>
                                <td>Responsável 1</td>
                                <td>Serviço extra</td>
                                <td>Glória</td>
                                <td>23/10/2015</td>
                                <td>Tubular quadrado / retangular</td>
                                <td>Larry</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
          <div class="form-group col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Faça upload de seu arquivo</h5>
                <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>
                </div>
              </div>
              <div class="ibox-content">
                <div class="form-group col-md-1 padding-0">
                  <div class="btn-group m-b">
                    <label title="Upload image file" for="inputImage" class=" Upload_wda btn btn-primary">
                      <input type="file" accept="" name="file" id="inputImage" class="hide">
                      <i class="fa fa-upload"></i>&nbsp;&nbsp;Enviar
                    </label>
                  </div>
                </div>
                <div class="col-md-2 form-group">
                  <span class="m upload_label">Esboço.pdf</span>
                  <div class="hr-line-dashed clear_both"></div>
                  <span class="m upload_label">Projeto_Orçamentario.pdf</span>
                  <div class="hr-line-dashed clear_both"></div>
                  <span class="m upload_label">Desenho_tecnico.pdf</span>
                  <div class="hr-line-dashed clear_both"></div>
                  <input type="text" class="form-control" placeholder="Edite o nome do arquivo">
                </div>
                <div class="form-group col-md-2">
                  <a href="#" class="clique_aqui arquivo_upload">Editar</a>
                  <div class="hr-line-dashed clear_both"></div>
                  <a href="#" class="clique_aqui arquivo_upload">Editar</a>
                  <div class="hr-line-dashed clear_both"></div>
                  <a href="#" class="clique_aqui arquivo_upload">Editar</a>
                  <div class="hr-line-dashed clear_both"></div>
                  <a href="#" class="clique_aqui arquivo_upload">Salvar</a>
                </div>
                <div class="hr-line-dashed clear_both visibility_none"></div>
              </div>
            </div>
          </div>
        </div>
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Lista de produtos</h5>
                <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>
                </div>
              </div>
              <div class="ibox-content">
                <div class="col-lg-12 padding-0 m-b lista_produtos">
                  <div class="checkbox i-checks col-sm-2">
                    <label class="primeiro_produto">
                      <input type="checkbox" value="" checked="">
                      <i></i> Grade
                    </label>
                  </div>
                  <div class="checkbox i-checks col-sm-2" class="js-switch2">
                    <label>
                      <input type="checkbox" value="" disabled="" checked="">
                      <i></i> Portão de garagem
                    </label>
                  </div>
                  <div class="checkbox i-checks col-sm-2">
                    <label>
                      <input type="checkbox" value="" class="js-switch3">
                      <i></i> Porta de pedestre
                    </label>
                  </div>
                  <div class="checkbox i-checks col-sm-2">
                    <label>
                      <input type="checkbox" value="">
                      <i></i> Guarda corpo
                    </label>
                  </div>
                  <div class="checkbox i-checks col-sm-2">
                    <label>
                      <input type="checkbox" value="">
                      <i></i> Corrimão
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-sm-2 padding-0 m-b-xs">
                      <label class="control-label">Confirme ou edite a lista de produtos e clique no botão confirmar</label>
                    </div>
                    <div class="col-sm-2 padding-0">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;&nbsp;Confirmar lista</button>
                    </div>
                  </div>
                </div>
                <div class="hr-line-dashed clear_both"></div>
                <div class="col-lg-12 padding-0 m-t-sm">
                  <div class="col-lg-2 padding-0">
                    <button type="button" class="add_subitem btn-addProduto btn btn-w-m"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar produto</button>
                  </div>
                  <div class="col-lg-2 padding-0 info-padrao-produto">
                    <select class="form-control m-b" name="account">
                        <option>Selecione</option>
                        <option>Grade</option>
                        <option>Portão de garagem</option>
                        <option>Porta de pedestre</option>
                        <option>Guarda corpo</option>
                        <option>Corrimão</option>
                    </select>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-body">
                    <div class="tab-content">
                      <div id="tab-1" class="tab-pane active">
                        <div class="ibox-content">
                          <form method="get" class="">
                            <div class="ibox-content">
                              <div class="panel-group" id="accordion">
                                <div class="panel panel-info">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Grade&nbsp;&nbsp;<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></a>
                                      <a href="#">
                                        <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                      </a>
                                      <a href="#">
                                        <span class="total_geral">R$800,00</span>
                                      </a>
                                      <a href="#">
                                        <span class="peso_geral">100kg</span>
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-t-md m-b-none">
                                        <div class="form-group col-lg-3">
                                          <label class="control-label">Linha de produção</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>Tubular quadrado / retangular</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 padding-0">
                                          <label class="control-label">Peso total (kg)</label>
                                          <input type="text" class="form-control" disabled placeholder="100">
                                        </div>
                                        <div class="col-lg-2 padding-0">
                                          <label class="control-label">Valor total (R$)</label>
                                          <input type="text" class="form-control" disabled placeholder="800,00">
                                        </div>
                                      </div>
                                      <div class="form-group espec-produto col-lg-12 m-b-none">
                                        <label class="control-label">Especificações técnicas</label>
                                        <div class="hr-line-dashed clear_both m-t-none"></div>
                                      </div>
                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                        <div class="form-group col-lg-1">
                                          <label class="control-label">Comprimento</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-1">
                                          <label class="control-label">Altura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Cor</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>Fumê - 8mm</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        
                                         <div class="form-group col-lg-2">
                                           <label class="control-label">Qtd. painéis de grade</label>
                                          <input type="text" class="form-control">
                                         </div>
                                         <div class="form-group col-lg-2">
                                           <label class="control-label">Qtd. painéis de vidro</label>
                                          <input type="text" class="form-control">
                                         </div>
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Qtd. colunas no piso</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Qtd. colunas na mureta</label>
                                            <input type="text" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="ibox-content">
                                          <div class="panel-group" id="accordion2">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Perfis <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                             <div id="collapseTwo" class="panel-collapse collapse p-sm">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <!--inicio modelo item-->
                                                      <div class="espec-produto col-lg-12 m-t">
                                                        <label class="control-label">Tubo quadrado 80x80 mm</label>
                                                        <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                      </div>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Quantidade</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Espessura</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="1,8">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Barra</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="9,156">
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Preço (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Total (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                      </div>
                                                      <!--fim modelo item-->
                                                      <div class="espec-produto col-lg-12 m-t">
                                                        <label class="control-label">Tubo retangular 2 3/8" x 1 1/2" (60x38 mm)</label>
                                                        <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                      </div>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Quantidade</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Espessura</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="1,8">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Barra</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="9,156">
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Preço (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Total (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                      </div>
                                                      <!--fim modelo item-->
                                                      <div class="espec-produto col-lg-12 m-t">
                                                        <label class="control-label">Tubo quadrado 1 1/2" x 1 1/2" (38x38 mm)</label>
                                                        <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                      </div>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Quantidade</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Espessura</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="1,8">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Barra</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="9,156">
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Preço (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Total (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                      </div>
                                                      <!--fim modelo item-->
                                                      <div class="espec-produto col-lg-12 m-t">
                                                        <label class="control-label">Tubo retangular 2 x 1/2" (régua)</label>
                                                        <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                      </div>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Quantidade</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Espessura</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="1,8">
                                                        </div>
                                                        <div class="form-group col-lg-1">
                                                          <label class="control-label">Barra</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="9,156">
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Preço (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                        <div class="form-group col-lg-2">
                                                          <label class="control-label">Total (R$)</label>
                                                            <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                        </div>
                                                      </div>
                                                      <!--fim modelo item-->
                                                        <div class="hr-line-dashed clear_both"></div>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <div class="form-group col-lg-4">
                                                          <label class="control-label">Peso total (kg)</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="90">
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                          <label class="control-label">Valor total  (R$)</label>
                                                          <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                        </div>
                                                      </div>
                                                      <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion4">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion4" href="#collapseFour">Anodização / Pintura <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseFour" class="panel-collapse collapse p-sm">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Cor</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Metragem total</label>
                                                      <input type="text" class="form-control">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion5">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion5" href="#collapseFive">Vidros <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseFive" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion5">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion5" href="#collapseFive">Chapeados <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseFive" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion5">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion5" href="#collapseFive">Acessórios <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseFive" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion6">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseSix">Pedestres - automação / mecanização <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseSix" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Deslizante</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-5">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Comum
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-7">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Industrial
                                                        </label>
                                                      </div>
                                                    </div>
                                                      <div class="form-group col-lg-3">
                                                          <div class="form-group col-sm-7">
                                                            <label class="control-label">Travessão removível</label>
                                                            <div class="clear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group col-sm-5">
                                                            <label class="control-label">Trilho no piso</label>
                                                            <div class="clear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion6">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseSix">Pivotantes - automação / mecanização <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseSix" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Deslizante</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-5">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Comum
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-7">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Industrial
                                                        </label>
                                                      </div>
                                                    </div>
                                                      <div class="form-group col-lg-3">
                                                          <div class="form-group col-sm-7">
                                                            <label class="control-label">Travessão removível</label>
                                                            <div class="fdskjhclear_both"></div>
                                                             
                                                          </div>
                                                          <div class="form-group col-sm-5">
                                                            <label class="control-label">Trilho no piso</label>
                                                            <div class="fdskjhclear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                     <select class="form-control m-b" name="account">
                                                        <option>Selecione</option>
                                                        <option>opção 1</option>
                                                        <option>opção 2</option>
                                                        <option>opção 3</option>
                                                        <option>opção 4</option>
                                                    </select>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion6">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseSix">Pivô robô - automação <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseSix" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="fdskjhclear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Deslizante</label>
                                                      <div class="fdskjhclear_both"></div>
                                                      <div class="checkbox i-checks col-sm-5">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Comum
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-7">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Industrial
                                                        </label>
                                                      </div>
                                                    </div>
                                                      <div class="form-group col-lg-3">
                                                          <div class="form-group col-sm-7">
                                                            <label class="control-label">Travessão removível</label>
                                                            <div class="fdskjhclear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group col-sm-5">
                                                            <label class="control-label">Trilho no piso</label>
                                                            <div class="fdskjhclear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion6">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseSix">Portão deslizante - automação / mecanização <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseSix" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="fdskjhclear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Deslizante</label>
                                                      <div class="fdskjhclear_both"></div>
                                                      <div class="checkbox i-checks col-sm-5">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Comum
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-7">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Industrial
                                                        </label>
                                                      </div>
                                                    </div>
                                                      <div class="form-group col-lg-3">
                                                          <div class="form-group col-sm-7">
                                                            <label class="control-label">Travessão removível</label>
                                                            <div class="clear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group col-sm-5">
                                                            <label class="control-label">Trilho no piso</label>
                                                            <div class="clear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion6">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseSix">Portão basculhante - automação / mecanização <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseSix" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Deslizante</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-5">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Comum
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-7">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Industrial
                                                        </label>
                                                      </div>
                                                    </div>
                                                      <div class="form-group col-lg-3">
                                                          <div class="form-group col-sm-7">
                                                            <label class="control-label">Travessão removível</label>
                                                            <div class="clear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                          </div>
                                                          <div class="form-group col-sm-5">
                                                            <label class="control-label">Trilho no piso</label>
                                                            <div class="clear_both"></div>
                                                              <select class="form-control m-b" name="account">
                                                                  <option>Selecione</option>
                                                                  <option>opção 1</option>
                                                                  <option>opção 2</option>
                                                                  <option>opção 3</option>
                                                                  <option>opção 4</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="ibox-content">
                                <div class="panel-group" id="accordion">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Grade 2 <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></a>
                                          <a href="#">
                                          <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                        </a>
                                        <a href="#">
                                          <span class="total_geral">R$800,00</span>
                                        </a>
                                        <a href="#">
                                        <span class="peso_geral">100kg</span>
                                      </a>
                                      </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <div class="form-group info-padrao-produto col-lg-12 padding-0 m-t-md m-b-none">
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Modelo</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Cor</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Comprimento</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Altura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="col-lg-2 padding-0">
                                          <button type="button" class="add_subitem btn btn-w-m btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar item</button>
                                        </div>
                                        <div class="col-lg-2 padding-0 info-padrao-produto">
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>Painéis de grade</option>
                                                <option>Painéis de vidro</option>
                                                <option>Porta de pedestre</option>
                                                <option>Portão de garagem</option>
                                                <option>Corrimão</option>
                                            </select>
                                          </div>
                                      </div>
                                        <div class="col-lg-12">
                                          <div class="ibox-content">
                                            <div class="panel-group" id="accordion7">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion7" href="#collapseSeven">Acessórios</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseSeven" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Quantidade total</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel-group" id="accordion10">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion10" href="#collapseTen">Painel Fixo Lateral</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTen" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Metragem</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                             <div class="panel-group" id="accordion11">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion11" href="#collapseEleven">Painel Fixo Superior</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseEleven" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Metragem</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel-group" id="accordion8">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion8" href="#collapseEight">Painéis de Vidro</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseEight" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Cor</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Quantidade total</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Metragem total</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel-group" id="accordion12">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion12" href="#collapseTwelve">Porta de pedestre</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTwelve" class="panel-collapse collapse p-sm p-top-30">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Sistema de abertura</label>
                                                          <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade total</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Processo</label>
                                                        <div class="clear_both"></div>
                                                        <div class="checkbox i-checks col-sm-4">
                                                          <label class="primeiro_produto">
                                                            <input type="checkbox" value="" checked="">
                                                            <i></i> Mecanizado
                                                          </label>
                                                        </div>
                                                        <div class="checkbox i-checks col-sm-6">
                                                          <label>
                                                            <input type="checkbox" value="">
                                                            <i></i> Automatizado
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel-group" id="accordion13">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion13" href="#collapseThirteen">Portão de garagem</a>
                                                </h4>
                                              </div>
                                              <div id="collapseThirteen" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                        <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <select class="form-control m-b" name="account">
                                                          <option>Selecione</option>
                                                          <option>opção 1</option>
                                                          <option>opção 2</option>
                                                          <option>opção 3</option>
                                                          <option>opção 4</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Processo</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-4">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Mecanizado
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-6">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Automatizado
                                                        </label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Deslizante</label>
                                                      <div class="clear_both"></div>
                                                      <div class="checkbox i-checks col-sm-5">
                                                        <label class="primeiro_produto">
                                                          <input type="checkbox" value="" checked="">
                                                          <i></i> Comum
                                                        </label>
                                                      </div>
                                                      <div class="checkbox i-checks col-sm-7">
                                                        <label>
                                                          <input type="checkbox" value="">
                                                          <i></i> Industrial
                                                        </label>
                                                      </div>
                                                    </div>
                                                      <div class="form-group col-lg-3">
                                                          <div class="form-group col-sm-7">
                                                            <label class="control-label">Travessão removível</label>
                                                            <div class="clear_both"></div>
                                                              <label class="primeiro_produto">
                                                                <input type="text" class="form-control" placeholder="Qtd.">
                                                              </label>
                                                          </div>
                                                          <div class="form-group col-sm-5">
                                                            <label class="control-label">Trilho no piso</label>
                                                            <div class="clear_both"></div>
                                                              <label>
                                                                <input type="text" class="form-control" placeholder="Qtd.">
                                                              </label>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="ibox-content">
                                <div class="panel-group" id="accordion14">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion14" href="#collapseFourteen">Portão de garagem&nbsp;&nbsp;<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></a>
                                            <a href="#">
                                            <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                          </a>
                                          <a href="#">
                                            <span class="total_geral b-l-0">R$800,00</span>
                                          </a>
                                      </h4>
                                    </div>
                                    <div id="collapseFourteen" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <div class="form-group info-padrao-produto col-lg-12 padding-0 m-t-md m-b-none">
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Modelo</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Cor</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Largura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Altura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Sistema de abertura</label>
                                            <select class="form-control m-b" name="account">
                                                  <option>opção 1</option>
                                                  <option>opção 2</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group col-lg-3">
                                          <label class="control-label">Processo</label>
                                            <div class="clear_both"></div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label class="primeiro_produto">
                                                <input type="checkbox" value="" checked="">
                                                <i></i> Mecanizado
                                              </label>
                                            </div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label>
                                                <input type="checkbox" value="">
                                                <i></i> Automatizado
                                              </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label class="control-label">Se Deslizante</label>
                                            <div class="clear_both"></div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label class="primeiro_produto">
                                                <input type="checkbox" value="" checked="">
                                                <i></i> Comum
                                              </label>
                                            </div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label>
                                                <input type="checkbox" value="">
                                                <i></i> Industrial
                                              </label>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="col-lg-2 padding-0">
                                          <button type="button" class="add_subitem btn btn-w-m btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar item</button>
                                        </div>
                                        <div class="col-lg-2 padding-0 info-padrao-produto">
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>Painéis de grade</option>
                                                <option>Painéis de vidro</option>
                                                <option>Porta de pedestre</option>
                                                <option>Portão de garagem</option>
                                                <option>Corrimão</option>
                                            </select>
                                          </div>
                                      </div>
                                        <div class="col-lg-12">
                                          <div class="ibox-content">
                                            <div class="panel-group" id="accordion15">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion15" href="#collapseFifteen">Travessão removível</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseFifteen" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Quantidade total</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel-group" id="accordion16">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion16" href="#collapseSixteen">Trilho no piso</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseSixteen" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade total</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                             <div class="panel-group" id="accordion17">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion17" href="#collapseSeventeen">Porta de pedestre embutida</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseSeventeen" class="panel-collapse collapse p-sm p-top-30">
                                                  <div class="panel-body">
                                                   <div class="col-lg-12">
                                                      <div class="form-group col-lg-3 padding-0">
                                                        <label class="control-label">Processo</label>
                                                          <div class="clear_both"></div>
                                                          <div class="checkbox i-checks col-sm-6">
                                                            <label class="primeiro_produto">
                                                              <div class="icheckbox_square-blueMarfra checked"><input type="checkbox" value="" checked=""></div>
                                                              <i></i> Mecanizado
                                                            </label>
                                                          </div>
                                                          <div class="checkbox i-checks col-sm-6">
                                                            <label>
                                                              <div class="icheckbox_square-blueMarfra"><input type="checkbox" value=""></div>
                                                              <i></i> Automatizado
                                                            </label>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="ibox-content">
                                <div class="panel-group" id="accordion18">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion18" href="#collapseEighteen">Porta de pedestre&nbsp;&nbsp;<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></a>
                                        <a href="#">
                                          <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                        </a>
                                        <a href="#">
                                          <span class="b-l-0 total_geral">R$800,00</span>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseEighteen" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <div class="form-group info-padrao-produto col-lg-12 padding-0 m-t-md m-b-none">
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Modelo</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Cor</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Largura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Altura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Sistema de abertura</label>
                                              <select class="form-control m-b" name="account">
                                                    <option>opção 1</option>
                                                    <option>opção 2</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group col-lg-3">
                                          <label class="control-label">Processo</label>
                                            <div class="clear_both"></div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label class="primeiro_produto">
                                                <input type="checkbox" value="" checked="">
                                                <i></i> Mecanizado
                                              </label>
                                            </div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label>
                                                <input type="checkbox" value="">
                                                <i></i> Automatizado
                                              </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label class="control-label">Se Deslizante</label>
                                            <div class="clear_both"></div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label class="primeiro_produto">
                                                <input type="checkbox" value="" checked="">
                                                <i></i> Comum
                                              </label>
                                            </div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label>
                                                <input type="checkbox" value="">
                                                <i></i> Industrial
                                              </label>
                                            </div>
                                          </div>
                                      </div>
                                     <div class="col-lg-12">
                                        <div class="col-lg-2 padding-0">
                                          <button type="button" class="add_subitem btn btn-w-m btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar item</button>
                                        </div>
                                        <div class="col-lg-2 padding-0 info-padrao-produto">
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>Painéis de grade</option>
                                                <option>Painéis de vidro</option>
                                                <option>Porta de pedestre</option>
                                                <option>Portão de garagem</option>
                                                <option>Corrimão</option>
                                            </select>
                                          </div>
                                      </div>
                                        <div class="col-lg-12">
                                          <div class="ibox-content">
                                            <div class="panel-group" id="accordion19">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion19" href="#collapseNineteen">Painel Fixo Lateral</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseNineteen" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Metragem</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel-group" id="accordion20">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion20" href="#collapseTwenty">Painel Fixo Superior</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTwenty" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Metragem</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="ibox-content">
                                <div class="panel-group" id="accordion21">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapseTwentyOne">Guarda corpo&nbsp;&nbsp;<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></a>
                                        <a href="#">
                                          <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                        </a>
                                        <a href="#">
                                          <span class="b-l-0 total_geral">R$800,00</span>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseTwentyOne" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <div class="form-group info-padrao-produto col-lg-12 padding-0 m-t-md m-b-none">
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Modelo</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Cor</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Comprimento</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Altura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Sistema de abertura</label>
                                            <select class="form-control m-b" name="account">
                                                  <option>opção 1</option>
                                                  <option>opção 2</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="form-group col-lg-3">
                                          <label class="control-label">Sistema de instalação</label>
                                            <div class="clear_both"></div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label class="primeiro_produto">
                                                <input type="checkbox" value="" checked="">
                                                <i></i> Chumbamento
                                              </label>
                                            </div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label>
                                                <input type="checkbox" value="">
                                                <i></i> Portalete
                                              </label>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-12">
                                        <div class="col-lg-2 padding-0">
                                          <button type="button" class="add_subitem btn btn-w-m btn-default"><i class="fa fa-plus"></i>&nbsp;&nbsp;Adicionar item</button>
                                        </div>
                                        <div class="col-lg-2 padding-0 info-padrao-produto">
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>Painéis de grade</option>
                                                <option>Painéis de vidro</option>
                                                <option>Porta de pedestre</option>
                                                <option>Portão de garagem</option>
                                                <option>Corrimão</option>
                                            </select>
                                          </div>
                                      </div>
                                        <div class="col-lg-12">
                                          <div class="ibox-content">
                                            <div class="panel-group" id="accordion22">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion22" href="#collapseTwentyTwo">Painéis de grade</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTwentyTwo" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Quantidade total</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel-group" id="accordion23">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion23" href="#collapseTwentyThree">Painéis de vidro</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTwentyThree" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Cor</label>
                                                        <select class="form-control m-b" name="account">
                                                            <option>Selecione</option>
                                                            <option>opção 1</option>
                                                            <option>opção 2</option>
                                                            <option>opção 3</option>
                                                            <option>opção 4</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Qtd.Total</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Metragem total</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                             <div class="panel-group" id="accordion24">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion24" href="#collapseTwentyFour">Porta de pedestre</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTwentyFour" class="panel-collapse collapse p-sm p-top-30">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Sistema de abertura</label>
                                                           <div class="clear_both"></div>
                                                          <select class="form-control m-b" name="account">
                                                              <option>opção 1</option>
                                                              <option>opção 2</option>
                                                         </select>
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Processo</label>
                                                          <div class="clear_both"></div>
                                                          <div class="checkbox i-checks col-sm-6">
                                                            <label class="primeiro_produto">
                                                              <input type="checkbox" value="" checked="">
                                                              <i></i> Mecanizado
                                                            </label>
                                                          </div>
                                                          <div class="checkbox i-checks col-sm-6">
                                                            <label>
                                                              <input type="checkbox" value="">
                                                              <i></i> Automatizado
                                                            </label>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="ibox-content">
                                <div class="panel-group" id="accordion25">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion25" href="#collapseTwentyFive">Corrimão&nbsp;&nbsp;<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></a>
                                        <a href="#">
                                          <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                        </a>
                                        <a href="#">
                                          <span class="b-l-0 total_geral">R$800,00</span>
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseTwentyFive" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <div class="form-group info-padrao-produto col-lg-12 padding-0 m-t-md m-b-none">
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Modelo</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Cor</label>
                                            <select class="form-control m-b" name="account">
                                                <option>Selecione</option>
                                                <option>opção 1</option>
                                                <option>opção 2</option>
                                                <option>opção 3</option>
                                                <option>opção 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Comprimento</label>
                                          <input type="text" class="form-control" placeholder="Qtd.">
                                        </div>
                                        <div class="form-group col-lg-2">
                                          <label class="control-label">Altura</label>
                                          <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-3">
                                          <label class="control-label">Sistema de instalação</label>
                                            <div class="clear_both"></div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label class="primeiro_produto">
                                                <input type="checkbox" value="" checked="">
                                                <i></i> Chão
                                              </label>
                                            </div>
                                            <div class="checkbox i-checks col-sm-6">
                                              <label>
                                                <input type="checkbox" value="">
                                                <i></i> Parede
                                              </label>
                                            </div>
                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--fim tab engloba-->
                            </div>
                            <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                <button class="btn btn-white btn_cancel" type="submit"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancelar</button>
                                <button class="btn btn-primary btn_yell col-lg-offset-5 col-md-offset-2" type="submit"><i class="fa fa-warning"></i>&nbsp;&nbsp;Salvar e fechar</button>
                                <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;&nbsp;Salvar</button>
                                <button class="btn btn-primary btn_blue" type="submit"><i class="fa fa-unlock-alt"></i>&nbsp;&nbsp;Salvar e Liberar orçamento</button>
                              </div>
                            </div>
                            <div class="hr-line-dashed clear_both visibility_none"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- DROPZONE -->
    <script src="js/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.i-checks').iCheck({
          checkboxClass: 'icheckbox_square-blueMarfra',
          radioClass: 'iradio_square-blueMarfra',
        });
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
<?php include('header/headerProjetista.php'); ?>
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
          <h2>Orçamento projetista</h2>
          <ol class="breadcrumb">
            <li>
              <a href="orcamento.html">Listagem de orçamentos</a>
            </li>
            <li class="active">
              <strong>Orçamento projetista</strong>
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
                        <div class="ibox-title">
                            <h5>Dados gerais</h5>
                        </div>
                <div class="ibox-content">
                <div class="form-group col-lg-12 padding-0 m-b-none">
                        <div class="col-lg-2 padding-0">
                            <label class="control-label">Cliente</label>
                            <input type="text" class="form-control" disabled placeholder="Luiz Carlos Silva">
                        </div>
                        <div class="col-lg-2">
                            <label class="control-label">Bairro</label>
                            <input type="text" class="form-control" disabled placeholder="Flamengo">
                        </div>
                        <div class="col-lg-2">
                            <label class="control-label">Responsável pelo pedido</label>
                            <input type="text" class="form-control" disabled placeholder="Luiz Carlos Silva">
                        </div>
                        <div class="col-lg-2">
                            <label class="control-label">Nº do pedido</label>
                            <input type="text" class="form-control" disabled placeholder="#MF 2015000001">
                        </div>
                 </div>
                        <div class="hr-line-dashed clear_both visibility_none" style="margin: 10px 0;"></div>
                    </div>
                </div>
            </div>
        
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Dados técnicos</h5>
              </div>
              <div class="ibox-content">
                <div class="col-lg-12 padding-0 m-b lista_produtos">
                  <div class="checkbox i-checks col-sm-1">
                    <label class="primeiro_produto">
                      <input type="checkbox" value="" checked="" disabled="">
                      <i></i> Grade
                    </label>
                  </div>
                  <div class="checkbox i-checks col-sm-2">
                    <label>
                      <input type="checkbox" value="" class="js-switch">
                      <i></i> Fechamento de vão
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
                  <div class="checkbox i-checks col-sm-1">
                    <label>
                      <input type="checkbox" value="">
                      <i></i> Corrimão
                    </label>
                  </div>
                </div>

                <div class="hr-line-dashed clear_both"></div>
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
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Grade</a>
                                    </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse">
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
                                        <div class="ibox-content">
                                          <div class="panel-group" id="accordion2">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Painéis de Grade</a>
                                                </h4>
                                              </div>
                                              <div id="collapseTwo" class="panel-collapse collapse p-sm">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Quantidade total</label>
                                                      <input type="text" class="form-control">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel-group" id="accordion4">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion4" href="#collapseFour">Painéis de Vidro</a>
                                                </h4>
                                              </div>
                                              <div id="collapseFour" class="panel-collapse collapse p-sm">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Cor</label>
                                                      <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                      <label class="control-label">Quantidade total</label>
                                                      <input type="text" class="form-control">
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
                                                  <a data-toggle="collapse" data-parent="#accordion5" href="#collapseFive">Porta de pedestre</a>
                                                </h4>
                                              </div>
                                              <div id="collapseFive" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                      <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <input type="text" class="form-control">
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
                                          <div class="panel-group" id="accordion6">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion6" href="#collapseSix">Portão de garagem</a>
                                                </h4>
                                              </div>
                                              <div id="collapseSix" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Sistema de abertura</label>
                                                      <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <input type="text" class="form-control">
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
                              <div class="ibox-content">
                                <div class="panel-group" id="accordion">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Fechamento de Vão</a>
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
                                          <div class="ibox-content">
                                            <div class="panel-group" id="accordion7">
                                              <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion7" href="#collapseSeven">Painéis de Grade</a>
                                                  </h4>
                                                </div>
                                                <div id="collapseSeven" class="panel-collapse collapse p-sm">
                                                  <div class="panel-body">
                                                    <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Quantidade total</label>
                                                        <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-3">
                                                        <label class="control-label">Quantidade total</label>
                                                        <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade total</label>
                                                        <input type="text" class="form-control">
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
                                                      <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-2">
                                                      <label class="control-label">Quantidade total</label>
                                                      <input type="text" class="form-control">
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
                                        <a data-toggle="collapse" data-parent="#accordion14" href="#collapseFourteen">Portão de garagem</a>
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
                                          <input type="text" class="form-control" placeholder="Qtd.">
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
                                                        <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control">
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
                                        <a data-toggle="collapse" data-parent="#accordion18" href="#collapseEighteen">Porta de pedestre</a>
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
                                          <input type="text" class="form-control" placeholder="Qtd.">
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
                                        <a data-toggle="collapse" data-parent="#accordion21" href="#collapseTwentyOne">Guarda corpo</a>
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
                                          <input type="text" class="form-control" placeholder="Qtd.">
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
                                                        <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control">
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
                                                        <input type="text" class="form-control" placeholder="Qtd.">
                                                      </div>
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
                                        <a data-toggle="collapse" data-parent="#accordion25" href="#collapseTwentyFive">Corrimão</a>
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
                            <div class="hr-line-dashed clear_both visibility_none"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-12">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                    <h5>Faça upload de seu arquivo</h5>
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
                      <br />
                  <div class="hr-line-dashed clear_both visibility_none"></div><div class="hr-line-dashed clear_both visibility_none"></div><div class="hr-line-dashed clear_both m-t-md"></div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button class="btn btn-white btn_cancel" type="submit"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancelar</button>
                        <button class="btn btn-primary btn_yell col-lg-offset-5 col-md-offset-2" type="submit"><i class="fa fa-warning"></i>&nbsp;&nbsp;Salvar e fechar</button>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;&nbsp;Salvar</button>
                        <button class="btn btn-primary btn_blue" type="submit"><i class="fa fa-unlock-alt"></i>&nbsp;&nbsp;Salvar e Liberar orçamento</button>
                      </div>
                    </div>
                    <div class="hr-line-dashed clear_both visibility_none"></div>
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
          checkboxClass: 'icheckbox_square-greenMarfra',
          radioClass: 'iradio_square-greenMarfra',
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
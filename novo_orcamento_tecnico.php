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
      <div class="col-lg-12">
        <div class="col-sm-10 padding-0">
          <h2 class="orcamento m-b-none">Orçamento:
            <span class="text-navy">#MF 2015000001</span>
          </h2>
        </div>
        <div class="col-sm-4 padding-0">
          <address>
            <strong>Nome da Empresa LTDA.</strong>
            <br>
            <strong>Bairro:</strong> Flamengo
            <br>
            <strong>Data:</strong> Março 18, 2014</span>
          </address>
        </div>
        <div class="col-sm-6 text-right col-sm-offset-2 padding-0 p_r_0">
          <div class="col-sm-3 padding-0 col-sm-offset-6">
            <h3>
              <span class="version produto">
                <strong>Status: </strong>Orçamento novo</span>
            </h3>
          </div>
          <div class="col-sm-3">
            <h3>
              <span class="version">
                <strong>Produto: </strong>Grade composta</span>
            </h3>
          </div>
        </div>

      </div>
      <div class="col-lg-12 padding-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Histórico</h5>
                <div class="ibox-tools">
                  <a class="collapse-link">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
              </div>
              <div class="ibox-content">
                <table class="table dataTables-example table-striped" id="editable">
                  <thead>
                    <tr>
                      <th>Data</th>
                      <th>Status</th>
                      <th>Ação</th>
                      <th>Produto</th>
                      <th>Calculado por</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>27/11/2015</td>
                      <td>Novo produto</td>
                      <td>
                        Modificação
                      </td>
                      <td>Grade simples</td>
                      <td>Mark</td>
                    </tr>
                    </a>
                    <tr>
                      <td>27/11/2015</td>
                      <td>Reparo na garantia</td>
                      <td>
                        Atualização de custos
                      </td>
                      <td>Grade composta</td>
                      <td>Jacob</td>
                    </tr>
                    <tr>
                      <td>27/11/2015</td>
                      <td>Reparo na garantia</td>
                      <td>
                        2º Modificação
                      </td>
                      <td>Grade composta</td>
                      <td>Jacob</td>
                    </tr>
                    <tr>
                      <td>23/10/2015</td>
                      <td>Serviço extra</td>
                      <td>
                        2ª Atualização de custos
                      </td>
                      <td>Portões e outros</td>
                      <td>Larry</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-12 upload_content">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Faça upload de seu arquivo</h5>
                <div class="ibox-tools">
                  <a class="collapse-link">
                    <i class="fa fa-chevron-down"></i>
                  </a>
                </div>
              </div>
              <div class="ibox-content">
                <!--blocos fotos-->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="ibox foto_local_content">
                      <!--Bloco 1-->
                      <div class="ibox-title">
                        <h5>Foto local</h5>
                        <div class="img-crop" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                        <div class="img-crop" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-1"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage" class="btn btn-default">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-1"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage" class="btn btn-default">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-1"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage" class="btn btn-default">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-1" style="visibility:hidden;"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage" class="btn btn-primary">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                            <i class="fa fa-plus"></i> Nova imagem
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="hr-line-dashed clear_both visibility_none"></div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="ibox ">
                      <div class="ibox-title">
                        <h5>Rascunho</h5>
                        <div class="img-crop2" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-2"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage2" class="btn btn-default">
                            <input type="file" accept="image/*" name="file2" id="inputImage2" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="ibox ">
                      <div class="ibox-title">
                        <h5>Desenho orçamentário</h5>
                        <div class="img-crop3" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-3"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage3" class="btn btn-default">
                            <input type="file" accept="image/*" name="file3" id="inputImage3" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="ibox ">
                      <div class="ibox-title">
                        <h5>Rascunho ratificado</h5>
                        <div class="img-crop4" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-4"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage4" class="btn btn-default">
                            <input type="file" accept="image/*" name="file4" id="inputImage4" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="ibox ">
                      <div class="ibox-title">
                        <h5>Desenho de assinatura</h5>
                        <div class="img-crop5" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-5"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage5" class="btn btn-default">
                            <input type="file" accept="image/*" name="file5" id="inputImage5" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="ibox ">
                      <div class="ibox-title">
                        <h5>Desenho de produção</h5>
                        <div class="img-crop6" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-6"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage6" class="btn btn-default">
                            <input type="file" accept="image/*" name="file6" id="inputImage6" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="col-lg-12">
                    <div class="ibox foto_local_content">
                      <!--Bloco 1-->
                      <div class="ibox-title">
                        <h5>Foto local (projeto finalizado)</h5>
                        <div class="img-crop7" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                        <div class="img-crop" style="display: none;">
                          <img src="img/p3.jpg">
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-7"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage7" class="btn btn-default">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-1"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage" class="btn btn-default">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-1"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage" class="btn btn-default">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="img-preview img-preview-sm img-1" style="visibility:hidden;"></div>
                        <div class="btn-group">
                          <label title="Upload de imagem" for="inputImage" class="btn btn-primary">
                            <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                            <i class="fa fa-plus"></i> Nova imagem
                          </label>
                          <label title="Donload image" id="download" class="btn btn-default">Download</label>
                        </div>
                      </div>
                      <div class="hr-line-dashed clear_both visibility_none"></div>
                    </div>
                  </div>
                  <!---->
                </div>
                <!--blocos fotos fim-->
                <div class="hr-line-dashed clear_both visibility_none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Lista de produtos</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-down"></i>
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
                <option>Selecione o produto</option>
                <option>Grade</option>
                <option>Portão de garagem</option>
                <option>Porta de pedestre</option>
                <option>Guarda corpo</option>
                <option>Corrimão</option>
              </select>
            </div>
          </div>
          <!--inicio grade-->
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
                              <!--inicio accordion grade-->
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Grade&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
                                <a href="#">
                                  <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">PERFIL</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ANODIZAÇÃO / PINTURA</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">VIDROS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ACESSÓRIOS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                              </h4>
                              <!--final accordion grade-->
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                      <div class="col-lg-12">
                        <div class="panel blank-panel">
                          <div class="panel-heading">
                            <div class="panel-options">
                              <ul class="nav nav-tabs">
                                <li class="active">
                                  <a data-toggle="tab" href="#tab-4">Grade com vidro
                                    <div class="col-lg-12 editar_aba">
                                      <button id="edit" class="btn btn-warning btn-xs m-l-sm" onclick="edit()" type="button">Editar</button>
                                      <button id="save" class="btn btn-primary  btn-xs" onclick="save()" type="button">Salvar</button>
                                    </div>
                                  </a>
                                </li>
                                <li class=""><a data-toggle="tab" href="#tab-5">Grade sem vidro</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-6" title="Adicionar variação de produto"><i class="fa fa-plus text-navy"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="tab-content">
                              <div id="tab-4" class="tab-pane active">
                                 <!--Inicio primeira linha-->
                                        <div class="form-group info-padrao-produto col-lg-12 m-t-md m-b-none">
                                          <div class="form-group col-lg-3">
                                            <label class="control-label">Linha de produção</label>
                                            <select class="form-control m-b" name="account">
                                              <option>Selecione</option>
                                              <option>Tubular quadrado / retangular</option>
                                              <option>Tubular redondo</option>
                                              <option>opção 3</option>
                                              <option>opção 4</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-2 padding-0">
                                            <label class="control-label">peso total (kg)</label>
                                            <input type="text" class="form-control" disabled placeholder="100">
                                          </div>
                                          <div class="col-lg-2 padding-0">
                                            <label class="control-label">valor total (R$)</label>
                                            <input type="text" class="form-control" disabled placeholder="800,00">
                                          </div>
                                        </div>
                                        <!--Final primeira linha-->

                                        <!--Inicio especificacoes-->
                                        <div class="form-group espec-tecnica col-lg-12 m-b-none">
                                          <label class="control-label">Especificações técnicas</label>
                                          <div class="hr-line-dashed clear_both m-t-none"></div>
                                        </div>
                                        <!--Final especificacoes-->

                                        <!--Inicio segunda linha-->
                                        <div class="form-group info-padrao-produto col-lg-12 m-b-none">
                                          <div class="form-group col-lg-1">
                                            <label class="control-label">Comprimento</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group col-lg-1">
                                            <label class="control-label">Altura</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Tipo de pintura</label>
                                            <select class="form-control m-b" name="account">
                                              <option>Selecione</option>
                                              <option>Eletrostática</option>
                                              <option>Anodização</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Cor</label>
                                            <select class="form-control m-b" name="account">
                                              <option>Selecione</option>
                                              <option>Branca</option>
                                              <option>Verde</option>
                                              <option><strong>-- Bronze</strong></option>
                                              <option><strong>-- Fosco</strong></option>
                                              <option><strong>-- Preto</strong></option>
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
                                        </div>
                                        <!--Final segunda linha-->

                                        <!--Inicio ultima linha-->
                                        <div class="form-group col-lg-12 info-padrao-produto">
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Qtd. colunas no piso</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Qtd. colunas na mureta</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Qtd. painéis removiveis</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group col-lg-2">
                                            <label class="control-label">Qtd. trilho no chão</label>
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                        <!--inicio subitens-->
                                          <div class="col-lg-12">
                                          <!--Inicio Portões-->
                                          <div class="panel-group" id="accordion1">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">Portões <span class="sub_description">- valor total: R$800</span> <span class="sub_description">/ peso total: 90kg</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseOne" class="panel-collapse collapse p-m m-t-md">
                                                <div class="panel-body">
                                                  <div class="form-group title-produto col-lg-12 m-b-none">
                                                    <label class="control-label">Pedestres</label> -- Esse projeto não possui itens desse modo <input type="checkbox" value="" class="js-switch3">
                                                    <div class="hr-line-dashed clear_both m-t-none"></div>
                                                  </div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Simples automático</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Simples mecânico</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Duplo automático</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Duplo mecânico</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Deslizante industrial</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Deslizante mecânico</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <!--fim modelo item-->
                                                </div>
                                                <div class="panel-body">
                                                  <div class="form-group title-produto col-lg-12 m-b-none m-t-lg">
                                                    <label class="control-label">Garagem</label> -- Esse projeto não possui itens desse modo <input type="checkbox" value="" class="js-switch3">
                                                    <div class="hr-line-dashed clear_both m-t-none"></div>
                                                  </div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Deslizante comum</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Desl. Semi industrial</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Deslizante industrial</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Deslizante mecânico</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Simples c/motor</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Simples mecânico</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Duplo c/motor</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">PIV. Duplo mecânico</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Pivo Robô</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Basculante Horizontal</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Basculante Vertical</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-3 m-t">
                                                      <label class="control-label">Basculante mecânico</label>
                                                      <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                        <input type="text" placeholder="Qtd." class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <!--fim modelo item-->
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final portões-->

                                          <!--Inicio pefil-->
                                          <div class="panel-group" id="accordion2">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Perfis <span class="sub_description">- valor total: R$800</span> <span class="sub_description">/ peso total: 90kg</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseTwo" class="panel-collapse collapse p-sm">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Tubo redondo 4"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Tubo redondo 3"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Tubo redondo 2"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Tubo redondo 1 1/2"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Tubo redondo 3/8"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Trilho superior AL2902</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Jota B434</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Cantoneira 1"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Cantoneira 1 x 1 1/4"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Cantoneira 1 x 1/16"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Requadro vidro</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                      <label class="control-label">Baguete</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-md">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">Altura</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="1,8">
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
                                                    <div class="hr-line-dashed clear_both m-t-lg"></div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-4">
                                                        <label class="control-label">peso total (kg)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="90">
                                                      </div>
                                                      <div class="form-group col-lg-4">
                                                        <label class="control-label">valor total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final perfil-->

                                          <!--Inicio anodizacao-->
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12">
                                                      <label class="control-label">Pintura branca</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Peso</label>
                                                        <input type="text" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Preço (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="7,0">
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="146,15">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final anodizacao-->

                                          <!--inicio vidros-->
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
                                                    <!--inicio modelo item-->
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                       <div class="form-group col-lg-12"><input type="checkbox" value="" class="js-switch3"> Esse projeto não possui itens desse modo</div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Cor</label>
                                                        <select class="form-control m-b" name="account">
                                                          <option>Vidro incolor - 8 mm </option>
                                                          <option>Vidro fumê - 8 mm </option>
                                                          <option>Vidro verde - 8mm </option>
                                                          <option>Vidro bronze - 8 mm </option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-lg-1">
                                                        <label class="control-label">M²</label>
                                                        <input type="text" class="form-control">
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
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final vidros-->

                                          <!--inicio chapeado-->
                                          <div class="panel-group" id="accordion50">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion50" href="#collapseFifty">Chapeados <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseFifty" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-12"><input type="checkbox" value="" class="js-switch3"> Esse projeto não possui itens desse modo</div>

                                                      <div class="espec-produto col-lg-12">
                                                        <label class="control-label">Caixa de correio</label>
                                                        <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
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
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="espec-produto col-lg-12">
                                                        <label class="control-label">Caixa de interfone</label>
                                                        <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                      </div>
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input type="text" class="form-control">
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
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final chapeado-->

                                          <!--inicio acessorios-->
                                          <div class="panel-group" id="accordion51">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion51" href="#collapseFiftyone">Acessórios <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseFiftyone" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Tampa redonda de 4"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Tampa redonda de 3"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Tampa redonda de 2"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">PVC 3x3</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Sintex</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Color jet</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Color jet</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Vaselina líquida (1/2L)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Pontalete grande</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Sicadur / concresive</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Saco de areia</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Saco de pedra</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Cimento</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Arrebite 3/16 x 1 - Caixa c/1000</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Arrebite POP 3/16 x 1/2</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Arrebite POP 1/18 x 1/2</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Arrebite POP 5/32</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Parafuso 3/16 x 16 cabeça chata (RM)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Parafuso 3/16 x 1"</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Parafuso 4,2 x 25 (cab.chata) RS</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Parafuso 4,8 x 16 (cab.panela) RS</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Parafuso 5,5 x 13 (cab.panela) RS</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Parafuso 1 1/2 x 1/4 sextavado ferro</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Porca 3/16 x 24 caixa</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Porca 5/16</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Porca 3/8</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Arruela 3/8</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Arruela 5/16 de pressão</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Arruela de pressão 3/16 x 24</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Eletrodo</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Fio (metro)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Disco p/corte de ferro</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                        <label class="control-label">valor total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final acessorios-->

                                          <!--inicio Pedreste-->
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
                                                    <div class="form-group col-lg-12"><input type="checkbox" value="" class="js-switch3"> Esse projeto não possui itens desse modo</div>
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Fechadura elétrica HDL</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Fechadura mecânica STAM</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit motor 1 HP</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Dobradiça</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Dobradiça c/mola embutida</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Mola aérea nº2</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Chapa de fechadura</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Ferrolho 40cm</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Vergalhão rosqueado sem fim 1m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Roldana</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                        <label class="control-label">valor total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final Pedestre-->

                                          <!--inicio Pivotante-->
                                          <div class="panel-group" id="accordion60">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion60" href="#collapseSixty">Pivotantes - mecanização / automação <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseSixty" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12"><input type="checkbox" value="" class="js-switch3"> Esse projeto não possui itens desse modo</div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/5 HP - 0,75m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/5 HP - 1,00m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/5 HP - 1,50m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/4 HP - 0,75m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/4 HP - 1,00m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/4 HP - 1,50m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit motor 1/2 HP - 0,75m (embolo)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/2 HP - 1,00m (embolo)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/2 HP - 1,50m (embolo)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Base de motor (ferro)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Fechadura elétrica HDL</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Fechadura mecânica STAM</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Conjunto de rolamento pião</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Ferrolho</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Suporte p/ Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Circuito p/ Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Cabo de aço</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Roldana inferior</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Vergalhão rosqueado</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                    <!--fim modelo item-->
                                                    <div class="hr-line-dashed clear_both"></div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-4">
                                                        <label class="control-label">valor total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final Pivotante-->

                                          <!--inicio Pivô robô-->
                                          <div class="panel-group" id="accordion70">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion70" href="#collapseSeventyone">Pivô robô - mecanização / automação <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseSeventyone" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body"><div class="form-group col-lg-12"><input type="checkbox" value="" class="js-switch3"> Esse projeto não possui itens desse modo</div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1 HP</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Suporte p/ Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Circuito p/ Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                        <label class="control-label">valor total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final Pivô robô-->

                                          <!--inicio Deslizantes-->
                                          <div class="panel-group" id="accordion80">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion80" href="#collapseEighty">Deslizantes - mecanização / automação <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseEighty" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body"><div class="form-group col-lg-12"><input type="checkbox" value="" class="js-switch3"> Esse projeto não possui itens desse modo</div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/4 HP</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit motor 1/2 HP</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit motor 1 HP</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Base de motor</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Guia do "U" B434</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Suporte do AL</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Carrinho de nylon p/perfil 2902</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Copinho de nylon p/carrinho</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Nylon 20mm x 12mm</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit Cremalheira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Trilho inferior de ferro</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Circuito p/ sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Suporte p/ sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Batente espera</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Roldana</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Mão francesa</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Fechadura mecânica STAM</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Caideirinha</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                        <label class="control-label">valor total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final Deslizantes-->

                                          <!--inicio Basculante-->
                                          <div class="panel-group" id="accordion90">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion90" href="#collapseNinety">Basculante - mecanização / automação <span class="sub_description">- valor total: R$800</span></a>
                                                </h4>
                                              </div>
                                              <div id="collapseNinety" class="panel-collapse collapse p-sm p-top-30">
                                                <div class="panel-body">
<div class="form-group col-lg-12"><input type="checkbox" value="" class="js-switch3"> Esse projeto não possui itens desse modo</div>
                                                  <div class="form-group col-lg-12 margin-b-0 padding-0">
                                                    <!--inicio modelo item-->
                                                    <div class="espec-produto col-lg-12 m-t">
                                                      <label class="control-label">Kit motor 1/4 HP - 1,50m vertical</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit motor 1/4 HP - 2,25m horizontal</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit motor 1/3 HP - 2,25m horizontal</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0 m-b-none">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Suporte p / sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Circuito p / sinaleira</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit Ferragem BH</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Kit Ferragem BV</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Limalha (kg)</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Puxador</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Fechadura mecânica STAM</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                      <label class="control-label">Vergalhão rosqueado 3m</label>
                                                      <div class="hr-line-dashed clear_both m-t-none m-b-sm"></div>
                                                    </div>
                                                    <div class="form-group info-padrao-produto col-lg-12 padding-0">
                                                      <div class="form-group col-lg-2">
                                                        <label class="control-label">Quantidade</label>
                                                        <input disabled placeholder="3" type="text" class="form-control">
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
                                                        <label class="control-label">valor total (R$)</label>
                                                        <input type="text" class="form-control" disabled="" placeholder="239,156">
                                                      </div>
                                                    </div>
                                                    <!--fim modelo item-->
                                                  </div>
                                                  <!--itens a confirmar-->
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--final Basculante-->

                                        </div>
                                        <!--final subitens produto-->
                              </div>

                              <div id="tab-5" class="tab-pane">
                                <p>Conteúdo da segunda aba</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                              
                              <div class="panel-body">
                                <div class="panel blank-panel">
                                  <!--Inicio tab body-->
                                  <div class="panel-body">
                                    <!--Inicio tab content-->
                                      <div class="tab-content">
                                            <!--Inicio tab1-->
                                      <div id="tab-1" class="tab-pane active">
                                        <!--inicio subitens-->
                                        
                                      </div>
                                      <!--final tab1-->
                                      <div id="tab-2" class="tab-pane">Conteúdo do novo produto</div>
                                      <!--<div id="tab-3" class="tab-pane">#</div>-->
                                      </div>
                                    <!--final tab content-->
                                  </div>
                                  <!--final tab body-->
                                  
                                </div>
                              </div>
                              <!--final tab-->
                            </div>
                          </div>
                        </div>
                      </div>


                      
                      <div class="ibox-content">
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Grade 2 <i class="fa fa-chevron-down"></i></a>
                                <a href="#">
                                  <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">PERFIL</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ANODIZAÇÃO / PINTURA</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">VIDROS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ACESSÓRIOS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                              </h4>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="panel-group" id="accordion14">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion14" href="#collapseFourteen">Portão de garagem&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
                                <a href="#">
                                  <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">PERFIL</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ANODIZAÇÃO / PINTURA</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">VIDROS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ACESSÓRIOS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                              </h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="panel-group" id="accordion18">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion18" href="#collapseEighteen">Porta de pedestre&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
                                <a href="#">
                                  <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">PERFIL</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ANODIZAÇÃO / PINTURA</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">VIDROS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ACESSÓRIOS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                              </h4>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="panel-group" id="accordion21">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion21" href="#collapseTwentyOne">Guarda corpo&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
                                <a href="#">
                                  <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">PERFIL</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ANODIZAÇÃO / PINTURA</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">VIDROS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ACESSÓRIOS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                              </h4>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="ibox-content">
                        <div class="panel-group" id="accordion25">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion25" href="#collapseTwentyFive">Corrimão&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></a>
                                <a href="#">
                                  <span class="excluir_subitem excluir_produto"><i class="fa fa-times text-navy" title="Excluir produto"></i></span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">PERFIL</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ANODIZAÇÃO / PINTURA</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="traco_produto">--</span>
                                </a>
                                <a href="#">
                                  <span class="quantidade_geral">100kg</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">VIDROS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                                <a href="#">
                                  <span class="barra_produto"> | </span>
                                </a>
                                <a href="#">
                                  <span class="total_geral_label">ACESSÓRIOS</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">valores totais:</span>
                                </a>
                                <a href="#">
                                  <span class="total_geral">R$800,00</span>
                                </a>
                              </h4>
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
  <div class="footer">
    <div class="text-center">
      <strong><a href="ramais.php">Acesso aos ramais</a></strong>
    </div>
  </div>
  </div>
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

  <!-- SUMMERNOTE -->
  <script src="js/plugins/summernote/summernote.min.js"></script>

  <!-- Image cropper -->
  <script src="js/plugins/cropper/cropper.min.js"></script>

  <script>
    $(document).ready(function() {

      // INICIO BLOCO 1
      var $image = $(".img-crop > img");
      $($image).cropper({
        aspectRatio: 1.618,
        preview: ".img-1",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage = $("#inputImage");
      if (window.FileReader) {
        $inputImage.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage.val("");
              $image.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 2

      // INICIO BLOCO 2
      var $image2 = $(".img-crop2 > img");
      $($image2).cropper({
        aspectRatio: 1.618,
        preview: ".img-2",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage2 = $("#inputImage2");
      if (window.FileReader) {
        $inputImage2.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage2.val("");
              $image2.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage2.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image2.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 2

      // INICIO BLOCO 3
      var $image3 = $(".img-crop3 > img");
      $($image3).cropper({
        aspectRatio: 1.618,
        preview: ".img-3",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage3 = $("#inputImage3");
      if (window.FileReader) {
        $inputImage3.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage3.val("");
              $image3.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage2.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image3.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 3

      // INICIO BLOCO 4
      var $image4 = $(".img-crop4 > img");
      $($image4).cropper({
        aspectRatio: 1.618,
        preview: ".img-4",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage4 = $("#inputImage4");
      if (window.FileReader) {
        $inputImage4.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage4.val("");
              $image4.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage2.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image4.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 4

      // INICIO BLOCO 5
      var $image5 = $(".img-crop5 > img");
      $($image5).cropper({
        aspectRatio: 1.618,
        preview: ".img-5",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage5 = $("#inputImage5");
      if (window.FileReader) {
        $inputImage5.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage5.val("");
              $image5.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage2.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image5.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 5

      // INICIO BLOCO 6
      var $image6 = $(".img-crop6 > img");
      $($image6).cropper({
        aspectRatio: 1.618,
        preview: ".img-6",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage6 = $("#inputImage6");
      if (window.FileReader) {
        $inputImage6.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage6.val("");
              $image6.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage2.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image6.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 6

      // INICIO BLOCO 7
      var $image7 = $(".img-crop7 > img");
      $($image7).cropper({
        aspectRatio: 1.718,
        preview: ".img-7",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage7 = $("#inputImage7");
      if (window.FileReader) {
        $inputImage7.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage7.val("");
              $image7.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage2.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image7.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 7

      // INICIO BLOCO 8
      var $image8 = $(".img-crop8 > img");
      $($image8).cropper({
        aspectRatio: 1.818,
        preview: ".img-8",
        done: function(data) {
          // Output the result data for cropping image.
        }
      });

      var $inputImage8 = $("#inputImage8");
      if (window.FileReader) {
        $inputImage8.change(function() {
          var fileReader = new FileReader(),
            files = this.files,
            file;

          if (!files.length) {
            return;
          }

          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function() {
              $inputImage8.val("");
              $image8.cropper("reset", true).cropper("replace", this.result);
            };
          } else {
            showMessage("Please choose an image file.");
          }
        });
      } else {
        $inputImage2.addClass("hide");
      }

      $("#download").click(function() {
        window.open($image8.cropper("getDataURL"));
      });

      $('.summernote').summernote();
      // FIM BLOCO 8

    });
    var edit = function() {
      $('.click2edit').summernote({
        focus: true
      });
    };
    var save = function() {
      var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
      $('.click2edit').destroy();
    };
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
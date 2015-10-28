<?php include('header/headerAtendimento.php'); ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Abertura de orçamento</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Cliente</a>
                        </li>
                        <li>
                            <a href="orcamento.php">Orçamento</a>
                        </li>
                        <li class="active">
                            <strong>Abertura de Orçamento</strong>
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
                <div class="form-group col-lg-12 padding-0 has-error">
                        <div class="col-lg-2">
                            <label class="control-label">Escolha o tipo de cliente</label>
                            <select class="form-control m-b" name="account">
                                <option>Tipo de cliente</option>
                                <option>Governo</option>
                                <option>Condomínio</option>
                                <option>Empresa</option>
                                <option>Pessoa física</option>
                            </select>
                            <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                        </div>
                        <div class="col-lg-4 has-error">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="control-label">Selecione o nome do cliente</label>
                                    <select data-placeholder="Nome do Cliente" class="chosen-select" style="width:350px;" tabindex="2">
                                        <option value=""></option>
                                        <option value="United States">Luiz</option>
                                        <option value="United Kingdom">João</option>
                                        <option value="United Kingdom">Luciano</option>
                                    </select>
                                    <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                 </div>
                 <div class="hr-line-dashed clear_both"></div>
                 <div class="col-lg-12 padding-0 form-group has-error">
                        <div class="col-lg-2">
                            <label class="control-label">Escolha o tipo de serviço</label>
                            <select class="form-control m-b" name="account">
                                <option>Tipo de serviço</option>
                                <option>Novo produto</option>
                                <option>Serviço extra</option>
                                <option>Reparo na Garantia</option>
                            </select>
                            <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                        </div>
                         <div class="col-lg-4">
                            <label class="control-label">Selecione o produto</label>
                            <div class="input-group">
                                <select data-placeholder="Produto" class="chosen-select" multiple style="width:350px;" tabindex="4">
                                    <option value="">Selecione</option>
                                    <option value="Grade">Grade</option>
                                    <option value="Fechamento de vão">Fechamento de vão</option>
                                    <option value="Portão de garagem">Portão de garagem</option>
                                    <option value="Portão de pedestre">Portão de pedestre</option>
                                    <option value="Guarda corpo">Guarda corpo</option>
                                    <option value="Corrimão">Corrimão</option>
                                </select>
                                <div class="alert alert-danger">
                                    Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                </div>
                            </div>
                            
                        </div>
                </div>
                <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group col-lg-12 padding-0 has-error"> 
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Responsável</label>
                                    <input type="text" class="form-control">
                                    <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Telefone</label>
                                    <input type="text" class="form-control" data-mask="(99) 9999-9999">
                                    <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 padding-0 m-b-lg padding-0 m-l has-error"> 
                                <label class="control-label">Caso o Responsável não esteja presente durante a visita, procurar:</label>
                            </div>
                             <div class="form-group col-lg-12 padding-0 has-error"> 
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Nome</label>
                                    <input type="text" class="form-control">
                                    <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Telefone</label>
                                    <input type="text" class="form-control" data-mask="(99) 9999-9999">
                                    <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 padding-0 has-error">
                                <div class="form-group col-lg-6">
                                  <label class="control-label">Informações adicionais</label>
                                  <textarea class="form-control"></textarea>
                                  <div class="alert alert-danger">
                                    Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                  </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group col-lg-12 padding-0 has-error" id="data_1">
                             <div class="form-group col-lg-3">
                                  <label class="control-label">Data da visita orçamentária</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="dd/mm/yyyy">
                                </div>
                                <div class="alert alert-danger">
                                        Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                    </div>
                                <span class="info">Informe ao cliente a data limite da visita.</span>
                             </div>
                            </div>
                            <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-white btn_cancel" type="submit">Cancelar</button>
                                        <button class="btn btn-primary btn_yell col-lg-offset-5 col-md-offset-2" type="submit">Salvar e fechar</button>
                                        <button class="btn btn-primary" type="submit">Salvar</button>
                                    </div>
                                </div>
                        <div class="hr-line-dashed clear_both visibility_none"></div>

                        </div>
                    </div>
                </div>
            </div>       
        </div>

        <?php include('footer/footerAtendimento.php'); ?>
       

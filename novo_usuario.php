<?php include('header/headerCalculista.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Cadastro</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Master</a>
                        </li>
                        <li class="active">
                            <strong>Novo usuário</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
        <!-- <div class="row m-b-lg">
                <div class="col-lg-2">
                    <select class="form-control m-b" name="account">
                        <option>Escolha o tipo de cliente</option>
                        <option>Governo</option>
                        <option>Condomínio</option>
                        <option>Empresa</option>
                        <option>Pessoa física</option>
                    </select>
                </div>
         </div>-->
          <div class="row m-b-lg">
                <div class="col-lg-2">
              <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Escolha o tipo de cliente<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Governo</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Condomínio</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Empresa</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Pessoa física</a></li>
                    </ul>
                </div>
                 </div>
              </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pessoa Física</h5>
                        </div>
                            <div class="ibox-content">
                            <form method="get" class="">
                                <div class="form-group col-lg-12 padding-0 margin-b-0">
                                    <div class="form-group col-lg-4 m-t-md has-error">
                                        <label class="control-label">Nome Completo</label>
                                        <input type="text" class="form-control">
                                        <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 margin-b-0 padding-0">
                                    <div class="form-group col-lg-2">
                                      <label class="control-label">Data de Nascimento</label>
                                      <input type="text" class="form-control" data-mask="99/99/9999">
                                    </div>
                                    <div class="form-group col-lg-3 has-error">
                                      <label class="control-label">CPF</label>
                                       <input type="text" class="form-control" data-mask="999.999.999.99">
                                       <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 has-error">
                                        <label class="control-label">RG</label>
                                       <input type="text" class="form-control" data-mask="99.999.999-9">
                                       <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-4 has-error">
                                    <label class="control-label">E-mail</label>
                                    <input type="email" class="form-control">
                                    <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>
                                <div class="form-group col-lg-2 has-error">
                                    <label class="control-label">Telefone Fixo</label>
                                    <input type="text" class="form-control" data-mask="(99) 9999-9999">
                                    <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label class="control-label">Celular</label>
                                    <input type="text" class="form-control" data-mask="(99) 99999-9999">
                                </div>
                            </div>
                                <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-4">
                                        <label class="control-label">Como conheceu a Marfra?</label>
                                        <select class="form-control" name="account">
                                            <option>----</option>
                                            <option>Veículos</option>
                                            <option>Faixa</option>
                                            <option>Plaqueta</option>
                                            <option>Cliente antigo</option>
                                            <option>Indicação</option>
                                            <option>Internet</option>
                                        </select>
                                </div>
                            </div>
                                <div class="hr-line-dashed clear_both visibility_none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pessoa Jurídica (Condomínio, Empresa, Governo)</h5>
                        </div>
                        <div class="ibox-content">
                         <form> 
                            <div class="form-group col-lg-12 m-t-md padding-0 has-error">
                                <div class="form-group col-lg-5">
                                    <label class="control-label">Razão Social</label>
                                    <input type="text" class="form-control">
                                        <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>
                                <div class="form-group col-lg-3 has-error">
                                    <label class="control-label">CNPJ</label>
                                    <input type="text" class="form-control" data-mask="99.999.999/9999-99">
                                        <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-6 col-sm-12 padding-0 m-b-lg"> 
                            <div class="col-lg-12">
                                   <label class="col-sm-12 padding-0 m-b-sm">Isento de Inscrição Estadual?</label>
                                       <label class="checkbox-inline i-checks col-sm-12">
                                           <input type="checkbox" value="option1"> Sim, é isento.
                                       </label>
                             </div>
                            </div>
                            <div class="form-group col-lg-12 padding-0"> 
                             <div class="form-group col-lg-2 col-md-12 col-sm-12">
                                        <label class="control-label">Inscrição Estadual</label>
                                        <input type="text" class="form-control" disabled data-mask="99999999-99">
                             </div>
                                <div class="form-group col-lg-2 col-md-12 col-sm-12">
                                       <label class="control-label">Inscrição Municipal</label>
                                       <input type="text" class="form-control" data-mask="9.999.999-9">
                                </div>
                            </div>
                            <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group col-lg-12 padding-0"> 
                                <div class="form-group col-lg-4 has-error">
                                    <label class="control-label">Responsável</label>
                                    <input type="text" class="form-control">
                                        <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="control-label">Cargo</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-2 has-error">
                                    <label class="control-label">CPF</label>
                                    <input type="text" class="form-control" data-mask="999.999.999.99">
                                        <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>                                
                                <div class="form-group col-lg-2 has-error">
                                  <label class="control-label">E-mail</label>
                                  <input type="email" class="form-control">
                                        <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>
                                <div class="form-group col-lg-2 has-error">
                                   <label class="control-label">Telefone Fixo</label>
                                   <input type="text" class="form-control" data-mask="(99) 9999-9999">
                                        <div class="alert alert-danger">
                                            Esse campo é <a class="alert-link" href="#">obrigatório.</a>
                                        </div>
                                </div>
                                <div class="form-group col-lg-2">
                                  <label class="control-label">Celular</label>
                                  <input type="text" class="form-control" data-mask="(99) 99999-9999">
                                </div>
                            </div>
                            <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group col-lg-12 padding-0">
                            <div class="form-group col-lg-4">
                                    <label class="control-label">Como conheceu a Marfra?</label>
                                        <select class="form-control m-b" name="account">
                                            <option>----</option>
                                            <option>Veículos</option>
                                            <option>Faixa</option>
                                            <option>Plaqueta</option>
                                            <option>Cliente antigo</option>
                                            <option>Indicação</option>
                                            <option>Internet</option>
                                        </select>
                            </div>
                            </div>
                            <div class="hr-line-dashed clear_both visibility_none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--segundo módulo-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Endereço</h5>
                        </div>
                       <div class="ibox-content">
                            <form method="get" class="m-t-md">
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-2">
                                    <label class="control-label">CEP</label>
                                    <input type="text" class="form-control" data-mask="99999-999">
                                </div>
                            </div>
                                <!--endereco-->
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-5">
                                    <label class="control-label">Rua</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-1">
                                    <label class="control-label">Nº</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Complemento</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Bairro</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Estado</label>
                                        <select class="form-control m-b" name="account">
                                            <option>Selecione um Estado</option>
                                            <option>Rio de Janeiro</option>
                                            <option>São Paulo</option>
                                            <option>Minas Gerais</option>
                                            <option>Recife</option>
                                        </select>
                                </div>
                            <div class="form-group col-lg-3">
                                    <label class="control-label">Cidade</label>
                                        <select class="form-control m-b" name="account">
                                            <option>----</option>
                                            <option>Rio de Janeiro</option>
                                            <option>São Paulo</option>
                                            <option>Minas Gerais</option>
                                            <option>Recife</option>
                                        </select>
                            </div>
                            </div>
                            <div class="hr-line-dashed clear_both"></div><div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-white btn_cancel" type="submit"><i class="fa fa-times"></i>&nbsp;&nbsp;Cancelar</button>
                                        <button class="btn btn-primary btn_yell col-lg-offset-5 col-md-offset-2" type="submit"><i class="fa fa-warning"></i>&nbsp;&nbsp;Salvar e fechar</button>
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;&nbsp;Salvar</button>
                                        <button class="btn btn-primary btn_blue" type="submit"><i class="fa fa-plus"></i>&nbsp;&nbsp;Salvar e abrir pedido</button>
                                    </div>
                                </div><div class="hr-line-dashed clear_both visibility_none"></div></form></div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include('footer/footerCalculista.php'); ?>

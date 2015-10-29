<?php include('header/headerCalculista.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Cálculo</h2>
                    <ol class="breadcrumb">
                        <li>
                            Cliente
                        </li>
                        <li class="active">
                            <strong>Cálculo</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                                         <div class="col-sm-6">
                                            <div class="row m-b-lg">
                                        <div class="col-sm-6"><div id="editable_filter"><input type="search" class="form-control input-sm" placeholder="Procurar" aria-controls="editable"></div></div>
                                    </div>
                                    <span><strong>Versão 1</strong></span>
                                    <h4>Orçamento: <span class="text-navy"> #MF 2015000001</span></h4>
                                    <br />
                                    <address>
                                        <strong>Nome da Empresa LTDA.</strong><br>
                                        Rua Frederico Edelweiss, 1080<br>
                                        Bloco 2, Apto.2201<br>
                                        Rio de Janeiro, RJ<br>
                                        <abbr title="Phone">T:</abbr> (21) 3358-4321
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <p>
                                        <strong>Responsável pelo pedido</strong><br>
                                        <abbr title="Phone">T:</abbr> (21) 9601-4590<br>
                                    </p>
                                    <br />
                                    <p>
                                        <span><strong>Data realização:</strong> Março 18, 2014</span><br/>
                                        <span><strong>Data limite de aprovação:</strong> Março 24, 2014</span>
                                    </p>
                                </div>
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><strong>Orçamento</strong> </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content p-xl">
                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Produtos e itens</th>
                                        <th>Preço Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div><strong>Grade</strong></div>
                                            <small>Modelo 1, verde, Quantidade 2, 10m comprimento, 20m altura, sistema Instalação - Portalete</small></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="padding-l-20"><div><strong>Fechamento de vão</strong></div>
                                            <small>Modelo 1, verde, Quantidade 2, 10m comprimento, 20m altura</small></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="padding-l-20"><div><strong>Painéis de Grade</strong></div>
                                            <small>Quantidade 3 unidades</small></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Guarda Corpo</strong></div>
                                            <small>Modelo x, azul, Quantidade 4, 10m comprimento, 5m altura, Sistema de abertura 1</small></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><div><strong>Portão de Pedestre</strong></div>
                                            <small>Modelo x, azul, 10m comprimento, 5m altura, Sistema de abertura 1</small></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                    
                  <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>TOTAL:</strong></td>
                                    <td style="border:none"><input type="text" class="form-control"></td>
                                </tr>
                                </tbody>
                            </table>          
                        <div class="hr-line-dashed clear_both" style="margin: 10px 0;"></div>
                    <div class="hr-line-dashed clear_both visibility_none"></div>
                    <div class="form-group col-lg-12 padding-0 m-b-none">
                        <div class="col-lg-2 padding-0">
                            <label class="control-label">Prazo de entrega</label>
                            <select class="form-control m-b" name="account">
                                  <option>Selecione</option>
                                  <option>45 a 90 dias úteis</option>
                                  <option>90 a 120 dias úteis</option>
                              </select>
                        </div>
                        <div class="col-lg-2 col-lg-offset-1 padding-0">
                            <label class="control-label">Tipo de pagamento</label>
                            <select class="form-control m-b" name="account">
                                  <option>Selecione</option>
                                  <option>Boleto</option>
                                  <option>Cheque</option>
                              </select>
                        </div>
                    </div><div class="hr-line-dashed clear_both visibility_none"></div>
                     <div class="form-group col-lg-12 m-b-none padding-0">
                         <div class="col-lg-12 m-b-xs padding-0">
                            <label class="control-label"><strong>Forma de pagamento</strong></label>
                         </div>
                        <div class="col-lg-4 padding-0">
                            <label class="control-label text-navy">Até 10.000,00</label>
                             <div class="clear_both"></div>
                                <div class="radio i-checks col-sm-12">
                                  <label class="padding-0">
                                    <input type="radio" value="" checked="">
                                    <i></i> 02 parcelas com desconto de 5%,<br />50% de sinal + 50% na entrega
                                  </label>
                                </div>
                                <div class="radio i-checks col-sm-12">
                                  <label class="padding-0">
                                    <input type="radio" value="">
                                    <i></i> 04 parcelas iguais,<br />50% de sinal + 50% na entrega
                                  </label>
                                </div>
                        </div>
                         <div class="col-lg-4 padding-0">
                            <label class="control-label text-navy">Acima de 10.000,00</label>
                             <div class="clear_both"></div>
                               <div class="radio i-checks col-sm-12">
                                  <label class="padding-0">
                                    <input type="radio" value="">
                                    <i></i> 02 parcelas com desconto de 5%<br />50% de sinal + 50% na entrega
                                  </label>
                                </div>
                                <div class="radio i-checks col-sm-12">
                                  <label class="padding-0">
                                    <input type="radio" value="">
                                    <i></i> 06 parcelas iguais sem juros<br />Sinal + 30, 60, 90, 120, 180 dias
                                  </label>
                                </div>
                                <div class="radio i-checks col-sm-12">
                                  <label class="padding-0">
                                    <input type="radio" value="">
                                    <i></i> 10 parcelas iguais com acréscimo de 10%<br /> Sinal + 30, 60, 90, 120, 180, 210, 240, 270, 300 dias
                                  </label>
                                </div>
                        </div>
                    </div>
<div class="hr-line-dashed clear_both visibility_none"></div>
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
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

     <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>

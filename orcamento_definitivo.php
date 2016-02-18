<?php include('header/headerTecOrcamentista.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Listagem de Pedidos</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <strong><a href="orcamento.php">Pedidos</a></strong>
                        </li>
                        <li class="active">
                            <strong><a href="orcamento.php">Listagem de Pedidos</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2 ferramentas">
                    <a href="novo_orcamento_tecnico.php">
                        <span>
                            <button class="btn btn-edit btn-circle" type="button"><i class="fa fa-pencil"></i></button>
                            <br />Editar
                        </span>
                    </a>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content p-b5">
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
                            <option>- Selecionar Cliente -</option>
                            <option>Condomínio</option>
                            <option>Empresa</option>
                            <option>Pessoa física</option>
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
                                <th>Nome do cliente</th>
                                <th>Bairro</th>
                                <th>Tipo de cliente</th>
                                <th>Data da abertura</th>
                                <th>Nº Orçamento</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="#"><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Mark Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Condomínio</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr></a>
                            <tr>
                                <td><input type="checkbox" value="" checked=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Jacob Ltda. Company</a></td>
                                <td>Vila Valqueire</td>
                                <td>Empresa</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Larry Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Governo</td>
                                <td>23/10/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Copacabana</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Barros Filho</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Anchieta</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="orcamento_tecnico_cadastrado.php" title="Acessar">Hudson Ltda. Company</a></td>
                                <td>Glória</td>
                                <td>Pessoa Física</td>
                                <td>27/11/2015</td>
                                <td>MF 2015000001</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <?php include('footer/footerTecOrcamentista.php'); ?>
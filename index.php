        <?php include('header/headerAtendimento.php'); ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Clientes</h2>
                    <ol class="breadcrumb">
                        <li>
                            <strong><a href="index.php">Listagem de Clientes</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2 ferramentas">
                    <a href="novo_cliente.php">
                        <span>
                            <button class="btn btn-edit btn-circle" type="button"><i class="fa fa-pencil"></i></button>
                            <br />Editar
                        </span>
                    </a>
                    <a href="novo_cliente.php">
                        <span>
                            <button class="btn btn-info btn-circle" type="button"><i class="fa fa-plus"></i></button>
                        <br />Novo
                        </span>
                    </a>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
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
                        <table class="table dataTables-example table-striped" id="editable">
                            <thead>
                            <tr>
                                <th><input type="checkbox" value=""></th>
                                <th>Nome</th>
                                <th>Bairro</th>
                                <th>Tipo</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="#"><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Mark</a></td>
                                <td>Glória</td>
                                <td>Condomínio</td>
                                <td>7485-6523</td>
                                <td>condominio_mark@gmail.com</td>
                            </tr></a>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Jacob</a></td>
                                <td>Flamengo</td>
                                <td>Empresa</td>
                                <td>2568-5123</td>
                                <td>empresa_jacob@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Larry</a></td>
                                <td>Botafogo</td>
                                <td>Governo</td>
                                <td>2455-5893</td>
                                <td>governo_larry@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Cinelândia</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr><tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" value=""></td>
                                <td><a href="novo_cliente.php" title="Acessar">Hudson</a></td>
                                <td>Catete</td>
                                <td>Pessoa Física</td>
                                <td>3358-2792</td>
                                <td>hudson@gmail.com</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        
        </div>
                <?php include('footer/footerAtendimento.php'); ?>

<?php include('header/headerAtendimento.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Meu Perfil</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Cliente</a>
                        </li>
                        <li class="active">
                            <strong>Perfil</strong>
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
                            <h5>Dados Gerais</h5>
                        </div>

                        
                            <div class="ibox-content">
                            <form method="get" class="">
                                <div class="form-group col-lg-12 padding-0">
                                    <div class="form-group col-lg-4 m-t-md">
                                        <label class="control-label">Nome Completo</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-3 m-t-md">
                                        <label class="control-label">Departamento</label>
                                        <input type="text" class="form-control" placeholder="Lorem ipsum" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 padding-0">
                                    <div class="form-group col-lg-2 m-t-md">
                                        <label class="control-label">Nome de usuário</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-2 m-t-md">
                                        <label class="control-label">Senha</label>
                                        <input type="password" class="form-control m-b-xs" placeholder="Senha" disabled>
                                        <a class="clique_aqui" href="#modal-form" data-toggle="modal">Clique aqui para redefinir a senha</a>
                                    </div>
                                    <div class="form-group col-lg-3 m-t-md">
                                        <label class="control-label">Cargo</label>
                                        <input type="text" class="form-control" placeholder="Atendimento" disabled>
                                    </div>
                            <!--Modal Senha-->
                            <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog nova-senha">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12"><h3 class="m-t-none m-b">Digite sua nova senha</h3>
                                                        <div class="form-group"><label>Nova senha</label> <input type="password" class="form-control"></div>
                                                        <div class="form-group"><label>Repita a senha</label> <input type="password" class="form-control"></div>
                                                        <div>
                                                            <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>Enviar</strong></button>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <!--Fim Modal Senha-->
                        </div>
                            <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-white btn_cancel" type="submit">Cancelar</button>
                                        <button class="btn btn-primary" type="submit">Salvar</button>
                                    </div>
                                </div>
                                <div class="hr-line-dashed clear_both visibility_none"></div>
                            </form>
                </div>
            </div>
        </div>
        </div>
        
        </div>
<?php include('footer/footerAtendimento.php'); ?>

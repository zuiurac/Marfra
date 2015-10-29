<?php include('header/headerCalculista.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Nova ocorrência</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Calculista</a>
                        </li>
                        <li class="active">
                            <strong>Orçamento # MF 2015000001</strong>
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
                                 <div class="col-lg-12 padding-0 form-group">
                                    <div class="col-lg-2">
                                        <label class="control-label">Data</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" disabled placeholder="22/10/2014">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label">Status</label>
                                        <select class="form-control m-b" name="account">
                                            <option>Remarcado</option>
                                            <option>Cliente não atendeu</option>
                                            <option>Atendimento finalizado</option>
                                        </select>
                                    </div>
                                 </div>
                                <div class="form-group col-lg-12 padding-0"> 
                                    <div class="form-group col-lg-4">
                                        <label class="control-label">Descrição</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Descreva a ocorrência ..."></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed clear_both"></div>
                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-white btn_cancel" type="submit">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Salvar</button>
                                        </div>
                                </div>
                            <div class="hr-line-dashed clear_both visibility_none"></div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        <?php include('footer/footerCalculista.php'); ?>

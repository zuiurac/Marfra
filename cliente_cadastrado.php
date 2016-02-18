<?php include('header/headerAtendimento.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Cadastro</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Cliente</a>
                        </li>
                        <li class="active">
                            <strong>Cliente cadastrado</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4 ferramentas">
                    <a href="#">
                        <span>
                            <button class="btn btn-edit btn-circle" type="button"><i class="fa fa-times"></i></button>
                            <br />Fechar
                        </span>
                    </a>
                    <a href="#">
                        <span>
                            <button class="btn btn_blue btn-circle" type="button"><i class="fa fa-arrow-right"></i></button>
                        <br />Próxima etapa
                        </span>
                    </a>
                    
                    <a href="#">
                        <span>
                            <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-check"></i></button>
                        <br />Salvar
                        </span>
                    </a>
                </div>
            </div>

        <div class="wrapper wrapper-content animated fadeInRight">
              <div class="row m-b-lg">
                <div class="col-lg-2">
              <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Modifique o tipo de cliente<span class="caret"></span></button>
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
                                    <div class="form-group col-lg-4 m-t-md">
                                        <label class="control-label">Nome Completo</label>
                                        <input type="text" class="form-control" placeholder="Luiz Carlos Silva">
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 margin-b-0 padding-0">
                                    <div class="form-group col-lg-2">
                                      <label class="control-label">Data de Nascimento</label>
                                      <input type="text" class="form-control" data-mask="99/99/9999" placeholder="27/08/1985">
                                    </div>
                                    <div class="form-group col-lg-3">
                                      <label class="control-label">CPF</label>
                                       <input type="text" class="form-control" data-mask="999.999.999.99" placeholder="109.606.647.50">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label class="control-label">RG</label>
                                       <input type="text" class="form-control" data-mask="99.999.999-9" placeholder="20.934.429-0">
                                    </div>
                                </div>
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-4">
                                    <label class="control-label">E-mail</label>
                                    <input type="email" class="form-control" placeholder="luizsolrac@gmail.com">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label class="control-label">Telefone Fixo</label>
                                    <input type="text" class="form-control" data-mask="(99) 9999-9999"  placeholder="(21) 3358-2792">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label class="control-label">Celular</label>
                                    <input type="text" class="form-control" data-mask="(99) 99999-9999"  placeholder="(21) 9358-2792">
                                </div>
                            </div>
                                <div class="hr-line-dashed clear_both"></div>
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-4">
                                        <label class="control-label">Como conheceu a Marfra?</label>
                                        <select class="form-control" name="account">
                                            <option>----</option>
                                            <option>Publicidade na frota</option>
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
                                    <input type="text" class="form-control" data-mask="99999-999" placeholder="99999-999">
                                </div>
                            </div>
                                <!--endereco-->
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-5">
                                    <label class="control-label">Rua</label>
                                    <input type="text" class="form-control" placeholder="Rua Frederico Edlweiss">
                                </div>
                                <div class="form-group col-lg-1">
                                    <label class="control-label">Nº</label>
                                    <input type="text" class="form-control" placeholder="76">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Complemento</label>
                                    <input type="text" class="form-control" placeholder="78">
                                </div>
                            </div>
                            <div class="form-group col-lg-12 padding-0">
                                <div class="form-group col-lg-3">
                                    <label class="control-label">Bairro</label>
                                    <input type="text" class="form-control" placeholder="Gávea">
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
                            <div class="hr-line-dashed clear_both visibility_none"></div><div class="form-group"></form></div>
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

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

     <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

    <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

    

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
<!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

     <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>

    <script>
        $(document).ready(function() {            
            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );

             $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-greenMarfra',
                    radioClass: 'iradio_square-greenMarfra',
                });
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('SGi+', 'Bem vindo a MAFRA BRASIL');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#464f88"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
</body>
</html>

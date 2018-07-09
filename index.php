<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SEBRAE - UTIC</title>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css" type="text/css" media="screen"/>
        <link type="text/css" rel="stylesheet" href="css/estilos.css" /> 
        <link type="text/css" rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <script src="css/bootstrap/js/bootbox.min.js"></script>
        <script>
            //Gera o relatório geral por microrregiões
            function estado(ano, mesi, mesf) {
                $("#divestado").load("./paraiba.php?ano=" + ano + "&mesi=" + mesi + "&mesf=" + mesf);
            }

            //Gera o relatório geral por microrregiões
            function agencia(anoa, mesia, mesfa) {
                $("#divagencia").load("./agencia.php?anoa=" + anoa + "&mesia=" + mesia + "&mesfa=" + mesfa);
            }
            
            //Gera o relatório geral por microrregiões
            function projeto(anop, mesip, mesfp) {
                $("#divprojeto").load("./projetos.php?anop=" + anop + "&mesip=" + mesip + "&mesfp=" + mesfp);
            }
            
            //Gera o relatório geral por credenciado
            function credenciado(anoc, mesic, mesfc) {
                $("#divcredenciado").load("./credenciado.php?anoc=" + anoc + "&mesic=" + mesic + "&mesfc=" + mesfc);
            }
            
            //Gera o relatório geral por credenciado
            function setor(anos, mesis, mesfs) {
                $("#divsetor").load("./setor.php?anos=" + anos + "&mesis=" + mesis + "&mesfs=" + mesfs);
            }

            function listaEmpresas(ano, mesi, mesf) {

                var opt = {
                    autoOpen: false,
                    title: "LISTAGEM DE EMPRESAS ATENDIDAS",
                    modal: true,
                    width: 1000,
                    height: 600,
                    show: {
                        effect: "blind",
                        duration: 300
                    },
                    hide: {
                        effect: "blind",
                        duration: 100
                    },
                    buttons: {
                        "Fechar": function () {
                            $(this).dialog("close");
                        }

                    }
                };

                //alert("listaEmpresas.php?nupratifseq="+nupratifseq+"&di="+di+"&df="+df+"&ta="+ta);
                $("#empresas").load("lista_empresas.php?ano=" + ano + "&mesi=" + mesi + "&mesf=" + mesf);
                $("#empresas").dialog(opt).dialog("open");
            }

            function listaEmpresasAno(ano) {

                var opt = {
                    autoOpen: false,
                    title: "LISTAGEM DE EMPRESAS ATENDIDAS",
                    modal: true,
                    width: 1000,
                    height: 600,
                    show: {
                        effect: "blind",
                        duration: 300
                    },
                    hide: {
                        effect: "blind",
                        duration: 100
                    },
                    buttons: {
                        "Fechar": function () {
                            $(this).dialog("close");
                        }

                    }
                };

                //alert("listaEmpresas.php?nupratifseq="+nupratifseq+"&di="+di+"&df="+df+"&ta="+ta);
                $("#empresas").load("lista_empresas_ano.php?ano=" + ano);
                $("#empresas").dialog(opt).dialog("open");
            }
        </script>
    </head>
    <body>
        <center>
            <img src="imagens/sebrae.png" alt="Sebrae"/>
            <h2>RELATÓRIO DE EXECUÇÃO FINANCEIRA DO SGTEC :: SEBRAE - PB</h2>
            <h4>Desenvolvimento: UTIC - SEBRAE/PB</h4>
        </center>
        <br>
            <div class="divForm1">
                <form class="form-horizontal" name="formNumeros" id="formNumeros" method="get" >
                    <fieldset>
                        <div class="tabbable columns">
                            <ul id="myTab" class="nav nav-pills">
                                <li class="active ">
                                    <a id="n.1" href="#mes" data-toggle="tab" class='linkTab'>PARAÍBA</a>
                                </li>
                                <li>
                                    <a id="n.2" href="#agencia" data-toggle="tab" class='linkTab'>AGÊNCIA</a>
                                </li>
                                <li>
                                    <a id="n.3" href="#projeto" data-toggle="tab" class='linkTab'>PROJETO</a>
                                </li>
                                <li>
                                    <a id="n.4" href="#credenciado" data-toggle="tab" class='linkTab'>CREDENCIADO</a>
                                </li>
                                <li>
                                    <a id="n.5" href="#setor" data-toggle="tab" class='linkTab'>SETOR</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content numeros">
                                <div class="tab-pane fade active in" id="mes">
                                    <br>
                                    <table width="80%">
                                        <tr>
                                            <td width="15%">
                                                <select data-style="btn-success" class="select-sw2" name="ano">
                                                    <option value="2017" selected>2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                </select>
                                            </td>
                                            <td width="65%">
                                                <table width="70%">
                                                    <tr>
                                                        <td width="10%" align="center">
                                                            &nbsp;
                                                        </td>
                                                        <td width="40%" align="left">
                                                            <select data-style="btn-success" class="select-sw2" name="mesi">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                        <td width="10%" align="center">
                                                            a
                                                        </td>
                                                        <td width="40%" align="rigth">
                                                            <select data-style="btn-success" class="select-sw2" name="mesf">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="20%">
                                                <button type="button" class="btn btn-warning" 
                                                        onclick="javascript: estado(document.formNumeros.ano.value, document.formNumeros.mesi.value, document.formNumeros.mesf.value)">
                                                    Pesquisar
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <div id="divestado" class="numeros"></div>
                                </div>
                                <div class="tab-pane fade in"  id="agencia">
                                    <br>
                                    <table width="80%">
                                        <tr>
                                            <td width="15%">
                                                <select data-style="btn-success" class="select-sw2" name="anoa">
                                                    <option value="2017" selected>2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                </select>
                                            </td>
                                            <td width="65%">
                                                <table width="70%">
                                                    <tr>
                                                        <td width="10%" align="center">
                                                            &nbsp;
                                                        </td>
                                                        <td width="40%" align="left">
                                                            <select data-style="btn-success" class="select-sw2" name="mesia">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                        <td width="10%" align="center">
                                                            a
                                                        </td>
                                                        <td width="40%" align="rigth">
                                                            <select data-style="btn-success" class="select-sw2" name="mesfa">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="20%">
                                                <button type="button" class="btn btn-warning" 
                                                        onclick="javascript: agencia(document.formNumeros.anoa.value, document.formNumeros.mesia.value, document.formNumeros.mesfa.value)">
                                                    Pesquisar
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <div id="divagencia" class="numeros"></div>
                                </div>
                                <div class="tab-pane fade in" id="projeto">
                                    <br>
                                    <table width="80%">
                                        <tr>
                                            <td width="15%">
                                                <select data-style="btn-success" class="select-sw2" name="anop">
                                                    <option value="2017" selected>2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                </select>
                                            </td>
                                            <td width="65%">
                                                <table width="70%">
                                                    <tr>
                                                        <td width="10%" align="center">
                                                            &nbsp;
                                                        </td>
                                                        <td width="40%" align="left">
                                                            <select data-style="btn-success" class="select-sw2" name="mesip">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                        <td width="10%" align="center">
                                                            a
                                                        </td>
                                                        <td width="40%" align="rigth">
                                                            <select data-style="btn-success" class="select-sw2" name="mesfp">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="20%">
                                                <button type="button" class="btn btn-warning" 
                                                        onclick="javascript: projeto(document.formNumeros.anop.value, document.formNumeros.mesip.value, document.formNumeros.mesfp.value)">
                                                    Pesquisar
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <div id="divprojeto" class="numeros"></div>
                                </div>
                                <div class="tab-pane fade in" id="credenciado">
                                    <br>
                                    <table width="80%">
                                        <tr>
                                            <td width="15%">
                                                <select data-style="btn-success" class="select-sw2" name="anoc">
                                                    <option value="2017" selected>2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                </select>
                                            </td>
                                            <td width="65%">
                                                <table width="70%">
                                                    <tr>
                                                        <td width="10%" align="center">
                                                            &nbsp;
                                                        </td>
                                                        <td width="40%" align="left">
                                                            <select data-style="btn-success" class="select-sw2" name="mesic">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                        <td width="10%" align="center">
                                                            a
                                                        </td>
                                                        <td width="40%" align="rigth">
                                                            <select data-style="btn-success" class="select-sw2" name="mesfc">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="20%">
                                                <button type="button" class="btn btn-warning" 
                                                        onclick="javascript: credenciado(document.formNumeros.anoc.value, document.formNumeros.mesic.value, document.formNumeros.mesfc.value)">
                                                    Pesquisar
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <div id="divcredenciado" class="numeros"></div>
                                </div>
                                <div class="tab-pane fade in" id="setor">
                                    <br>
                                    <table width="80%">
                                        <tr>
                                            <td width="15%">
                                                <select data-style="btn-success" class="select-sw2" name="anos">
                                                    <option value="2017" selected>2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                </select>
                                            </td>
                                            <td width="65%">
                                                <table width="70%">
                                                    <tr>
                                                        <td width="10%" align="center">
                                                            &nbsp;
                                                        </td>
                                                        <td width="40%" align="left">
                                                            <select data-style="btn-success" class="select-sw2" name="mesis">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                        <td width="10%" align="center">
                                                            a
                                                        </td>
                                                        <td width="40%" align="rigth">
                                                            <select data-style="btn-success" class="select-sw2" name="mesfs">
                                                                <option value="1" selected>Janeiro</option>
                                                                <option value="2">Fevereiro</option>
                                                                <option value="3">Março</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Maio</option>
                                                                <option value="6">Junho</option>
                                                                <option value="7">Julho</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Setembro</option>
                                                                <option value="10">Outubro</option>
                                                                <option value="11">Novembro</option>
                                                                <option value="12">Dezembro</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td width="20%">
                                                <button type="button" class="btn btn-warning" 
                                                        onclick="javascript: setor(document.formNumeros.anos.value, document.formNumeros.mesis.value, document.formNumeros.mesfs.value)">
                                                    Pesquisar
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <div id="divsetor" class="numeros"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="empresas"></div>
    </body>
</html>
<?php
/**
 * 
 * Los datos del bloque se encuentran en el arreglo $esteBloque.
 */
// URL base
$url = $this->miConfigurador->getVariableConfiguracion("host");
$url .= $this->miConfigurador->getVariableConfiguracion("site");
$url .= "/index.php?";

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=consultarBloques";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlTablaDinamica = $url . $cadena;

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=crearBloque";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlCrearBloque = $url . $cadena;

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=editarBloque";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlEditarBloque = $url . $cadena;

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=eliminarBloque";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlEliminarBloque = $url . $cadena;

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=consultarPlugins";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlConsultarPlugins = $url . $cadena;

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=adicionPlugin";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlAdicionPlugin = $url . $cadena;

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=adicionPlugin";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlCargarArchivo = $url . $cadena;

// Variables
$cadenaACodificar = "pagina=" . $this->miConfigurador->getVariableConfiguracion("pagina");
$cadenaACodificar .= "&procesarAjax=true";
$cadenaACodificar .= "&action=index.php";
$cadenaACodificar .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar .= "&funcion=eliminarPlugin";

// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion("enlace");
$cadena = $this->miConfigurador->fabricaConexiones->crypto->codificar_url($cadenaACodificar, $enlace);

// URL definitiva
$urlEliminarPlugin = $url . $cadena;
?>
<script type='text/javascript'>


    function accionBloque(url) {

        $.ajax({
            url: url,
            data: {
                status: 1
            },
            dataType: 'json'
        });

        location.reload(true);
    }

    $(document).ready(function () {


        $(function () {
            $('#tabla_gestion').ready(function () {
                $("#tabla_gestion").jqGrid({
                    url: "<?php echo $urlTablaDinamica ?>",
                    datatype: "json",
                    mtype: "GET",
                    colModel: [
                        {
                            label: 'ID',
                            name: 'id',
                            width: 40,
                            key: true,
                            editable: false,
                            sorttype: 'number',
                            editrules: {required: true}
                        },
                        {
                            label: 'Nombre : ',
                            name: 'nombre',
                            width: 40,
                            editable: true,
                            sorttype: 'text',
                        },
                        {
                            label: 'Descripción : ',
                            name: 'descripcion',
                            width: 100,
                            editable: true,
                            sorttype: 'text',
                            editrules: {required: true}
                        },
                        {
                            label: 'Grupo : ',
                            name: 'grupo',
                            width: 40,
                            editable: true,
                            sorttype: 'text',
                        },
                        {
                            label: 'Registrado: ',
                            name: 'registro',
                            width: 80,
                            editable: false,
                            sorttype: 'text',
                            align: 'center'
                        }
                    ],
                    sortname: 'id',
                    sortorder: 'asc',
                    viewrecords: true,
                    rownumbers: false,
                    loadonce: false,
                    rowNum: 100,
                    width: 1010,
                    height: 300,
                    pager: "#barra_herramientas",
                    caption: "Gestión Bloques",
                    subGrid: true,
                    subGridOptions: {
                        "plusicon": "ui-icon-triangle-1-e",
                        "minusicon": "ui-icon-triangle-1-s",
                        "openicon": "ui-icon-arrowreturn-1-e",
                        // load the subgrid data only once
                        // and the just show/hide
                        "reloadOnExpand": true,
                        // select the row when the expand column is clicked
                        "selectOnExpand": true
                    },
                    subGridRowExpanded: function (subgrid_id, row_id) {

                        var ident = row_id;
                        var subgrid_table_id, pager_id;
                        subgrid_table_id = subgrid_id + "_t";
                        pager_id = "p_" + subgrid_table_id;
                        $("#" + subgrid_id).html("<table id='" + subgrid_table_id + "' class='scroll'></table><div id='" + pager_id + "' class='scroll'></div>");
                        jQuery("#" + subgrid_table_id).jqGrid({
                            url: '<?php echo $urlConsultarPlugins ?>&id=' + row_id,
                            datatype: "json",
                            mtype: "GET",
                            colNames: ['Tipo:', 'Nombre:', 'Archivo:'],
                            colModel: [
                                {
                                    name: "tipo",
                                    index: "tipo",
                                    width: 130,
                                    editable: true,
                                    edittype: 'select',
                                    editoptions: {
                                        value: "css: Css;javascript: JavaScript",
                                    }
                                },
                                {
                                    name: "nombre",
                                    index: "nombre",
                                    width: 70,
                                    key: true,
                                    align: "left",
                                    sorttype: 'text',
                                },
                                {
                                    name: 'archivo',
                                    index: 'archivo',
                                    hidden: true,
                                    enctype: "multipart/form-data",
                                    editable: true,
                                    edittype: 'file',
                                    editrules: {
                                        edithidden: true,
                                        required: true
                                    },
                                    formoptions: {
                                        elmsuffix: '*'
                                    }
                                }
                            ],
                            rowNum: 20,
                            pager: pager_id,
                            viewrecords: false,
                            sortname: 'num',
                            sortorder: "asc",
                            height: '100%',
                            width: 965,
                            caption: "Plugins",
                        }).navGrid("#" + pager_id,
                                {
                                    edit: false,
                                    add: true,
                                    del: true,
                                    search: false,
                                    alertcap: "Alerta",
                                    alerttext: "Seleccione Plugin",
                                },
                                {}, //edit
                                {
                                    caption: "Adición Plugin",
                                    addCaption: "Adición Plugin",
                                    width: 320,
                                    height: 150,
                                    mtype: 'GET',
                                    url: '<?php echo $urlAdicionPlugin ?>&id_bloque=' + ident,
                                    bSubmit: "Guardar",
                                    bCancel: "Cancelar",
                                    bClose: "Close",
                                    saveData: "Data has been changed! Save changes?",
                                    bYes: "Yes",
                                    bNo: "No",
                                    bExit: "Cancel",
                                    closeOnEscape: true,
                                    closeAfterAdd: true,
                                    refresh: true,
                                    reloadAfterSubmit: true,
                                    recreateForm: true,
                                    onclickSubmit: function (params, postdata) {
                                        //save add
                                        var p = params;
                                        var pt = postdata;
                                    },
                                    afterSubmit: function (response, postdata)
                                    {

                                        var file_data = $("#archivo").prop("files")[0];
                                        var form_data = new FormData();
                                        form_data.append("archivo", file_data)

                                        $.ajax({
                                            url: '<?php echo $urlCargarArchivo ?>&id_bloque=' + ident + '&tipo=' + $("#tipo").val(), //
                                            dataType: 'json',
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            data: form_data,
                                            type: 'post'
                                        });

                                        var r = response;
                                        var p = postdata;
                                        var responseText = jQuery.jgrid.parse(response.responseText);
                                        var success = true;
                                        var message = "continue";
                                        return [success, message];


                                    },
                                    afterComplete: function (response, postdata, formid) {
                                        var responseText = jQuery.jgrid.parse(response.responseText);
                                        var r = response;
                                        var p = postdata;
                                        var f = formid;
                                    }


                                }, //add
                                {
                                    url: '<?php echo $urlEliminarPlugin ?>&id_bloque=' + row_id,
                                    caption: "Eliminar Plugin",
                                    width: 350,
                                    height: 125,
                                    mtype: 'GET',
                                    bSubmit: "Eliminar",
                                    bCancel: "Cancelar",
                                    bClose: "Close",
                                    msg: " <b>¿Desea Eliminar Plugin?</b><br>¡ Recordar <b>NO</b> se podran reversar los Cambios!",
                                    bYes: "Yes",
                                    bNo: "No",
                                    bExit: "Cancel",
                                    closeOnEscape: true,
                                    closeAfterDel: true,
                                    refresh: true,
                                    reloadAfterSubmit: true,
                                    recreateForm: true,
                                    onclickSubmit: function (params, postdata, id_items) {
                                        //save add
                                        var p = params;
                                        var pt = postdata;

                                    },
                                    beforeSubmit: function (postdata, formid) {
                                        var p = postdata;
                                        var id = formid;
                                        var success = true;
                                        var message = "continue";
                                        return[success, message];
                                    },
                                    afterSubmit: function (response, postdata)
                                    {
                                        var r = response;
                                        var p = postdata;
                                        var responseText = jQuery.jgrid.parse(response.responseText);
                                        var success = true;
                                        var message = "continue";
                                        return [success, message]
                                    },
                                    afterComplete: function (response, postdata, formid) {
                                        var responseText = jQuery.jgrid.parse(response.responseText);
                                        var r = response;
                                        var p = postdata;
                                        var f = formid;

                                    }
                                }//Del





                        );
                    }
                });




                $("#tabla_gestion").navGrid('#barra_herramientas',
                        {
                            add: true,
                            addtext: 'Crear Bloque',
                            edit: true,
                            edittext: 'Actualizar Bloque',
                            del: true,
                            deltext: 'Eliminar Bloque',
                            alertcap: "Alerta",
                            alerttext: "Seleccione Bloque",
                            search: false,
                            refresh: true,
                            refreshstate: 'current',
                            refreshtext: 'Recargar Bloques',
                        },
                        {caption: "Actualizar Bloque",
                            addCaption: "Actualizar Bloque",
                            width: 350,
                            height: 193,
                            mtype: 'GET',
                            url: '<?php echo $urlEditarBloque ?>',
                            bSubmit: "Actualizar",
                            bCancel: "Cancelar",
                            bClose: "Close",
                            saveData: "Data has been changed! Save changes?",
                            bYes: "Yes",
                            bNo: "No",
                            bExit: "Cancel",
                            closeOnEscape: true,
                            closeAfterEdit: true,
                            refresh: true,
                            reloadAfterSubmit: true,
                            recreateForm: true,
                            onclickSubmit: function (params, postdata) {
                                //save add
                                var p = params;
                                var pt = postdata;
                            },
                            beforeSubmit: function (postdata, formid) {
                                var p = postdata;
                                var id = id;
                                var success = true;
                                var message = "continue";
                                return[success, message];
                            },
                            afterSubmit: function (response, postdata)
                            {
                                var r = response;
                                var p = postdata;
                                var responseText = jQuery.jgrid.parse(response.responseText);
                                var success = true;
                                var message = "continue";
                                return [success, message]
                            },
                            afterComplete: function (response, postdata, formid) {
                                var responseText = jQuery.jgrid.parse(response.responseText);
                                var r = response;
                                var p = postdata;
                                var f = formid;
                            }
                        }, //edit
                        {
                            caption: "Crear Bloque",
                            addCaption: "Crear Bloque",
                            width: 350,
                            height: 190,
                            mtype: 'GET',
                            url: '<?php echo $urlCrearBloque ?>',
                            bSubmit: "Crear",
                            bCancel: "Cancelar",
                            bClose: "Close",
                            saveData: "Data has been changed! Save changes?",
                            bYes: "Yes",
                            bNo: "No",
                            bExit: "Cancel",
                            closeOnEscape: true,
                            closeAfterAdd: true,
                            refresh: true,
                            reloadAfterSubmit: true,
                            recreateForm: true,
                            onclickSubmit: function (params, postdata) {
                                //save add
                                var p = params;
                                var pt = postdata;
                            },
                            beforeSubmit: function (postdata, formid) {
                                var p = postdata;
                                var id = id;
                                var success = true;
                                var message = "continue";
                                return[success, message];
                            },
                            afterSubmit: function (response, postdata)
                            {
                                var r = response;
                                var p = postdata;
                                var responseText = jQuery.jgrid.parse(response.responseText);
                                var success = true;
                                var message = "continue";
                                return [success, message]
                            },
                            afterComplete: function (response, postdata, formid) {
                                var responseText = jQuery.jgrid.parse(response.responseText);
                                var r = response;
                                var p = postdata;
                                var f = formid;
                            }


                        }, //add
                        {
                            url: '<?php echo $urlEliminarBloque ?>',
                            caption: "Eliminar Bloque",
                            width: 350,
                            height: 125,
                            mtype: 'GET',
                            bSubmit: "Eliminar",
                            bCancel: "Cancelar",
                            bClose: "Close",
                            msg: " <b>¿Desea Eliminar Bloque?</b><br>¡ Recordar <b>NO</b> se Podran Reversar los Cambios !",
                            bYes: "Yes",
                            bNo: "No",
                            bExit: "Cancel",
                            closeOnEscape: true,
                            closeAfterDell: true,
                            refresh: true,
                            reloadAfterSubmit: true,
                            recreateForm: true,
                            onclickSubmit: function (params, postdata, id_items) {
                                //save add
                                var p = params;
                                var pt = postdata;


                            },
                            beforeSubmit: function (postdata, formid) {
                                var p = postdata;
                                var id = formid;
                                var success = true;
                                var message = "continue";
                                return[success, message];
                            },
                            afterSubmit: function (response, postdata)
                            {
                                var r = response;
                                var p = postdata;
                                var responseText = jQuery.jgrid.parse(response.responseText);
                                var success = true;
                                var message = "continue";
                                return [success, message]
                            },
                            afterComplete: function (response, postdata, formid) {
                                var responseText = jQuery.jgrid.parse(response.responseText);
                                var r = response;
                                var p = postdata;
                                var f = formid;

                            }
                        }, //del 
                        {},
                        {}
                );




            });

        });
    });

</script>


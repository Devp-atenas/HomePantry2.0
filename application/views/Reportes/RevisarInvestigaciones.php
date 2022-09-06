<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            
                <h1><i class="bi bi-journal-text"></i>&nbsp;Revisar Investigaciones</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="container-fluid">
        <div class="form-group">
            <div class="col-sm-4">
                <div class="form-group">				
                    <label>Seleccione Hogar:</label>
                    <span id="loader"></span>
                    <select id="selecHogarInvestigado" name="selecHogarInvestigado" class="form-control form-control-sm">
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">				
                    <label>Seleccione Fecha:</label>	
                    <select id="selecFecha" name="selecFecha" class="form-control form-control-sm">
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">				
                    <label>Semana:</label>	
                    <input type="text" class="form-control input-sm" title="Semana" name="inputSemana" id="inputSemana" readonly />
                </div>
            </div>                                  
            <div class="col-sm-2">
                <div class="form-group">				
                    <label>Area:</label>
                    <input type="text" class="form-control input-sm" title="Area" name="inputArea" id="inputArea" readonly />
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">				
                    <label>Estado:</label>
                    <input type="text" class="form-control input-sm" title="Estado" name="inputEstado" id="inputEstado" readonly />
                </div>
            </div>           
        </div>
        
        <div class="form-group">
            <div class="col-sm-2">
                <div class="form-group">				
                    <label>Tipo Consumo:</label>
                    <input type="text" class="form-control input-sm" title="Tipo Consumo" name="inputTipoConsumo" id="inputTipoConsumo" readonly />					
                </div>
            </div>		
            <div class="col-sm-4">
                <div class="form-group">				
                    <label>Motivo a Investigar:</label>
                    <input type="text" class="form-control input-sm" title="Motivo de Investigacion" name="inputMotivoInvestigar" id="inputMotivoInvestigar" readonly />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">				
                    <label>Comentarios Adicionales a Investigar:</label>
                    <textarea class="form-control" rows="4" id="inputComentarioAdicional" name="inputComentarioAdicional" style="resize: none;" readonly /></textarea>
                </div>
            </div>       
            <div class="col-sm-2">				
                <div class="form-group">
                    <div class="col-sm-6">
                        <label for="usr">Reset</label>
                        <button id="borrar"  title="Borrar Pantalla" type="submit" class="btn btn-block btn-xs btn-info" onclick="Reset();"><i class="fas fa-recycle fa-2x"></i></button>
                    </div>                    
                    <div class="col-sm-6">
                        <label for="usr">Responder</label>
                        <button id="investigar" title="Enviar Respuesta del Panelista" type="submit" class="btn btn-block btn-xs btn-success" onclick="resultadoInvestigacionHogar();"><i class="fas fa-check fa-2x"></i></button>
                    </div>					
                </div>	
            </div>                                                    
        </div>
        <div id="tablaResumen" class="form-group" style="display: none">
		
	  		<table class="table no-margin">			
				<thead>
					<tr>
						<th ><i class="fas fa-home"></i>&nbsp;Hogares por Investigar:&nbsp;<span class="label label-primary" id="totalHogares">0</span></th>
						<th ><i class="fas fa-eye-slash"></i>&nbsp;Consumos Pendientes por Hogar:&nbsp;<span class="label label-danger" id="totalPendientes">0</span></th>
						<th ><i class="fas fa-calendar-check"></i>&nbsp;Alta Hogar:&nbsp;<span class="label label-info" id="altaHogar"><i class="fas fa-calendar-day"></i></span></th>
						<th ><i class="fas fa-user-check"></i>&nbsp;Responsable Hogar:&nbsp;<span class="label label-warning" id="responsableHogar"><i class="fas fa-user-check"></i></span></th>
						<th ><i class="fas fa-phone-square-alt"></i>&nbsp;Celular Hogar:&nbsp;<span class="label label-warning" id="celularHogar"><i class="fas fa-phone-square-alt"></i></span></th>
					</tr>
				</thead>			
			</table>		 
			
		</div>

        <div class="col-md-12" id="ocultarMostrarDetalleFactura" style="display:none;" >
            <div class="form-group row mb-0 mt-0">
                <div class="col-md-12 text-center">
                    <h4>Detalle de la Factura</h4>
                </div>
            </div>
            <div class="form-group row mb-0 mt-0">
                <div class="col-md-2">
                    <div class="inputText font-weight-bold">Canal:</div>
                    <select id="selectCanalTabla" name="selectCanalTabla" class="form-control form-control-sm">
                    </select>
                </div>
                <div class="col-md-2">
                    <div class="inputText font-weight-bold">Cadena:</div>
                    <select id="selectCadenaTabla" name="selectCadenaTabla" class="form-control form-control-sm">
                    </select>
                </div>
                <div class="col-md-1">
                    <div class="inputText font-weight-bold">Factura:</div>
                    <div class="card">
                        <div class="form-group">
                        <div class="form-check d-inline">
                                <input class="form-check-input" type="radio" id="tieneFactura" name="tieneFactura" value="0" disabled='disabled'">
                                <label class="form-check-label">No</label>
                            </div>
                            <div class="form-check d-inline">
                                <input class="form-check-input" type="radio" id="tieneFactura" name="tieneFactura" value="1" disabled='disabled'">
                                <label class="form-check-label">Si</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="inputText font-weight-bold">Total Productos:</div>
                    <input type="text" name="inputTotalProductos" id="inputTotalProductos" class="form-control input-sm">
                </div>
                <div class="col-md-2">
                    <div class="inputText font-weight-bold">Tipo de Moneda:</div>
                    <select id="selectTipoMonedaTabla" name="selectTipoMonedaTabla" class="form-control form-control-sm">
                    </select>
                </div>
                <div class="col-md-2">
                    <div class="inputText font-weight-bold">Monto Factura:</div>
                    <input type="text" name="inputMontoFactura" id="inputMontoFactura" class="form-control input-sm">
                </div>
            </div>
            <HR/>
            <div class="form-group-row alert alert-info" role="alert" id="hogarResuelto" style="display:none;" >
                <h5>
                    <strong>
                        <p class="text-center"><i class="fas fa-check-double"></i>&nbsp;INVESTIGACI&Oacute;N DE CONSUMO RESUELTO&nbsp;<i class="fas fa-check-double"></i></p>
                        <p id="motivoInv"></p>
                        <p id="comentarioInv"></p>
                        <p id="motivoRsp" class="text-danger"></p>
                    </strong>
                </h5>
            </div>
            <div class="form-group-row form-group-sm row mb-0 mt-0">
                <div class="col-sm-9">
                    <p class="text-danger" id="idDetalleConsumoM"></p>
                </div>
            </div>
        </div>
        <HR/>
        <div id="ocultarMostrarDetalle" style="display:none;" >
            <div class="form-group row mb-0 mt-0">
                <div class="col-md-12 text-center">
                    <h4>Detalle Productos</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TablaDetalleProductos"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.modal investigarConsumo -->
<div class="modal fade" id="responderInvestigacion">
    <div class="modal-dialog modal-dialog-centered"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-edit'></i>&nbsp;Responder Investigaci&oacute;n</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">				
                    <label>Motivo a Investigar:</label>
                    <input type="text" class="form-control input-sm" title="Motivo Investigacion" name="inputMotivoInvestigacion" id="inputMotivoInvestigacion" readonly />
                </div>
                <div class="form-group">
                    <label for="comentario">Deje aqu&iacute; comentario adicional:</label>
                    <textarea class="form-control" rows="3" id="inputComentarios" style="resize: none;" readonly></textarea>
                </div>                                              
                <div class="form-group"> 
                    <label for="comentario">Deje aqu&iacute; la respuesta del panelista:</label>
                    <textarea class="form-control" rows="3" id="txtRespuesta" style="resize: none;"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="enviarRespuestaInvestigacion();" id="btn-investigar"><i class='fas fa-paper-plane'></i> Enviar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->





<div class="modal" id="responderInvestigacion_" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="myModalLabel" data-focus-on="input:first">
    <div class="modal-dialog modal-dialog-centered"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>					
                <h4 class="modal-title">Large Modal</h4>					
            </div>

            <div class="modal-body">
                <div class="form-group">				
                    <label>Motivo a Investigar:</label>
                    <input type="text" class="form-control input-sm" title="Motivo Investigacion" name="txtMotivoInvestigacion" id="txtMotivoInvestigacion" readonly />
                </div>
                
                <div class="form-group"> 
                    <label for="comentario">Comentario Adicional a Investigar:</label>
                    <textarea class="form-control" rows="10" id="txtPregunta" style="resize: none;" readonly></textarea>
                </div> 			
                                                                
                <div class="form-group"> 
                    <label for="comentario">Deje aqu&iacute; la respuesta del panelista:</label>
                    <textarea class="form-control" rows="10" id="txtRespuesta" style="resize: none;"></textarea>
                </div>                              
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="enviarRespuestaInvestigacion();" id="btn-investigar"><i class='fas fa-paper-plane'></i> Enviar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
	




<?php $this->load->view('Plantillas/Footer');?>

<script src="<?php echo base_url('jsHP/jsRevisarInvestigaciones.js') ?>"></script>

<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<script src="<?php echo base_url('assets/autoNumeric-1.9.18.js') ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

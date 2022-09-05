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
        
    </div>
</section>

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

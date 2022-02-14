<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-home"></i>&nbsp;Reporte NSE</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="container-fluid">
        <div id="showTablas">
            <h2 class="text-center">Reportes Hogares</h2>
           
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TablaReporte"></div>
                                <table id="TablaReporteNSE" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>idHogar</th>
                                            <th>CodigoHogar</th>
                                            <th>Estado</th>
                                            <th>Ciudad</th>
                                            <th>Municipio</th>
                                            <th>Parroquia</th>
                                            <th>TipoVivienda</th>
                                            <th>PesoTipoVivienda</th>
                                            <th>MetrosVivienda</th>
                                            <th>PesoMetrosVivienda</th>
                                            <th>NumeroAmbientes</th>
                                            <th>PesoNumAmbientes</th>
                                            <th>TotalPersonas</th>
                                            <th>PesoTotalPersonas</th>
                                            <th>NumeroBanos</th>
                                            <th>PesoNumBanos</th>
                                            <th>OcupacionVivienda</th>
                                            <th>PesoOcupacionVivienda</th>
                                            <th>MontoVivienda</th>
                                            <th>PesoMontoVivienda</th>
                                            <th>PuntosLuz</th>
                                            <th>PesoPuntoLuz</th>
                                            <th>AguasBlancas</th>
                                            <th>PesoAguasBlancas</th>
                                            <th>AguasNegras</th>
                                            <th>PesoAguasNegras</th>
                                            <th>AseoUrbano</th>
                                            <th>PesoAseoUrbano</th>
                                            <th>Id_ServicioElectricidad</th>
                                            <th>PesoServicioElectricidad</th>
                                            <th>Id_DomesticaFija</th>
                                            <th>Id_PersonalLabores</th>
                                            <th>Id_DomesticaDia</th>
                                            <th>PesoPeronalAseo</th>
                                            <th>BandaAncha</th>
                                            <th>PesoBandaAncha</th>
                                            <th>Movil</th>
                                            <th>PesoMovil</th>
                                            <th>DialUp</th>
                                            <th>PesoDialUp</th>
                                            <th>CelularJefe</th>
                                            <th>PesoCelularJefe</th>
                                            <th>AireAcondicionado</th>
                                            <th>PesoAireAcondicionado</th>
                                            <th>CalentadorElectrico</th>
                                            <th>PesoCalentadorElectrico</th>
                                            <th>CalectadorGas</th>
                                            <th>PesoCalentadorGas</th>
                                            <th>PC</th>
                                            <th>PesoPC</th>
                                            <th>Laptop</th>
                                            <th>PesoLaptop</th>
                                            <th>DVD</th>
                                            <th>PesoDVD</th>
                                            <th>HomeTheater</th>
                                            <th>VideoJuego</th>
                                            <th>PesoVideoJuego</th>
                                            <th>HornoMicro</th>
                                            <th>PesoHornoMicro</th>
                                            <th>LavadoraAuto</th>
                                            <th>PesoLavadoraAuto</th>
                                            <th>LavadoraSemi</th>
                                            <th>PesoLavadoraSemi</th>
                                            <th>LavadoraRodillo</th>
                                            <th>PesoLavadoraRodillo</th>
                                            <th>Secadora</th>
                                            <th>PesoSecadora</th>
                                            <th>Nevera</th>
                                            <th>PesoNevera</th>
                                            <th>Freezer</th>
                                            <th>PesoFreezer</th>
                                            <th>CocinaElectrica</th>
                                            <th>PesoCocinaElectrica</th>
                                            <th>CocinaBombona</th>
                                            <th>PesoCocinaBombona</th>
                                            <th>ConinaGasDirecto</th>
                                            <th>PesoCocinaGasDirecto</th>
                                            <th>CocinaKerosene</th>
                                            <th>PesoCocinaKerosene</th>
                                            <th>Lavaplatos</th>
                                            <th>PesoLavaplatos</th>
                                            <th>Vehiculos</th>
                                            <th>PesoVehiculo</th>
                                            <th>Televisores</th>
                                            <th>PesoTelevisores</th>
                                            <th>SeguroParticular</th>
                                            <th>PesoSeguroParticular</th>
                                            <th>SeguroColectivo</th>
                                            <th>PesoSeguroColectivo</th>
                                            <th>SeguroSocial</th>
                                            <th>PesoSeguroSocial</th>
                                            <th>SeguroVehiculo</th>
                                            <th>PesoSeguroVehiculo</th>
                                            <th>educacion</th>
                                            <th>pesoEducacion</th>
                                            <th>TipoIngreso</th>
                                            <th>pesoIngreso</th>
                                            <th>PesoTotal</th>
                                            <th>idHogar</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('Plantillas/Footer');?>

<script>

</script>

<script src="<?php echo base_url('jsHP/jsReporteNSE.js') ?>"></script>
<script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
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
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
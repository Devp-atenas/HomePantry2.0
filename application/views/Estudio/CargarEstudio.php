<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="icon-group"></i>&nbsp;Cargar Estudio:</h1>
            </div>
            
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Atributo ****-->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-12 text-center">
                        <div id="TablaEstudiosCargar"></div>
                    </div>
                </div>
                <HR/>
                <div class="form-group row mb-0 mt-0">
                    <form action="formEstudio" method="post" enctype="multipart/form-data">
                        
                        <div class="col-md-9">
                            <input type="file" id="file" name="file" accept=".xls, .xlsx"/>
                        </div>
                        <div class="col-md-3">
                            <input type="button" id="btSubirArchivo" value="Subir Archivo"
                                class="btn btn-success float-right" onclick_="callUpLoadFile()">
                                <!--<input type="submit" value="Submit">-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer');?>


<script src="<?php echo base_url('jsHP/jsEstudioCargar.js') ?>"></script>
<script src="<?php echo base_url('jsHP/Miscelaneo.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone-min.js" integrity="sha512-FFyHlfr2vLvm0wwfHTNluDFFhHaorucvwbpr0sZYmxciUj3NoW1lYpveAQcx2B+MnbXbSrRasqp43ldP9BKJcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
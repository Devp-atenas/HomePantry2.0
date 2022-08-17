<!-- Colocar Include Header y Menu 27jul21 -->
<?php $this->load->view('Plantillas/Header'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-plus-square"></i>&nbsp;Registro del hogar </h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section> <!-- / section class="content header"> -->
<!-- Content Wrapper. Contains page content -->
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-group d-inline">
                    <label for="exampleInputEmail1">Numero de identificacion del hogar:</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group d-inline">
                    <input type="text" class="form-control" id="identificacion1Hogar" name="identificacion1Hogar" placeholder="" readonly>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group d-inline">
                    <input type="text" class="form-control" id="identificacion2Hogar" name="identificacion2Hogar" placeholder="" readonly>
                </div>
            </div>
        </div>
        <hr />
        <div id="wizard" class="form_wizard wizard_horizontal">
            <ul class="wizard_steps">
                <li>
                    <a href="#step-1">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Datos del hogar"><img class="animation__shake" src="<?php echo base_url('dist/img/DATOS.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-2">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Responsable del hogar"><img class="animation__shake" src="<?php echo base_url('dist/img/RESPONSABLE.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-3">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Jefe del Hogar"><img class="animation__shake" src="<?php echo base_url('dist/img/JEFE.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-4">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Composición del Hogar"><img class="animation__shake" src="<?php echo base_url('dist/img/COMPOSICION.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-5">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Características y tenencia de la vivienda"><img class="animation__shake" src="<?php echo base_url('dist/img/CARACTERISTICAS.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-6">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Servicios Públicos"><img class="animation__shake" src="<?php echo base_url('dist/img/SERVICIOS.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-7">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Servicios y equipamiento del hogar"><img class="animation__shake" src="<?php echo base_url('dist/img/EQUIPAMIENTO.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-8">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Medios"><img class="animation__shake" src="<?php echo base_url('dist/img/MEDIOS.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-9">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Vehículos"><img class="animation__shake" src="<?php echo base_url('dist/img/VEHICULOS.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-10">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Mascotas"><img class="animation__shake" src="<?php echo base_url('dist/img/MASCOTAS.png')?>"></span>
                    </a>
                </li>
                <li>
                    <a href="#step-11">
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Información General"><img class="animation__shake" src="<?php echo base_url('dist/img/INFORMACION.png')?>"></span>
                    </a>
                </li>
            </ul>
            <div id="step-1">
                <form id="formUbicacionHogar" action="" method="post">
                    <h2 class="text-center">Ubicacion del hogar</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Estado:</div>
                                <select class="custom-select form-control-border" id="estadoHogar">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Ciudad:</div>
                                <select class="custom-select form-control-border" id="ciudadHogar">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Municipio:</div>
                                <select class="custom-select form-control-border" id="municipioHogar">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Parroquia:</div>
                                <select class="custom-select form-control-border" id="parroquiaHogar">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="calle" name="calle" value="1">
                                        <label class="form-check-label">Calle</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="calle" name="calle" value="2">
                                        <label class="form-check-label">Callejon</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="calle" name="calle" value="3">
                                        <label class="form-check-label">Avenida</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="calle" name="calle" value="4">
                                        <label class="form-check-label">Carrera</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Nombre:</div>
                                    <input type="text" class="form-control input-sm" id="nombreCalle" name="nombreCalle" placeholder="Nombre de la quinta ...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tipoZona" name="tipoZona" value="1">
                                        <label class="form-check-label">Barrio</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tipoZona" name="tipoZona" value="2">
                                        <label class="form-check-label">Urbanizacion</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tipoZona" name="tipoZona" value="3">
                                        <label class="form-check-label">Zona</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Nombre:</div>
                                    <input type="text" class="form-control input-sm" id="nombreTipoZona" name="nombreTipoZona" placeholder="Nombre de zona ...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" class="vivienda" id="viviendaCasa" name="vivienda" value="vivienda">
                                        <label class="form-check-label">Vivienda</label>
                                    </div>
                                    <div id="divVivienda" style="display:none;">
                                        <div class="form-check">
                                            <div class="inputText font-weight-bold">Numero o nombre de la casa:</div>
                                            <input type="text" maxlength="30" class="form-control input-sm" id="nombreCasa" name="nombreCasa" placeholder="Nombre de la quinta ...">
                                            <div class="inputText font-weight-bold">Escalera:</div>
                                            <input type="text" maxlength="10" class="form-control" id="escaleraCasa" placeholder="Escalera ...">
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" class="vivienda" id="viviendaEdificio" name="vivienda" value="edificio">
                                        <label class="form-check-label">Edificio</label>
                                    </div>
                                    <div id="divEdificio" style="display:none;">
                                        <div class="form-check">
                                            <div class="inputText font-weight-bold">Nombre del edificio:</div>
                                            <input type="text" maxlength="30" class="form-control input-sm" id="nombreEdificio" name="nombreEdificio" placeholder="Nombre del edificio ...">
                                            <div class="inputText font-weight-bold">Piso:</div>
                                            <input type="text" maxlength="10" class="form-control" id="pisoHogar" placeholder="Piso ...">
                                            <div class="inputText font-weight-bold">Apartamento:</div>
                                            <input type="text" maxlength="10" class="form-control" id="apartamentoEdificio" placeholder="Apartamento ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Telefono:</div>
                                <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="telefonoHogar" name="telefonoHogar" placeholder="Ingrese Telefono ...">
                                <div class="inputText font-weight-bold">Referencia:</div>
                                <input type="text" maxlength="50" class="form-control" id="referenciaHogar" name="referenciaHogar" placeholder="Referencia ...">
                            </div>
                        </div>
                    </div>
                    <HR/>
                    <div class="row align-items-end">
                        <div class="col text-center">
                            <button id="guardar-paso-1" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <div class="row" style="visibility:hidden;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">id:</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                </form>
                
            </div>
            <div id="step-2">
                <form id="formResponsableHogar" action="" method="post">
                    <h2 class="text-center">Responsable del hogar</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="primerNombreResponsable">Primer nombre: * <span></span></label>
                                <input type="text" class="form-control input-sm" id="primerNombreResponsable" name="primerNombreResponsable" minlength="3" placeholder="Ingrese Primer nombre ..." required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Segundo nombre:</div>
                                <input type="text" class="form-control input-sm" id="segundoNombreResponsable" name="segundoNombreResponsable" placeholder="Ingrese Segundo nombre ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Primer apellido:</div>
                                <input type="text" class="form-control input-sm" id="primerApellidoResponsable" name="primerApellidoResponsable" placeholder="Ingrese Primer apellido ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Segundo apellido:</div>
                                <input type="text" class="form-control input-sm" id="segundoApellidoResponsable" name="segundoApellidoResponsable" placeholder="Ingrese Segundo apellido ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">Nacionalidad</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="nacionalidadResponsable" name="nacionalidadResponsable" value="1">
                                        <label class="form-check-label">Venezolano</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="nacionalidadResponsable" name="nacionalidadResponsable" value="2">
                                        <label class="form-check-label">Extranjero</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Cedula:</div>
                                <input type="text" pattern="\d*" maxlength="8"  class="form-control input-sm" id="cedulaResponsable" name="cedulaResponsable" placeholder="Ingrese Cedula ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">Genero:</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="sexoResponsable" name="sexoResponsable" value="1">
                                        <label class="form-check-label">Femenino</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="sexoResponsable" name="sexoResponsable" value="2">
                                        <label class="form-check-label">Masculino</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Estado civil:</div>
                                <select class="custom-select form-control-border" id="estadoCivilResponsable">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Parentesco con el jefe del hogar:</div>
                                <select class="custom-select form-control-border" id="parentescoJefeResponsable">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Educacion:</div>
                                <select class="custom-select form-control-border" id="educacionResponsable">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Fecha de nacimiento:</div>
                                <input type="date" class="form-control input-sm" id="fechaNacimientoResponsable" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Edad:</div>
                                <input type="number" class="form-control input-sm" id="edadResponsable" name="edadResponsable" placeholder="(Valor Calculado) ..." readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Celular:</div>
                                <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularResponsable" name="celularResponsable" placeholder="Ingrese Celular...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Celular adicional:</div>
                                <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularAdicionalResponsable" name="celularAdicionalResponsable" placeholder="Ingrese Celular adicional ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Numero cortesía:</div>
                                <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="numeroCortesiaResponsable" name="numeroCortesiaResponsable" placeholder="Ingrese Numero cortesía ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Correo:</div>
                                <input type="email" class="form-control input-sm" id="correoResponsable" name="correoResponsable" placeholder="Ingrese correo ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Correo alterno:</div>
                                <input type="email" class="form-control input-sm" id="correoAlternoResponsable" name="correoAlternoResponsable" placeholder="Ingrese Correo alterno ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Tipo de ingreso:</div>
                                <select class="custom-select form-control-border" id="tipoIngresoResponsable">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Personas del hogar:</div>
                                <select class="custom-select form-control-border" id="personasDelHogar">
                                    <option selected disabled> -- Seleccione -- </option>
                                    <option value="1">1 Persona</option>
                                    <option value="2">2 Personas</option>
                                    <option value="3">3 Personas</option>
                                    <option value="4">4 Personas</option>
                                    <option value="5">5 Personas</option>
                                    <option value="6">6 Persona</option>
                                    <option value="7">7 Personas</option>
                                    <option value="8">8 Personas</option>
                                    <option value="9">9 Personas</option>
                                    <option value="10">10 Personas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">Frecuencia de compra:</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="frecuenciaCompraResponsable" value="1">
                                        <label class="form-check-label">Diario</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="frecuenciaCompraResponsable" value="2">
                                        <label class="form-check-label">Cada dos días</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="frecuenciaCompraResponsable" value="3">
                                        <label class="form-check-label">Semanal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="frecuenciaCompraResponsable" value="4">
                                        <label class="form-check-label">Una vez cada 15 días</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="frecuenciaCompraResponsable" value="5">
                                        <label class="form-check-label">Mensual</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div id="diasDeCompras">
                                <div class="inputText font-weight-bold">Días de compra:</div>
                                <div class="card">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lunes" value="1">
                                            <label class="form-check-label">Lunes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="martes" value="1">
                                            <label class="form-check-label">Martes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="miercoles" value="1">
                                            <label class="form-check-label">Miercoles</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="jueves" value="1">
                                            <label class="form-check-label">Jueves</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="viernes" value="1">
                                            <label class="form-check-label">Viernes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sabado" value="1">
                                            <label class="form-check-label">Sabado</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="domingo" value="1">
                                            <label class="form-check-label">Domingo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">¿Recibe Beneficio Socialista?:</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="beneficioSocialistaResponsable" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="beneficioSocialistaResponsable" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center">Datos de transferencia</h2>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Titular:</div>
                                <input type="text" class="form-control input-sm" id="titularTransferenciaResponsable" placeholder="Ingrese Titular ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">Nacionalidad:</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nacionalidadTransferenciaResponsable" value="1">
                                        <label class="form-check-label">Venezolano</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nacionalidadTransferenciaResponsable" value="2">
                                        <label class="form-check-label">Extranjero</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Cedula:</div>
                                <input type="text" pattern="\d*" maxlength="8" class="form-control input-sm" id="cedulaTransferenciaResponsable" name="cedulaTransferenciaResponsable" placeholder="Ingrese Cedula ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Banco:</div>
                                <select class="custom-select form-control-border" id="bancoTransferenciaResponsable" name="bancoTransferenciaResponsable">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Numero de cuenta:</div>
                                <input type="text" pattern="\d*" maxlength="20" class="form-control input-sm" id="numeroCuentaResponsable" name="numeroCuentaResponsable" placeholder="Ingrese Numero de cuenta ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">Pago rapido:</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="pagoRapidoTrasferencia" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="pagoRapidoTrasferencia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="visibility:hidden;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="inputIdEditResponsable">id:</label>
                                    <input type="text" name="inputIdEditResponsable" id="inputIdEditResponsable"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-paso-2" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="step-3">
                <h2 class="text-center">Jefe del Hogar</h2>
                        
                <div class="row">
                    <div class="col-md-4">
                        <div class="inputText font-weight-bold">¿Jefe de Familia es igual al responsable?</div>
                        <div class="card">
                            <div class="form-group">
                                <div class="form-check d-inline">
                                    <input class="form-check-input" type="radio" class="responsableJefeSN" id="responsableJefeNO" name="jefeResponsableIO" value="0">
                                    <label class="form-check-label">No</label>
                                </div>
                                <div class="form-check d-inline">
                                    <input class="form-check-input" type="radio" class="responsableJefeSN" id="responsableJefeSI" name="jefeResponsableIO" value="1">
                                    <label class="form-check-label">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="divResponsableJefe" style="visibility:hidden;">
                    <form id="formJefeHogar" action="" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Primer nombre:</div>
                                    <input type="text" class="form-control input-sm" id="primerNombreJefe" name="primerNombreJefe" placeholder="Ingrese Primer nombre ...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Segundo nombre:</div>
                                    <input type="text" class="form-control input-sm" id="segundoNombreJefe" name="segundoNombreJefe" placeholder="Ingrese Segundo nombre ...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Primer apellido:</div>
                                    <input type="text" class="form-control input-sm" id="primerApellidoJefe" name="primerApellidoJefe" placeholder="Ingrese Primer apellido ...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Segundo apellido:</div>
                                    <input type="text" class="form-control input-sm" id="segundoApellidoJefe" name="segundoApellidoJefe" placeholder="Ingrese Segundo apellido ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="inputText font-weight-bold">Nacionalidad</div>
                                <div class="card">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nacionalidadJefe" value="1">
                                            <label class="form-check-label">Venezolano</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nacionalidadJefe" value="2">
                                            <label class="form-check-label">Extranjero</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Cedula:</div>
                                    <input type="text" pattern="\d*" maxlength="8" class="form-control input-sm" id="cedulaJefe" placeholder="Ingrese Cedula ...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="inputText font-weight-bold">Genero:</div>
                                <div class="card">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="sexoJefe" name="sexoJefe" value="1">
                                            <label class="form-check-label">Femenino</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="sexoJefe" name="sexoJefe" value="2">
                                            <label class="form-check-label">Masculino</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Estado civil:</div>
                                    <select class="custom-select form-control-border" id="estadoCivilJefe">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Parentesco con el jefe del hogar:</div>
                                    <select class="custom-select form-control-border" id="parentescoJefeJefe">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Educacion:</div>
                                    <select class="custom-select form-control-border" id="educacionJefe">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Fecha de nacimiento:</div>
                                    <input type="date" class="form-control input-sm" id="fechaNacimientoJefe" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Edad:</div>
                                    <input type="number" class="form-control input-sm" id="edadJefe" placeholder="(Valor Calculado) ..." readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Celular:</div>
                                    <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularJefe" name="celularJefe" placeholder="Ingrese Celular...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Celular adicional:</div>
                                    <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularAdicionalJefe" name="celularAdicionalJefe" placeholder="Ingrese Celular adicional ...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Correo:</div>
                                    <input type="email" class="form-control input-sm" id="correoJefe" name="correoJefe" placeholder="Ingrese correo ...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Tipo de ingreso:</div>
                                    <select class="custom-select form-control-border" id="tipoIngresoJefe">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="inputText font-weight-bold">¿Recibe Beneficio Socialista?:</div>
                                <div class="card">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="beneficioSocialistaJefe" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="beneficioSocialistaJefe" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="visibility:hidden;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="inputIdEditJefe">id:</label>
                                        <input type="text" name="inputIdEditJefe" id="inputIdEditJefe"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button id="guardar-paso-3" type="button" class="btn btn-outline-success">Guardar</button>
                    </div>
                </div>
            </div>
            <div id="step-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nuevo Hogar</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form id="formComposicionHogar" action="" method="post">
                                            <h2 class="text-center">Composición del Hogar</h2>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Primer nombre:</div>
                                                        <input type="text" class="form-control input-sm" id="primerNombreComposicion" name="primerNombreComposicion" placeholder="Ingrese Primer nombre ...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Segundo nombre:</div>
                                                        <input type="text" class="form-control input-sm" id="segundoNombreComposicion" name="segundoNombreComposicion" placeholder="Ingrese Segundo nombre ...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Primer apellido:</div>
                                                        <input type="text" class="form-control input-sm" id="primerApellidoComposicion" name="primerApellidoComposicion" placeholder="Ingrese Primer apellido ...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Segundo apellido:</div>
                                                        <input type="text" class="form-control input-sm" id="segundoApellidoComposicion" name="segundoApellidoComposicion" placeholder="Ingrese Segundo apellido ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="inputText font-weight-bold">Nacionalidad</div>
                                                    <div class="card">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="nacionalidadComposicion" name="nacionalidadComposicion" value="1">
                                                                <label class="form-check-label">Venezolano</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="nacionalidadComposicion" name="nacionalidadComposicion" value="2">
                                                                <label class="form-check-label">Extranjero</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Cedula:</div>
                                                        <input type="text" pattern="\d*" maxlength="8" class="form-control input-sm" id="cedulaComposicion" name="cedulaComposicion" placeholder="Ingrese Cedula ...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="inputText font-weight-bold">Genero:</div>
                                                    <div class="card">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="sexoComposicion" name="sexoComposicion" value="1">
                                                                <label class="form-check-label">Femenino</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="sexoComposicion" name="sexoComposicion" value="2">
                                                                <label class="form-check-label">Masculino</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Estado civil:</div>
                                                        <select class="custom-select form-control-border" id="estadoCivilComposicion">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Parentesco con el jefe del hogar:</div>
                                                        <select class="custom-select form-control-border" id="parentescoJefeComposicion">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Educacion:</div>
                                                        <select class="custom-select form-control-border" id="educacionComposicion">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Fecha de nacimiento:</div>
                                                        <input type="date" class="form-control input-sm" id="fechaNacimientoComposicion" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Edad:</div>
                                                        <input type="number" class="form-control input-sm" id="edadComposicion" placeholder="(Valor Calculado) ..." readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Celular:</div>
                                                        <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularComposicion" name="celularComposicion" placeholder="Ingrese Celular...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Celular adicional:</div>
                                                        <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularAdicionalComposicion" name="celularAdicionalComposicion" placeholder="Ingrese Celular adicional ...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Correo:</div>
                                                        <input type="email" class="form-control input-sm" id="correoComposicion" name="correoComposicion" placeholder="Ingrese correo ...">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <div class="inputText font-weight-bold">Tipo de ingreso:</div>
                                                        <select class="custom-select form-control-border" id="tipoIngresoComposicion">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="inputText font-weight-bold">¿Recibe Beneficio Socialista?:</div>
                                                    <div class="card">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="beneficioSocialistaComposicion" name="beneficioSocialistaComposicion" value="0">
                                                                <label class="form-check-label">No</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="beneficioSocialistaComposicion" name="beneficioSocialistaComposicion" value="1">
                                                                <label class="form-check-label">Si</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-center">
                                                    <button id="guardar-paso-4" type="button" class="btn btn-outline-success">Guardar</button>
                                                </div>
                                            </div>
                                            <!--/step 4-->
                                        </form>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Listados Composicion del Hogar </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="TablePanelistas" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Nacionalidad</th>
                                            <th>Cedula</th>
                                            <th>Parentesco</th>
                                            <th>Fec_Nacimiento</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="step-5">
                <form id="formCaracteristicaVivienda" action="" method="post">
                    <h2 class="text-center">Características y tenencia de la vivienda</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Tipo de vivienda:</div>
                                <select class="custom-select form-control-border" id="tipoVivienda">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Especifique:</div>
                                <input type="text" class="form-control input-sm" id="especifiqueTipoVivienda" placeholder="Especifique ..." disabled="disabled">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Metros Cuadrados:</div>
                                <select class="custom-select form-control-border" id="metrosVivienda">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Numero total de ambientes:</div>
                                <input type="number" class="form-control input-sm" id="numeroAmbientes" name="numeroAmbientes" placeholder="Introduzca Numero total de Ambientes ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Numero total de baños:</div>
                                <input type="number" class="form-control input-sm" id="numeroBanos" name="numeroBanos" placeholder="Introduzca Numero total de baños ...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Numero total de puntos de luz:</div>
                                <select class="custom-select form-control-border" id="puntosLuz">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Ocupación actual de la vivienda:</div>
                                <select class="custom-select form-control-border" id="ocupacionVivienda">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Especifique:</div>
                                <input type="text" class="form-control input-sm" id="especifiqueOcupacionVivienda" placeholder="Especifique ..." disabled="disabled">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Monto de alquiler o hipoteca:</div>
                                <select class="custom-select form-control-border" id="montoVivienda">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-paso-5" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <!--/step 5-->
                </form>
            </div>
            <div id="step-6">
                <form id="formServiciosPublico" action="" method="post">
                    <h2 class="text-center">Servicios Públicos</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Aguas blancas:</div>
                                <select class="custom-select form-control-border" id="aguasBlancas">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Aguas negras:</div>
                                <select class="custom-select form-control-border" id="aguasNegras">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Aseo Urbano:</div>
                                <select class="custom-select form-control-border" id="aseoUrbano">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">Servicio de electricidad: </div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="servicioElectricidad" name="servicioElectricidad" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="servicioElectricidad" name="servicioElectricidad" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Servicio telefonico: </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="servicioTelefonico" name="servicioTelefonico" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="servicioTelefonico" name="servicioTelefonico" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">¿Se producen cortes eléctricos en su sector?</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="cortesElectricos" name="cortesElectricos" value="1">
                                        <label class="form-check-label">Diario</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  id="cortesElectricos" name="cortesElectricos" value="2">
                                        <label class="form-check-label">Interdiario</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  id="cortesElectricos" name="cortesElectricos" value="3">
                                        <label class="form-check-label">Una vez a la Semana</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  id="cortesElectricos" name="cortesElectricos" value="4">
                                        <label class="form-check-label">Una vez al mes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  id="cortesElectricos" name="cortesElectricos" value="5">
                                        <label class="form-check-label">No aplica</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-paso-6" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <!--/step 6-->
                </form>
            </div>
            <div id="step-7">
                <form id="formServiciosEquipamientos" action="" method="post">
                    <h2 class="text-center">Servicios y equipamiento del hogar</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Doméstica fija</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="domesticaFija" name="domesticaFija" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="domesticaFija" name="domesticaFija" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Personal para labores específicas</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="laboresFijas" name="laboresFijas" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="laboresFijas" name="laboresFijas" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Doméstica por días</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="domesticaXDia" name="domesticaXDia" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline ">
                                        <input class="form-check-input" type="radio" id="domesticaXDia" name="domesticaXDia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Conexión a internet vía telefonía fija por discado / dial-up</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetTlf" name="conexionInternetTlf" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetTlf" name="conexionInternetTlf" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Conexión a internet vía telefonía móvil / celular</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetMovil" name="conexionInternetMovil" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetMovil" name="conexionInternetMovil" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Conexión a internet vía telefonía fija banda ancha o vía cable</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetBandaAncha" name="conexionInternetBandaAncha" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetBandaAncha" name="conexionInternetBandaAncha" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Teléfono Celular del Jefe de familia y/o pareja</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="celularJefeFamilia" name="celularJefeFamilia" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="celularJefeFamilia" name="celularJefeFamilia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Seguro HCM particular del Jefe de familia y/o pareja y/o hijos</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmJefeFamilia" name="seguroHcmJefeFamilia" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmJefeFamilia" name="seguroHcmJefeFamilia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Seguro HCM colectivo de la empresa para Jefe y/o Pareja ocupados</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmEmpresaJefeFamilia" name="seguroHcmEmpresaJefeFamilia" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmEmpresaJefeFamilia" name="seguroHcmEmpresaJefeFamilia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Seguro Social Obligatorio para Jefe de Familia o Pareja</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroSocialJefeFamilia" name="seguroSocialJefeFamilia" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroSocialJefeFamilia" name="seguroSocialJefeFamilia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Aire acondicionado</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="aireAcondicionado" name="aireAcondicionado" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="aireAcondicionado" name="aireAcondicionado" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Calentador de agua eléctrico no tipo ducha corona</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="calentadorAguaElectrico" name="calentadorAguaElectrico" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="calentadorAguaElectrico" name="calentadorAguaElectrico" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Calentador de agua a gas</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="calentadorAguaGas" name="calentadorAguaGas" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="calentadorAguaGas" name="calentadorAguaGas" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Computador personal (PC)</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="computadorPersonal" name="computadorPersonal" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="computadorPersonal" name="computadorPersonal" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Computador Laptop</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="computadorLaptop" name="computadorLaptop" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="computadorLaptop" name="computadorLaptop" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">DVD y/o Blu-Ray</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="DVD" name="DVD" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="DVD" name="DVD" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Home Theater/Teatro en casa</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="homeTeatro" name="homeTeatro" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="homeTeatro" name="homeTeatro" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Juegos de video</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="juegosVideo" name="juegosVideo" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="juegosVideo" name="juegosVideo" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Horno microondas</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="hornoMicroOnda" name="hornoMicroOnda" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="hornoMicroOnda" name="hornoMicroOnda" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina eléctrica</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaElectrica" name="cocinaElectrica" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaElectrica" name="cocinaElectrica" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina a gas de bombona</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasBombona" name="cocinaGasBombona" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasBombona" name="cocinaGasBombona" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina por gas directo</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasDirecto" name="cocinaGasDirecto" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasDirecto" name="cocinaGasDirecto" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina a kerosene / leña,…</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaKerosene" name="cocinaKerosene" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaKerosene" name="cocinaKerosene" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Secadora de ropa</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="secadoraRopa" name="secadoraRopa" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="secadoraRopa" name="secadoraRopa" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavadora de ropa automática</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraAutomatica" name="lavadoraAutomatica" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraAutomatica" name="lavadoraAutomatica" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavadora semiautomática</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraSemiAutomatica" name="lavadoraSemiAutomatica" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraSemiAutomatica" name="lavadoraSemiAutomatica" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavadora de ropa de rodillo</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraRodillo" name="lavadoraRodillo" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraRodillo" name="lavadoraRodillo" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Nevera</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="nevera" name="nevera" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="nevera" name="nevera" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Freezer/Congelador (*)</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="freezer" name="freezer" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="freezer" name="freezer" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavaplatos eléctrico</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavaplatos" name="lavaplatos" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavaplatos" name="lavaplatos" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">CANTV Acometida</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cantvAcometida" name="cantvAcometida" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cantvAcometida" name="cantvAcometida" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">CANTV Fijo</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cantvFijo" name="cantvFijo" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cantvFijo" name="cantvFijo" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Movistar</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="movistar" name="movistar" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="movistar" name="movistar" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Digitel</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="digitel" name="digitel" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="digitel" name="digitel" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-paso-7" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <!--/step 7-->
                </form>
            </div>
            <div id="step-8">
                <form id="formMedios" action="" method="post">
                    <h2 class="text-center">Medios</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">¿Cuantos Televisores hay en su Hogar?</div>
                                <select class="custom-select form-control-border" id="cantidadTV">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Tipo de TV</div>
                                <select class="custom-select form-control-border" id="tipoTV">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Señal:</div>
                                <select class="custom-select form-control-border" id="Senal">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Cableras #1:</div>
                                <select class="custom-select form-control-border" id="cablera1">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Cableras #2:</div>
                                <select class="custom-select form-control-border" id="cablera2">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">TV Online #1:</div>
                                <select class="custom-select form-control-border" id="tvOnline1">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">TV Online #2:</div>
                                <select class="custom-select form-control-border" id="tvOnline2">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">¿Le gusta escuchar Radio?</div>
                            <div class="card">
                                <div class="form-group">
                                <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" class="escucharEmisora" id="emisoraNo" name="escucharRadio" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" class="escucharEmisora" id="emisoraSi" name="escucharRadio" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div id="divEmisora" style="display:none;">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="FM" value="1">
                                                <label class="form-check-label">FM</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="AM" value="1">
                                                <label class="form-check-label">AM</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-paso-8" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <!--/step 8-->
                </form>
            </div>
            <div id="step-9">
                <form id="formVehiculos" action="" method="post">
                    <h2 class="text-center">Vehículos</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Total Autos Propios:</div>
                                <select class="custom-select form-control-border" id="totalAutos">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">¿Posee Moto?</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="moto" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="moto" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputText font-weight-bold">¿Cuenta al menos uno de ellos con Seguro de Casco?</div>
                            <div class="card">
                                <div class="form-group">
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="casco" value="0">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="casco" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-paso-9" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <!--/step 9-->
                </form>
            </div>
            <div id="step-10">
                <form id="formMascotas" action="" method="post">
                    <h2 class="text-center">Mascotas</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="inputText font-weight-bold">¿Posee Mascota?</div>
                            <div class="card">
                            <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Perro" value="1">
                                        <label class="form-check-label">Perro</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Gato" value="1">
                                        <label class="form-check-label">Gato</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Pez" value="1">
                                        <label class="form-check-label">Pez</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Ave" value="1">
                                        <label class="form-check-label">Ave</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Roedor" value="1">
                                        <label class="form-check-label">Roedor</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="Otro" value="1">
                                        <label class="form-check-label">Otro</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-paso-10" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <HR/>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-ficha" type="button" class="btn btn-block btn-success">Finalizar y Calcular NSE</button>
                        </div>
                    </div>
                    <!--/step 10-->
                </form>
            </div>
            <div id="step-11">
                <form id="formInformacionGeneral" action="" method="post">
                    <h2 class="text-center">Información General</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Gasto Mensual:</div>
                                <input type="text" class="form-control input-sm" id="gastoMensualInformacion" name="gastoMensualInformacion" placeholder="Ingrese Primer nombre ..." readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Clase Social:</div>
                                <input type="text" class="form-control input-sm" id="claseSocialInformacion" name="claseSocialInformacion" placeholder="Ingrese Segundo nombre ..." readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Fecha Registro/ Tiempo en el panel:</div>
                                <input type="text" class="form-control input-sm" id="fechaRegistroInformacion" name="fechaRegistroInformacion" placeholder="Ingrese Primer apellido ..." readonly>
                            </div>
                        </div>
                    </div>
                    
                    <!--/step 11-->
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
<!-- Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer'); ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    Aviso:
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
            </div>
            <div class="modal-body">
                Complete los siguientes datos para poder guardar
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="modal-body">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"> Aceptar
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal vvvvvvvvvvvvv-->

<div class="modal fade" id="myModalFinalizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    Aviso:
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
            </div>
            <div class="modal-bodyFinalizar">
                Complete los siguientes pasos para poder finalizar
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="modal-bodyFinalizar">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"> Aceptar
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal vvvvvvvvvvvvv-->

<div class="modal fade" id="modal-PanelistaEditar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Actualizar Panelista</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormPanelistaEdit">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Primer nombre:</div>
                                            <input type="text" class="form-control input-sm" id="primerNombreComposicionEdit" name="primerNombreComposicionEdit" placeholder="Ingrese Primer nombre ...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Segundo nombre:</div>
                                            <input type="text" class="form-control input-sm" id="segundoNombreComposicionEdit" name="segundoNombreComposicionEdit" placeholder="Ingrese Segundo nombre ...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Primer apellido:</div>
                                            <input type="text" class="form-control input-sm" id="primerApellidoComposicionEdit" name="primerApellidoComposicionEdit" placeholder="Ingrese Primer apellido ...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Segundo apellido:</div>
                                            <input type="text" class="form-control input-sm" id="segundoApellidoComposicionEdit" name="segundoApellidoComposicionEdit" placeholder="Ingrese Segundo apellido ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Nacionalidad</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="nacionalidadComposicionEdit" name="nacionalidadComposicionEdit" value="1">
                                                    <label class="form-check-label">Venezolano</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="nacionalidadComposicionEdit" name="nacionalidadComposicionEdit" value="2">
                                                    <label class="form-check-label">Extranjero</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Cedula:</div>
                                            <input type="text" pattern="\d*" maxlength="8" class="form-control input-sm" id="cedulaComposicionEdit" name="cedulaComposicionEdit" placeholder="Ingrese Cedula ...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Genero:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="sexoComposicionEdit" name="sexoComposicionEdit" value="1">
                                                    <label class="form-check-label">Femenino</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="sexoComposicionEdit" name="sexoComposicionEdit" value="2">
                                                    <label class="form-check-label">Masculino</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Estado civil:</div>
                                            <select class="custom-select form-control-border" id="estadoCivilComposicionEdit">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Parentesco con el jefe del hogar:</div>
                                            <select class="custom-select form-control-border" id="parentescoJefeComposicionEdit">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Educacion:</div>
                                            <select class="custom-select form-control-border" id="educacionComposicionEdit">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Fecha de nacimiento:</div>
                                            <input type="date" class="form-control input-sm" id="fechaNacimientoComposicionEdit" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Edad:</div>
                                            <input type="number" class="form-control input-sm" id="edadComposicionEdit" placeholder="(Valor Calculado) ..." readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Celular:</div>
                                            <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularComposicionEdit" name="celularComposicion" placeholder="Ingrese Celular...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Celular adicional:</div>
                                            <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularAdicionalComposicionEdit" name="celularAdicionalComposicionEdit" placeholder="Ingrese Celular adicional ...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Correo:</div>
                                            <input type="email" class="form-control input-sm" id="correoComposicionEdit" name="correoComposicionEdit" placeholder="Ingrese correo ...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tipo de ingreso:</div>
                                            <select class="custom-select form-control-border" id="tipoIngresoComposicionEdit">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">¿Recibe Beneficio Socialista?:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="beneficioSocialistaComposicionEdit" name="beneficioSocialistaComposicionEdit" value="0">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="beneficioSocialistaComposicionEdit" name="beneficioSocialistaComposicionEdit" value="1">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Activo:</div>
                                            <div class="card">
                                                <div class="form-group">
                                                <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="0">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                    <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="1">
                                                        <label class="form-check-label">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditComposicion">id:</label>
                                            <input type="text" name="inputIdEditComposicion" id="inputIdEditComposicion"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" onclick="ActualizarRegistro()" id="editComposicion"
                                            value="Guardar" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-PanelistaView">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Visualizar Panelista</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormPanelistaView">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Primer nombre:</div>
                                            <input type="text" class="form-control input-sm" id="primerNombreComposicionView" name="primerNombreComposicionView" placeholder="Ingrese Primer nombre ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Segundo nombre:</div>
                                            <input type="text" class="form-control input-sm" id="segundoNombreComposicionView" name="segundoNombreComposicionView" placeholder="Ingrese Segundo nombre ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Primer apellido:</div>
                                            <input type="text" class="form-control input-sm" id="primerApellidoComposicionView" name="primerApellidoComposicionView" placeholder="Ingrese Primer apellido ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Segundo apellido:</div>
                                            <input type="text" class="form-control input-sm" id="segundoApellidoComposicionView" name="segundoApellidoComposicionView" placeholder="Ingrese Segundo apellido ..." readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Nacionalidad</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="nacionalidadComposicionView" name="nacionalidadComposicionView" value="1" disabled='disabled'">
                                                    <label class="form-check-label">Venezolano</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="nacionalidadComposicionView" name="nacionalidadComposicionView" value="2" disabled='disabled'">
                                                    <label class="form-check-label">Extranjero</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Cedula:</div>
                                            <input type="text" pattern="\d*" maxlength="8" class="form-control input-sm" id="cedulaComposicionView" name="cedulaComposicionView" placeholder="Ingrese Cedula ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Genero:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="sexoComposicionView" name="sexoComposicionView" value="1" disabled='disabled'">
                                                    <label class="form-check-label">Femenino</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="sexoComposicionView" name="sexoComposicionView" value="2" disabled='disabled'">
                                                    <label class="form-check-label">Masculino</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Estado civil:</div>
                                            <select class="custom-select form-control-border" id="estadoCivilComposicionView" disabled>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Parentesco con el jefe del hogar:</div>
                                            <select class="custom-select form-control-border" id="parentescoJefeComposicionView" disabled>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Educacion:</div>
                                            <select class="custom-select form-control-border" id="educacionComposicionView" disabled>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Fecha de nacimiento:</div>
                                            <input type="date" class="form-control input-sm" id="fechaNacimientoComposicionView" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Edad:</div>
                                            <input type="number" class="form-control input-sm" id="edadComposicionView" placeholder="(Valor Calculado) ..." readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Celular:</div>
                                            <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularComposicionView" name="celularComposicion" placeholder="Ingrese Celular..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Celular adicional:</div>
                                            <input type="text" pattern="\d*" maxlength="11" class="form-control input-sm" id="celularAdicionalComposicionView" name="celularAdicionalComposicionView" placeholder="Ingrese Celular adicional ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Correo:</div>
                                            <input type="email" class="form-control input-sm" id="correoComposicionView" name="correoComposicionView" placeholder="Ingrese correo ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tipo de ingreso:</div>
                                            <select class="custom-select form-control-border" id="tipoIngresoComposicionView" disabled>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">¿Recibe Beneficio Socialista?:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="beneficioSocialistaComposicionView" name="beneficioSocialistaComposicionView" value="0" disabled='disabled'">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="beneficioSocialistaComposicionView" name="beneficioSocialistaComposicionView" value="1" disabled='disabled'">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Activo:</div>
                                            <div class="card">
                                                <div class="form-group">
                                                <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="activoView" name="activoView" value="0" disabled='disabled'">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                    <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="activoView" name="activoView" value="1" disabled='disabled'">
                                                        <label class="form-check-label">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditComposicion">id:</label>
                                            <input type="text" name="inputIdEditComposicion" id="inputIdEditComposicion"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" onclick="ActualizarRegistro()" id="editComposicion"
                                            value="Guardar" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('vendor/js/custom.min.js') ?>"></script>
<script src="<?php echo base_url('vendor/js/fastclick.js') ?>"></script>
<script src="<?php echo base_url('vendor/js/jquery.smartWizard.js') ?>"></script>
<script src="<?php echo base_url('vendor/js/nprogress.js') ?>"></script>

<script src="<?php echo base_url('jsHP/jsHogaresNuevosCombos.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsHogaresNuevosFunciones.js') ?>"></script>

<script type="text/javascript">
    fechaNacimientoResponsable.max = new Date().toISOString().split("T")[0];
    fechaNacimientoJefe.max = new Date().toISOString().split("T")[0];
    fechaNacimientoComposicion.max = new Date().toISOString().split("T")[0];
    
    if (localStorage.getItem("idHogarEditar") !== null) {
        HogarEditar();
        var idHogar = localStorage.getItem("idHogarEditar");
        editPanelistasResponsableJefe(idHogar,1,0);
        editPanelistasResponsableJefe(idHogar,0,1);
        localStorage.setItem('flagActividad',1);
        localStorage.removeItem('idHogarEditar');
        
            cargarEducacion('#educacionComposicion',0);
            cargarEstadoCivil('#estadoCivilComposicion',0);
            cargarParentesco('#parentescoJefeComposicion',0);
            cargarTipoIngreso('#tipoIngresoComposicion',0);
        

        /*
            !!!!!!!!! No eliminar este comentario !!!!
            blanquearCamposPorActividad(idHogar); Ojo: esta dentro de HogarEditar
        */
    }else{
        cargarEstado('#estadoHogar',0);
        // Responsable del Hogar
        cargarEstadoCivil('#estadoCivilResponsable',0);
        cargarParentesco('#parentescoJefeResponsable',0);
        cargarEducacion('#educacionResponsable',0);
        cargarTipoIngreso('#tipoIngresoResponsable',0);
        cargarBanco('#bancoTransferenciaResponsable',0);
        // Jefe del Hogar
        cargarEstadoCivil('#estadoCivilJefe',0);
        cargarParentesco('#parentescoJefeJefe',0);
        cargarEducacion('#educacionJefe',0);
        cargarTipoIngreso('#tipoIngresoJefe',0);
        // Composicion del Hogar
        cargarEstadoCivil('#estadoCivilComposicion',0);
        cargarParentesco('#parentescoJefeComposicion',0);
        cargarEducacion('#educacionComposicion',0);
        cargarTipoIngreso('#tipoIngresoComposicion',0);
        // Características y tenencia de la vivienda
        cargarTipoVivienda('#tipoVivienda',0);
        cargarMetrosVivienda('#metrosVivienda',0);
        cargarOcupacionVivienda('#ocupacionVivienda',0);
        cargarPuntosLuz('#puntosLuz',0);
        cargarMontoVivienda('#montoVivienda',0);
        // Servicios Públicos
        cargarAguasBlancas('#aguasBlancas',0);
        cargarAguasNegras('#aguasNegras',0);
        cargarAseoUrbano('#aseoUrbano',0);
        // TV
        cargarCantidadTV('#cantidadTV',0);
        cargarTipoTV('#tipoTV',0);
        cargarSenal('#Senal',0);
        // Medios
        cargarCablera('#cablera1',0);
        cargarCablera('#cablera2',0);
        cargarTvOnline('#tvOnline1',0);
        cargarTvOnline('#tvOnline2',0);
        // Vehiculos
        cargarAutos('#totalAutos',0);
        
    }
    
    
    // Ubicacion del hogar PASO 1
    $("#guardar-paso-1").click(function() {
        var idHogar2 = $("#identificacion2Hogar").val();
        var camposVacios = "";
        if ($.trim($('#estadoHogar').val()) === '') {
            camposVacios += "Seleccione estado <br>";
        }
        if ($.trim($('#ciudadHogar').val()) === '') {
            camposVacios += "Seleccione ciudad <br>";
        }
        if ($.trim($('#municipioHogar').val()) === '') {
            camposVacios += "Seleccione municip <br>";
        }
        if ($.trim($('#parroquiaHogar').val()) === '') {
            camposVacios += "Seleccione parroquia <br>";
        }
        if (!$("input[name='calle']:radio").is(':checked')) {
            camposVacios += "Seleccione el tipo de calle<br>";
        }
        if ($("#nombreCalle").val() == "") {
            camposVacios += "Nombre de calle<br>";
        }
        if (!$("input[name='tipoZona']:radio").is(':checked')) {
            camposVacios += "Seleccione el tipo de zona<br>";
        }
        if ($("#nombreTipoZona").val() == "") {
            camposVacios += "Nombre tipo de zona<br>";
        }
        if (!$("input[name='vivienda']:radio").is(':checked')) {
            camposVacios += "Seleccione el tipo de vivienda<br>";
        }
        if ($('input:radio[name=vivienda]:checked').val() == 'vivienda') {
            $("#nombreEdificio").val('');
            $("#pisoHogar").val('');
            $("#apartamentoEdificio").val('');
            if ($("#nombreCasa").val() == "") {
                camposVacios += "Nombre de la casa<br>";
            }
            if ($("#escaleraCasa").val() == "") {
                camposVacios += "Escalera<br>";
            }
        }
        if ($('input:radio[name=vivienda]:checked').val() == 'edificio') {
            $("#nombreCasa").val('');
            $("#escaleraCasa").val('');
            if ($("#nombreEdificio").val() == "") {
                camposVacios += "Nombre del edificio<br>";
            }
            if ($("#pisoHogar").val() == "") {
                camposVacios += "Piso del Edificio<br>";
            }
            if ($("#apartamentoEdificio").val() == "") {
                camposVacios += "Numero de apartamento<br>";
            }
        }
        if ($("#telefonoHogar").val() == "") {
            camposVacios += "Telefono del Hogar<br>";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            const fecha = new Date();
            const YYYY = fecha.getFullYear();
            const YY = YYYY%100;
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>addNewHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": { // ****
                    "identificacion1Hogar": $("#identificacion1Hogar").val(),
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "idUsuario": localStorage.getItem("IdUsuario"),
                    "YY": YY,
                    "Id_estadoHogar": $("#estadoHogar").val(),
                    "Id_ciudadHogar": $("#ciudadHogar").val(),
                    "Id_municipioHogar": $("#municipioHogar").val(),
                    "Id_parroquiaHogar": $("#parroquiaHogar").val(),
                    "Ind_CalleAvenidad": $('input:radio[name=calle]:checked').val(),
                    "Ind_BarrioUrbanizacion": $('input:radio[name=tipoZona]:checked').val(),
                    "calle":$("#nombreCalle").val(),
                    "nombreEdificio": $("#nombreEdificio").val(), // 2
                    "nombreCasa": $("#nombreCasa").val(), // 1
                    "escaleraCasa": $("#escaleraCasa").val(), // 1
                    "pisoHogar": $("#pisoHogar").val(), // 2
                    "apartamentoEdificio": $("#apartamentoEdificio").val(), // 2
                    "tipoZona": $("#nombreTipoZona").val(),
                    "referenciaHogar": $("#referenciaHogar").val(),
                    "telefonoHogar": $("#telefonoHogar").val(),
                    "viviendaCasa": $("#viviendaCasa").val(),
                    "Id_Usuario": localStorage.getItem("IdUsuario"),
                    "tipoCasa": $("#tipoCasa").val()
                }
            }
            $.ajax(settings).done(function(response) {
                $("#identificacion1Hogar").val(response.Codi_Hogar);
                $("#identificacion2Hogar").val(response.maxIDPanelHogar);
                
                if (idHogar2 == ""){
                    AlertaFichaIncompleta(response.maxIDPanelHogar);
                }
                
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,1);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 1 (idPanelHogar)",$("#identificacion2Hogar").val(),"C");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Responsable del hogar PASO 2
    $("#guardar-paso-2").click(function() {
        var camposVacios = "";
        //var camposVaciosX = "";
        if ($.trim($('#estadoCivilResponsable').val()) === '') {
            camposVacios += "Seleccione estado civil<br>";
        }
        if ($.trim($('#parentescoJefeResponsable').val()) === '') {
            camposVacios += "Seleccione parentesco <br>";
        }
        if ($.trim($('#educacionResponsable').val()) === '') {
            camposVacios += "Seleccione educacion <br>";
        }
        if ($.trim($('#tipoIngresoResponsable').val()) === '') {
            camposVacios += "Seleccione tipo de ingreso <br>";
        }
        if ($.trim($('#personasDelHogar').val()) === '') {
            camposVacios += "Seleccione personas delhogar <br>";
        }
        if ($.trim($('#bancoTransferenciaResponsable').val()) === '') {
            camposVacios += "Seleccione banco <br>";
        }
        if ($("#primerNombreResponsable").val() == "") {
            camposVacios += "Primer nombre<br>";
        }
        /*if ($("#segundoNombreResponsable").val() == "") {
            camposVacios += "Segundo nombre<br>";
        }*/
        if ($("#primerApellidoResponsable").val() == "") {
            camposVacios += "Primer apellido<br>";
        }
        /*if ($("#segundoApellidoResponsable").val() == "") {
            camposVacios += "Segundo apellido<br>";
        }*/
        if (!$("input[name='nacionalidadResponsable']:radio").is(':checked')) {
            camposVacios += "Seleccione Nacionalidad<br>";
        }
        if ($("#cedulaResponsable").val() == "") {
            camposVacios += "Cedula<br>";
        }
        if (!$("input[name='sexoResponsable']:radio").is(':checked')) {
            camposVacios += "Seleccione sexo<br>";
        }
        if ($("#fechaNacimientoResponsable").val() == "") {
            camposVacios += "Fecha de nacimiento<br>";
        }
        if ($("#celularResponsable").val() == "") {
            camposVacios += "Celular<br>";
        }
        if ($("#celularAdicionalResponsable").val() == "") {
            camposVacios += "Celular adicional<br>";
        }
        if ($("#numeroCortesiaResponsable").val() == "") {
            camposVacios += "Numero cortesía<br>";
        }
        if ($("#correoResponsable").val() == "") {
            camposVacios += "Correo<br>";
        }
        /*if ($("#correoAlternoResponsable").val() == "") {
            camposVacios += "Correo alterno<br>";
        }/*/
        if (!$("input[name='frecuenciaCompraResponsable']:radio").is(':checked')) {
            camposVacios += "Seleccione frecuencia de compra<br>";
        }
        /* bbbb */
        if (!validarDiasCompra()) {
            camposVacios += "Seleccione al menos un dia de compra<br>";
        }
        if (!$("input[name='beneficioSocialistaResponsable']:radio").is(':checked')) {
            camposVacios += "Seleccione beneficio socialista<br>";
        }
        if ($("#titularTransferenciaResponsable").val() == "") {
            camposVacios += "Nombre del titular de transferencia<br>";
        }
        if (!$("input[name='nacionalidadTransferenciaResponsable']:radio").is(':checked')) {
            camposVacios += "Seleccione nacioncionalidad titular<br>";
        }
        if ($("#cedulaTransferenciaResponsable").val() == "") {
            camposVacios += "Cedula del titular de transferencia<br>";
        }
        if ($("#bancoTransferenciaResponsable").val() == "") {
            camposVacios += "Seleccione banco<br>";
        }
        if ($("#numeroCuentaResponsable").val() == "") {
            camposVacios += "Numero de cuenta bancaria<br>";
        }
        if (!$("input[name='pagoRapidoTrasferencia']:radio").is(':checked')) {
            camposVacios += "Seleccione pago rapido<br>";
        }
        /*if (!$("input[name='calle']:radio").is(':checked')) {
            camposVacios += "Seleccione el tipo de calle<br>";
        }*/
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            Codi_Hogar = $("#identificacion2Hogar").val();
            var lunes = document.getElementById('lunes').checked ? 1 : 0;
            var martes = document.getElementById('martes').checked ? 1 : 0;
            var miercoles = document.getElementById('miercoles').checked ? 1 : 0;
            var jueves = document.getElementById('jueves').checked ? 1 : 0;
            var viernes = document.getElementById('viernes').checked ? 1 : 0;
            var sabado = document.getElementById('sabado').checked ? 1 : 0;
            var domingo = document.getElementById('domingo').checked ? 1 : 0;
            var settings = {
                "async": true,
                "cache": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>addResponsableHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Nombre1": $("#primerNombreResponsable").val(),
                    "Nombre2": $("#segundoNombreResponsable").val(),
                    "Apellido1": $("#primerApellidoResponsable").val(),
                    "Apellido2": $("#segundoApellidoResponsable").val(),
                    "Id_Nacionalidad": $('input:radio[name=nacionalidadResponsable]:checked').val(),
                    "Cedula": $("#cedulaResponsable").val(),
                    "Id_Parentesco": $("#parentescoJefeResponsable").val(),
                    "Id_EstadoCivil": $("#estadoCivilResponsable").val(),
                    "Fec_Nacimiento": $("#fechaNacimientoResponsable").val(),
                    "Id_Sexo": $('input:radio[name=sexoResponsable]:checked').val(),
                    "Id_Educacion": $("#educacionResponsable").val(),
                    "Id_TipoIngreso": $("#tipoIngresoResponsable").val(),
                    "Correo": $("#correoResponsable").val(),
                    "CorreoAlterno": $("#correoAlternoResponsable").val(),
                    "Celular": $("#celularResponsable").val(),
                    "CelularAdicional": $("#celularAdicionalResponsable").val(),
                    "NumeroCortesia": $("#numeroCortesiaResponsable").val(),
                    "Titular": $("#titularTransferenciaResponsable").val(),
                    "id_NacionalidadTitular": $('input:radio[name=nacionalidadTransferenciaResponsable]:checked').val(),
                    "CedulaTitular": $("#cedulaTransferenciaResponsable").val(),
                    "Id_Banco": $("#bancoTransferenciaResponsable").val(),
                    "NumeroCuenta": $("#numeroCuentaResponsable").val(),
                    "Id_PagoRapido": $('input:radio[name=pagoRapidoTrasferencia]:checked').val(),
                    "CantidadPersonas": $("#personasDelHogar").val(),
                    "Id_FrecuenciaCompra": $('input:radio[name=frecuenciaCompraResponsable]:checked').val(),
                    "id_Lunes": lunes,
                    "id_Martes": martes,
                    "id_Miercoles": miercoles,
                    "id_Jueves": jueves,
                    "id_Viernes": viernes,
                    "id_Sabado": sabado,
                    "id_Domingo": domingo,
                    "id_BeneficioSocialista": $('input:radio[name=beneficioSocialistaResponsable]:checked').val()
                }
            }
            $.ajax(settings).done(function(response) {
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,2);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 2 (idPanelHogar)",$("#identificacion2Hogar").val(),"C");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Jefe del Hogar PASO 3
    $("#guardar-paso-3").click(function() {
        var jefeResponsableIO = $('input:radio[name=jefeResponsableIO]:checked').val();
        var camposVacios = "";
        if ($.trim($('#estadoCivilJefe').val()) === '') {
            camposVacios += "Seleccione estado civil<br>";
        }
        if ($.trim($('#parentescoJefeJefe').val()) === '') {
            camposVacios += "Seleccione parentesco <br>";
        }
        if ($.trim($('#educacionJefe').val()) === '') {
            camposVacios += "Seleccione educacion <br>";
        }
        if ($.trim($('#tipoIngresoJefe').val()) === '') {
            camposVacios += "Seleccione tipo de ingreso <br>";
        }
        if ($("#primerNombreJefe").val() == "") {
            camposVacios += "Primer nombre<br>";
        }
        /*if ($("#segundoNombreJefe").val() == "") {
            camposVacios += "Segundo nombre<br>";
        }*/
        if ($("#primerApellidoJefe").val() == "") {
            camposVacios += "Primer apellido<br>";
        }
        /*if ($("#segundoApellidoJefe").val() == "") {
            camposVacios += "Segundo apellido<br>";
        }*/
        if (!$("input[name='nacionalidadJefe']:radio").is(':checked')) {
            camposVacios += "Seleccione Nacionalidad<br>";
        }
        if ($("#cedulaJefe").val() == "") {
            camposVacios += "Cedula<br>";
        }
        if (!$("input[name='sexoJefe']:radio").is(':checked')) {
            camposVacios += "Seleccione sexo<br>";
        }
        if ($("#fechaNacimientoJefe").val() == "") {
            camposVacios += "Fecha de nacimiento<br>";
        }
        if ($("#celularJefe").val() == "") {
            camposVacios += "Celular<br>";
        }
        if ($("#celularAdicionalJefe").val() == "") {
            camposVacios += "Celular adicional<br>";
        }
        if ($("#correoJefe").val() == "") {
            camposVacios += "Correo<br>";
        }
        /* bbbb */
        if (!$("input[name='beneficioSocialistaJefe']:radio").is(':checked')) {
            camposVacios  += "Seleccione beneficio socialista<br>";
        }
        if (jefeResponsableIO == 1){
            camposVacios = "";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>addJefeComposicionHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "IdjefeResponsableIO": $('input:radio[name=jefeResponsableIO]:checked').val(),
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Id_": $("#identificacion2Hogar").val(),
                    "Nombre1": $("#primerNombreJefe").val(),
                    "Nombre2": $("#segundoNombreJefe").val(),
                    "Apellido1": $("#primerApellidoJefe").val(),
                    "Apellido2": $("#segundoApellidoJefe").val(),
                    "Id_Nacionalidad": $('input:radio[name=nacionalidadJefe]:checked').val(),
                    "Cedula": $("#cedulaJefe").val(),
                    "CedulaResponsable": $("#cedulaResponsable").val(),
                    "Id_Parentesco": 1,
                    "Id_EstadoCivil": $("#estadoCivilJefe").val(),
                    "Fec_Nacimiento": $("#fechaNacimientoJefe").val(),
                    "Id_Sexo": $('input:radio[name=sexoJefe]:checked').val(),
                    "Id_Educacion": $("#educacionJefe").val(),
                    "Id_TipoIngreso": $("#tipoIngresoJefe").val(),
                    "Correo": $("#correoJefe").val(),
                    "Celular": $("#celularJefe").val(),
                    "CelularAdicional": $("#celularAdicionalJefe").val(),
                    "id_BeneficioSocialista": $('input:radio[name=beneficioSocialistaJefe]:checked').val()
                }
            }
            $.ajax(settings).done(function(response) {
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,3);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 3 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Composición del Hogar PASO 4
    $("#guardar-paso-4").click(function() {
        var camposVacios = "";

        if ($.trim($('#estadoCivilComposicion').val()) === '') {
            camposVacios += "Seleccione estado civil<br>";
        }
        if ($.trim($('#parentescoJefeComposicion').val()) === '') {
            camposVacios += "Seleccione parentesco <br>";
        }
        if ($.trim($('#educacionComposicion').val()) === '') {
            camposVacios += "Seleccione educacion <br>";
        }
        if ($.trim($('#tipoIngresoComposicion').val()) === '') {
            camposVacios += "Seleccione tipo de ingreso <br>";
        }
        if ($("#primerNombreComposicion").val() == "") {
            camposVacios += "Primer nombre<br>";
        }
        if ($("#segundoNombreComposicion").val() == "") {
            camposVacios += "Segundo nombre<br>";
        }
        if ($("#primerApellidoComposicion").val() == "") {
            camposVacios += "Primer apellido<br>";
        }
        if ($("#segundoApellidoComposicion").val() == "") {
            camposVacios += "Segundo apellido<br>";
        }
        if (!$("input[name='nacionalidadComposicion']:radio").is(':checked')) {
            camposVacios += "Seleccione Nacionalidad<br>";
        }
        if ($("#cedulaComposicion").val() == "") {
            camposVacios += "Cedula<br>";
        }
        if (!$("input[name='sexoComposicion']:radio").is(':checked')) {
            camposVacios += "Seleccione sexo<br>";
        }
        if ($("#fechaNacimientoComposicion").val() == "") {
            camposVacios += "Fecha de nacimiento<br>";
        }
        if ($("#celularComposicion").val() == "") {
            camposVacios += "Celular<br>";
        }
        if ($("#celularAdicionalComposicion").val() == "") {
            camposVacios += "Celular adicional<br>";
        }
        if ($("#correoComposicion").val() == "") {
            camposVacios += "Correo<br>";
        }
        if (!$("input[name='beneficioSocialistaComposicion']:radio").is(':checked')) {
            camposVacios += "Seleccione beneficio socialista<br>";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            if (localStorage.getItem("flagActividad") !== null){
                flagNuevoHogar = 0;
            }else{
                flagNuevoHogar = 1;
            }

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>addJefeComposicionHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Nombre1": $("#primerNombreComposicion").val(),
                    "Nombre2": $("#segundoNombreComposicion").val(),
                    "Apellido1": $("#primerApellidoComposicion").val(),
                    "Apellido2": $("#segundoApellidoComposicion").val(),
                    "Id_Nacionalidad": $('input:radio[name=nacionalidadComposicion]:checked').val(),
                    "Cedula": $("#cedulaComposicion").val(),
                    "Id_Parentesco": $("#parentescoJefeComposicion").val(),
                    "Id_EstadoCivil": $("#estadoCivilComposicion").val(),
                    "Fec_Nacimiento": $("#fechaNacimientoComposicion").val(),
                    "Id_Sexo": $('input:radio[name=sexoComposicion]:checked').val(),
                    "Id_Educacion": $("#educacionComposicion").val(),
                    "Id_TipoIngreso": $("#tipoIngresoComposicion").val(),
                    "Correo": $("#correoComposicion").val(),
                    "Celular": $("#celularComposicion").val(),
                    "CelularAdicional": $("#celularAdicionalComposicion").val(),
                    "id_BeneficioSocialista": $('input:radio[name=beneficioSocialistaComposicion]:checked').val(),
                    "flagNuevoHogar":flagNuevoHogar
                }
            }
            $.ajax(settings).done(function(response) {
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,4);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                localStorage.setItem('idHogar',$("#identificacion2Hogar").val());
                cargarTablaComposicion($("#identificacion2Hogar").val());
                var form = document.querySelector('#formComposicionHogar');
                form.reset();
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 4 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    $(document).ready(function() {
        $('#fechaNacimientoResponsable').change(function(e) {
            calcularEdad('#fechaNacimientoResponsable','#edadResponsable')
        })
        
        $('#fechaNacimientoJefe').change(function(e) {
            calcularEdad('#fechaNacimientoJefe','#edadJefe')
        })
        
        $('#fechaNacimientoComposicion').change(function(e) {
            calcularEdad('#fechaNacimientoComposicion','#edadComposicion')
        })
        
        $('#tipoVivienda').change(function(e) {
            if ($(this).val() != "12") {
                $("#especifiqueTipoVivienda").val('');
                $('#especifiqueTipoVivienda').prop("disabled", true);
            } else {
                $('#especifiqueTipoVivienda').prop("disabled", false);

            }
        })
        
        $('#ocupacionVivienda').change(function(e) {
            if ($(this).val() != "6") {
                $("#especifiqueOcupacionVivienda").val('');
                $('#especifiqueOcupacionVivienda').prop("disabled", true);
            } else {
                $('#especifiqueOcupacionVivienda').prop("disabled", false);

            }
        })
    });

    // Características y tenencia de la vivienda PASO 5
    $("#guardar-paso-5").click(function() {
        var camposVacios = "";

        if ($("#tipoVivienda").val() == "12") {
            if ($("#especifiqueTipoVivienda").val() == "") {
                camposVacios += "Especifique tipo de vivienda<br>";
            }
        }
        if ($("#numeroAmbientes").val() == "") {
            camposVacios += "Numero total de ambientes<br>";
        }
        if ($("#numeroBanos").val() == "") {
            camposVacios += "Numero total de baños<br>";
        }
        if ($("#ocupacionVivienda").val() == "6") {
            if ($("#especifiqueOcupacionVivienda").val() == "") {
                camposVacios += "Especifique  ocupación actual de la vivienda<br>";
            }
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            if (localStorage.getItem("flagActividad") !== null){
                flagNuevoHogar = 0;
            }else{
                flagNuevoHogar = 1;
            }

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>updateCaracteristicaHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Id_TipoVivienda": $("#tipoVivienda").val(),
                    "OtroTipoVivienda": $("#especifiqueTipoVivienda").val(),
                    "id_Metros": $("#metrosVivienda").val(),
                    "NumeroAmbientes": $("#numeroAmbientes").val(),
                    "NumeroBanos": $("#numeroBanos").val(),
                    "id_PuntosLuz": $("#puntosLuz").val(),
                    "Id_OcupacionVivienda": $("#ocupacionVivienda").val(),
                    "OtroOcupacionVivienda": $("#especifiqueOcupacionVivienda").val(),
                    "Id_MontoVivienda": $("#montoVivienda").val(),
                    "flagNuevoHogar":flagNuevoHogar
                }
            }
            $.ajax(settings).done(function(response) {
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,5);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })

                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 5 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Servicios Públicos PASO 6
    $("#guardar-paso-6").click(function() {
        var camposVacios = "";
        if (!$("input[name='servicioElectricidad']:radio").is(':checked')) {
            camposVacios += "Seleccione servicio de electricidad<br>";
        }
        if (!$("input[name='servicioTelefonico']:radio").is(':checked')) {
            camposVacios += "Seleccione servicio telefonico<br>";
        }
        if (!$("input[name='cortesElectricos']:radio").is(':checked')) {
            camposVacios += "Seleccione cortes ecytrlectricos<br>";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            if (localStorage.getItem("flagActividad") !== null){
                flagNuevoHogar = 0;
            }else{
                flagNuevoHogar = 1;
            }

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>updateServiciosHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Id_AguasBlancas": $("#aguasBlancas").val(),
                    "Id_AguasNegras": $("#aguasNegras").val(),
                    "Id_AseoUrbano": $("#aseoUrbano").val(),
                    "Id_ServicioElectricidad": $('input:radio[name=servicioElectricidad]:checked').val(),
                    "Id_ServicioTelefono": $('input:radio[name=servicioTelefonico]:checked').val(),
                    "Id_CortesElectricos": $('input:radio[name=cortesElectricos]:checked').val(),
                    "flagNuevoHogar":flagNuevoHogar
                }
            }
            $.ajax(settings).done(function(response) {
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,6);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 6 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Servicios y equipamiento del hogar PASO 7
    $("#guardar-paso-7").click(function() {
        var camposVacios = "";
        if (!$("input[name='domesticaFija']:radio").is(':checked')) {
            camposVacios += "Seleccione doméstica fija<br>";
        }
        if (!$("input[name='laboresFijas']:radio").is(':checked')) {
            camposVacios += "Seleccione personal para labores específicas<br>";
        }
        if (!$("input[name='domesticaXDia']:radio").is(':checked')) {
            camposVacios += "Seleccione doméstica por días<br>";
        }
        if (!$("input[name='conexionInternetTlf']:radio").is(':checked')) {
            camposVacios += "Seleccione conexión a internet vía telefonía fija por discado / dial-up<br>";
        }
        if (!$("input[name='conexionInternetMovil']:radio").is(':checked')) {
            camposVacios += "Seleccione conexión a internet vía telefonía móvil / celular<br>";
        }
        if (!$("input[name='conexionInternetBandaAncha']:radio").is(':checked')) {
            camposVacios += "Seleccione conexión a internet vía telefonía fija banda ancha o vía cable<br>";
        }
        if (!$("input[name='celularJefeFamilia']:radio").is(':checked')) {
            camposVacios += "Seleccione teléfono Celular del Jefe de familia y/o pareja<br>";
        }
        if (!$("input[name='seguroHcmJefeFamilia']:radio").is(':checked')) {
            camposVacios += "Seleccione seguro HCM particular del Jefe de familia y/o pareja y/o hijos<br>";
        }
        if (!$("input[name='seguroHcmEmpresaJefeFamilia']:radio").is(':checked')) {
            camposVacios += "Seleccione seguro HCM colectivo de la empresa para Jefe y/o Pareja ocupados<br>";
        }
        if (!$("input[name='seguroSocialJefeFamilia']:radio").is(':checked')) {
            camposVacios += "Seleccione seguro Social Obligatorio para Jefe de Familia o Pareja<br>";
        }
        if (!$("input[name='aireAcondicionado']:radio").is(':checked')) {
            camposVacios += "Seleccione aire acondicionado<br>";
        }
        if (!$("input[name='calentadorAguaElectrico']:radio").is(':checked')) {
            camposVacios += "Seleccione calentador de agua eléctrico no tipo ducha corona<br>";
        }
        if (!$("input[name='calentadorAguaGas']:radio").is(':checked')) {
            camposVacios += "Seleccione calentador de agua a gas<br>";
        }
        if (!$("input[name='computadorPersonal']:radio").is(':checked')) {
            camposVacios += "Seleccione computador personal (PC)<br>";
        }
        if (!$("input[name='computadorLaptop']:radio").is(':checked')) {
            camposVacios += "Seleccione computador Laptop<br>";
        }
        if (!$("input[name='DVD']:radio").is(':checked')) {
            camposVacios += "Seleccione DVD y/o Blu-Ray<br>";
        }
        if (!$("input[name='homeTeatro']:radio").is(':checked')) {
            camposVacios += "Seleccione Home Theater/Teatro en casa<br>";
        }
        if (!$("input[name='juegosVideo']:radio").is(':checked')) {
            camposVacios += "Seleccione juegos de video<br>";
        }
        if (!$("input[name='hornoMicroOnda']:radio").is(':checked')) {
            camposVacios += "Seleccione horno microondas<br>";
        }
        if (!$("input[name='cocinaElectrica']:radio").is(':checked')) {
            camposVacios += "Seleccione cocina eléctrica<br>";
        }
        if (!$("input[name='cocinaGasBombona']:radio").is(':checked')) {
            camposVacios += "Seleccione cocina a gas de bombona<br>";
        }
        if (!$("input[name='cocinaGasDirecto']:radio").is(':checked')) {
            camposVacios += "Seleccione cocina por gas directo<br>";
        }
        if (!$("input[name='cocinaKerosene']:radio").is(':checked')) {
            camposVacios += "Seleccione cocina a kerosene / leña,…<br>";
        }
        if (!$("input[name='secadoraRopa']:radio").is(':checked')) {
            camposVacios += "Seleccione secadora de ropa<br>";
        }
        if (!$("input[name='lavadoraAutomatica']:radio").is(':checked')) {
            camposVacios += "Seleccione lavadora de ropa automática<br>";
        }
        if (!$("input[name='lavadoraSemiAutomatica']:radio").is(':checked')) {
            camposVacios += "Seleccione lavadora semiautomática<br>";
        }
        if (!$("input[name='lavadoraRodillo']:radio").is(':checked')) {
            camposVacios += "Seleccione lavadora de ropa de rodillo<br>";
        }
        if (!$("input[name='nevera']:radio").is(':checked')) {
            camposVacios += "Seleccione nevera<br>";
        }
        if (!$("input[name='freezer']:radio").is(':checked')) {
            camposVacios += "Seleccione freezer/Congelador<br>";
        }
        if (!$("input[name='lavaplatos']:radio").is(':checked')) {
            camposVacios += "Seleccione lavaplatos eléctrico<br>";
        }
        if (!$("input[name='cantvAcometida']:radio").is(':checked')) {
            camposVacios += "Seleccione CANTV Acometida<br>";
        }
        if (!$("input[name='cantvFijo']:radio").is(':checked')) {
            camposVacios += "Seleccione CANTV Fijo<br>";
        }
        if (!$("input[name='movistar']:radio").is(':checked')) {
            camposVacios += "Seleccione operadora Movistar<br>";
        }
        if (!$("input[name='digitel']:radio").is(':checked')) {
            camposVacios += "Seleccione operadora Digitel<br>";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            if (localStorage.getItem("flagActividad") !== null){
                flagNuevoHogar = 0;
            }else{
                flagNuevoHogar = 1;
            }

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>updateEquipamientosHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Id_DomesticaFija": $('input:radio[name=domesticaFija]:checked').val(),
                    "Id_PersonalLabores": $('input:radio[name=laboresFijas]:checked').val(),
                    "Id_DomesticaDia": $('input:radio[name=domesticaXDia]:checked').val(),
                    "id_ConexionInternet1": $('input:radio[name=conexionInternetTlf]:checked').val(),
                    "id_ConexionInternet2": $('input:radio[name=conexionInternetMovil]:checked').val(),
                    "id_ConexionInternet3": $('input:radio[name=conexionInternetBandaAncha]:checked').val(),
                    "id_CelularJefe": $('input:radio[name=celularJefeFamilia]:checked').val(),
                    "id_SeguroHCMParticular": $('input:radio[name=seguroHcmJefeFamilia]:checked').val(),
                    "id_SeguroHCMColectivo": $('input:radio[name=seguroHcmEmpresaJefeFamilia]:checked').val(),
                    "id_SeguroHCMSS": $('input:radio[name=seguroSocialJefeFamilia]:checked').val(),
                    "Id_AireAcondicionado": $('input:radio[name=aireAcondicionado]:checked').val(),
                    "Id_Calentador1": $('input:radio[name=calentadorAguaElectrico]:checked').val(),
                    "Id_Calentador2": $('input:radio[name=calentadorAguaGas]:checked').val(),
                    "Id_Computador1": $('input:radio[name=computadorPersonal]:checked').val(),
                    "Id_Computador2": $('input:radio[name=computadorLaptop]:checked').val(),
                    "Id_DVD": $('input:radio[name=DVD]:checked').val(),
                    "Id_HomeTheater": $('input:radio[name=homeTeatro]:checked').val(),
                    "Id_JuegosVodeo": $('input:radio[name=juegosVideo]:checked').val(),
                    "Id_HornoMicro": $('input:radio[name=hornoMicroOnda]:checked').val(),
                    "Id_Secadora": $('input:radio[name=secadoraRopa]:checked').val(),
                    "Id_Lavadora1": $('input:radio[name=lavadoraAutomatica]:checked').val(),
                    "Id_Lavadora2": $('input:radio[name=lavadoraSemiAutomatica]:checked').val(),
                    "Id_Lavadora3": $('input:radio[name=lavadoraRodillo]:checked').val(),
                    "Id_Nevera": $('input:radio[name=nevera]:checked').val(),
                    "Id_Freezer": $('input:radio[name=freezer]:checked').val(),
                    "Id_Cocina1": $('input:radio[name=cocinaElectrica]:checked').val(),
                    "Id_Cocina2": $('input:radio[name=cocinaGasBombona]:checked').val(),
                    "Id_Cocina3": $('input:radio[name=cocinaGasDirecto]:checked').val(),
                    "Id_Cocina4": $('input:radio[name=cocinaKerosene]:checked').val(),
                    "Id_LavaPlato": $('input:radio[name=lavaplatos]:checked').val(),
                    "id_CantvAcometida": $('input:radio[name=cantvAcometida]:checked').val(),
                    "id_CantvFijo": $('input:radio[name=cantvFijo]:checked').val(),
                    "id_Movistar": $('input:radio[name=movistar]:checked').val(),
                    "id_Digitel": $('input:radio[name=digitel]:checked').val(),
                    "flagNuevoHogar":flagNuevoHogar
                }
            }
            $.ajax(settings).done(function(response) {
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,7);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 7 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Medios PASO 8
    $("#guardar-paso-8").click(function() {
        var camposVacios = "";
        if ($.trim($('#cantidadTV').val()) === '') {
            camposVacios += "Seleccione  cantidad de televisores<br>";
        }
        if ($.trim($('#tipoTV').val()) === '') {
            camposVacios += "Seleccione tipo de TV<br>";
        }
        if ($.trim($('#Senal').val()) === '') {
            camposVacios += "Seleccionetipo de TV <br>";
        }
        if ($.trim($('#cablera1').val()) === '') {
            camposVacios += "Seleccione cablera  #1 <br>";
        }
        if ($.trim($('#cablera2').val()) === '') {
            camposVacios += "Seleccione cablera  #2 <br>";
        }
        if ($.trim($('#cablera2').val()) === '') {
            camposVacios += "Seleccione TV Online #1 <br>";
        }
        if ($.trim($('#cablera2').val()) === '') {
            camposVacios += "Seleccione TV Online #2 <br>";
        }
        /* bbbb */
        if (!$("input[name='escucharRadio']:radio").is(':checked')) {
            camposVacios  += "Seleccione si escucha radio<br>";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        } else {
            var FM = document.getElementById('FM').checked ? 1 : 0;
            var AM = document.getElementById('AM').checked ? 1 : 0;
            
            if (localStorage.getItem("flagActividad") !== null){
                flagNuevoHogar = 0;
            }else{
                flagNuevoHogar = 1;
            }

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>updateMediosHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Id_Televisores": $("#cantidadTV").val(),
                    "Id_TipoTelevisores": $("#tipoTV").val(),
                    "Id_Senal": $("#Senal").val(),
                    "Id_Cablera1": $("#cablera1").val(),
                    "Id_Cablera2": $("#cablera2").val(),
                    "Id_TelevisionOnline1": $("#tvOnline1").val(),
                    "Id_TelevisionOnline2":$("#tvOnline2").val(),
                    "id_FM": FM,
                    "id_AM": AM,
                    "flagNuevoHogar":flagNuevoHogar
                }
            }
            $.ajax(settings).done(function(response) {
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,8);
                }
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 8 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Vehículos PASO 9
    $("#guardar-paso-9").click(function() {
        var camposVacios = "";
        if ($.trim($('#totalAutos').val()) === '') {
            camposVacios += "Seleccione  cantidad de televisores<br>";
        }
        /* bbbb */
        if (!$("input[name='moto']:radio").is(':checked')) {
            camposVacios  += "Seleccione si posee moto<br>";
        }
        if (!$("input[name='casco']:radio").is(':checked')) {
            camposVacios  += "Seleccione seguro <br>";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        }else {
            if (localStorage.getItem("flagActividad") !== null){
                flagNuevoHogar = 0;
            }else{
                flagNuevoHogar = 1;
            }

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>updateVehiculosHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Id_Autos": $("#totalAutos").val(),
                    "Id_Moto": $('input:radio[name=moto]:checked').val(),
                    "Id_SeguroCasco": $('input:radio[name=casco]:checked').val(),
                    "flagNuevoHogar":flagNuevoHogar
                }
            }
            $.ajax(settings).done(function(response) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,9);
                }
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 9 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });
    // Mascotas PASO 10
    $("#guardar-paso-10").click(function() {
        var camposVacios = "";
        
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#myModal').modal('show');
        }else {
            var Perro = document.getElementById('Perro').checked ? 1 : 0;
            var Gato = document.getElementById('Gato').checked ? 1 : 0;
            var Pez = document.getElementById('Pez').checked ? 1 : 0;
            var Ave = document.getElementById('Ave').checked ? 1 : 0;
            var Roedor = document.getElementById('Roedor').checked ? 1 : 0;
            var Otro = document.getElementById('Otro').checked ? 1 : 0;

            if (localStorage.getItem("flagActividad") !== null){
                flagNuevoHogar = 0;
            }else{
                flagNuevoHogar = 1;
            }

            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>updateMascotaHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Ind_Perro": Perro,
                    "Ind_Gato": Gato,
                    "Ind_Pez": Pez,
                    "Ind_Ave": Ave,
                    "Ind_Roedor": Roedor,
                    "Ind_Otro": Otro,
                    "flagNuevoHogar":flagNuevoHogar
                }
            }
            $.ajax(settings).done(function(response) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                if (localStorage.getItem('flagActividad') !== null){
                    var idHogar = $("#identificacion2Hogar").val();
                    guardarCamposPorActividad(idHogar,10);
                }
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 10 (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    });

    $("#guardar-ficha_").click(function() {
        var Perro = document.getElementById('Perro').checked ? 1 : 0;
        var Gato = document.getElementById('Gato').checked ? 1 : 0;
        var Pez = document.getElementById('Pez').checked ? 1 : 0;
        var Ave = document.getElementById('Ave').checked ? 1 : 0;
        var Roedor = document.getElementById('Roedor').checked ? 1 : 0;
        var Otro = document.getElementById('Otro').checked ? 1 : 0;

        if (localStorage.getItem("flagActividad") !== null){
            flagNuevoHogar = 0;
        }else{
            flagNuevoHogar = 1;
        }

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>calcularNSE/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Hogar": $("#identificacion2Hogar").val(),
                "educacionResponsable": $("#educacionResponsable").val(),
                "tipoIngresoResponsable": $("#tipoIngresoResponsable").val(),
                "beneficioSocialistaResponsable": $("#beneficioSocialistaResponsable").val(),
                "educacionJefe": $("#educacionJefe").val(),
                "tipoIngresoJefe": $("#tipoIngresoJefe").val(),
                "beneficioSocialistaJefe": $("#beneficioSocialistaJefe").val(),
                "tipoVivienda": $("#tipoVivienda").val(),
                "metrosVivienda": $("#metrosVivienda").val(),
                "puntosLuz": $("#puntosLuz").val(),
                "ocupacionVivienda": $("#ocupacionVivienda").val(),
                "montoVivienda": $("#montoVivienda").val(),
                "aguasBlancas": $("#aguasBlancas").val(),
                "aguasNegras": $("#aguasNegras").val(),
                "aseoUrbano": $("#aseoUrbano").val(),
                "servicioElectricidad": $('input:radio[name=servicioElectricidad]:checked').val(),
                "servicioTelefonico": $('input:radio[name=servicioTelefonico]:checked').val(),
                "domesticaFija": $('input:radio[name=domesticaFija]:checked').val(),
                "laboresFijas": $('input:radio[name=laboresFijas]:checked').val(),
                "domesticaXDia": $('input:radio[name=domesticaXDia]:checked').val(),
                "conexionInternetTlf": $('input:radio[name=conexionInternetTlf]:checked').val(),
                "conexionInternetMovil": $('input:radio[name=conexionInternetMovil]:checked').val(),
                "conexionInternetBandaAncha": $('input:radio[name=conexionInternetBandaAncha]:checked').val(),
                "celularJefeFamilia": $('input:radio[name=celularJefeFamilia]:checked').val(),
                "seguroHcmJefeFamilia": $('input:radio[name=seguroHcmJefeFamilia]:checked').val(),
                "seguroHcmEmpresaJefeFamilia": $('input:radio[name=seguroHcmEmpresaJefeFamilia]:checked').val(),
                "seguroSocialJefeFamilia": $('input:radio[name=seguroSocialJefeFamilia]:checked').val(),
                "aireAcondicionado": $('input:radio[name=aireAcondicionado]:checked').val(),
                "calentadorAguaElectrico": $('input:radio[name=calentadorAguaElectrico]:checked').val(),
                "calentadorAguaGas": $('input:radio[name=calentadorAguaGas]:checked').val(),
                "computadorPersonal": $('input:radio[name=computadorPersonal]:checked').val(),
                "computadorLaptop": $('input:radio[name=computadorLaptop]:checked').val(),
                "DVD": $('input:radio[name=DVD]:checked').val(),
                "homeTeatro": $('input:radio[name=homeTeatro]:checked').val(),
                "juegosVideo": $('input:radio[name=juegosVideo]:checked').val(),
                "hornoMicroOnda": $('input:radio[name=hornoMicroOnda]:checked').val(),
                "cocinaElectrica": $('input:radio[name=cocinaElectrica]:checked').val(),
                "cocinaGasBombona": $('input:radio[name=cocinaGasBombona]:checked').val(),
                "cocinaGasDirecto": $('input:radio[name=cocinaGasDirecto]:checked').val(),
                "cocinaKerosene": $('input:radio[name=cocinaKerosene]:checked').val(),
                "secadoraRopa": $('input:radio[name=secadoraRopa]:checked').val(),
                "lavadoraAutomatica": $('input:radio[name=lavadoraAutomatica]:checked').val(),
                "lavadoraSemiAutomatica": $('input:radio[name=lavadoraSemiAutomatica]:checked').val(),
                "lavadoraRodillo": $('input:radio[name=lavadoraRodillo]:checked').val(),
                "nevera": $('input:radio[name=nevera]:checked').val(),
                "freezer": $('input:radio[name=freezer]:checked').val(),
                "lavaplatos": $('input:radio[name=lavaplatos]:checked').val(),
                "cantidadTV": $("#cantidadTV").val(),
                "tipoTV": $("#tipoTV").val(),
                "Senal": $("#Senal").val(),
                "totalAutos": $("#totalAutos").val(),
                "moto": $('input:radio[name=moto]:checked').val(),
                "Ind_Perro": Perro,
                "Ind_Gato": Gato,
                "Ind_Pez": Pez,
                "Ind_Ave": Ave,
                "Ind_Roedor": Roedor,
                "Ind_Otro": Otro,
                "flagNuevoHogar":flagNuevoHogar
            }
        }
        $.ajax(settings).done(function(response) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: response.message,
                confirmButtonText: `Ok`,
            })
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 10",$("#identificacion2Hogar").val(),"U");
        }).fail(function(jqXHR, textStatus) {
            if (jqXHR.status == 400) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'info',
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                var form = document.querySelector('#FormPaisEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    });
    //787878
    $("#guardar-ficha").click(function() {
        var camposVacios = "";

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>buscarPasos/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Hogar": $("#identificacion2Hogar").val()
            }
        }
        $.ajax(settings).done(function(response) {
            var camposVacios = "";
            if ( $("#identificacion2Hogar").val() == ""){
                camposVacios += " Falta completar Ubicacion del hogar<br>";
            }
            if (response.data[0].Ind_paso2 == 0){
                camposVacios += "Responsable del hogar<br>";
            }
            if (response.data[0].Ind_paso3 == 0){
                camposVacios += "Jefe del Hogar<br>";
            }
            if (response.data[0].Ind_paso4 == 0){
                camposVacios += "Composición del hogar<br>";
            }
            if (response.data[0].Ind_paso5 == 0){
                camposVacios += "Características y tenencia de la vivienda<br>";
            }
            if (response.data[0].Ind_paso6 == 0){
                camposVacios += "Servicios Públicos<br>";
            }
            if (response.data[0].Ind_paso7 == 0){
                camposVacios += "Servicios y equipamiento del hogar<br>";
            }
            if (response.data[0].Ind_paso8 == 0){
                camposVacios += "Medios<br>";
            }
            if (response.data[0].Ind_paso9 == 0){
                camposVacios += "Vehículos<br>";
            }
            if (response.data[0].Ind_paso10 == 0){
                camposVacios += "Mascotas<br>";
            }

            if (camposVacios != "") {
                Swal.fire({
                    title: '<strong>Complete y guarde los siguientes pasos para poder finalizar</strong>',
                    icon: 'warning',
                    html:camposVacios,
                    showCloseButton: false,
                    showCancelButton: false,
                    focusConfirm: false,
                    confirmButtonText:
                        '<i class="bi bi-clipboard-x"></i> OK!',
                    confirmButtonAriaLabel: 'Thumbs up, great!',
                    cancelButtonText:
                        '',
                    cancelButtonAriaLabel: ''
                })
                
                /*alert(camposVacios);
                $(function() {
                    $('#modal-bodyFinalizar').html(camposVacios);
                });
                $('#myModalFinalizar').modal('show');*/
            } else {
                finalizarFicha( $("#identificacion2Hogar").val());
                const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Ficha Finalizada (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            }
        }).fail(function(jqXHR, textStatus) {
            if (jqXHR.status == 400) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'info',
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                var form = document.querySelector('#FormPaisEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    });

    /* cccc */
    $("input[name='jefeResponsableIO']").click(function() {
        if ($("#responsableJefeSI").is(":checked")) {
            document.getElementById("divResponsableJefe").style.visibility = "hidden";
        } else {
            document.getElementById("divResponsableJefe").style.visibility = "visible";
        }
    });
    $("input[name='escucharRadio']").click(function() {
        if ($("#emisoraSi").is(":checked")) {
            $("#divEmisora").show();
        } else {
            $("#divEmisora").hide();
        }
    });

    $("input[name='cortesElectricos']").click(function() {
        if ($("#cortesElectricosSi").is(":checked")) {
            $("#divCortesElectricos").show();
        } else {
            $("#divCortesElectricos").hide();
        }
    });

    $("input[name='vivienda']").click(function() {
        if ($("#viviendaCasa").is(":checked")) {
            $("#divVivienda").show();
            $("#divEdificio").hide();
        } else {
            $("#divVivienda").hide();
            $("#divEdificio").show();
        }
    });

    $("#estadoHogar").change(function() {
        var parametro = $("#estadoHogar").val();
        let selectMunicipio = $("#municipioHogar");
        selectMunicipio.find("option").remove();
        let selectParroquia = $("#parroquiaHogar");
        selectParroquia.find("option").remove();
        cargarCiudad(parametro,0);
    });
    $("#ciudadHogar").change(function() {
        //cargarCablera('#cablera1');
        //cargarCablera('#cablera2');
        var parametro2 = $("#estadoHogar").val();
        cargarMunicipio(parametro2,0);
    });
    $("#municipioHogar").change(function() {
        var parametro3 = $("#municipioHogar").val();
        cargarParroquia(parametro3,0);
    });



// 9999

function cargarTablaComposicion(idHogar){
    $('#TablePanelistas').dataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "searching": false,
        "bPaginate": false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte de Hogar Registro por Consumo'
            }
        ],
        "fixedHeader":    false,
        "scrollX":        true,
        "scrollY":        400,
        "deferRender":    true,
        "scroller":       true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },        
        "ajax": {
            "url": '<?php echo urlApi; ?>getPanelistas_x_CodHogar/'+idHogar,
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '300px',
                        height: '100px'
                    })
                }
                if (xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '250px',
                        height: '25px'
                    })
                    window.location.href = '/homepantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Nombres',
                className: "text-center"
            },
            {
                mData: 'Apellidos',
                className: "text-center"
            },
            {
                mData: 'Nacionalidad',
                className: "text-center"
            },
            {
                mData: 'Cedula',
                className: "text-center"
            },
            {
                mData: 'Parentesco',
                className: "text-center"
            },
            {
                mData: 'Fec_Nacimiento',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 6,
            "orderable": true,
            "data": 'Id_Panelista',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                    /*return '<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png') ?> width="25" height="25" onclick="EditAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png') ?> width="25" height="25" onclick="VisualizarAction(' +
                    data + '); return false;"></a>';
*/

                    return  '<div class="text-wrap width-200">'+
                            '<button type="button" class="btn btn-primary btn-sm" onclick="EditAction(' +
                                data +');"><i class="bi bi-pencil-square"></i></button>'+
                            '<button type="button" class="btn btn-info btn-sm" onclick="VisualizarAction(' +
                                data +');"><i class="bi bi-zoom-in"></i></button>'+
                        '</div>';
            }
        }],
    });
}
</script>

<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/jszip/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- Colocar Include Header y Menu 27jul21 -->
<?php $this->load->view('Plantillas/Header'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-plus-square aria-hidden=" true""></i>&nbsp;Registro del hogar </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard')?>">Inicio</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout')?>">Salir</a></li>
                </ol>
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
                        <span class="step_no" data-toggle="tooltip" data-placement="bottom" title="Servicios y equipamientos del hogar"><img class="animation__shake" src="<?php echo base_url('dist/img/EQUIPAMIENTO.png')?>"></span>
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
                    <br />
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-step-1" type="button" class="btn btn-outline-success">Guardar</button>
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
                            <div class="inputText font-weight-bold">Sexo:</div>
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
                                        <input class="form-check-input" type="radio" name="beneficioSocialistaResponsable" value="2">
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
                                        <input class="form-check-input" type="radio" name="pagoRapidoTrasferencia" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" name="pagoRapidoTrasferencia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-step-2" type="button" class="btn btn-outline-success">Guardar</button>
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
                                    <input class="form-check-input" type="radio" class="responsableJefeSN" id="responsableJefeSi" name="jefeResponsableIO" value="1">
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
                                <div class="inputText font-weight-bold">Sexo:</div>
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
                                            <input class="form-check-input" type="radio" name="beneficioSocialistaJefe" value="2">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="beneficioSocialistaJefe" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button id="guardar-step-3" type="button" class="btn btn-outline-success">Guardar</button>
                            </div>
                        </div>
                    </form>
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
                                                    <div class="inputText font-weight-bold">Sexo:</div>
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
                                                                <input class="form-check-input" type="radio" id="beneficioSocialistaComposicion" name="beneficioSocialistaComposicion" value="2">
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
                                                    <button id="guardar-step-4" type="button" class="btn btn-outline-success">Guardar</button>
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
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="TablePanelistas" class="table table-bordered table-striped table-md">
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
                                            <tfoot>
                                                <tr>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Nacionalidad</th>
                                                    <th>Cedula</th>
                                                    <th>Parentesco</th>
                                                    <th>Fec_Nacimiento</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
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
                            <button id="guardar-step-5" type="button" class="btn btn-outline-success">Guardar</button>
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
                                        <input class="form-check-input" type="radio" id="servicioElectricidad" name="servicioElectricidad" value="2">
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
                                        <input class="form-check-input" type="radio" id="servicioTelefonico" name="servicioTelefonico" value="2">
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
                            <button id="guardar-step-6" type="button" class="btn btn-outline-success">Guardar</button>
                        </div>
                    </div>
                    <!--/step 6-->
                </form>
            </div>
            <div id="step-7">
                <form id="formServiciosEquipamientos" action="" method="post">
                    <h2 class="text-center">Servicios y equipamientos del hogar</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Doméstica fija</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="domesticaFija" name="domesticaFija" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="domesticaFija" name="domesticaFija" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Personal para labores específicas</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="laboresFijas" name="laboresFijas" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="laboresFijas" name="laboresFijas" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Doméstica por días</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="domesticaXDia" name="domesticaXDia" value="2">
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
                                        <input class="form-check-input" type="radio" id="conexionInternetTlf" name="conexionInternetTlf" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetTlf" name="conexionInternetTlf" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Conexión a internet vía telefonía móvil / celular</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetMovil" name="conexionInternetMovil" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetMovil" name="conexionInternetMovil" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Conexión a internet vía telefonía fija banda ancha o vía cable</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="conexionInternetBandaAncha" name="conexionInternetBandaAncha" value="2">
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
                                        <input class="form-check-input" type="radio" id="celularJefeFamilia" name="celularJefeFamilia" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="celularJefeFamilia" name="celularJefeFamilia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Seguro HCM particular del Jefe de familia y/o pareja y/o hijos</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmJefeFamilia" name="seguroHcmJefeFamilia" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmJefeFamilia" name="seguroHcmJefeFamilia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Seguro HCM colectivo de la empresa para Jefe y/o Pareja ocupados</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmEmpresaJefeFamilia" name="seguroHcmEmpresaJefeFamilia" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroHcmEmpresaJefeFamilia" name="seguroHcmEmpresaJefeFamilia" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Seguro Social Obligatorio para Jefe de Familia o Pareja</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="seguroSocialJefeFamilia" name="seguroSocialJefeFamilia" value="2">
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
                                        <input class="form-check-input" type="radio" id="aireAcondicionado" name="aireAcondicionado" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="aireAcondicionado" name="aireAcondicionado" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Calentador de agua eléctrico no tipo ducha corona</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="calentadorAguaElectrico" name="calentadorAguaElectrico" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="calentadorAguaElectrico" name="calentadorAguaElectrico" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Calentador de agua a gas</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="calentadorAguaGas" name="calentadorAguaGas" value="2">
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
                                        <input class="form-check-input" type="radio" id="computadorPersonal" name="computadorPersonal" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="computadorPersonal" name="computadorPersonal" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Computador Laptop</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="computadorLaptop" name="computadorLaptop" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="computadorLaptop" name="computadorLaptop" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">DVD y/o Blu-Ray</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="DVD" name="DVD" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="DVD" name="DVD" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Home Theater/Teatro en casa</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="homeTeatro" name="homeTeatro" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="homeTeatro" name="homeTeatro" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Juegos de video</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="juegosVideo" name="juegosVideo" value="2">
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
                                        <input class="form-check-input" type="radio" id="hornoMicroOnda" name="hornoMicroOnda" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="hornoMicroOnda" name="hornoMicroOnda" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina eléctrica</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaElectrica" name="cocinaElectrica" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaElectrica" name="cocinaElectrica" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina a gas de bombona</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasBombona" name="cocinaGasBombona" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasBombona" name="cocinaGasBombona" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina por gas directo</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasDirecto" name="cocinaGasDirecto" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaGasDirecto" name="cocinaGasDirecto" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Cocina a kerosene / leña,…</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cocinaKerosene" name="cocinaKerosene" value="2">
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
                                        <input class="form-check-input" type="radio" id="secadoraRopa" name="secadoraRopa" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="secadoraRopa" name="secadoraRopa" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavadora de ropa automática</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraAutomatica" name="lavadoraAutomatica" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraAutomatica" name="lavadoraAutomatica" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavadora semiautomática</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraSemiAutomatica" name="lavadoraSemiAutomatica" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraSemiAutomatica" name="lavadoraSemiAutomatica" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavadora de ropa de rodillo</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavadoraRodillo" name="lavadoraRodillo" value="2">
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
                                        <input class="form-check-input" type="radio" id="nevera" name="nevera" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="nevera" name="nevera" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Freezer/Congelador (*)</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="freezer" name="freezer" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="freezer" name="freezer" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Lavaplatos eléctrico</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="lavaplatos" name="lavaplatos" value="2">
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
                                        <input class="form-check-input" type="radio" id="cantvAcometida" name="cantvAcometida" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cantvAcometida" name="cantvAcometida" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">CANTV Fijo</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cantvFijo" name="cantvFijo" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="cantvFijo" name="cantvFijo" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Movistar</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="movistar" name="movistar" value="2">
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="movistar" name="movistar" value="1">
                                        <label class="form-check-label">Si</label>
                                    </div>
                                    <div class="inputText font-weight-bold">Digitel</div>
                                    <div class="form-check d-inline">
                                        <input class="form-check-input" type="radio" id="digitel" name="digitel" value="2">
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
                            <button id="guardar-step-7" type="button" class="btn btn-outline-success">Guardar</button>
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
                                        <input class="form-check-input" type="radio" class="escucharEmisora" id="emisoraNo" name="escucharRadio" value="2">
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
                            <button id="guardar-step-8" type="button" class="btn btn-outline-success">Guardar</button>
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
                                        <input class="form-check-input" type="radio" name="moto" value="2">
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
                                        <input class="form-check-input" type="radio" name="casco" value="2">
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
                            <button id="guardar-step-9" type="button" class="btn btn-outline-success">Guardar</button>
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
                    </div>>
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-step-10" type="button" class="btn btn-outline-success">Guardar</button>
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
                    <div class="row">
                        <div class="col text-center">
                            <button id="guardar-step-11" type="button" class="btn btn-outline-success">Guardar</button>
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
                            <h3 class="card-title">Atributo</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormPanelistaEdit">
                            <div class="row">t
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
                                                    <div class="inputText font-weight-bold">Sexo:</div>
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
                                                                <input class="form-check-input" type="radio" id="beneficioSocialistaComposicionEdit" name="beneficioSocialistaComposicion" value="2">
                                                                <label class="form-check-label">No</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="beneficioSocialistaComposicionEdit" name="beneficioSocialistaComposicion" value="1">
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
                                
                                        </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="button" onclick="ActualizarRegistro()" id="editComposicion"
                                                value="Guardar" class="btn btn-success float-right">
                                        </div>
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


<script>
    fechaNacimientoResponsable.max = new Date().toISOString().split("T")[0];
    fechaNacimientoJefe.max = new Date().toISOString().split("T")[0];
    fechaNacimientoComposicion.max = new Date().toISOString().split("T")[0];
        //jQuery.noConflict();
    $().ready(function() {
        $("#formcontacto").validate({
            rules: {
                nombreCasa: {
                    required: true,
                    minlength: 2
                },
                escaleraCasa: {
                    required: true,
                    minlength: 1
                },
                nombreEdificio: {
                    required: true,
                    minlength: 3
                },
                apartamentoEdificio: {
                    required: true,
                    minlength: 1
                },
                telefonoHogar: {
                    required: true,
                    minlength: 11
                },
                referenciaHogar: {
                    required: true
                },
                primerNombreResponsable: {
                    required: true,
                    minlength: 2
                },
                segundoNombreResponsable: {
                    required: true
                },
                primerApellidoResponsable: {
                    required: true,
                    minlength: 2
                },
                segundoApellidoResponsable: {
                    required: true
                },
                cedulaResponsable: {
                    required: true,
                    minlength: 6
                },
                celularResponsable: {
                    required: true,
                    minlength: 11
                },
                celularAdicionalResponsable: {
                    required: true,
                    minlength: 11
                },
                numeroCortesiaResponsable: {
                    required: true,
                    minlength: 11
                },
                correoResponsable: {
                    required: true
                },
                correoAlternoResponsable: {
                    required: true
                },
                titularTransferenciaResponsable: {
                    required: true,
                    minlength: 2
                },
                cedulaTransferenciaResponsable: {
                    required: true,
                    minlength: 6
                },
                numeroCuentaResponsable: {
                    required: true,
                    minlength: 20
                },
                primerNombreJefe: {
                    required: true,
                    minlength: 2
                },
                segundoNombreJefe: {
                    required: true,
                    minlength: 2
                },
                primerApellidoJefe: {
                    required: true,
                    minlength: 2
                },
                segundoApellidoJefe: {
                    required: true,
                    minlength: 2
                },
                cedulaJefe: {
                    required: true,
                    minlength: 6
                },
                celularJefe: {
                    required: true,
                    minlength: 11
                },
                celularAdicionalJefe: {
                    required: true,
                    minlength: 11
                },
                correoJefe: {
                    required: true,
                    minlength: 5
                },
                primerNombreComposicion: {
                    required: true,
                    minlength: 2
                },
                segundoNombreComposicion: {
                    required: true,
                    minlength: 2
                },
                primerApellidoComposicion: {
                    required: true,
                    minlength: 2
                },
                segundoApellidoComposicion: {
                    required: true,
                    minlength: 2
                },
                cedulaComposicion: {
                    required: true,
                    minlength: 6
                },
                celularComposicion: {
                    required: true,
                    minlength: 11
                },
                celularAdicionalComposicion: {
                    required: true,
                    minlength: 11
                },
                correoComposicion: {
                    required: true,
                    minlength: 5
                },
                especifiqueTipoVivienda: {
                    minlength: 3
                },
                numeroAmbientes: {
                    required: true,
                    minlength: 1
                },
                numeroBanos: {
                    required: true,
                    minlength: 1
                },
                especifiqueOcupacionVivienda: {
                    minlength: 3
                }
            },
            messages: {
                nombreCasa: {
                    required: "Por favor Ingrese Nombre de la casa completo",
                    minlength: "Debe tener al menos 3 caracteres"
                },
                escaleraCasa: {
                    required: "Por favor intoduzca la escalera",
                    minlength: "Debe tener al menos 1 caracteres"
                },
                nombreEdificio: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 3 caracteres"
                },
                apartamentoEdificio: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 1 caracteres"
                },
                telefonoHogar: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Telefono incompleto"
                },
                referenciaHogar: {
                    required: "Por favor intoduzca Valor"
                },
                primerNombreResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                segundoNombreResponsable: {
                    required: "Por favor intoduzca Valor"
                },
                primerApellidoResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                segundoApellidoResponsable: {
                    required: "Por favor intoduzca Valor"
                },
                cedulaResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 6 caracteres"
                },
                celularResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener 11 caracteres"
                },
                celularAdicionalResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 11 caracteres"
                },
                numeroCortesiaResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 11 caracteres"
                },
                titularTransferenciaResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                cedulaTransferenciaResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 6 caracteres"
                },
                numeroCuentaResponsable: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 20 digitos"
                },
                primerNombreJefe: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                segundoNombreJefe: {
                    required: "Por favor intoduzca Valor"
                },
                primerApellidoJefe: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                segundoApellidoJefe: {
                    required: "Por favor intoduzca Valor"
                },
                cedulaJefe: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 6 caracteres"
                },
                celularJefe: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener 11 caracteres"
                },
                celularAdicionalJefe: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener 11 caracteres"
                },
                correoJefe: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 5 caracteres"
                },
                primerNombreComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                segundoNombreComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                primerApellidoComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                segundoApellidoComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 2 caracteres"
                },
                cedulaComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 6 caracteres"
                },
                celularComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener 11 caracteres"
                },
                celularAdicionalComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener 11 caracteres"
                },
                correoComposicion: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 5 caracteres"
                },
                especifiqueTipoVivienda: {
                    minlength: "Debe tener al menos 3 caracteres"
                },
                numeroAmbientes: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 1 caracteres"
                },
                numeroBanos: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 1 caracteres"
                },
                especifiqueOcupacionVivienda: {
                    required: "Por favor intoduzca Valor",
                    minlength: "Debe tener al menos 3 caracteres"
                },
            }
        });
    });
</script>
<script type="text/javascript">
    /*var Codi_Hogar = localStorage.getItem('Codi_Hogar');
    if (Codi_Hogar != ""){
        $("#identificacion1Hogar").val(Codi_Hogar);
    }*/
    
    if (localStorage.getItem("idHogarEditar") !== null) {
        HogarEditar();
        var idHogar = localStorage.getItem("idHogarEditar");
        editPanelista(idHogar,1,0);
        editPanelista(idHogar,0,1);
    localStorage.removeItem('idHogar');// ****
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
    
    
    // 11111
    $("#guardar-step-1").click(function() {
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
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>addNewHogar/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "identificacion1Hogar": $("#identificacion1Hogar").val(),
                    "Id_Hogar": $("#identificacion2Hogar").val(),
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
                    "tipoCasa": $("#tipoCasa").val()
                }
            }
            $.ajax(settings).done(function(response) {
                ///$("#identificacion1Hogar").val("1234");
                $("#identificacion1Hogar").val(response.Codi_Hogar);
                $("#identificacion2Hogar").val(response.maxIDPanelHogar);
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 1",$("#identificacion2Hogar").val(),"C");


                
                
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
    // 22222
    $("#guardar-step-2").click(function() {
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 2",$("#identificacion2Hogar").val(),"C");

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
    // 33333
    $("#guardar-step-3").click(function() {
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
                    "Id_Hogar": $("#identificacion2Hogar").val(),
                    "Nombre1": $("#primerNombreJefe").val(),
                    "Nombre2": $("#segundoNombreJefe").val(),
                    "Apellido1": $("#primerApellidoJefe").val(),
                    "Apellido2": $("#segundoApellidoJefe").val(),
                    "Id_Nacionalidad": $('input:radio[name=nacionalidadJefe]:checked').val(),
                    "Cedula": $("#cedulaJefe").val(),
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 3",$("#identificacion2Hogar").val(),"U");
                
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
    // 44444
    $("#guardar-step-4").click(function() {
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
                    "id_BeneficioSocialista": $('input:radio[name=beneficioSocialistaComposicion]:checked').val()
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
                localStorage.setItem('idHogar',$("#identificacion2Hogar").val());
                cargarTablaComposicion($("#identificacion2Hogar").val());
                var form = document.querySelector('#formComposicion');
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 4",$("#identificacion2Hogar").val(),"U");
                
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
        $('#tipoVivienda').change(function(e) {
            if ($(this).val() != "12") {
                $("#especifiqueTipoVivienda").val('');
                $('#especifiqueTipoVivienda').prop("disabled", true);
            } else {
                $('#especifiqueTipoVivienda').prop("disabled", false);

            }
        })
    });
    $(document).ready(function() {
        $('#ocupacionVivienda').change(function(e) {
            if ($(this).val() != "6") {
                $("#especifiqueOcupacionVivienda").val('');
                $('#especifiqueOcupacionVivienda').prop("disabled", true);
            } else {
                $('#especifiqueOcupacionVivienda').prop("disabled", false);

            }
        })
    });
    // 55555
    $("#guardar-step-5").click(function() {
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
                    "Id_MontoVivienda": $("#montoVivienda").val()
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
                
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 5",$("#identificacion2Hogar").val(),"U");
                
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
    // 66666
    $("#guardar-step-6").click(function() {
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
                    "Id_CortesElectricos": $('input:radio[name=cortesElectricos]:checked').val()
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
                
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 6",$("#identificacion2Hogar").val(),"U");
                
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
    // 77777
    $("#guardar-step-7").click(function() {
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
                    "id_Digitel": $('input:radio[name=digitel]:checked').val()
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 7",$("#identificacion2Hogar").val(),"U");
                
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
    //888888
    $("#guardar-step-8").click(function() {
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
                    "id_AM": AM
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 8",$("#identificacion2Hogar").val(),"U");
                
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
    //999999
    $("#guardar-step-9").click(function() {
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
        } else {
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
                    "Id_SeguroCasco": $('input:radio[name=casco]:checked').val()
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 9",$("#identificacion2Hogar").val(),"U");
                
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
    //AAAAA
    $("#guardar-step-10").click(function() {
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
        } else {
            var Perro = document.getElementById('Perro').checked ? 1 : 0;
            var Gato = document.getElementById('Gato').checked ? 1 : 0;
            var Pez = document.getElementById('Pez').checked ? 1 : 0;
            var Ave = document.getElementById('Ave').checked ? 1 : 0;
            var Roedor = document.getElementById('Roedor').checked ? 1 : 0;
            var Otro = document.getElementById('Otro').checked ? 1 : 0;
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
                    "Ind_Otro": Otro
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 10",$("#identificacion2Hogar").val(),"U");
                
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


    $("#guardar-step-11").click(function() {
        
            var Perro = document.getElementById('Perro').checked ? 1 : 0;
            var Gato = document.getElementById('Gato').checked ? 1 : 0;
            var Pez = document.getElementById('Pez').checked ? 1 : 0;
            var Ave = document.getElementById('Ave').checked ? 1 : 0;
            var Roedor = document.getElementById('Roedor').checked ? 1 : 0;
            var Otro = document.getElementById('Otro').checked ? 1 : 0;
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
                    "Ind_Otro": Otro
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
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Hogar Paso 10",$("#identificacion2Hogar").val(),"U");
                
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

    );
    
    
    /* cccc */
    function Bitacora(idUsuario,IP,Operacion,idPrincipal,CRUD) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'addHistory',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "idUsuario": idUsuario,
            "IP": IP,
            "Operacion": Operacion,
            "idPrincipal": idPrincipal,
            "CRUD": CRUD
            
        }
    }
    $.ajax(settings).done(function(response) {
        
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
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}

    function fechaActual(){
        var f = new Date();
        return(f.getDate() + "/"+ f.getMonth()+ "/" +f.getFullYear());
    }
    function validarDiasCompra() {
        var lunes = document.getElementById('lunes');
        var martes = document.getElementById('martes');
        var miercoles = document.getElementById('miercoles');
        var jueves = document.getElementById('jueves');
        var viernes = document.getElementById('viernes');
        var sabado = document.getElementById('sabado');
        var domingo = document.getElementById('domingo');
        if ((lunes.checked != true) && (martes.checked != true) && (miercoles.checked != true) && (jueves.checked != true) && (viernes.checked != true) && (sabado.checked != true) && (domingo.checked != true)) {
            return (false);
        } else {
            return (true);
        }
    }
    $(function() {
        $("input[name='jefeResponsableIO']").click(function() {
                
            if ($("#responsableJefeNo").is(":checked")) {
                $('#divResponsableJefe').css("visibility","visible");
            } else {
                $('#divResponsableJefe').css("visibility","hidden");
            }
        });
    });
    $(function() {
        $("input[name='escucharRadio']").click(function() {
            if ($("#emisoraSi").is(":checked")) {
                $("#divEmisora").show();
            } else {
                $("#divEmisora").hide();
            }
        });
    });
    $(function() {
        $("input[name='cortesElectricos']").click(function() {
            if ($("#cortesElectricosSi").is(":checked")) {
                $("#divCortesElectricos").show();
            } else {
                $("#divCortesElectricos").hide();
            }
        });
    });
    $(function() {
        $("input[name='vivienda']").click(function() {
            if ($("#viviendaCasa").is(":checked")) {
                $("#divVivienda").show();
                $("#divEdificio").hide();
            } else {
                $("#divVivienda").hide();
                $("#divEdificio").show();
            }
        });
    });
    // zzzzzzzzzzzzzzzzz
    function cargarEstado(identificador,idS) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllEstado/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (idS == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id === idS){
                    selected.append("<option value=" + response.data[i].id + " selected>" + response
                    .data[i].Estado + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].Estado + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarAutos(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllAutos/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .Autos + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .Autos + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarCantidadTV(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getCantidadTV/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .Televisores + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .Televisores + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarTipoTV(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getTipoTV/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .TipoTelevisores + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .TipoTelevisores + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarSenal(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getSenal/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .Senal + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .Senal + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarAguasBlancas(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllAguasBlancas/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .AguasBlancas + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .AguasBlancas + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarAguasNegras(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllAguasNegras/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .AguasNegras + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .AguasNegras + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarAseoUrbano(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllAseoUrbano/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .AseoUrbano + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .AseoUrbano + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarMontoVivienda(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllMontoVivienda/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .MontoVivienda + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .MontoVivienda + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarPuntosLuz(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllPuntosLuz/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .PuntosLuz + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .PuntosLuz + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarOcupacionVivienda(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllOcupacionVivienda/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .Ocupacion + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .Ocupacion + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarMetrosVivienda(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllMetrosVivienda/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .MetrosVivienda + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .MetrosVivienda + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarTipoVivienda(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllTipoVivienda/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .TipoVivienda + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .TipoVivienda + "</option>");
                }
                
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
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
    
    
    function cargarTvOnline(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllTvOnline/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .TvOnline + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .TvOnline + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarCablera(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getCablera/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .OperadoraCable + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .OperadoraCable + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarBanco(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllBanco/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + "Seleted>" + response
                    .data[i]
                    .banco + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .banco + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarEducacion(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllEducacion/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + " Seleted>" + response
                    .data[i]
                    .Educacion + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .Educacion + "</option>");
                }
                
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarTipoIngreso(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllTipoIngreso/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + " Seleted>" + response
                    .data[i]
                    .TipoIngreso + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .TipoIngreso + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarParentesco(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllParentesco/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + " Seleted>" + response
                    .data[i]
                    .parentesco + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .parentesco + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarEstadoCivil(identificador,edit) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllEstadoCivil/',
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selected = $(identificador);
            selected.find("option").remove();
            if (edit == 0){
                selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id == edit){
                    selected.append("<option value=" + response.data[i].id + " Seleted>" + response
                    .data[i]
                    .EstadoCivil + "</option>");
                }else{
                    selected.append("<option value=" + response.data[i].id + ">" + response
                        .data[i]
                        .EstadoCivil + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function pad (str, max) {
        str = str.toString(); return str.length < max ? pad("0" + str, max) : str;
    }
    function editPanelista(idHogar,responsable,parentesco){
        if (localStorage.getItem("idHogarEditar") !== null) {
            var settings = {
                "url": '<?php echo urlApi; ?>getPanelistaIdHogar/' + idHogar+'/'+ responsable+'/'+ parentesco,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                if (responsable == 1 && parentesco == 0){
                    $("#primerNombreResponsable").val(response.data[0].Nombre1);
                    $("#segundoNombreResponsable").val(response.data[0].Nombre2);
                    $("#primerApellidoResponsable").val(response.data[0].Apellido1);
                    $("#segundoApellidoResponsable").val(response.data[0].Apellido2);
                    var oblig = $("input:radio[name='nacionalidadResponsable']");
                    oblig.filter("[value='"+response.data[0].Id_Nacionalidad+"']").attr('checked', true);
                    $("#cedulaResponsable").val(response.data[0].Cedula);
                    var oblig = $("input:radio[name='sexoResponsable']");
                    oblig.filter("[value='"+response.data[0].Id_Sexo+"']").attr('checked', true);
                    //$("#estadoCivilResponsable option[value='"+ response.data[0].Id_EstadoCivil +"']").attr("selected",true);
                    //$("#parentescoJefeResponsable option[value='"+ response.data[0].Id_Parentesco +"']").attr("selected",true);
                    $("#fechaNacimientoResponsable").val(response.data[0].Fec_Nacimiento);
                    $("#correoResponsable").val(response.data[0].Correo);
                    $("#correoAlternoResponsable").val(response.data[0].CorreoAlterno);
                    //$("#tipoIngresoResponsable option[value='"+ response.data[0].Id_TipoIngreso +"']").attr("selected",true);
                    $("#personasDelHogar option[value='"+ response.data[0].CantidadPersonas +"']").attr("selected",true);

                    cargarEducacion('#educacionResponsable',response.data[0].Id_Educacion);
                    cargarEstadoCivil('#estadoCivilResponsable',response.data[0].Id_EstadoCivil);
                    cargarParentesco('#parentescoJefeResponsable',response.data[0].Id_Parentesco);
                    cargarTipoIngreso('#tipoIngresoResponsable',response.data[0].Id_TipoIngreso);
                    
                    var oblig = $("input:radio[name='frecuenciaCompraResponsable']");
                    oblig.filter("[value='"+response.data[0].Id_FrecuenciaCompra+"']").attr('checked', true);
                    if(response.data[0].id_Lunes == 1){
                        $("#lunes").prop("checked", true);
                    }
                    if(response.data[0].id_Martes == 1){
                        $("#martes").prop("checked", true);
                    }
                    if(response.data[0].id_Miercoles == 1){
                        $("#miercoles").prop("checked", true);
                    }
                    if(response.data[0].id_Jueves == 1){
                        $("#jueves").prop("checked", true);
                    }
                    if(response.data[0].id_Viernes == 1){
                        $("#viernes").prop("checked", true);
                    }
                    if(response.data[0].id_Sabado == 1){
                        $("#sabado").prop("checked", true);
                    }
                    if(response.data[0].id_Domingo == 1){
                        $("#domingo").prop("checked", true);
                    }
                    var oblig = $("input:radio[name='beneficioSocialistaResponsable']");
                    oblig.filter("[value='"+response.data[0].id_BeneficioSocialista+"']").attr('checked', true);
                    $("#celularResponsable").val(response.data[0].Celular);
                    $("#celularAdicionalResponsable").val(response.data[0].CelularAdicional);
                    $("#numeroCortesiaResponsable").val(response.data[0].NumeroCortesia);
                    $("#titularTransferenciaResponsable").val(response.data[0].Titular);
                    var oblig = $("input:radio[name='nacionalidadTransferenciaResponsable']");
                    oblig.filter("[value='"+response.data[0].id_NacionalidadTitular+"']").attr('checked', true);
                    $("#cedulaTransferenciaResponsable").val(response.data[0].CedulaTitular);
                    cargarBanco('#bancoTransferenciaResponsable',response.data[0].Id_Banco);
                    $("#numeroCuentaResponsable").val(response.data[0].NumeroCuenta);
                    var oblig = $("input:radio[name='pagoRapidoTrasferencia']");
                    oblig.filter("[value='"+response.data[0].Id_PagoRapido+"']").attr('checked', true);
                }
                if (responsable == 0 && parentesco == 1){
                    $("#primerNombreJefe").val(response.data[0].Nombre1);
                    $("#segundoNombreJefe").val(response.data[0].Nombre2);
                    $("#primerApellidoJefe").val(response.data[0].Apellido1);
                    $("#segundoApellidoJefe").val(response.data[0].Apellido2);
                    var oblig = $("input:radio[name='nacionalidadJefe']");
                    oblig.filter("[value='"+response.data[0].Id_Nacionalidad+"']").attr('checked', true);
                    $("#cedulaJefe").val(response.data[0].Cedula);
                    var oblig = $("input:radio[name='sexoJefe']");
                    oblig.filter("[value='"+response.data[0].Id_Sexo+"']").attr('checked', true);
                    $("#parentescoJefeJefe option[value='"+ response.data[0].Id_Parentesco +"']").attr("selected",true);
                    $("#fechaNacimientoJefe").val(response.data[0].Fec_Nacimiento);
                    $("#correoJefe").val(response.data[0].Correo);
                    $("#correoAlternoJefe").val(response.data[0].CorreoAlterno);
                    $("#personasDelHogar option[value='"+ response.data[0].CantidadPersonas +"']").attr("selected",true);
                    var oblig = $("input:radio[name='frecuenciaCompraJefe']");
                    oblig.filter("[value='"+response.data[0].Id_FrecuenciaCompra+"']").attr('checked', true);
                    var oblig = $("input:radio[name='beneficioSocialistaJefe']");
                    oblig.filter("[value='"+response.data[0].id_BeneficioSocialista+"']").attr('checked', true);
                    $("#celularJefe").val(response.data[0].Celular);
                    $("#celularAdicionalJefe").val(response.data[0].CelularAdicional);
                    
                    
                    cargarEducacion('#educacionJefe',response.data[0].Id_Educacion);
                    cargarEstadoCivil('#estadoCivilJefe',response.data[0].Id_EstadoCivil);
                    cargarParentesco('#parentescoJefeJefe',response.data[0].Id_Parentesco);
                    cargarTipoIngreso('#tipoIngresoJefe',response.data[0].Id_TipoIngreso);
        
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
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    }
    // vvvvvvvvvvvvvv
function EditAction(data) {
    document.getElementById('FormPanelistaEdit').reset();
    var settings = {
        "url": '<?php echo urlApi; ?>getPanelistas_x_IdPanelista/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#primerNombreComposicionEdit').val(response.data[0].Nombre1);
        $('#segundoNombreComposicionEdit').val(response.data[0].Nombre2);
        $('#primerApellidoComposicionEdit').val(response.data[0].Apellido1);
        $('#segundoApellidoComposicionEdit').val(response.data[0].Apellido2);
        var oblig = $("input:radio[name='nacionalidadComposicionEdit']");
        oblig.filter("[value='"+response.data[0].Id_Nacionalidad+"']").attr('checked', true);
        $('#cedulaComposicionEdit').val(response.data[0].Cedula);
        var oblig = $("input:radio[name='sexoComposicionEdit']");
        oblig.filter("[value='"+response.data[0].Id_Sexo+"']").attr('checked', true);
        cargarEstadoCivil('#estadoCivilComposicionEdit',response.data[0].Id_EstadoCivil);
        cargarParentesco('#parentescoJefeComposicionEdit',response.data[0].Id_Parentesco);
        cargarEducacion('#educacionComposicionEdit',response.data[0].Id_Educacion);
        $('#celularComposicionEdit').val(response.data[0].Celular);
        $('#celularAdicionalComposicionEdit').val(response.data[0].CelularAdicional);
        $('#correoComposicionEdit').val(response.data[0].Correo);
        cargarTipoIngreso('#tipoIngresoComposicionEdit',response.data[0].Id_TipoIngreso);
        $('#inputIdEditComposicion').val(response.data[0].Id_Panelista);
        var oblig = $("input:radio[name='beneficioSocialistaComposicionEdit']");
        oblig.filter("[value='"+response.data[0].id_BeneficioSocialista+"']").attr('checked', true);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        
        
        $('#modal-PanelistaEditar').modal('show');
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
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}

function ActualizarRegistro() {
    if ($("#FormAtributoEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updatePanelista',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "idPanelista": $("#inputIdEditComposicion").val(),
                "primerNombreComposicionEdit": $("#primerNombreComposicionEdit").val(),
                "segundoNombreComposicionEdit": $("#segundoNombreComposicionEdit").val(),
                "primerApellidoComposicionEdit": $("#primerApellidoComposicionEdit").val(),
                "segundoApellidoComposicionEdit": $("#segundoApellidoComposicionEdit").val(),
                "cedulaComposicionEdit": $("#cedulaComposicionEdit").val(),
                "celularComposicionEdit": $("#celularComposicionEdit").val(),
                "celularAdicionalComposicionEdit": $("#celularAdicionalComposicionEdit").val(),
                "correoComposicionEdit": $("#correoComposicionEdit").val(),
                
                "estadoCivilComposicionEdit": $("#estadoCivilComposicionEdit").val(),
                "parentescoJefeComposicionEdit": $("#parentescoJefeComposicionEdit").val(),
                "educacionComposicionEdit": $("#educacionComposicionEdit").val(),
                "tipoIngresoComposicionEdit": $("#tipoIngresoComposicionEdit").val(),
                "fechaNacimientoComposicionEdit": $("#fechaNacimientoComposicionEdit").val(),
                
                "nacionalidadComposicionEdit": $('input:radio[name=nacionalidadComposicionEdit]:checked').val(),
                "sexoComposicionEdit": $('input:radio[name=sexoComposicionEdit]:checked').val(),
                "beneficioSocialistaComposicionEdit": $('input:radio[name=beneficioSocialistaComposicionEdit]:checked').val(),
                
                
                "activo": $('input:radio[name=activoEdit]:checked').val(),

            }
        }
        $.ajax(settings).done(function(response) {
            let xtable = $('#TableAtributo').DataTable();
            xtable.ajax.reload(null, false);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
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
            var form = document.querySelector('#FormAtributoEdit');
            form.reset();
            $('#modal-AtributoEditar').modal('hide');
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
                var form = document.querySelector('#FormUsuariosEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

    
    function HogarEditar() {
        
        alert('ENTROOOOOO');
        var idHogar = localStorage.getItem("idHogarEditar");
        var settings = {
            "url": '<?php echo urlApi; ?>getHogarId/' + idHogar,
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            $("#identificacion1Hogar").val(response.data[0].CodigoHogar);
            $("#identificacion2Hogar").val(response.data[0].Id_PanelHogar);
            // Paso 1
            $("#estadoHogar option[value='"+ response.data[0].Id_Estado +"']").attr("selected",true);
            var Estado = $("#estadoHogar").val();
            cargarEstado("#estadoHogar",response.data[0].Id_Estado);
            cargarCiudad(response.data[0].Id_Estado,response.data[0].Id_Ciudad);
            cargarMunicipio(response.data[0].Id_Estado,response.data[0].Id_Municipio);
            ///var Municipio = localStorage.getItem("idMunicipio");
            cargarParroquia(response.data[0].Id_Municipio,response.data[0].Id_Parroquia);
            // aaa
            var oblig = $("input:radio[name='calle']");
            oblig.filter("[value='"+response.data[0].Ind_CalleAvenidad+"']").attr('checked', true);
            $('#nombreCalle').val(response.data[0].calle);
            
            if (response.data[0].Piso == ''){
                var oblig = $("input:radio[name='vivienda']");
            oblig.filter("[value='vivienda']").attr('checked', true);
            }else{
                var oblig = $("input:radio[name='vivienda']");
                oblig.filter("[value='edificio']").attr('checked', true);
            }
            
            $('#nombreEdificio').val(response.data[0].Edificio);
            $('#nombreCasa').val(response.data[0].Casa);
            $('#escaleraCasa').val(response.data[0].Escalera);
            $('#pisoHogar').val(response.data[0].Piso);
            $('#apartamentoEdificio').val(response.data[0].Apto);
            
            var oblig = $("input:radio[name='tipoZona']");
            oblig.filter("[value='"+response.data[0].Ind_BarrioUrbanizacion+"']").attr('checked', true);
            $('#nombreCalle').val(response.data[0].calle);
            
            $('#nombreTipoZona').val(response.data[0].barrio);
            $('#referenciaHogar').val(response.data[0].Referencia);
            $('#telefonoHogar').val(response.data[0].TelefonoLocal);
            // Responsable del hogar
            // Jefe del Hogar
            // Composición del Hogar
            cargarTablaComposicion(idHogar); // ****
            // Características y tenencia de la vivienda
            
            cargarTipoVivienda('#tipoVivienda',response.data[0].Id_TipoVivienda);
            cargarMetrosVivienda('#metrosVivienda',response.data[0].id_Metros);
            cargarOcupacionVivienda('#ocupacionVivienda',response.data[0].Id_OcupacionVivienda);
            cargarPuntosLuz('#puntosLuz',response.data[0].id_PuntosLuz);
            cargarMontoVivienda('#montoVivienda',response.data[0].Id_MontoVivienda);
            // Servicios Públicos
            cargarAguasBlancas('#aguasBlancas',response.data[0].Id_AguasBlancas);
            cargarAguasNegras('#aguasNegras',response.data[0].Id_AguasNegras);
            cargarAseoUrbano('#aseoUrbano',response.data[0].Id_AseoUrbano);
            // TV
            cargarCantidadTV('#cantidadTV',response.data[0].Id_Televisores)
            cargarTipoTV('#tipoTV',response.data[0].Id_TipoTelevisores)
            cargarSenal('#Senal',response.data[0].Id_Senal)
            // Medios
            cargarCablera('#cablera1',response.data[0].Id_Cablera1);
            cargarCablera('#cablera2',response.data[0].Id_Cablera2);
            cargarTvOnline('#tvOnline1',response.data[0].Id_TelevisionOnline1)
            cargarTvOnline('#tvOnline2',response.data[0].Id_TelevisionOnline2)
            // Vehiculos
            cargarAutos('#totalAutos',response.data[0].Id_Autos);
            
            $('#especifiqueTipoVivienda').val(response.data[0].OtroTipoVivienda);
            $('#numeroAmbientes').val(response.data[0].NumeroAmbientes);
            $('#numeroBanos').val(response.data[0].NumeroBanos);
            $("#ocupacionVivienda option[value='"+ response.data[0].Id_OcupacionVivienda +"']").attr("selected",true);
            $('#especifiqueOcupacionVivienda').val(response.data[0].OtroOcupacionVivienda);
            // Servicios Públicos
            var oblig = $("input:radio[name='servicioElectricidad']");
            oblig.filter("[value='"+response.data[0].Id_ServicioElectricidad+"']").attr('checked', true);
            var oblig = $("input:radio[name='servicioTelefonico']");
            oblig.filter("[value='"+response.data[0].Id_ServicioTelefono+"']").attr('checked', true);
            var oblig = $("input:radio[name='cortesElectricos']");
            oblig.filter("[value='"+response.data[0].Id_CortesElectricos+"']").attr('checked', true);
            // Servicios y equipamientos del hogar
            var oblig = $("input:radio[name='domesticaFija']");
            oblig.filter("[value='"+response.data[0].Id_DomesticaFija+"']").attr('checked', true);
            var oblig = $("input:radio[name='laboresFijas']");
            oblig.filter("[value='"+response.data[0].Id_PersonalLabores+"']").attr('checked', true);
            var oblig = $("input:radio[name='domesticaXDia']");
            oblig.filter("[value='"+response.data[0].Id_DomesticaDia+"']").attr('checked', true);
            var oblig = $("input:radio[name='conexionInternetTlf']");
            
            oblig.filter("[value='"+response.data[0].id_ConexionInternet1+"']").attr('checked', true);
            var oblig = $("input:radio[name='conexionInternetMovil']");
            oblig.filter("[value='"+response.data[0].id_ConexionInternet2+"']").attr('checked', true);
            var oblig = $("input:radio[name='conexionInternetBandaAncha']");
            oblig.filter("[value='"+response.data[0].id_ConexionInternet3+"']").attr('checked', true);
            var oblig = $("input:radio[name='celularJefeFamilia']");
            oblig.filter("[value='"+response.data[0].id_CelularJefe+"']").attr('checked', true);
            var oblig = $("input:radio[name='seguroHcmJefeFamilia']");
            oblig.filter("[value='"+response.data[0].id_SeguroHCMParticular+"']").attr('checked', true);
            var oblig = $("input:radio[name='seguroHcmEmpresaJefeFamilia']");
            oblig.filter("[value='"+response.data[0].id_SeguroHCMColectivo+"']").attr('checked', true);
            var oblig = $("input:radio[name='seguroSocialJefeFamilia']");
            oblig.filter("[value='"+response.data[0].id_SeguroHCMSS+"']").attr('checked', true);
            var oblig = $("input:radio[name='aireAcondicionado']");
            oblig.filter("[value='"+response.data[0].Id_AireAcondicionado+"']").attr('checked', true);
            var oblig = $("input:radio[name='calentadorAguaElectrico']");
            oblig.filter("[value='"+response.data[0].Id_Calentador1+"']").attr('checked', true);
            var oblig = $("input:radio[name='calentadorAguaGas']");
            oblig.filter("[value='"+response.data[0].Id_Calentador2+"']").attr('checked', true);
            var oblig = $("input:radio[name='computadorPersonal']");
            oblig.filter("[value='"+response.data[0].Id_Computador1+"']").attr('checked', true);
            var oblig = $("input:radio[name='computadorLaptop']");
            oblig.filter("[value='"+response.data[0].Id_Computador2+"']").attr('checked', true);
            var oblig = $("input:radio[name='DVD']");
            oblig.filter("[value='"+response.data[0].Id_DVD+"']").attr('checked', true);
            var oblig = $("input:radio[name='homeTeatro']");
            oblig.filter("[value='"+response.data[0].Id_HomeTheater+"']").attr('checked', true);
            var oblig = $("input:radio[name='juegosVideo']");
            oblig.filter("[value='"+response.data[0].Id_JuegosVodeo+"']").attr('checked', true);
            var oblig = $("input:radio[name='hornoMicroOnda']");
            oblig.filter("[value='"+response.data[0].Id_HornoMicro+"']").attr('checked', true);
            var oblig = $("input:radio[name='cocinaElectrica']");
            oblig.filter("[value='"+response.data[0].Id_Cocina1+"']").attr('checked', true);
            var oblig = $("input:radio[name='cocinaGasBombona']");
            oblig.filter("[value='"+response.data[0].Id_Cocina2+"']").attr('checked', true);
            var oblig = $("input:radio[name='cocinaGasDirecto']");
            oblig.filter("[value='"+response.data[0].Id_Cocina3+"']").attr('checked', true);
            var oblig = $("input:radio[name='cocinaKerosene']");
            oblig.filter("[value='"+response.data[0].Id_Cocina4+"']").attr('checked', true);
            var oblig = $("input:radio[name='secadoraRopa']");
            oblig.filter("[value='"+response.data[0].Id_Secadora+"']").attr('checked', true);
            var oblig = $("input:radio[name='lavadoraAutomatica']");
            oblig.filter("[value='"+response.data[0].Id_Lavadora1+"']").attr('checked', true);
            var oblig = $("input:radio[name='lavadoraSemiAutomatica']");
            oblig.filter("[value='"+response.data[0].Id_Lavadora2+"']").attr('checked', true);
            var oblig = $("input:radio[name='lavadoraRodillo']");
            oblig.filter("[value='"+response.data[0].Id_Lavadora3+"']").attr('checked', true);
            var oblig = $("input:radio[name='nevera']");
            oblig.filter("[value='"+response.data[0].Id_Nevera+"']").attr('checked', true);
            var oblig = $("input:radio[name='freezer']");
            oblig.filter("[value='"+response.data[0].Id_Freezer+"']").attr('checked', true);
            var oblig = $("input:radio[name='lavaplatos']");
            oblig.filter("[value='"+response.data[0].Id_LavaPlato+"']").attr('checked', true);
            var oblig = $("input:radio[name='cantvAcometida']");
            oblig.filter("[value='"+response.data[0].id_CantvAcometida+"']").attr('checked', true);
            var oblig = $("input:radio[name='cantvFijo']");
            oblig.filter("[value='"+response.data[0].id_CantvFijo+"']").attr('checked', true);
            var oblig = $("input:radio[name='movistar']");
            oblig.filter("[value='"+response.data[0].id_Movistar+"']").attr('checked', true);
            var oblig = $("input:radio[name='digitel']");
            oblig.filter("[value='"+response.data[0].id_Digitel+"']").attr('checked', true);
            // Medios
            $("#cantidadTV option[value='"+ response.data[0].Id_Televisores +"']").attr("selected",true);
            $("#tipoTV option[value='"+ response.data[0].Id_TipoTelevisores +"']").attr("selected",true);
            $("#Senal option[value='"+ response.data[0].Id_TipoTelevisores +"']").attr("selected",true);
            $("#Senal option[value='"+ response.data[0].Id_Senal +"']").attr("selected",true);
            $("#cablera1 option[value='"+ response.data[0].Id_Cablera1 +"']").attr("selected",true);
            $("#cablera2 option[value='"+ response.data[0].Id_Cablera2 +"']").attr("selected",true);
            $("#tvOnline1 option[value='"+ response.data[0].Id_TelevisionOnline1 +"']").attr("selected",true);
            $("#tvOnline2 option[value='"+ response.data[0].Id_TelevisionOnline2 +"']").attr("selected",true);
            var oblig = $("input:radio[name='escucharRadio']");
            if(response.data[0].id_FM == 1 || response.data[0].id_AM == 1){
                oblig.filter("[value='1']").attr('checked', true);
                if(response.data[0].id_FM == 1){
                    $("#FM").prop("checked", true);
                }
                if(response.data[0].id_AM == 1){
                    $("#AM").prop("checked", true);
                }
            }else{
                oblig.filter("[value='2']").attr('checked', true);
            }
            // Vehículos
            $("#totalAutos option[value='"+ response.data[0].Id_Autos +"']").attr("selected",true);
            var oblig = $("input:radio[name='moto']");
            oblig.filter("[value='"+response.data[0].Id_Moto+"']").attr('checked', true);
            var oblig = $("input:radio[name='casco']");
            oblig.filter("[value='"+response.data[0].Id_SeguroCasco+"']").attr('checked', true);
            //ppppp
            // Mascotas
            if(response.data[0].Ind_Perro == 1){
                $("#Perro").prop("checked", true);
            }
            if(response.data[0].Ind_Gato == 1){
                $("#Gato").prop("checked", true);
            }
            if(response.data[0].Ind_Pez == 1){
                $("#Pez").prop("checked", true);
            }
            if(response.data[0].Ind_Ave == 1){
                $("#Ave").prop("checked", true);
            }
            if(response.data[0].Ind_Roedor == 1){
                $("#Roedor").prop("checked", true);
            }
            if(response.data[0].Ind_Otro == 1){
                $("#Otro").prop("checked", true);
            }
            // Información General
            $("#claseSocialInformacion").val(response.data[0].ClaseSocial);
            $("#fechaRegistroInformacion").val(response.data[0].Fec_Registro);
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
        
    }
    function cargarMunicipio(parametro,idS) {
        var settings = {
            "url": '<?php echo urlApi; ?>getMunicipioId/' + parametro,
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selectMunicipio = $("#municipioHogar");
            selectMunicipio.find("option").remove();
            //alert("idS Muni:"+idS);
            //alert("parametro Muni:"+parametro);
            if (idS == 0){
                selectMunicipio.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                //alert("id Municipìo: "+response.data[i].id);
                if (response.data[i].id === idS){
                    localStorage.setItem("idMunicipio",idS);
                    selectMunicipio.append("<option value=" + response.data[i].id + " selected>" + response
                    .data[i].municipio + "</option>");
                }else{
                    selectMunicipio.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].municipio + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    // zzzzzzzzzzzzzzzzzzz
    function cargarCiudad(parametro,idS) {
        var settings = {
            "url": '<?php echo urlApi; ?>getCiudadId/' + parametro,
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selectCiudad = $("#ciudadHogar");
            selectCiudad.find("option").remove();
            if (idS == 0){
                selectCiudad.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id === idS){
                    selectCiudad.append("<option value=" + response.data[i].id + " selected>" + response
                    .data[i].ciudad + "</option>");
                }else{
                    selectCiudad.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].ciudad + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    function cargarParroquia(parametro,idS) {
        var settings = {
            "url": '<?php echo urlApi; ?>getParroquiaId/' + parametro,
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            let selectParroquia = $("#parroquiaHogar");
            selectParroquia.find("option").remove();
            if (idS == 0){
                selectParroquia.append("<option value='' selected disabled> -- Seleccione -- </option>");
            }
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id === idS){
                    selectParroquia.append("<option value=" + response.data[i].id + " selected>" + response
                    .data[i].parroquia + "</option>");
                }else{
                    selectParroquia.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].parroquia + "</option>");
                }
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php';
            }
        })
    }
    
    

    function cargarTablaComposicion(idHogar){
        //alert("function cargarbTablaComposicion(idHogar)");
        $('#TablePanelistas').dataTable({
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            "bDestroy": true,
            "autoWidth": true,
            "dom": '<"wrapper"flitp><"center"B>',
            "responsive": true,
            "buttons": [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
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
                    return '<a title="Eliminar" href="#"><img id="EliminarImg" src=<?php echo base_url('assets/iconos/delete.png') ?> width="30" height="30"  onclick="deleteAction(' +
                        data +
                        '); return false;"></a>&nbsp;&nbsp;<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png') ?> width="25" height="25" onclick="EditAction(' +
                        data +
                        '); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png') ?> width="25" height="25" onclick="VisualizarAction(' +
                        data + '); return false;"></a>';
                }
            }],
        });
    }
</script>
// ****
<script type="text/javascript">
    $(document).ready(function() {
        //var id_Hogar = $("#identificacion2Hogar").val();
        //var id_Hogar = localStorage.getItem('idHogar');
        //localStorage.removeItem('idHogar')
    });
</script>
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

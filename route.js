const express =  require('express');
const controllerPais = require('../controller/controllerPais');
const controllerUser = require('../controller/controllerUser');
const controllerLogin = require('../controller/controllerLogin');
const controllerMenu = require('../controller/controllerMenu');
const controllerNivel = require('../controller/controllerNivel');
const controllerRetail = require('../controller/controllerRetail');
const controllerTiendas = require('../controller/controllerTiendas');
const controllerFabricante = require('../controller/controllerFabricante');
const controllerCategoria = require('../controller/controllerCategoria');
const controllerProductosDiaDia = require('../controller/controllerProductoDiaDia');
const controllerSemana = require('../controller/controllerSemana');
const controllerTiendaDiaDia = require('../controller/controllerDiaDia');
const controllerMarca = require('../controller/controllerMarca');
const controllerSegmento = require('../controller/controllerSegmento');
const controllerTamanoRango= require('../controller/controllerTamRango');
const controllerTamano= require('../controller/controllerTamano');
const controllerUnidadMedida= require('../controller/controllerUnidadMedida');
const controllerStoreProcedure= require('../controller/ControllerStoreProcedure');
const controllerArea= require('../controller/controllerGArea');
const controllerEstado= require('../controller/controllerEstado');
const controllerMunicipio= require('../controller/controllerMunicipio');
const controllerParroquia = require('../controller/controllerParroquia');
const controllerPharmatencion = require('../controller/controllerPharmatencion');
const controllerProductoPharmatencion= require('../controller/controllerProductoPharmatencion');
const controllerFarmatodo= require('../controller/controllerFarmatodo');
const controllerValidaciones= require('../controller/controllerValidaciones');
const ensureToken=require('../middleware/middleware');
const router = express.Router();
//Controlador Paises
router.get('/api/getPais/:IdPais', ensureToken.ensureToken,controllerPais.getDataPaisId);
router.get('/api/getAllPaises',ensureToken.ensureToken,controllerPais.getAllDataPais);
router.post('/api/addNewDataPais',ensureToken.ensureToken,controllerPais.addNewDataPais);
router.post('/api/updateDataPais',ensureToken.ensureToken,controllerPais.updateDataPais);
router.get('/api/deleteDataPais/:IdPais',ensureToken.ensureToken, controllerPais.deleteDataPais);
// Contralador Usuario
router.get('/api/getUserID/:IdUser',ensureToken.ensureToken,controllerUser.getAllDataUserId);
router.get('/api/getAllUsers',ensureToken.ensureToken,controllerUser.getAllDataUser);
router.post('/api/addNewDataUser' , ensureToken.ensureToken,controllerUser.addNewDataUser);
router.post('/api/updateDataUser',ensureToken.ensureToken,controllerUser.updateDataUser);
router.get('/api/deleteDataUser/:IdUser' , ensureToken.ensureToken,controllerUser.deleteDataUser);
// Controlador Logueo
router.post('/api/login',controllerLogin.login);
router.post('/api/ReinicioPassword', controllerLogin.ReinicioPassword);
router.post('/api/ReinicioPasswordNew', controllerLogin.ReinicioPasswordNew);
// Controlador Nivel
router.get('/api/getNiveles',ensureToken.ensureToken,controllerNivel.GetNiveles);
// Controlador Retail
router.get('/api/getRetailes',ensureToken.ensureToken,controllerRetail.getAllDataRetail);
// Controlador Menu
router.post('/api/CrearMenu',ensureToken.ensureToken,controllerMenu.ConstruirMenu);
// Controlador Tiendas
router.get('/api/getAllTiendas',ensureToken.ensureToken,controllerTiendas.getAllDataTiendas);
router.get('/api/getAllTiendaId/:IdTienda',ensureToken.ensureToken,controllerTiendas.getAllDataTiendasId);
router.get('/api/getAllTiendaClienteId/:IdClienteTienda',ensureToken.ensureToken,controllerTiendas.getAllDataTiendasIdCliente);
router.post('/api/addNewTienda',ensureToken.ensureToken,controllerTiendas.addNewTienda);
router.post('/api/UpdateTienda',ensureToken.ensureToken,controllerTiendas.UpdateTienda);
router.post('/api/deleteTienda/:IdTienda',controllerTiendas.deleteTienda);
router.get('/api/getAllTiendasRetailers/:IdRetail',controllerTiendas.getAllTiendasRetailersID);
// Controlador Fabricante
router.get('/api/getBuscarCategoriaFabricante/:IdCategoria',ensureToken.ensureToken,controllerFabricante.getBuscarCategoriaFabricante);
router.get('/api/getBuscarFabricanteCategoria/:IdCategoria',ensureToken.ensureToken,controllerFabricante.getBuscarFabricanteCategoria);
router.get('/api/getAllFabricante',ensureToken.ensureToken,controllerFabricante.getAllFabricantes);
router.get('/api/getFabricanteId/:IdFabricante',ensureToken.ensureToken,controllerFabricante.getAllFabricantesID);
router.post('/api/addNewFabricante',ensureToken.ensureToken,controllerFabricante.addNewFabricante);
router.get('/api/deleteFabricante/:IdFabricante',ensureToken.ensureToken,controllerFabricante.deleteFabricante);
router.post('/api/updateFabricante',ensureToken.ensureToken,controllerFabricante.updateFabricante);
// Controlador Categoria
router.get('/api/getAllCategoria',ensureToken.ensureToken,controllerCategoria.getAllCategoria);
router.post('/api/addNewCategoria',ensureToken.ensureToken,controllerCategoria.addNewCategoria);
router.get('/api/deleteCategoria/:IdCategoria',ensureToken.ensureToken,controllerCategoria.deleteCategoria);
router.post('/api/UpdateCategoria',ensureToken.ensureToken,controllerCategoria.updateCategoria);
router.get('/api/getCategoriaId/:IdCategoria',ensureToken.ensureToken,controllerCategoria.CategoriaId);
// Controlador Productos Pharmatencion
router.get('/api/getAllDataCrudaPharmatencion',controllerProductoPharmatencion.getAllDataCrudaPharmatencion);
// Controlador ProductosDia Dia
router.get('/api/getAllProdDiaDia',ensureToken.ensureToken,controllerProductosDiaDia.getAllProducto);
router.get('/api/getAllProdDiaDiaId/:IdProducto',ensureToken.ensureToken,controllerProductosDiaDia.getAllProductoId);
router.get('/api/getAllDataCrudaDiaDia',ensureToken.ensureToken,controllerProductosDiaDia.getAllDataCrudaDiaDia);
// Controlador Semana
router.get('/api/getAllSemana',ensureToken.ensureToken,controllerSemana.getAllSemana);
// Controlador Tiendas Dia Dia
router.get('/api/getAllTiendaDiaDia',ensureToken.ensureToken,controllerTiendaDiaDia.getAllTienda);
// Controlador Tiendas Dia Dia
router.get('/api/getAllTiendaDiaDia',ensureToken.ensureToken,controllerTiendaDiaDia.getAllTienda);
// Controlador Marca
router.get('/api/getAllMarca',ensureToken.ensureToken,controllerMarca.getAllMarca);
router.get('/api/getDataMarcaId/:IdMarca',ensureToken.ensureToken,controllerMarca.getDataMarcaId);
router.get('/api/deleteMarca/:IdMarca',ensureToken.ensureToken,controllerMarca.deleteMarca);
router.post('/api/addNewMarca',ensureToken.ensureToken,controllerMarca.addNewMarca);
router.post('/api/updateMarca',ensureToken.ensureToken,controllerMarca.updateMarca);
// Controlador Segmento
router.get('/api/getAllSegmento',ensureToken.ensureToken,controllerSegmento.getAllSegmento);
router.get('/api/getSegmentoId/:IdSegmento',ensureToken.ensureToken,controllerSegmento.getSegmentoId);
router.get('/api/deleteSegmento/:IdSegmento',ensureToken.ensureToken,controllerSegmento.deleteSegmento);
router.post('/api/addNewSegmento',ensureToken.ensureToken,controllerSegmento.addNewSegmento);
router.post('/api/updateSegmento',ensureToken.ensureToken,controllerSegmento.updateSegmento);
// Controlador Tamaño Rango
router.get('/api/getAllTamRango',ensureToken.ensureToken,controllerTamanoRango.getAllTamRango);
router.get('/api/getTamRangoId/:IdTamRango',ensureToken.ensureToken,controllerTamanoRango.getTamRangoId);
router.get('/api/deleteTamRango/:IdTamRango',ensureToken.ensureToken,controllerTamanoRango.deleteTamRango);
router.post('/api/addNewTamRango',ensureToken.ensureToken,controllerTamanoRango.addNewTamRango);
router.post('/api/updateTamRango',ensureToken.ensureToken,controllerTamanoRango.updateTamRango);
//Controlador Tamaño
router.get('/api/getAllTamano',ensureToken.ensureToken,controllerTamano.getAllTamano);
router.get('/api/getTamanoId/:IdTam',ensureToken.ensureToken,controllerTamano.getTamanoID);
router.post('/api/addNewTamano',ensureToken.ensureToken,controllerTamano.addNewTamano);
router.get('/api/deleteTamano/:IdTam',ensureToken.ensureToken,controllerTamano.deleteTamano);
router.post('/api/updateTamano',ensureToken.ensureToken,controllerTamano.updateTamano);
//Controlador Unidad Medida
router.get('/api/getAllUnidadMedida',ensureToken.ensureToken,controllerUnidadMedida.getAllUnidadMedida);
router.get('/api/getUnidaMedidaId/:IdUnidadMedida',ensureToken.ensureToken,controllerUnidadMedida.getUnidaMedidaId);
router.post('/api/addNewUndMedida',ensureToken.ensureToken,controllerUnidadMedida.addNewUnidaMedida);
router.get('/api/deleteUndMedida/:IdUnidadMedida',ensureToken.ensureToken,controllerUnidadMedida.deleteUnidadMedida);
router.post('/api/updateUndVolumen',ensureToken.ensureToken,controllerUnidadMedida.updateUndVolumen);
//Controlador Prueba StoreProcedure
router.get('/api/geRegistro',controllerStoreProcedure.getAllCategoria);
router.get('/api/GenerateExcel',controllerStoreProcedure.GenerateExcel);
//Controlador PH_GArea
router.get('/api/getAllArea',ensureToken.ensureToken,controllerArea.getAllArea);
router.get('/api/getAreaId/:IdArea',ensureToken.ensureToken,controllerArea.getAreaId);
router.post('/api/addNewArea',ensureToken.ensureToken,controllerArea.addNewArea);
router.get('/api/deleteArea/:IdArea',ensureToken.ensureToken,controllerArea.deleteArea);
router.post('/api/updateArea',ensureToken.ensureToken,controllerArea.updateArea);
//Controlador ss_Estado
router.get('/api/getEstado',ensureToken.ensureToken,controllerEstado.getAllEstado);
router.get('/api/getEstadoId/:IdEstado',ensureToken.ensureToken,controllerEstado.getEstadoId);
router.post('/api/addNewEstado',ensureToken.ensureToken,controllerEstado.addNewEstado);
router.get('/api/deleteEstado/:IdAEstado',ensureToken.ensureToken,controllerEstado.deleteEstado);
router.post('/api/updateEstado',ensureToken.ensureToken,controllerEstado.updateEstado);
router.get('/api/getEstadoIdPais/:IdPais',ensureToken.ensureToken,controllerEstado.getEstadoIdPais);
//Controlador Municipio
router.get('/api/getMunicipio',ensureToken.ensureToken,controllerMunicipio.getAllMunicipio);
router.get('/api/getMunicipioId/:IdMunicipio',ensureToken.ensureToken,controllerMunicipio.getMunicipioId);
router.post('/api/addNewMunicipio',ensureToken.ensureToken,controllerMunicipio.addNewMunicipio);
router.post('/api/updateMunicipio',ensureToken.ensureToken,controllerMunicipio.updateMunicipio);
router.get('/api/deleteMunicipio/:IdMunicipio',ensureToken.ensureToken,controllerMunicipio.deleteMunicipio);
//Controlador Parroquia
router.get('/api/getParroquia',ensureToken.ensureToken,controllerParroquia.getAllParroquia);
router.get('/api/getParroquiaId/:IdParroquia',ensureToken.ensureToken,controllerParroquia.getParroquiaId);
router.post('/api/addNewParroquia',ensureToken.ensureToken,controllerParroquia.addNewParroquia);
router.post('/api/updateParroquia',ensureToken.ensureToken,controllerParroquia.updateParroquia);
router.get('/api/deleteParroquia/:IdParroquia',ensureToken.ensureToken,controllerParroquia.deleteParroquia);
//Controlador Pharmatencion
router.get('/api/getPharmatencion',ensureToken.ensureToken,controllerPharmatencion.getAllTienda);
router.get('/api/PharmatencionProductoId/:IdProducto',ensureToken.ensureToken,controllerPharmatencion.getTiendaProductoID);
//Controlador Farmatodo
router.get('/api/getFarmatodo',controllerFarmatodo.getAllTienda);
//Controlador de Validacion - Recepcion
router.get('/api/getTiendaFaltantes',ensureToken.ensureToken,controllerValidaciones.getTiendasFaltantes);
router.get('/api/getTamanoArchivo/:idOpc/:idRet/:idSem',ensureToken.ensureToken,controllerValidaciones.getTamanoArchivo);
router.get('/api/getCantidadRegistros/:idOpc/:idRet/:idSem',ensureToken.ensureToken,controllerValidaciones.getCantidadRegistros);
router.get('/api/getTiendasFaltantes/:idOpc/:idRet/:idSem',ensureToken.ensureToken,controllerValidaciones.getTiendasFaltantes);
router.get('/api/getTiendasNuevas/:idOpc/:idRet/:idSem',controllerValidaciones.getTiendasNuevas);
//Controlador de Validacion - Procesamiento
router.get('/api/getTiendasRetail/:idRet',controllerValidaciones.getTiendasRetail);
router.get('/api/getACVTiendasRetail/:idRet/:idSem',controllerValidaciones.getACVTiendasRetail);


module.exports = router;

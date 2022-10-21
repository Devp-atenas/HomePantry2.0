<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
    /* ----------------- !OJO¡ Re-ordenado ---------------------- */
	public function dashboard(){
        $this->load->view('dashboard');
	}
    public function ingresar(){  // ???????????????
        $this->load->view('ListaHogares/ListaHogares');
	}
    public function ValidacionProductosNuevos_(){
        $this->load->view('ProductosNuevos/ValidacionProductosNuevos');
    }
    public function ValidationDataPharmatencion(){
        $this->load->view('Validacion/Pharmatencion');
    }
    public function TiendasRetail(){
        $this->load->view('TiendasRetail/TiendasRetail');
	}
    public function Pharmatencion(){
        $this->load->view('Producto/Pharmatencion');
	}
    public function Tiendas(){
        $this->load->view('Tienda/Tienda');
	}
    public function Construccion(){
        $this->load->view('Construccion/Construccion');
	}
    public function DiaDia(){
        $this->load->view('Producto/DiaDia');
    }
    public function ValidationDataDiaDia(){
        $this->load->view('Validacion/DiaDia');
    }
    public function ValidationDataGeneral(){
        $this->load->view('Validacion/ValidationDataGeneral');
    }
    public function ValidationDataFarmatodo(){
        $this->load->view('Validacion/Farmatodo');
    }
    public function Indicadores(){
        $this->load->view('Indicadores/Indicadores');
    }
    public function Retail(){
        $this->load->view('Retail/Retail');
    }
    public function ErroresArchivos(){
        $this->load->view('LogArchivosRetail/Errores');
    }
    public function Reporte_Cadena_Tienda_Barra(){
        $this->load->view('Reporte/Cadena_Tienda_Barra');
    }
    public function ClienteCategoria(){
        $this->load->view('ClienteCategoria/ClienteCategoria');
    }
    public function ValidacionRetailers(){
        $this->load->view('Validacion/ValidacionRetailers');
    }
    public function ValidacionProductosNuevos(){
        $this->load->view('ProductosNuevos/ValidacionProductosNuevos');
    }
    public function ValidacionPrecios(){
        $this->load->view('Precios/ValidacionPrecios');
    }
    public function ReporteMoneyMarket(){
        $this->load->view('MoneyMarket/ReporteMoneyMarket');
    }
    public function Notificaciones(){
        $this->load->view('Notificaciones/Notificaciones');
    }
    public function UsuariosManufactureros(){
        $this->load->view('UsuariosManufactureros/UsManufactureros');
    }
    public function UsuariosRetail(){
        $this->load->view('UsuariosRetail/UsRetail');
    }
    public function Header(){
        $this->load->view('Header2/Header');
    }
    //----------- XXXXXXXXXX ------------
    //----------- XXXXXXXXXX ------------
    //----------- XXXXXXXXXX ------------
    //----------- XXXXXXXXXX ------------
    //----------- XXXXXXXXXX ------------
    //----------- XXXXXXXXXX ------------
    //----------- XXXXXXXXXX ------------
    //----------- USUARIO / PERFIL ------------
    public function ReinicioPassword(){
        $this->load->view('ReinicioPassword/ReinicioPassword');
	}
    public function ReinicioPasswordMensajeEnvioCorreo(){
        $this->load->view('ReinicioPassword/ReinicioPasswordMensajeCorreo');
	}
    public function ReinicioPassworkOK(){
        $this->load->view('ReinicioPassword/ReinicioPasswordOk');
	}
    public function Usuarios(){
        $this->load->view('Usuarios/Usuario');
	}
    public function ImportarUsuariosHP(){
        $this->load->view('Importar/Usuario');
	}
    public function Recoverpassword(){
        $this->load->view('ReinicioPassword/Recover-password.php');
    }
    //----------- GEOGRAFIA ------------
    public function Pais(){
        $this->load->view('Pais/Pais');
	}
    public function Municipio(){
        $this->load->view('Municipio/Municipio');
	}
    public function Estado(){
        $this->load->view('Estado/Estado');
	}
    public function Parroquia(){
        $this->load->view('Parroquia/Parroquia');
	}
    public function Area(){
        $this->load->view('Area/Area');
	}
    //----------- Diccionario ------------
    public function Producto(){
        $this->load->view('Producto/Producto');
    }
    public function ProductoMedicina(){
        $this->load->view('Producto/ProductoMedicina');
    }
    public function Fabricante(){
        $this->load->view('Fabricante/Fabricante');
	}
    public function Segmento(){
        $this->load->view('Segmento/Segmento');
	}
    public function Categoria(){
        $this->load->view('Categoria/Categoria');
	}
    public function Categoria2(){
        $this->load->view('Categoria2/Categoria2');
	}
    public function Marca(){
        $this->load->view('Marca/Marca');
	}
    public function UnidadVolumen(){
        $this->load->view('UnidadVolumen/UnidadVolumen');
	}
    public function Tamano(){
        $this->load->view('Tamano/Tamano');
	}
    public function TamanoRango(){
        $this->load->view('TamanoRango/TamanoRango');
    }
    public function Atributo1(){
        $this->load->view('Atributo1/Atributo1');
    }
    public function Atributo2(){
        $this->load->view('Atributo2/Atributo2');
    }
    public function Atributo3(){
        $this->load->view('Atributo3/Atributo3');
    }
    public function Atributo4(){
        $this->load->view('Atributo4/Atributo4');
    }
    public function Atributo5(){
        $this->load->view('Atributo5/Atributo5');
    }
    public function Atributo6(){
        $this->load->view('Atributo6/Atributo6');
    }
    public function Atributo7(){
        $this->load->view('Atributo7/Atributo7');
    }
    //----------- NSE ------------
    public function PuntajeSino(){
        $this->load->view('PuntajeSino/PuntajeSino');
    }
    public function MetrosVivienda(){
        $this->load->view('NSE/MetrosVivienda');
    }
    public function Parentesco(){
        $this->load->view('NSE/Parentesco');
    }
    public function Educacion(){
        $this->load->view('NSE/Educacion');
    }
    public function TipoIngreso(){
        $this->load->view('NSE/TipoIngreso');
    }
    public function TipoVivienda(){
        $this->load->view('NSE/TipoVivienda');
    }
    public function PuntosLuz(){
        $this->load->view('NSE/PuntosLuz');
    }
    public function OcupacionVivienda(){
        $this->load->view('NSE/OcupacionVivienda');
    }
    public function MontoVivienda(){
        $this->load->view('NSE/MontoVivienda');
    }
    public function AguasBlancas(){
        $this->load->view('NSE/AguasBlancas');
    }
    public function AguasNegras(){
        $this->load->view('NSE/AguasNegras');
    }
    public function AseoUrbano(){
        $this->load->view('NSE/AseoUrbano');
    }
    public function CantidadTV(){
        $this->load->view('NSE/CantidadTV');
    }
    public function TipoTV(){
        $this->load->view('NSE/TipoTV');
    }
    public function TipoSenal(){
        $this->load->view('NSE/TipoSenal');
    }
    public function OperadoraCable(){
        $this->load->view('NSE/OperadoraCable');
    }
    public function TvOnline(){
        $this->load->view('NSE/TvOnline');
    }
    public function Autos(){
        $this->load->view('NSE/Autos');
    }
    public function Zona(){
        $this->load->view('NSE/Zona');
    }
    public function Techo(){
        $this->load->view('NSE/Techo');
    }
    public function Piso(){
        $this->load->view('NSE/Piso');
    }
    public function Paredes(){
        $this->load->view('NSE/Paredes');
    }
    public function Pintura(){
        $this->load->view('NSE/Pintura');
    }
    public function PEstacionamiento(){
        $this->load->view('NSE/PEstacionamiento');
    }
    public function FrecuenciaElectricidad(){
        $this->load->view('NSE/FrecuenciaElectricidad');
    }
    public function FrecuenciaAgua(){
        $this->load->view('NSE/FrecuenciaAgua');
    }
    public function TipoAlmacenamientoAgua(){
        $this->load->view('NSE/TipoAlmacenamientoAgua');
    }
    public function TVPlasmaCantidad(){
        $this->load->view('NSE/TVPlasmaCantidad');
    }
    public function SmartTVCantidad(){
        $this->load->view('NSE/SmartTVCantidad');
    }
    public function Gastos(){
        $this->load->view('NSE/Gastos');
    }
    public function Ingresos(){
        $this->load->view('NSE/Ingresos');
    }
    public function TipoInternet(){
        $this->load->view('NSE/TipoInternet');
    }
    public function Seguro(){
        $this->load->view('NSE/Seguro');
    }
    public function TipoGas(){
        $this->load->view('NSE/TipoGas');
    }
    public function PlanVacacional(){
        $this->load->view('NSE/PlanVacacional');
    }
    public function ViajeVacacional(){
        $this->load->view('NSE/ViajeVacacional');
    }
    public function Internet(){
        $this->load->view('NSE/Internet');
    }
    public function Ocupacion(){
        $this->load->view('NSE/Ocupacion');
    }
    //----------- Operaciones ------------
    public function ValidacionProducto(){
        $this->load->view('Operaciones/ValidacionProducto');
    }
    public function ValidacionHogar(){
        $this->load->view('Operaciones/ValidacionHogar');
    }
    public function ProductosPendientes(){
        $this->load->view('Operaciones/ProductosPendientes');
    }
    //----------- Hogares ------------
    public function SustitucionHogares(){
        $this->load->view('Hogares/SustitucionHogares');
    }
    public function SustitucionHogaresNSE(){
        $this->load->view('Hogares/SustitucionHogaresNSE');
    }
    public function CrearEstudio(){
        $this->load->view('Hogares/CrearEstudio');
    }
    public function hogares(){//CAMBIO por FichaHogar() (lo dejo por si acaso)
        $this->load->view('Hogares/HogaresNuevos');
	}
    public function FichaHogar(){
        $this->load->view('Hogares/FichaHogar');
	}
    public function FichaHogarV21(){
        $this->load->view('Hogares/FichaHogarV2');
	}
    public function HogaresPendientes(){
        $this->load->view('Hogares/HogaresPendientes');
	}
    public function ListaHogares(){
        $this->load->view('Hogares/ListaHogares');
	}
    public function DeshabilitarHogares(){
        $this->load->view('Hogares/DeshabilitarHogares');
	}
    //----------- Estudio ------------
    public function CargarEstudio(){
        $this->load->view('Estudio/CargarEstudio');
    }
    //----------- MaestroAutenticar ------------
    public function Menu(){
        $this->load->view('MaestroAutenticar/MenuMaestro');
    }
    //----------- GestionPerfil ------------
    public function GestionarPerfil(){
        $this->load->view('GestionPerfil/GestionarPerfil');
    }
    public function AsociarPerfil(){
        $this->load->view('GestionPerfil/AsociarPerfil');
    }
    //----------- Reportes ------------
    public function ReporteTotal(){
        $this->load->view('Reportes/ReporteTotal');
    }
    public function ReporteConsumos(){
        $this->load->view('Reportes/ReporteConsumos');
    }
    public function ReporteConsumoPorHogar(){
        $this->load->view('Reportes/ReporteConsumoPorHogar');
    }
    public function ReporteTipoConsumoXDia(){
        $this->load->view('Reportes/ReporteTipoConsumoXDia');
    }
    public function ReporteHogarRegistrsoXConsumo(){
        $this->load->view('Reportes/ReporteHogarRegistrsoXConsumo');
    }
    public function ReporteNSE(){
        $this->load->view('Reportes/ReporteNSE');
    }
    public function ReporteTicket(){
        $this->load->view('Reportes/ReporteTicket');
    }
    public function ReporteCablera(){
        $this->load->view('Reportes/ReporteCablera');
    }
    public function ReporteHogaresInactivosIntegrantes(){
        $this->load->view('Reportes/ReporteHogaresInactivosIntegrantes');
    }
    public function ReporteHogaresPanelista(){
        $this->load->view('Reportes/ReporteHogaresPanelista');
    }
    public function ReporteGeneral(){
        $this->load->view('Reportes/ReporteGeneral');
    }
    public function ReporteHogarCategoria(){
        $this->load->view('Reportes/ReporteHogarCategoria');
    }
    public function PagoIncentivos(){
        $this->load->view('Reportes/PagoIncentivos');
    }
    public function ReporteConsumosSemanal(){
        $this->load->view('Reportes/ReporteConsumosSemanal');
    }
    public function RevisarInvestigaciones(){
        $this->load->view('Reportes/RevisarInvestigaciones');
    }
    //----------- Mantenimiento ------------
    public function MantenimientoSemana(){
        $this->load->view('Mantenimiento/MantenimientoSemana');
    }
    public function DetalleAlertas(){
        $this->load->view('Alertas/DetalleAlertas');
    }
    //----------- Actividad ------------
    public function Actividad(){
        $this->load->view('Actividad/Actividad');
    }
    public function temp(){
        $this->load->view('Actividad/temp');
    }
    //----------- Configuracion ------------
    public function BloquearFicha(){
        $this->load->view('Configuracion/BloquearFicha');
    }
    //----------- INGRESAR/SALIR SISTEMA ------------
    public function logout(){
        //$this->load->helper('url');
        echo '<script>';
        echo 'sessionStorage.clear();';
        echo 'localStorage.clear();';
        echo 'alert(999)';
        echo '</script>';
        $this->session->sess_destroy();
        //$this->load->view('SessionLock');
        redirect('/');
	}
    public function SessionLock(){
        $this->load->view('SessionLock');
    }
    public function user_view(){
        $this->load->helper('url');
        // Check form submit or not
        if($this->input->post('upload') != NULL ){
            $data = array();
            echo '<script>';
            echo 'alert(999999);';
            echo '</script>';
            if(!empty($_FILES['file']['name'])){
                // Set preference
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size']    = '10000';	// max_size in kb
                $config['file_name'] = $_FILES['file']['name'];
                //Load upload library
                $this->load->library('upload',$config);
                // File upload
                if($this->upload->do_upload('file')){
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $data['response'] = 'successfully uploaded '.$filename;
                }else{
                    $data['response'] = 'failed';
                }
            }else{
                $data['response'] = 'failed';
            }
            // load view
            $this->load->view('user_view',$data);
        }else{
            // load view
            $this->load->view('user_view');
        }   
    }   
}

?>


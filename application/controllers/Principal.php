<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
	public function dashboard(){
        $this->load->view('dashboard');
	}
    public function hogares(){
        $this->load->view('Hogares/HogaresNuevos');
	}
    public function FichaHogar(){
        $this->load->view('Hogares/FichaHogar');
	}
    public function ListaHogares(){
        $this->load->view('ListaHogares/ListaHogares');
	}
    public function ingresar(){
        $this->load->view('ListaHogares/ListaHogares');
	}
    public function ValidacionProductosNuevos_(){
        $this->load->view('ProductosNuevos/ValidacionProductosNuevos');
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
    public function ValidationDataPharmatencion(){
        $this->load->view('Validacion/Pharmatencion');
    }
    public function ReinicioPassword(){
        $this->load->view('ReinicioPassword/ReinicioPassword');
	}
    public function ReinicioPasswordMensajeEnvioCorreo(){
        $this->load->view('ReinicioPassword/ReinicioPasswordMensajeCorreo');
	}
    public function ReinicioPassworkOK(){
        $this->load->view('ReinicioPassword/ReinicioPasswordOk');
	}
    public function TiendasRetail(){
        $this->load->view('TiendasRetail/TiendasRetail');
	}
    public function Pais(){
        $this->load->view('Pais/Pais');
	}
    public function Municipio(){
        $this->load->view('Municipio/Municipio');
	}
    public function Estado(){
        $this->load->view('Estado/Estado');
	}
    public function Area(){
        $this->load->view('Area/Area');
	}
    public function Pharmatencion(){
        $this->load->view('Producto/Pharmatencion');
	}
    public function Tiendas(){
        $this->load->view('Tienda/Tienda');
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
    public function Construccion(){
        $this->load->view('Construccion/Construccion');
	}
    public function Parroquia(){
        $this->load->view('Parroquia/Parroquia');
	}
    public function TamanoRango(){
        $this->load->view('TamanoRango/TamanoRango');
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
    public function PuntajeSino(){
        $this->load->view('PuntajeSino/PuntajeSino');
    }
    public function Header(){
        $this->load->view('Header2/Header');
    }
    public function Producto(){
        $this->load->view('Producto/Producto');
    }
    //----------- NSE ------------
    public function MetrosVivienda(){
        $this->load->view('nse/MetrosVivienda');
    }
    public function Parentesco(){
        $this->load->view('nse/Parentesco');
    }
    public function Educacion(){
        $this->load->view('nse/Educacion');
    }
    public function TipoIngreso(){
        $this->load->view('nse/TipoIngreso');
    }
    public function TipoVivienda(){
        $this->load->view('nse/TipoVivienda');
    }
    public function PuntosLuz(){
        $this->load->view('nse/PuntosLuz');
    }
    public function OcupacionVivienda(){
        $this->load->view('nse/OcupacionVivienda');
    }
    public function MontoVivienda(){
        $this->load->view('nse/MontoVivienda');
    }
    public function AguasBlancas(){
        $this->load->view('nse/AguasBlancas');
    }
    public function AguasNegras(){
        $this->load->view('nse/AguasNegras');
    }
    public function AseoUrbano(){
        $this->load->view('nse/AseoUrbano');
    }
    public function CantidadTV(){
        $this->load->view('nse/CantidadTV');
    }
    public function TipoTV(){
        $this->load->view('nse/TipoTV');
    }
    public function TipoSenal(){
        $this->load->view('nse/TipoSenal');
    }
    public function OperadoraCable(){
        $this->load->view('nse/OperadoraCable');
    }
    public function TvOnline(){
        $this->load->view('nse/TvOnline');
    }
    public function Autos(){
        $this->load->view('nse/Autos');
    }
    public function FrecuenciaElectricidad(){
        $this->load->view('nse/FrecuenciaElectricidad');
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
    
    public function logout(){
        $this->load->helper('url');
        echo '<script>';
        echo 'var nombreUsuario = localStorage.getItem("nombreUsuario");';
        echo 'var user = localStorage.getItem("user");';
        echo 'var Avatar = localStorage.getItem("Avatar");';
        echo 'sessionStorage.clear();';
        echo 'localStorage.clear();';
        echo 'localStorage.setItem("nombreUsuario",nombreUsuario);';
        echo 'localStorage.setItem("Avatar",Avatar);';
        echo '</script>';
        $this->session->sess_destroy();
        $this->load->view('SessionLock');
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
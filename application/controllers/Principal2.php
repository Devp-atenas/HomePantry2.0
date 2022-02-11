<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
	public function dashboard()
	{
        $this->load->view('dashboard');
	}
    public function Usuarios()
	{
        $this->load->view('Usuarios/Usuario');
	}
    public function Recoverpassword()
    {
        $this->load->view('ReinicioPassword/Recover-password.php');
    }
    public function ValidationDataPharmatencion()
    {
        $this->load->view('Validacion/Pharmatencion');
    }
    public function ReinicioPassword()
	{
        $this->load->view('ReinicioPassword/ReinicioPassword');
	}
    public function ReinicioPasswordMensajeEnvioCorreo()
	{
        $this->load->view('ReinicioPassword/ReinicioPasswordMensajeCorreo');
	}
    public function ReinicioPassworkOK()
    {
        $this->load->view('ReinicioPassword/ReinicioPasswordOk');
	}
    public function TiendasRetail()
    {
        $this->load->view('TiendasRetail/TiendasRetail');
	}
    public function Pais()
	{
        $this->load->view('Pais/Pais');
	}
    public function Municipio()
	{
        $this->load->view('Municipio/Municipio');
	}
    public function Estado()
	{
        $this->load->view('Estado/Estado');
	}
    public function Area()
	{
        $this->load->view('Area/Area');
	}
    public function Pharmatencion()
	{
        $this->load->view('Producto/Pharmatencion');
	}

    public function Tiendas()
	{
        $this->load->view('Tienda/Tienda');
	}
    public function Fabricante()
	{
        $this->load->view('Fabricante/Fabricante');
	}
    public function Segmento()
	{
        $this->load->view('Segmento/Segmento');
	}
    public function Categoria()
	{
        $this->load->view('Categoria/Categoria');
	}
    public function Marca()
	{
        $this->load->view('Marca/Marca');
	}
    public function UnidadVolumen()
    {
        $this->load->view('UnidadVolumen/UnidadVolumen');
	}
    public function Tamano()
	{
        $this->load->view('Tamano/Tamano');
	}
    public function Construccion()
	{
        $this->load->view('Construccion/Construccion');
	}
    public function Parroquia()
	{
        $this->load->view('Parroquia/Parroquia');
	}
    public function TamanoRango()
    {
        $this->load->view('TamanoRango/TamanoRango');
    }
    public function DiaDia()
    {
        $this->load->view('Producto/DiaDia');
    }
    public function ValidationDataDiaDia()
    {
        $this->load->view('Validacion/DiaDia');
    }
    public function ValidationDataGeneral()
    {
        $this->load->view('Validacion/ValidationDataGeneral');
    }
    public function ValidationDataFarmatodo()
    {
        $this->load->view('Validacion/Farmatodo');
    }    
    public function Indicadores()
    {
        $this->load->view('Indicadores/Indicadores');
    }
    public function Retail()
    {
        $this->load->view('Retail/Retail');
    }
    public function ErroresArchivos()
    {
        $this->load->view('LogArchivosRetail/Errores');
    }
    public function Reporte_Cadena_Tienda_Barra()
    {
        $this->load->view('Reporte/Cadena_Tienda_Barra');
    }
    public function ClienteCategoria()
    {
        $this->load->view('ClienteCategoria/ClienteCategoria');
    }
    public function ValidacionRetailers()
    {
        $this->load->view('Validacion/ValidacionRetailers');
    }
    public function ValidacionProductosNuevos()
    {
        $this->load->view('Validacion/ValidacionProductosNuevos');
    }    
    public function logout()
	{
        $this->load->helper('url');
        echo '<script>';
        echo 'sessionStorage.clear();';
        echo '</script>';
        $this->session->sess_destroy();
        redirect('/');
	}
}
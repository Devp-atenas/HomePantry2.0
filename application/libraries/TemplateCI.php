<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateCI
{
	protected $ci;

	public $title = "ADMIN DEV";
	public $icono = "";
	public $titlePage = "";
	public $descriptionPage = "";
	public function __construct()
	{
		$this->ci =& get_instance();
	}
	public function menuPrincipal($id_Perfil)
	{
		$res=[];
		//** Igual Opciones Reporte*/
		//1 Administrador
		//2 Atenas Operaciones - Henry
		//3 Atenas Retail Scanning -Andres
		//4 Cliente Retail * - Cliente Daniel
		//5 Cliente Manufacturero * Cliente Andres
		//6 Atenas Comercial  * -Barbara
		//7 Atenas Retail Services *-Daniel
		//8 Atenas Gerentes Koling
		//9 Atenas Reportes *- Drabkina
		if ($id_Perfil==10) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Ingresar Hogar", "url" => "Principal/Hogares___/".$id_Perfil.""]
								]
				],
				["name" => "Mantenimientos", "url" => "#", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Usuarios", "url" => "Principal/Usuarios/".$id_Perfil.""],
									["name" => "Usuarios Manufactureros", "url" => "Principal/UsuariosManufactureros/".$id_Perfil.""],
									["name" => "Importar Usuarios HP", "url" => "Principal/ImportarUsuariosHP/".$id_Perfil.""],
									["name" => "Usuarios Retail", "url" => "Principal/UsuariosRetail/".$id_Perfil.""],
								]
				]	
				
			];
		}elseif ($id_Perfil==20) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail____", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Validación Retailers", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Validación Productos", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Productos Nuevos", "url" => "Principal/ValidacionProductosNuevos/".$id_Perfil.""]
								]
				],
				["name" => "Validación Precios", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Productos Precios", "url" => "Principal/ValidacionPrecios/".$id_Perfil.""]
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Cadena-Tienda-Barra", "url" => "Principal/Reporte_Cadena_Tienda_Barra/".$id_Perfil.""],
									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],
				["name" => "Dimensión Geografia", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Pais", "url" => "Principal/Pais/".$id_Perfil.""],
									["name" => "Estado", "url" => "Principal/Estado/".$id_Perfil.""],
									["name" => "Municipio", "url" => "Principal/Municipio/".$id_Perfil.""],
									["name" => "Parroquia", "url" => "Principal/Parroquia/".$id_Perfil.""],
									["name" => "Area", "url" => "Principal/Area/".$id_Perfil.""],
								]
				],
				["name" => "Dimensión Retail", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Retails", "url" => "Principal/Retail/".$id_Perfil.""],
									["name" => "Tiendas Retail", "url" => "Principal/TiendasRetail/".$id_Perfil.""],
								]
				],
			];
		}elseif ($id_Perfil==30) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Mantenimientos", "url" => "#", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Usuarios Manufactureros", "url" => "Principal/UsuariosManufactureros/".$id_Perfil.""],
									["name" => "Importar Usuarios HP", "url" => "Principal/ImportarUsuariosHP/".$id_Perfil.""],
								]
				],
				["name" => "Dimensión Clientes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Cliente Categoria", "url" => "Principal/ClienteCategoria/".$id_Perfil.""],
									["name" => "Notificaciones Categoria", "url" => "Principal/Notificaciones/".$id_Perfil.""],
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Cadena-Tienda-Barra", "url" => "Principal/Reporte_Cadena_Tienda_Barra/".$id_Perfil.""],
									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],
				["name" => "Dimensión Retail", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Retails", "url" => "Principal/Retail/".$id_Perfil.""],
									["name" => "Tiendas Retail", "url" => "Principal/TiendasRetail/".$id_Perfil.""],
									["name" => "Indicadores", "url" => "Principal/Indicadores/".$id_Perfil.""],
								]
				],
			];
		}elseif ($id_Perfil==40) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],

			];
		}elseif ($id_Perfil==50) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],

			];
		}elseif ($id_Perfil==60) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [

									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],

			];
		}elseif ($id_Perfil==70) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [

									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],

			];
		}elseif ($id_Perfil==80) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],

			];
		}elseif ($id_Perfil==90) {
			$res = [
				["name" => "Hogares", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [
									["name" => "Validar Retail", "url" => "Principal/ValidacionRetailers/".$id_Perfil.""]
								]
				],
				["name" => "Reportes", "url" => "principal/inicio", "icon" => "nav-icon far fa-circle text-warning",
					'subMenu'=> [

									["name" => "Money Market"  , "url" => "Principal/ReporteMoneyMarket/".$id_Perfil.""],
								]
				],

			];
		}
		return $res;
	}
	public function menuPrincipal2()
    {
        $sql = "SELECT id, label, link, parent FROM menus ORDER BY parent, sort, label";
        $result = $this->ci->db->query($sql);
        $datas = $result->result_array();
        $menus = array(
                'items' => array(),
                'parents' => array()
        );
        foreach ($datas as $items) {
            // Create current menus item id into array
            $menus['items'][$items['id']] = $items;
            // Creates list of all items with children
            $menus['parents'][$items['parent']][] = $items['id'];
        }
		// Print all tree view menus
        echo $this->createTreeView(0, $menus);

    }

	public function createTreeView($parent, $menu) {
        $html = "";
		if (isset($menu['parents'][$parent]))
		{
			// $html .= "<ul class='tree'>";
            foreach ($menu['parents'][$parent] as $itemId) {
                if(!isset($menu['parents'][$itemId])) {
                    $html .= "<li><label for='subfolder2'> -1- <a href='".$menu['items'][$itemId]['link']."'>".$menu['items'][$itemId]['label']."</a></label> <input type='checkbox' name='subfolder2'/></li>";
                }
                if(isset($menu['parents'][$itemId])) {
                    $html .= "
                    <li class='treeview'><a href='".$menu['items'][$itemId]['link']."'><i class='fa fa-circle-o text-red'></i>".$menu['items'][$itemId]['label']."</a>";
                    $html .= $this->createTreeView($itemId, $menu);
                    $html .= "</li>";
                }
            }
            // $html .= "</ul>";
        }
        return $html;

    }

	public function listCss()
	{
		return $this->listCss;
	}

	public function setListCss($arrayCss)
	{
		$this->listCss = $arrayCss;
	}

	public function addEndListCss($arrayCss)
	{
		foreach ($arrayCss as $css) {
			array_push($this->listCss, $css);
		}
	}

	public function listJs()
	{
		return $this->listJs;
	}

	public function setListJsEnd($arrayJs)
	{
		$this->listJs = $arrayJs;
	}

	public function addJs($arrayJs)
	{
		if ( is_array($arrayJs) )
		{
			foreach ($arrayJs as $js) {
				array_push($this->listJs, $js);
			}
		} else
		{
			array_push($this->listJs, ["url"=>$arrayJs]);
		}
	}

	public function addEndListJs($arrayJs)
	{
		foreach ($arrayJs as $js) {
			array_push($this->listJs, $js);
		}
	}

	public function setTitlePage($title){
		$this->titlePage = $title;
		// $this->icono = '111'.base_url('/public/images/favicon.ico');
	}

	public function setDescriptionPage($descriptionPage)
	{
		$this->descriptionPage = $descriptionPage;
	}

}

/* End of file template.php */
/* Location: ./application/libraries/template.php */
<?php (defined('BASEPATH')) or exit('No direct script access allowed');

class Importar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('csv_import_m');
        // $this->load->library('csvimport');
        // $this->load->model('crear_menu_m');
        $this->load->model('auxiliar_m');
        date_default_timezone_set("America/Asuncion");
    }

    public function index()
    {
    $this->load->model('menu_m');

    $data['breadcrumb']  = $this->auxiliar_m->breadcrumb($this->router->class);
    $data['tbl_cliente_tipo']  = $this->auxiliar_m->traer_tabla(NULL, 'clientes_tipo');

    $this->load->view('html/Head');
    $this->load->view('html/Nav', array(
      'model_menu' => $this->load->model('menu_m'),
      'menus'     => $this->menu_m->menu()
    ));
    $this->load->view('html/Breadcrumb_v', $data);
    $this->load->view('section/Pagos_v', $data);
    $this->load->view('html/Footer');
    }

   
}

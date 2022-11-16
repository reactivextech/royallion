<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saldos_fija extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_m');
        $this->load->model('menu_m');
        $this->load->model('csv_import_m');
        $this->load->model('auxiliar_m');
        date_default_timezone_set("America/Asuncion");
    }

    public function index()
    {


        $data['listar_modulos'] = $this->menu_m->listar_modulos(0);
        //$data['breadcrumb'] = $this->auxiliar_m->breadcrumb($this->router->class);

        $this->load->view('html/Head3');
        $this->load->view('html/Nav2', array(
            'model_menu' => $this->load->model('menu_m'),
            'menus' => $this->menu_m->menu(),
            'totales' => $this->menu_m->datos_saldos($this->session->userdata('usuario_id_cliente'))
        ));
        // $this->load->view('html/Breadcrumb_v', $data);
        $this->load->view('section/Saldos_fija_v', $data);
        $this->load->view('html/Footer3');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *  Class Dashboard
 *
 *  Royal Lion Members
 *
 *  @package application/controllers/dashboard
 *  @author  @impulsetechve  
 */
class Dashboard extends CI_Controller
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


        $data['listar_modulos']  = $this->menu_m->listar_modulos(0);
        //$data['breadcrumb']  = $this->auxiliar_m->breadcrumb($this->router->class);
        // echo $this->session->userdata('usuario_id_cliente');
        // $t = $this->menu_m->datos_saldos($this->session->userdata('usuario_id_cliente'));
        // echo "<pre>";
        // var_dump($t);
        // die();
        $this->load->view('html/Head3');
        $this->load->view('html/Nav2', array(
            'model_menu' => $this->load->model('menu_m'),
            'menus' => $this->menu_m->menu(),
            'totales' => $this->menu_m->datos_saldos($this->session->userdata('usuario_id_cliente'))
        ));
        // $this->load->view('html/Breadcrumb_v', $data);
        $this->load->view('Dashboard_v', $data);
        $this->load->view('html/Footer3');
    }

    /*
    *   Insertar usuarios de prueba
    *
    */
    function primo($num)
    {
        $cont = 0;
        // Funcion que recorre todos los numero desde el 2 hasta el valor recibido
        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {
                # Si se puede dividir por algun numero mas de una vez, no es primo
                if (++$cont > 1)
                    return false;
            }
        }
        return true;
    }
}

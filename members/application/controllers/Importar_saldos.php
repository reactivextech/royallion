<?php (defined('BASEPATH')) or exit('No direct script access allowed');

class Importar_saldos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('csv_import_m');
        $this->load->library('csvimport');
        $this->load->model('crear_menu_m');
        $this->load->model('auxiliar_m');
        date_default_timezone_set("America/Asuncion");
    }

    public function index()
    {
        $this->load->model('menu_m');
        /* $this->load->view('csv_import'); */
        $data['breadcrumb']  = $this->auxiliar_m->breadcrumb($this->router->class);
        $data['tbl_cliente_tipo']  = $this->auxiliar_m->traer_tabla(NULL, 'clientes_tipo');
        $this->load->view('html/Head');
        $this->load->view('html/Nav', array(
            'model_menu' => $this->load->model('menu_m'),
            'menus' => $this->menu_m->menu()
        ));
        $this->load->view('html/Breadcrumb_v', $data);
        $this->load->view('section/Csv_import_v', $data);
        $this->load->view('html/Footer');
    }

    //TABLA SALDOS
    function load_data($id)
    {
        $result = $this->csv_import_m->select($id);
        $output = '
        <div>
        <table class="shadow-md">
            <thead>
                <tr>
                    <th scope="col">Símbolo</th>
                    <th scope="col">Precio de Compra</th>
                    <th scope="col">Precio de mercado</th>
                    <th scope="col">Disponible</th>
                    <th scope="col">Valor de cartera</th>
                </tr>
            </thead>
            <tbody>
    ';
        $count = 0;
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $count = $count + 1;
                $output .= '
                    <tr>
                        <td data-label="Símbolo">' . $row->simbolo . '</td>
                        <td data-label="Precio de Compra">' . $row->compra . '</td>
                        <td data-label="Precio de mercado">' . $row->mercado . '</td>
                        <td data-label="Disponible">' . $row->disponible . '</td>
                        <td data-label="Valor de cartera">' . $row->valor . '</td>
                    </tr>
                ';
            }
        } else {
            $output .= '
            <tr>
                <td colspan="5" align="center">No cuenta con ningún valor.</td>
            </tr>
            ';
        }
        $output .= '</tbody></table></div>';
        echo $output;
    }

    //TABLA SALDOS FIJA
    function load_data_fija($id)
    {
        $type = '2';
        $result = $this->csv_import_m->select_fija($id, $type);
        $output = '
        <div>
        <table class="shadow-md">
            <thead>
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Capital invertido</th>
                    <th scope="col">Intereses acumulados</th>
                    <th scope="col">Valor de cartera</th>
                </tr>
            </thead>
            <tbody>
    ';
        $count = 0;
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $count = $count + 1;
                $output .= '
                    <tr>
                        <td data-label="Empresa">' . $row->simbolo . '</td>
                        <td data-label="Capital invertido">' . $row->compra . '</td>
                        <td data-label="Intereses acumulados">' . $row->mercado . '</td>
                        <td data-label="Valor de cartera">' . $row->disponible . '</td>
                    </tr>
                ';
            }
        } else {
            $output .= '
            <tr>
                <td colspan="4" align="center">No cuenta con ningún valor.</td>
            </tr>
            ';
        }
        $output .= '</tbody></table></div>';
        echo $output;
    }

    //TABLA SALDOS VARIABLE
    function load_data_variable($id)
    {
        $type = '1';
        $result = $this->csv_import_m->select_fija($id, $type);
        $output = '
        <div>
        <table class="shadow-md">
            <thead>
                <tr>
                    <th scope="col">Símbolo</th>
                    <th scope="col">Precio de Compra</th>
                    <th scope="col">Precio de mercado</th>
                    <th scope="col">Disponible</th>
                    <th scope="col">Valor de cartera</th>
                </tr>
            </thead>
            <tbody>
    ';
        $count = 0;
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $count = $count + 1;
                $output .= '
                    <tr>
                        <td data-label="Símbolo">' . $row->simbolo . '</td>
                        <td data-label="Precio de Compra">' . $row->compra . '</td>
                        <td data-label="Precio de mercado">' . $row->mercado . '</td>
                        <td data-label="Disponible">' . $row->disponible . '</td>
                        <td data-label="Valor de cartera">' . $row->valor . '</td>
                    </tr>
                ';
            }
        } else {
            $output .= '
            <tr>
                <td colspan="5" align="center">No cuenta con ningún valor.</td>
            </tr>
            ';
        }
        $output .= '</tbody></table></div>';
        echo $output;
    }

    function import()
    {
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach ($file_data as $row) {
            $data[] = array(
                'cliente' => $row["Cliente"],
                'Tipo' => $row["Tipo"],
                'simbolo' => $row["Simbolo"],
                'compra'  => $row["Compra"],
                'mercado'   => $row["Mercado"],
                'disponible'   => $row["Disponible"],
                'valor'   => $row["Valor"]
            );
        }
        $this->csv_import_m->drop();
        $this->csv_import_m->insert($data);
    }


    // TABLA TOTALES
    function load_data_total($id)
    {
        $result = $this->csv_import_m->select_total($id);
        $output = '
        <div>
        <table class="shadow-md">
            <thead>
                <tr>
                    <th scope="col">Total</th>
                    <th scope="col">Total Invertido</th>
                    <th scope="col">Utilidad</th>
                    <th scope="col">Tasa de Cambio</th>
                    <th scope="col">Fecha Activa</th>
                    <th scope="col">Rendimiento</th>
                </tr>
            </thead>
            <tbody>
    ';
        $count = 0;
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $count = $count + 1;
                $output .= '
                    <tr>
                        <td data-label="Total">' . $row->total . '</td>
                        <td data-label="Total Invertido">' . $row->invertido . '</td>
                        <td data-label="Utilidad">' . $row->utilidad . '</td>
                        <td data-label="Tasa de Cambio">' . $row->tasa . '</td>
                        <td data-label="Fecha Activa">' . $row->fecha . '</td>
                        <td data-label="Rendimiento">' . $row->rendimiento . '</td>
                    </tr>
                ';
            }
        } else {
            $output .= '
            <tr>
                <td colspan="6" align="center">No cuenta con ningún valor.</td>
            </tr>
            ';
        }
        $output .= '</tbody></table></div>';
        echo $output;
    }

    function import_total()
    {
        $file_data2 = $this->csvimport->get_array($_FILES["csv_file_total"]["tmp_name"]);
        foreach ($file_data2 as $row) {
            $data[] = array(
                'vacio' => $row["0"],
                'cliente' => $row["Cliente"],
                'total' => $row["Total"],
                'invertido'  => $row["Invertido"],
                'utilidad'   => $row["Utilidad"],
                'tasa'   => $row["Tasa"],
                'fecha'   => $row["Fecha"],
                'rendimiento'   => $row["Rendimiento"]
            );
        }

        //var_dump($data_total);

        $this->csv_import_m->drop_total();
        $this->csv_import_m->insert_total($data);
    }
}

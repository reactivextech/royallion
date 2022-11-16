<?php
class Csv_import_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // TABLA SALDOS
    function select($id)
    {
        $this->db->where('cliente', $id);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('saldos_user');
        return $query;
    }

    // TABLA SALDOS FIJA
    function select_fija($id, $type)
    {
        $this->db->where('cliente', $id);
        $this->db->where('tipo', $type);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('saldos_user');
        return $query;
    }

    function insert($data)
    {
        $this->db->insert_batch('saldos_user', $data);
    }
    function drop()
    {
        $this->db->empty_table('saldos_user');
    }

    //TABLA TOTALES
    function select_total($id)
    {
        $this->db->where('cliente', $id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('saldos_totales_user');
        return $query;
    }
    function insert_total($data)
    {
        $this->db->insert_batch('saldos_totales_user', $data);
    }
    function drop_total()
    {
        $this->db->empty_table('saldos_totales_user');
    }
}

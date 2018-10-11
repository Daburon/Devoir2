<?php

class Model_Conferences extends CI_Model
{
    public function getAllConferences($idConference)
    {
        $sql = $this->db->select('IDCONFERENCE,TITRE,NBVOTES')->from('conference as c');
        $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

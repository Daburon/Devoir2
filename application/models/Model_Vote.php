<?php

class Model_Vote extends CI_Model
{
    public function ValiderVote($tabIDCONFERENCE,$tabNBVOTES)
    {
        $tabIDCONFERENCE = explode(',',$tabIDCONFERENCE);
        $tabNBVOTES = explode(',',$tabNBVOTES);

        for($i = 0 ; $i < count($tabIDCONFERENCE); $i++)
        {
            $sql = $this->db->query("update conference set NBVOTES =".$tabNBVOTES[$i]." where IDCONFERENCE='".$tabIDCONFERENCE[$i]."'");
        }
    }
}

?>
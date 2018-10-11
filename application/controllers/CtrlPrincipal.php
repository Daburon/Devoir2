<?php
class CtrlPrincipal extends CI_Controller
{

    public function index()
    {
    $data['lesConferences'] = $this->Model_Conferences->getAllConferences();
    $this->load->view('AfficherConference', $data);
    }

    function ValiderVote()
    {
        $this->load->model('Model_Vote');
        $this->Model_Inscription->ValiderVote($_GET['tab1'],$_GET['tab2']);
    }

}
?>
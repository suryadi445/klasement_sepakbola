<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->model('');
    }
    public function index()
    {
        // liga italia
        $data['result'] = call_curl('https://api-football-standings.azharimm.site/leagues/ita.1/standings?season=2021&sort=asc');

        $data['result']  = json_decode($data['result'], true);

        $data['italia']                 = $data['result']['data']['abbreviation']; //nama liga
        $data['musim']                  = $data['result']['data']['seasonDisplay']; //musim
        $data['klasement_italia']       = $data['result']['data']['standings']; //klasement
        $data['logo']                   = $data['result']['data']['standings'][0]['team']['logos'][0]['href']; //logo
        $data['grup_eropa']             = $data['result']['data']['standings'][0]['note']['description']; //grup eropa
        $data['warna_eropa']            = $data['result']['data']['standings'][0]['note']['color']; //warna eropa

        // print_r($data['klasement_italia']);
        // $tes = $data['klasement_italia'];
        // $i++;
        // foreach ($tes as $key) {
        //     var_dump($key);
        // }
        // }


        // inggris
        // $data['result'] = call_curl('https://api-football-standings.azharimm.site/leagues/eng.1/standings?season=2021&sort=asc');

        // $data['result']  = json_decode($data['result'], true);

        // $data['inggris']                = $data['result']['data']['name'];
        // $data['klasement_inggris']      = $data['result']['data']['standings'];


        // spanyol
        // $data['result'] = call_curl('https://api-football-standings.azharimm.site/leagues/esp.1/standings?season=2021&sort=asc');

        // $data['result']  = json_decode($data['result'], true);

        // // var_dump($data['result']);
        // // die;
        // $data['spanyol']                = $data['result']['data']['abbreviation'];
        // $data['klasement_spanyol']      = $data['result']['data']['standings'];

        $data['judul']    = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {

        $data['italia']          = $this->italia();
        $data['inggris']         = $this->inggris();
        $data['spanyol']         = $this->spanyol();

        $data['ita']         = $data['italia'][0]['nama_liga'];
        $data['musim']       = $data['italia'][0]['musim'];
        $data['eng']         = $data['inggris'][0]['nama_liga'];
        $data['esp']         = $data['spanyol'][0]['nama_liga'];

        $data['judul']    = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function italia()
    {
        $result                 = call_curl('https://api-football-standings.azharimm.site/leagues/ita.1/standings?season=2021&sort=asc');
        $result                 = json_decode($result, true);

        $array = [
            "nama_liga" => $result['data']['name'],
            "musim"     => $result['data']['seasonDisplay'],
            "klasement" => $result['data']['standings']
        ];

        foreach ($array['klasement'] as $value) {
            $data[] = [
                "nama_liga"     => $result['data']['name'],
                "musim"         => $array['musim'],
                "team"          => $value['team']['name'],
                "logo"          => $value['team']['logos'][0]['href'],
                "play"          => $value['stats'][3]['displayValue'],
                "point"         => $value['stats'][6]['displayValue'],
                "GD"            => $value['stats'][9]['displayValue']
            ];
        }

        return $data;
    }

    public function inggris()
    {
        $result                 = call_curl('https://api-football-standings.azharimm.site/leagues/eng.1/standings?season=2021&sort=asc');
        $result                 = json_decode($result, true);

        $array = [
            "nama_liga" => $result['data']['name'],
            "musim"     => $result['data']['seasonDisplay'],
            "klasement" => $result['data']['standings']
        ];

        foreach ($array['klasement'] as $value) {
            $data[] = [
                "nama_liga"     => $result['data']['name'],
                "musim"         => $array['musim'],
                "team"          => $value['team']['name'],
                "logo"          => $value['team']['logos'][0]['href'],
                "play"          => $value['stats'][3]['displayValue'],
                "point"         => $value['stats'][6]['displayValue'],
                "GD"            => $value['stats'][9]['displayValue']
            ];
        }

        return $data;
    }

    public function spanyol()
    {
        $result                 = call_curl('https://api-football-standings.azharimm.site/leagues/esp.1/standings?season=2021&sort=asc');
        $result                 = json_decode($result, true);

        $array = [
            "nama_liga" => $result['data']['name'],
            "musim"     => $result['data']['seasonDisplay'],
            "klasement" => $result['data']['standings']
        ];

        foreach ($array['klasement'] as $value) {
            $data[] = [
                "nama_liga"     => $result['data']['name'],
                "musim"         => $array['musim'],
                "team"          => $value['team']['name'],
                "logo"          => $value['team']['logos'][0]['href'],
                "play"          => $value['stats'][3]['displayValue'],
                "point"         => $value['stats'][6]['displayValue'],
                "GD"            => $value['stats'][9]['displayValue']
            ];
        }

        return $data;
    }
}

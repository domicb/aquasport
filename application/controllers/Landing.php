<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {

    public function index() {
        //$this->output->cache(1);
        $this->load->helper('url');
        $this->load->view('index.html');
    }

    public function previ() {
        $lugar = $_POST['local'];
        $this->load->model('Articulos_model');
        $salida = $this->Articulos_model->tiempo($lugar);
        echo json_encode($salida);
    }

    
    public function costas()
    {
        $lugar = $_POST['sitio'];       
        $salida = $this->Articulos_model->costas($lugar);
        echo json_encode($salida);
    }
/**
 * funcion que nos devuelve la prediccion en texto
 */
    public function aemet() {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://opendata.aemet.es/opendata/api/prediccion/maritima/costera/costa/42?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhcXVhc3BvcnQuaW5mb3JtQGdtYWlsLmNvbSIsImp0aSI6ImEyNmEwM2ZkLTc3YmUtNGFkMS1iYThkLThjYTIzODRlMjE1MyIsImV4cCI6MTQ4Nzg0OTU0NCwiaXNzIjoiQUVNRVQiLCJpYXQiOjE0ODAwNzM1NDQsInVzZXJJZCI6ImEyNmEwM2ZkLTc3YmUtNGFkMS1iYThkLThjYTIzODRlMjE1MyIsInJvbGUiOiIifQ.HummA5axxrVmaqJJc-0NGDQlCZFI69J-8FBlDP1dftE",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_SSL_VERIFYPEER => "false",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
    /**
     * funcion que nos devuelve la prediccion en grafica
     */
    public function aemet2() {

        $curl = curl_init();
        header('Content-Type: image/png');
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://opendata.aemet.es/opendata/api/mapasygraficos/analisis?api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhcXVhc3BvcnQuaW5mb3JtQGdtYWlsLmNvbSIsImp0aSI6ImEyNmEwM2ZkLTc3YmUtNGFkMS1iYThkLThjYTIzODRlMjE1MyIsImV4cCI6MTQ4Nzg0OTU0NCwiaXNzIjoiQUVNRVQiLCJpYXQiOjE0ODAwNzM1NDQsInVzZXJJZCI6ImEyNmEwM2ZkLTc3YmUtNGFkMS1iYThkLThjYTIzODRlMjE1MyIsInJvbGUiOiIifQ.HummA5axxrVmaqJJc-0NGDQlCZFI69J-8FBlDP1dftE",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_SSL_VERIFYPEER => "false",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

    }

}

<?php

class Register extends Controller
{

    public function index()
    {
        $data['judul'] = 'Register';
        $data['kabupaten'] = $this->model('Kabupaten_model')->getAllKabupaten();
        $data['kecamatan'] = $this->model('Kecamatan_model')->getAllKecamatan();
        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer');
    }

    public function alamat()
    {
        if ($this->model('Alamat_model')->addAlamat($_POST) > 0) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }
    public function register()
    {
        $alamatId = $this->model('Alamat_model')->addAlamat($_POST);
        if ($alamatId > 0) {
            $_POST['alamat_id'] = $alamatId;

            if ($this->model('Individuals_model')->addIndividuals($_POST) > 0) {
                header('Location: ' . BASEURL . '/login');
                exit;
            }
        }
    }
}

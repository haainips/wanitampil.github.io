<?php

class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('katalog_model');
        $this->load->library('form_validation');
    }

    //Method Login
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $data['judul'] = 'Login';

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('dashboard/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        if($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('dashboard/home/');
                } else {
                    redirect('dashboard/user/');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('dashboard');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
            redirect('dashboard');
        }
    }





    // Method Registrasi
    public function registrasi() 
    {
        $data['judul'] = 'Register';


        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email already used!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',['matches' => 'Password dont match!',
        'min_length' => 'Password too short!'
    ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false)
        {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('dashboard/registrasi', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'gambar' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Dibuat!</div>');
            redirect('dashboard');
        }
    }


    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->unset_userdata('message', '<div class="alert alert-success" role="alert">Berhasil Logged Out!</div>');

        redirect('dashboard');
    }



    public function home()
    {
        $data['judul'] = 'Katalog Produk';
        $data['katalog'] = $this->katalog_model->getAllProduk();
        if( $this->input->post('keyword')) {
            $data['katalog'] = $this->katalog_model->cariProduk();
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/home', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Produk';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if($this->form_validation->run() == false){
                $this->load->view('templates/header', $data);
                $this->load->view('dashboard/tambah', $data);           
                $this->load->view('templates/footer');
        } else {
                $this->katalog_model->tambahDataProduk();
                $this->session->set_flashdata('flash','Ditambahkan');
                redirect('dashboard/home');
            }
    }
    
    public function hapus($id)
    {
        $this->katalog_model->hapusDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dashboard/home');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Produk';
        $data['katalog'] = $this->katalog_model->getKatalogById($id);
        $data['kategori'] = ['Hoodie', 'T Shirt', 'Short Pants', 'Socks'];


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->katalog_model->ubahDataProduk();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dashboard/home');
        }
    }

    public function user() {
        $data['katalog'] = $this->katalog_model->getAllProduk();
        $this->load->view('dashboard/user', $data);
    }
}


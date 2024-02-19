<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Lib_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login($username, $password){
        //get data dari model
        $cek = $this->ci->m_auth->login_user($username, $password);
        if ($cek){
            $id             = $cek->id;
            $nama           = $cek->nama;
            $username       = $cek->username;
            $role           = $cek->role;
            $foto_profil    = $cek->foto_profil;
            $Id_Divisi      = $cek->Id_Divisi;
            $Id_Departemen  = $cek->Id_Departemen;
            $email          = $cek->email;
            $No_NPK         = $cek->No_NPK;
            $status         = $cek->status;

            //session
            $this->ci->session->set_userdata('id', $id);
            $this->ci->session->set_userdata('nama', $nama);
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('role', $role);
            $this->ci->session->set_userdata('foto_profil', $foto_profil);
            $this->ci->session->set_userdata('Id_Divisi', $Id_Divisi);
            $this->ci->session->set_userdata('Id_Divisi', $Id_Departemen);
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('No_NPK', $No_NPK);
            $this->ci->session->set_userdata('status', $status);

            //cek role
            if($status == 1){                     
                if($role == '1'){
                    redirect('Dashboard_direksi');
                }else if($role == '2'){
                    redirect('Dashboard_kepala_cabang');
                }else if($role == '3'){
                    redirect('Dashboard_admin');
                }else if($role == '4'){
                    redirect('Home');
                }
            }
        }else{
            $this->ci->session->set_flashdata('pesan_error', 'Username atau Password Anda Salah!');
            redirect('auth');
        }
    }

    public function logout()
    {
        //hapus session
        $this->ci->session->unset_userdata('id');
        $this->ci->session->unset_userdata('nama');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('role');
        $this->ci->session->unset_userdata('foto_profil');
        $this->ci->session->unset_userdata('Id_Divisi');
        $this->ci->session->unset_userdata('Id_Departemen');
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('No_NPK');
        $this->ci->session->unset_userdata('status');
        $this->ci->session->set_flashdata('pesan_success', 'Anda Berhasil Logout');
        redirect('auth');
    }

    //jika belum ada session yang login
    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('username') == "" ) {
            $this->ci->session->set_flashdata('pesan_error', 'Anda Belum Login');
            redirect('auth');
        }
    }

    //jika yang akses bukan direksi
    public function proteksi_direksi()
    {
        if ($this->ci->session->userdata('role') != 1 ) {
            $this->ci->session->set_flashdata('pesan_error', 'Silahkan Login Sebagai Direksi');
            redirect('auth');
        }
    }

    //jika yang akses bukan kepala cabang
    public function proteksi_kepala_cabang()
    {
        if ($this->ci->session->userdata('role') != 2 ) {
            $this->ci->session->set_flashdata('pesan_error', 'Silahkan Login Sebagai Kepala Cabang');
            redirect('auth');
        }
    }

    //jika yang akses bukan admin
    public function proteksi_admin()
    {
        if ($this->ci->session->userdata('role') != 3 ) {
            $this->ci->session->set_flashdata('pesan_error', 'Silahkan Login Sebagai Admin');
            redirect('auth');
        }
    }

    //jika yang akses bukan anggota
    public function proteksi_anggota()
    {
        if ($this->ci->session->userdata('role') != 4 ) {
            $this->ci->session->set_flashdata('pesan_error', 'Silahkan Login Sebagai Anggota');
            redirect('auth');
        }
    }
}

/* End of file Lib_login.php */

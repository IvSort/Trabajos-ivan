<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        helper(['form']);
        echo view('login');
    }
/*
    public function loginAuth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $model = new UserModel();
        $data = $model->where('username', $username)->first();
        
        if ($data) {
            $contraseña = $model->where('password', $password)->first();
        
            if ($contraseña) {
                if ($password === $contraseña['password']) {
                    $ses_data = [
                        'id' => $data['id'],
                        'username' => $data['username'],
                        'logged_in' => TRUE
                    ];
                    $session = session();
                    $session->set($ses_data);
                    $session->setFlashdata('msg', 'Credenciales correctas.');
                    return redirect()->to('/pantalla');

                } else {
                    // Contraseña incorrecta
                    $session = session();
                    $session->setFlashdata('msg', 'Contraseña incorrecta.');
                    return redirect()->to('/login');
                }
            } else {
                $session = session();
                $session->setFlashdata('msg', 'Contraseña incorrecta.');
                return redirect()->to('/login');
            }
        } else {
            // Usuario no encontrado
            $session = session();
            $session->setFlashdata('msg', 'Usuario incorrecto.');
            return redirect()->to('/login');
        }
        
    }
*/
public function loginAuth()
{
    $session = session();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    $userModel = new UserModel();

    $query = $userModel->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $user = $query->getRowArray();

    if ($user) {
        $ses_data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'logged_in' => TRUE
        ];
        $session->set($ses_data);
        $session->setFlashdata('msg', 'Acceso concedido.');
        return redirect()->to('/pantalla');
    } else {
        $session->setFlashdata('msg', 'Credenciales inválidas.');
        return redirect()->to('/login');
    }
}


    public function index()
    {
        $model = new \App\Models\UserModel();
        $data['users'] = $model->findAll();
        return view('pantalla', $data);
    }

    public function editar($id)
   {
    $model = new UserModel();
    $data['users'] = $model->find($id);

    if (!$data['users']) {
        return redirect()->to('/usuarios')->with('error', 'Usuario no encontrado');
    }
    return view('pantalla', $data);
   }
   
   public function actualizar($id)
  {
    $model = new UserModel();

    $model->update($id, [
        'username' => $this->request->getPost('username')
    ]);

    return redirect()->to('/usuarios')->with('success', 'Usuario actualizado correctamente');
  }
    public function eliminar($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/usuarios')->with('success', 'Usuario eliminado correctamente');

   }

   public function register()
   {
       return view('register');
   }

   public function save()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nombre'    => 'required|min_length[3]',
            'email'     => 'required|valid_email',
            'usuario'   => 'required|min_length[4]',
            'password'  => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new \App\Models\UserModel();
        $model->save([
            'full_name' => $this->request->getPost('nombre'),
            'email'     => $this->request->getPost('email'),
            'username'  => $this->request->getPost('usuario'),
            'password'  => $this->request->getPost('password'),
        ]);

        return redirect()->to('/login')->with('msg', 'Usuario registrado exitosamente');
    }

}
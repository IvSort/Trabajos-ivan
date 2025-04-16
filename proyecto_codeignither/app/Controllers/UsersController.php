<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UsersController extends Controller
{

    public function index()
    {
        $model = new \App\Models\UserModel();
        $data['users'] = $model->findAll();
        return view('pantalla', $data);
    }

    public function editar($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
    
        if (!$data['user']) {
            return redirect()->to('pantalla')->with('error', 'Usuario no encontrado');
        }        
    
        return view('edituser', $data);
    }
    
   
    public function actualizar()
    {
        $request = \Config\Services::request();
        $model = new UserModel();
    
        $userId = $request->getPost('user_id');
    
        // Validación
        $validationRules = [
            'user_id' => 'required|integer',
            'nombre' => 'required|min_length[3]',
            'username' => 'required|min_length[3]|is_unique[users.username,id,{user_id}]',
            'email' => 'required|valid_email|is_unique[users.email,id,{user_id}]',
        ];
    
        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('msg', 'Error en la validación');
        }
    
        $data = [
            'full_name' => $request->getPost('nombre'),
            'username' => $request->getPost('username'),
            'email' => $request->getPost('email'),
        ];
    
        $model->update($userId, $data);
    
        return redirect()->back()->with('msg', 'Datos actualizados correctamente');
    }

    public function edit_password()
    {
        $request = \Config\Services::request();
        $model = new UserModel();

        $userId = $request->getPost('user_id');
        $currentPassword = $request->getPost('current_password');
        $newPassword = $request->getPost('new_password');
        $confirmPassword = $request->getPost('confirm_password');

        // Obtener usuario
        $user = $model->find($userId);

        if (!$user || $currentPassword !== $user['password']) {
            return redirect()->back()->with('msg', 'La contraseña actual es incorrecta');
        }           

        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('msg', 'La nueva contraseña no coincide con la confirmación');
        }

        if (strlen($newPassword) < 8 || !preg_match('/[a-zA-Z]/', $newPassword) || !preg_match('/[0-9]/', $newPassword)) {
            return redirect()->back()->with('msg', 'La contraseña debe tener al menos 8 caracteres, letras y números');
        }

        $model->update($userId, [
            'password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ]);

        return redirect()->back()->with('msg', 'Contraseña actualizada correctamente');
    }

    
  
    public function eliminar($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
    
        return redirect()->to(base_url('pantalla'))->with('success', 'Usuario eliminado con éxito.');
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
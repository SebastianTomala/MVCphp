<?php

class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    public function index() {
        if(!isLoggedIn()) {
            redirect('users/login');
        }
        $this->info($_SESSION['user_id']);
    }
    public function register() {
        // Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            // Validate email
            if(empty($data['email'])) {
                $data['email_err'] = 'enter email';
            }else {
                // Check email
                if($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'email is already taken';
                }
            }
            if(empty($data['name'])) {
                $data['name_err'] = 'enter name';
            }
            if(empty($data['password'])) {
                $data['password_err'] = 'enter pass';
            }elseif(strlen($data['password']) < 6) {
                $data['password_err'] = 'at least 6 char';
            }
            if(empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'confirm pass is empty';
            }else {
                if($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'pass must be the same';
                }
            }

            // Make sure errors are empty
            if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // Validate
                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
               
                
                // Register user
                if($this->userModel->register($data)) {
                    flash('register_success', 'You are registered and can log in');
                    redirect('users/login');
                }else {
                    die('something went wrong');
                }
            }else {
                $this->view('users/register', $data);
            }
        } else {
            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }
    public function login() {
        // Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];
            // Validate email
            if(empty($data['email'])) {
                $data['email_err'] = 'enter email';
            }
            if(empty($data['password'])) {
                $data['password_err'] = 'enter pass';
            }
            if($this->userModel->findUserByEmail($data['email'])) {

            }else {
                $data['email_err'] = 'no user found';
            }
            // Make sure errors are empty
            if(empty($data['email_err'])  && empty($data['password_err'])) {
                
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser) {
                    // create session
                    $this->createUserSession($loggedInUser);
                }else {
                    $data['password_err'] = 'Password incorrect';

                    $this->view('users/login', $data);
                }
            }else {
                $this->view('users/login', $data);
            }

        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }
    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }
    public function delete($id) {

    }
    public function info($id) {
        $user = $this->userModel->getUserById($id);
        $data = [
            'user_name' => $user->name,
            'user_email' => $user->email,
            'user_id'       => $user->id
        ];
        $this->view('users/info', $data);
    }
    public function gallery($id) {
        $user = $this->userModel->getUserById($id);
        $data = [
            'user_name'     => $user->name,
            'user_email'    => $user->email,
            'user_id'       => $user->id
        ];
        $this->view('users/gallery', $data);
    }
    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        redirect('posts');
    }
}
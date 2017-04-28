<?php

class UsersController extends BaseController
{
    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }

    public function getById()
    {

    }

    public function edit(int $id)
    {
        if($this->isPost)
        {
            $username = $_POST['username'];
            if (strlen($username) < 2)
            {
                $this->setValidationError("username", "Username cannot be empty!");
            }
            $full_name = $_POST['full_name'];
            if (strlen($full_name) < 2)
            {
                $this->setValidationError("full_name", "Full name cannot be empty!");
            }

            if ($this->formValid())
            {
                if ($this->model->edit($id, $username, $full_name))
                {
                    $this->addInfoMessage("User edited.");
                }
                else
                {
                    $this->addErrorMessage("Error: cannot edit user.");
                }
                $this->redirect('users');
            }
        }

        $user = $this->model->getById($id);
        if (! $user)
        {
            $this->addErrorMessage("Error: user does not exist.");
            $this->redirect("users");
        }
        $this->user= $user;
    }

    public function register()
    {
		if ($this->isPost)
		{
		    $username = $_POST['username'];
		    if(strlen($username) < 2 || strlen($username) > 50)
            {
                $this->setValidationError("username", "Invalid username!");
            }
            $password = $_POST['password'];

		    if (strlen($password) < 2 || strlen($password) > 50)
            {
                $this->setValidationError("password", "Invalid password!");
            }

            $passwordRepeat = $_POST['password-repeat'];
            if ($password != $passwordRepeat)
            {
                $this->setValidationError("password-repeat", "The two passwords did not match!");
            }

            $full_name = $_POST['full_name'];
		    if (strlen($full_name) > 200)
            {
                $this->setValidationError("full_name", "Invalid full name!");
            }

            if ($this->formValid())
            {
                $userId = $this->model->register($username, $password, $full_name);
                if ($userId)
                {
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
                    $this->addSuccessMessage("Registration successful.");
                    $this->redirect("posts");
                }
                else
                {
                    $this->addErrorMessage("Error: user registration failed");
                }
            }
        }
    }

    public function login()
    {
		if ($this->isPost)
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $loggedUserId = $this->model->login($username, $password);
            if ($loggedUserId)
            {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $loggedUserId;
                $this->addSuccessMessage("Login successful.");
                return $this->redirect("posts");
            }
            else
            {
                $this->addErrorMessage("Error: login failed!");
            }
        }
    }

    public function logout()
    {
		session_destroy();
		$this->addInfoMessage("Logout successful");
		$this->redirect("");
    }
}

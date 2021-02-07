<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService
{
    private SecurityDAO $secDAO;
    
    public function __construct()
    {
        $this->secDAO = new SecurityDAO();
    }
    
    public function login(UserModel $user)
    {
        return $this->secDAO->DoesUserExist($user);
    }
}


<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\LoginInterface;
use App\Interfaces\Admin\LoginServiceInterface;


class LoginServices implements LoginServiceInterface
{
    private $LoginInterface;

    public function __construct(LoginInterface $LoginInterface) 
    {
        $this->LoginInterface = $LoginInterface;
    }

    public function login($request)
    {
        return $this->LoginInterface->login($request);
    }

    
}
?>
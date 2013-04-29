<?php

namespace Ens\JobeetBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

class User implements UserInterface
{
    private $id;
    private $username;
    private $password;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }
    
    public function getSalt()
    {
        return null;
    }
    
    public function eraseCredentials()
    {
    }
    
    public function equals(UserInterface $user)
    {
        return $user->getUsername() == $this->getUsername();
    }
}

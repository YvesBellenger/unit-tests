<?php

namespace App;

class User
{
     /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var int
     */
    private $age;

    /**
     * @param $email
     * @param $firstname
     * @param $lastname
     * @param $age
     * @return User
     */
    public static function create($email, $firstname, $lastname, $age)
    {
        return (new self)
            ->setEmail($email)
            ->setFirstname($lastname)
            ->setLastname($lastname)
            ->setAge($age)
        ;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return (!empty($this->getEmail()) 
            && !empty($this->getFirstname()) 
            && !empty($this->getLastname()) 
            && !empty($this->getAge()))
            && $this->getAge() >= 13
        ;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->old;
    }

    /**
     * @param int $old
     * @return User
     */
    public function setAge($old)
    {
        $this->old = $old;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

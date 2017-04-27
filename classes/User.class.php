<?php

/**
 * Created by PhpStorm.
 * User: senne
 * Date: 10/04/2017
 * Time: 19:40
 */
class User
{
    private $firstname;
    private $email;
    private $password;



    public function createUser(){
        $conn = Db::getInstance();

        $stmt = $conn->prepare("INSERT INTO users (email,password) VALUES (:email,:password)");
        $stmt->bindParam(':email', $this->getEmail());
        $stmt->bindParam(':password', $this->getPassword());
        return $stmt->execute();
    }

    public function getByEmail(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * from users where email = :email");
        $statement->bindParam(':email', $this->getEmail());
        $statement->execute();
        return $statement->fetch();
    }
    //test logingegevens weergeven start
    public function saveId(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT id from users where email = :email");
        $statement->bindValue(':email', $this->getEmail(), $conn::PARAM_STR);
        $statement->execute();

        $res = $statement->fetch();
        $userid = $res['id'];
        session_start();
        $_SESSION['userID'] = $userid;
        header('Location: homepage.php');
    }
    public function getUserData($userid){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT id from users where email = :userid");
        $statement->bindValue(':userid', $userid);
        $statement->execute();
        $res = $statement->fetch(PDO::FETCH_ASSOC);

        if ($res){
            $this->setEmail($res['email']);
            $this->setFirstname($res['firstname']);
            $this->setPassword($res['password']);
        }else{
            throw new Exception("oeps er liep iets mis");
        }
    }
    //test logingegevens weergeven einde
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
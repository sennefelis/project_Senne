<?php
    class gebruiker{
        private $m_sFirstname;
        private $m_sLastname;
        private $m_sUsername;
        private $m_sPassword;
        private $m_semail;

        public function __set($p_sProporty,$p_vValue){
            switch ($p_sProporty){
                case "Firstname":
                    $this->m_sFirstname = $p_vValue;
                break;

                case "Lastname":
                    $this->m_sLastname  = $p_vValue;
                break;

                case "Username":
                    $this->m_sUsername  = $p_vValue;
                break;

                case "Password":
                    $this->m_sPassword  = $p_vValue;
                break;

                case "Email":
                   $this->m_sPassword  = $p_vValue;
                break;
            }
        }

        public function __get($p_sProporty){
            switch ($p_sProporty)
            {
                case "Firstname":
                    return $this->m_sFirstname;
                    break;
                case "Lastname":
                    return $this->m_sLastname;
                    break;
                case "Username":
                    return $this->m_sUsername;
                    break;
                case "Password":
                    return $this->m_sPassword;
                    break;
                case "Email":
                    return $this->m_sEmail;
                    break;
            }
        }

        public function Save(){

            $conn= new PDO("mysql:host=localhost;dbname=phpopdracht","root","");

            //query schrijven
            $statement = $conn->prepare("INSERT INTO Gebruikers (Firstname,Lastname,Username,Password,Email) VALUES (:Firstname,:Lastname,:Username,:Password,:Email)");
            $statement->bindValue(":Firstname",$this->m_sFirstname);
            $statement->bindValue(":Lastname",$this->m_sLastname);
            $statement->bindValue(":Username",$this->m_iAge);
            $statement->bindValue(":Password",$this->m_sCity);
            $statement->bindValue(":Email",$this->m_sRichting);


           
if ($res != false) {


        session_start();
        $_SESSION['email'] = $email;
        header('Location: login.php');

    } else {

        header('Location: registratie.php');

    }

        }




    }
?>



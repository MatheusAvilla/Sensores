<?php>
    class Dbs {
        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $charset;

        protected function connect() {
            $this -> servername = "localhost";
            $this -> username = "estagio";
            $this -> password = "estagio";
            $this -> dbname = "estagio";
            $this -> charset = "utf-8mb4";

            try {
                $dsn = "mysqli:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch (PDOException $e) {
                echo "A conexão falhou: ". $e->getMessage();
            }
        }
    }
<?>

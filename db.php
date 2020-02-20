<?php
    class Database{
        private $dsn="mysql:host=localhost;dbname=php_pdo";
        private $user='root';
        private $pass='';
        public $conn;

        public function __construct(){
            try{
                $this->conn=new PDO($this->dsn,$this->user,$this->pass );
                // echo "Successfully connected";
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function insert($fname,$lname,$email,$phone){
            $sql="INSERT into users(first_name,last_name,email,phone) VALUES(:fname,:lname,:email,:phone)";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute(['fname'=>$fname,'lname'=>$lname,'email'=>$email,"phone"=>$phone]);
            return true;
        }

        public function read(){
            $data=[];
            $sql="SELECT * FROM users";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                $data[]=$row;
            }
            return $data;
        }

        public function selectUser($id){
            $sql="SELECT * FROM users WHERE id=:id";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);
            $result=$stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function update($id,$fname,$lname,$email,$phone){
            $sql="UPDATE users SET first_name=:fname, last_name=:lname, email=:email, phone=:phone WHERE id=:id";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute(['fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone,'id'=>$id]);
            return true;
        }

        public function deleteUser($id){
            $sql="DELETE FROM users WHERE id=:id";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute(['id'=>$id]);
            return true;
        }

        public function totalRow(){
            $sql="SELECT * FROM users";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            $t_rows=$stmt->rowCount();
            return $t_rows;
        }


    }

    // $db=new Database();
    // print_r($db->read());
    // echo $db->totalRow();
?>
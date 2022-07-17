<?php

class Message
{
    private $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function addMessage($name, $email, $message)
    {
        $sql = "Insert into guest_book (dtime, name, email, body) values (:dtime, :name, :email, :body)";
        $dtime = date('Y-m-d H:i:s');
        $statement = $this->db->prepare($sql);

        $statement->bindParam(":dtime", $dtime);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":body", $message);
        $statement->execute();
    }

    public function getMessage()
    {
        $sql = "Select * from guest_book order by id desc limit 5";
        $statement = $this->db->prepare($sql);

        $statement->execute();
        $messages = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $messages;
    }
}

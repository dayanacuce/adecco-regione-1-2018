<?php

class TableRows extends RecursiveIteratorIterator {
    function __construct($it, $begin='', $end='', $id_key='id') {
        parent::__construct($it, self::LEAVES_ONLY);
				$this->begin = $begin;
				$this->end = $end;
        $this->id_key = $id_key;
        $this->id = null;
    }

    function current() {
      if(parent::key() == $this->id_key) {
          $this->id = parent::current();
      }
      return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>".$this->begin;
    }

    function endChildren() {
        echo str_replace(":$this->id_key", $this->id,$this->end) . "</tr>\n";
    }
}

class DbUtils{

  function DbUtils(){}

  function getConnection(){
    $servername = "adecco.local";
    $username = "root";
    $password = "password";    
    $dbname = "adecco-1-2018";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$conn -> exec("SET CHARACTER SET utf8mb4");
        return $conn;
    }
    catch(PDOException $e) {
        return "Error: " . $e->getMessage();
    }
  }
}

?>

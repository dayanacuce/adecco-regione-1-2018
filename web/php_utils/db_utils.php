<?php

class TableRows extends RecursiveIteratorIterator {
    function __construct($it, $begin='', $end='') {
        parent::__construct($it, self::LEAVES_ONLY);
				$this->begin = $begin;
				$this->end = $end;
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>".$this->begin;
    }

    function endChildren() {
        echo $this->end . "</tr>\n";
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

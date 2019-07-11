<?php
class Fashionist {

    private $db;
    public function __construct(){
        $this->db = new Dbh();
        $this->db = $this->db->connect();
    }

    public function topFashionists(){
        $qString = "SELECT UF.fName, UF.lName, UF.quote, UF.picPath FROM fashionists as UF ORDER BY UF.nrOfFollowers DESC";
        $stmt = $this->db->prepare($qString);
        if($stmt->execute()){
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $myList[] = $row;
            }
            return $myList;
        }
    }
}
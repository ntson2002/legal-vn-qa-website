<?php

class PairFeedBackModel {

    //put your code here
    public $ID;
    public $QUESTION;
    public $ANSWER;
    public $ADD_BY;
    public $SCORE;
    public $DATE_ADDED;
    public $COMMENT;
    public $STATUS;
    public $OTHER;

    function __construct() {
        $this->ID = "";
        $this->QUESTION = "";
        $this->ANSWER = "";
        $this->SOURCE_TITLE = "";
        $this->ADD_BY = "";
        $this->COMMENT = "";
        $this->DATE_ADDED = time();
        $this->SCORE = 0;
        $this->STATUS = 0;
        $this->OTHER = "";
    }

    public static function insert($r) {
        require_once("config/dbconnect.php");
        $mysqli->query("SET NAMES utf8");
        $query = "INSERT INTO Pair_FeedBack (question, answer, source_title, add_by, score, date_added, comment, status, other) VALUES "
                . "('{$r->QUESTION}', '{$r->ANSWER}' ,'{$r->SOURCE_TITLE}', '{$r->ADD_BY}', '{$r->SCORE}' ,'$r->DATE_ADDED', '{$r->COMMENT}', '{$r->STATUS}', '{$r->OTHER}')";
        $mysqli->query($query);
        $mysqli->close();
    }

    public static function list_all() {
        require_once("config/dbconnect.php");
        $mysqli->query("SET NAMES utf8");
        $query = "SELECT * FROM Pair_FeedBack ORDER BY date_added DESC";
        $result = $mysqli->query($query);
        $list = array();
        if ($result) {
            foreach ($result as $row) {
                $item = new PairModel();
                $item->ID = $row["id"];
                $item->QUESTION = $row["question"];
                $item->ANSWER = $row["answer"];
                $item->SOURCE_TITLE = $row["source_title"];
                $item->ADD_BY = $row["add_by"];
                $item->COMMENT = $row["comment"];
                $item->DATE_ADDED = $row["date_added"];
                $item->SCORE = $row["score"];
                $item->STATUS = $row["status"];
                $item->OTHER = $row["other"];
                $list[] = $item; //add an item into array
            }
        }
        $mysqli->close();
        return $list;
    }

    public static function get_by_id($id) {
        require_once("config/dbconnect.php");
        $mysqli->query("SET NAMES utf8");
        $query = "SELECT * FROM Pair_FeedBack WHERE id=$id";
        $result = $mysqli->query($query);       
        if ($result) {
            foreach ($result as $row) {
                $item = new PairModel();
                $item->ID = $row["id"];
                $item->QUESTION = $row["question"];
                $item->ANSWER = $row["answer"];
                $item->SOURCE_TITLE = $row["source_title"];
                $item->ADD_BY = $row["add_by"];
                $item->COMMENT = $row["comment"];
                $item->DATE_ADDED = $row["date_added"];
                $item->SCORE = $row["score"];
                $item->STATUS = $row["status"];
                $item->OTHER = $row["other"];
                $mysqli->close();
                return $item;
            }
        }
        $mysqli->close();

    }

//    public static function update($rid, $status)
//    {
//        require_once("config/dbconnect.php");       
//        
//        $query = "UPDATE Relations SET status='$status' WHERE id='$rid'";
//        //print_r($query);
//        $mysqli->query($query);        
//        $mysqli->close();        
//    }
}

?>

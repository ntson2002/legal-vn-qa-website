<?php

class PairFeedBackController {
    public function view()
    {
        $pair = null;
        if (isset($_REQUEST["pairid"]))
        {
            $id = $_REQUEST["pairid"];
            $pair = PairFeedBackModel::get_by_id($id);
        }
        
        $data = array(
            "pair" => $pair
        );
        $VIEW = "./view/PairFeedBack/view.phtml";
        require("./template/template.phtml");
    }
    public function add() {
        
        if (isset($_REQUEST["question"]))
        {
            $p = new PairFeedBackModel();
            $p->QUESTION = $_REQUEST["question"];
            $p->ANSWER = $_REQUEST["answer"];
            $p->SOURCE_TITLE = $_REQUEST["source_title"];
            $p->ADD_BY = "user";
            $p->COMMENT = "No comment";
            $p->OTHER = "";
            $p->SCORE = $_REQUEST["score"];
            $p->STATUS = "NOT REVISED";
            $p->DATE_ADDED = date("Y-m-d h:i:s",time());
//            print_r($p);
            PairFeedBackModel::insert($p);      
            $data = array(
                "pair" => $p
            );
        }
        $VIEW = "./view/PairFeedBack/view.phtml";
        require("./template/template.phtml");
    }

    public function listall()
    {
        $pairs = PairFeedBackModel::list_all();
        $data = array(
            "pairs" => $pairs
        );
        $VIEW = "./view/PairFeedBack/listall.phtml";
        require("./template/template.phtml");
    }
}

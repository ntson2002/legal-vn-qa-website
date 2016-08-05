<?php

class PairController {
    public function view()
    {
        $pair = null;
        if (isset($_REQUEST["pairid"]))
        {
            $id = $_REQUEST["pairid"];
            $pair = PairModel::get_by_id($id);
        }
        
        $data = array(
            "pair" => $pair
        );
        $VIEW = "./view/Pair/view.phtml";
        require("./template/template.phtml");
    }
    public function add() {
        
        if (isset($_REQUEST["question"]))
        {
            $p = new PairModel();
            $p->QUESTION = $_REQUEST["question"];
            $p->ANSWER = $_REQUEST["answer"];
            $p->SOURCE_TITLE = $_REQUEST["source_title"];
            $p->ADD_BY = "admin";
            $p->COMMENT = "No comment";
            $p->OTHER = "";
            $p->SCORE = 3;
            $p->STATUS = "REVISED";
            $p->DATE_ADDED = date("Y-m-d h:i:s",time());
            
            PairModel::insert($p);      
            $data = array(
                "pair" => $p
            );
            $VIEW = "./view/Pair/view.phtml";
        }
        $VIEW = "./view/Pair/add.phtml";
        require("./template/template.phtml");
    }

    public function listall()
    {
        $pairs = PairModel::list_all();
        $data = array(
            "pairs" => $pairs
        );
        $VIEW = "./view/Pair/listall.phtml";
        require("./template/template.phtml");
    }
}

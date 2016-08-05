<?php

class HomeController {

    public function index() {


        $VIEW = "./view/Home/index.phtml";
        require("./template/template.phtml");
    }

    public function ask() {
        
        if (isset($_REQUEST["question"])) {
            $question = $_REQUEST["question"];
            
            $json_answers = HomeController::do_query($question);
            $json_a = json_decode($json_answers, true);
            $answer = $json_a["answer_candidates"][0];
//           $json_related_questions = HomeController::do_query_related_questions($question);
            $json_related_questions = HomeController::do_get_related_questions($question);
            $data = array(
                "question" => $question,
                "answer" => $answer,
                "related_questions" => $json_related_questions
            );
        }
        $VIEW = "./view/Home/index.phtml";
        require("./template/template.phtml");
    }
    
    private static function do_query_related_questions_fromJAVAWebAPI($question)
    {
        $question = urlencode($question);
        
        $url = "http://localhost:8080/legal-qa-api/index.jsp?n=20&query=$question";
        echo "<a href='$url'>LINK</a>";
        $cURL = curl_init();
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPGET, true);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($cURL, CURLOPT_POSTFIELDS, $post);
        curl_setopt($cURL, CURLOPT_ENCODING, "UTF-8");
        $json_result = curl_exec($cURL);
        curl_close($cURL);
        return $json_result;
    }
    
    private static function do_get_related_questions($question) {
        
        $question = urlencode($question);
        $url = "http://150.65.242.2:9080/vn.legal.qa.webapp/qa?top=10&searchBy=question&tojson=1&query=$question";

        $cURL = curl_init();
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPGET, true);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($cURL, CURLOPT_ENCODING, "UTF-8");
        $json_result = curl_exec($cURL);
        curl_close($cURL);
        return $json_result;
    }
    
    private static function do_query($question) {
        
        $question = urlencode($question);
        $url = "http://150.65.242.2:9080/vn.legal.qa.webapp/qa?tojson=1&query=$question";
//        echo "<a href='$url'>QUESTION </a>";
        $cURL = curl_init();
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPGET, true);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($cURL, CURLOPT_POSTFIELDS, $post);
        curl_setopt($cURL, CURLOPT_ENCODING, "UTF-8");
        $json_result = curl_exec($cURL);
        curl_close($cURL);
        return $json_result;
    }

}

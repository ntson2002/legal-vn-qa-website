<?php

class ReferenceDetection {

    public static function do_Detect($sentence) {
        $pieces = explode(" ", $sentence);
        $i = 0;
        $ref_list = " tại ";
        $arr_be = array();
        while ($i < count($pieces)) {
            if ($pieces[$i] !== "")
                $pos = strpos($ref_list, $pieces[$i]);
            else
                $pos = false;
            
            if ($pos !== false) {
                $b = $i;
                $e = $i;
                $i = $i + 1;
                $ref2 = " khoản chương Điều điều hoặc nghị định và này ";
                while ($i < count($pieces)) 
                {   
                    if ($pieces[$i] !== "")
                    {
                        $pos2 = strpos($ref2, strtolower($pieces[$i]));
                        $number = preg_match("/^[0-9]+$/", $pieces[$i]);
                        if ($pos2 !== false || $number == 1) {
                            $e = $i;
                        }
                        else 
                            break;
                    }
                    $i = $i + 1;
                }
                if ($e - $b > 1)
                    $arr_be[] = array("b"=>$b, "e"=>$e);
            }
            $i = $i + 1;
        }
        if (count($arr_be) > 0)
        {
            return ReferenceDetection::convert($pieces, $arr_be);
        }
        return "$sentence";
    }
    public static function convert($pieces, $array)
    {
        for ($i = count($array)-1; $i >= 0; $i = $i-1)
        {
            $item = $array[$i];
            $b = $item["b"];
            $e = $item["e"];
            array_splice( $pieces, $e+1, 0, "</b>" );
            array_splice( $pieces, $b, 0, "<b style='color:blue'>" );
        }
        return implode(" ", $pieces);
    }
}

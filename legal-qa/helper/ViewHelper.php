<?php

class ViewHelper
{
    public static function create_combobox($id, $name, $array, $css)
    {
        $css_string = "";
        if (isset($css))
            $css_string = "class='$css'";
        $option_string = "";
        foreach ($array as $key=>$value)
        {
            $option_string = $option_string . "<option value='$key'>$value</option>";
        }
//      return "<select name='$name' id='$id' $css_string><option>" . join('</option><option>', $array) . "</option></select>";
        return "<select name='$name' id='$id' $css_string>$option_string</select>";
    }
}    
?>

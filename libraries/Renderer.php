<?php
class Renderer{
    public static function render($path, array $variable = []){
       extract($variable);
       ob_start();
       require('');
       $pageContent = ob_get_clean();
       require('');
    }
}
?>
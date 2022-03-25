<?php
class Menu {
    public static function buttonState($button) {
        if (isset($_GET['controller']) && $_GET['controller'] == $button) {
            return 'active';
        }
    }
}
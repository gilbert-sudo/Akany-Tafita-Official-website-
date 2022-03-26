<?php
class Menu {
    public static function buttonState(string $button, string $task) {
        if (isset($_GET['controller']) && $_GET['controller'] == $button) {
            if (isset($_GET['task']) && $_GET['task'] == $task) {
                return 'active';
            }
        }
    }
}
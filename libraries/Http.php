<?php

class Http
{
    /**
     * redirect to a specific page
     *
     * @param  mixed $url
     * @return void
     */
    public static function redirect(string $url): void
    {
        header("Location: $url");
        exit();
    }
}

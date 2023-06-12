<?php
namespace Controller;

class Controlleur
{
    


    protected function render(array $data, $lapage)
    {
        extract($data);
        $page = '';
        ob_start(); //garde en memoire
        require_once "../app/view/$lapage.php";
        $page .= ob_get_clean(); //permet de repucerer ce qui est dans la memoire et le mettre dans $page;
        require_once '../app/view/layout/layout.php';
    }
    
}
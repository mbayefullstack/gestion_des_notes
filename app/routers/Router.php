<?php
namespace Route;

class Router
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    private function decoupageUrl(): array
    {
        $url = $this->url;
        $urls = parse_url($url);
        $path = $urls['path'];
        $path = ($path=="/")? "/accueil/index" : $path; //par défaut amene accueil/index
        $paths = explode('/', $path);
        $controller = $paths[1];
        $fonctionnalite = $paths[2];
        $param = array();
        if (array_key_exists('query', $urls)) parse_str($urls['query'],$param);
        return [
            'controller' => $controller,
            'method' => $fonctionnalite, 'params' => $param
        ];
    }

    public function route()
    {
        $url = self::decoupageUrl();
        $controller = ucfirst($url['controller']);
        $maclass = "Controller\\". $controller . 'Controller';
        // require "../controllers/".$maclass.".php";
        $method = $url['method'];
        $param = $url['params'];
        // if(empty($param)){
        //     eval(
        //         "use Controller\\$maclass;
        //         (new $maclass())->$method();");
        // }
        // else {
        //     eval(
        //         "use Controller\\$maclass;
        //         (new $maclass())->$method($param);");
        // }
            
        if (class_exists($maclass)&&method_exists($maclass,$method)) {
            $newcontr = new $maclass();
            !empty($param)? $newcontr->{$method}($param):$newcontr->{$method}();
            // call_user_func_array([$newcontr, $method],$param);

        }
        else{
            header('HTTP/1.0 404 Not Found');
        }
    }

    


}
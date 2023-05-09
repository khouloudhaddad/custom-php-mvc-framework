<?php

namespace app\core;

class Router
{

    protected array $routes = [];
    public Request $request;
    public Response $response;

    /**
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;

        if(!$callback){
            $this->response->setStatusCode('404');

            echo  $this->renderView('_404');
        }

        if(is_string($callback)){
            echo $this->renderView($callback);
        }
        return call_user_func($this->isCheck($callback));
    }

    public function renderView($view): string
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);

        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent(): string|false
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view): string|false
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }

    /**
     * @param $callback
     * @return mixed
     */
    private function isCheck($callback)
    {
        if(is_array($callback))
            $callback[0] = new $callback[0];

        return $callback;
    }
}
<?php
/**
 * Created by S€GU©€.
 * Date: 11-04-16
 * Time: 09:17 PM
 */

namespace App\Http\Routing;

/**
 * Class Route
 * @package App\Http\Routing
 */
class Route
{
    private $uri;
    private $closure;
    private $parameters;
    const PARAMETER_PATTERN = '/:([^\/]+)/';
    const PARAMETER_REPLACEMENT = '(?<\1>[^/]+)';

    /**
     * Route constructor.
     * @param $uri
     * @param $closure
     */
    public function __construct($uri, $closure)
    {
        $this->uri = $uri;
        $this->closure = $closure;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getClosure()
    {
        return $this->closure;
    }

    /**
     * @return string
     */
    public function getUriPattern()
    {
        $uriPattern = preg_replace(self::PARAMETER_PATTERN, self::PARAMETER_REPLACEMENT, $this->uri);
        $uriPattern = str_replace('/', '\/', $uriPattern);
        $uriPattern = '/^' . $uriPattern . '\/*$/s';
        return $uriPattern;
    }

    /**
     * @return mixed
     */
    public function getParameterNames()
    {
        preg_match_all(self::PARAMETER_PATTERN, $this->uri, $parameterNames);
        return array_flip($parameterNames[1]);
    }

    /**
     * @param $matches
     */
    public function resolveParameters($matches)
    {
        $this->parameters = array_intersect_key($matches, $this->getParameterNames());
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param $requestUri
     * @return bool
     */
    public function checkIfMatch($requestUri)
    {
        $uriPattern = $this->getUriPattern();
        if (preg_match($uriPattern, $requestUri, $matches))
        {
            $this->resolveParameters($matches);
            return true;
        }
        return false;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        $closure = $this->format($this->closure);
        /*if(class_exists('UserController'))
            die($closure);
        else
            die('no existe');*/
        $parameters = $this->getParameters();
        return call_user_func_array($closure, $parameters);
    }

    private function format($closure)
    {
        if($this->isController($closure))
            return 'App\Http\Controllers\\' . $this->closure;
        else
            return $closure;
    }

    private function isController($closure)
    {
        if(@strpos($closure, '::'))
            return true;
        return false;
    }

    private function isClosure()
    {
        return true;
    }
}

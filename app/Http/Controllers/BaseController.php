<?php
/**
 * Created by S€GU©€.
 * Date: 12-04-16
 * Time: 08:28 AM
 */

namespace App\Http\Controllers;


class BaseController
{
    protected $view;
    protected $parameters;

    public  function __construct($view, $parameters)
    {
        $this->view = $view;
        $this->parameters = $parameters;
    }

    public function make($view, $parameters)
    {
        $this->view = $view;
        $this->parameters = $parameters;
    }
}
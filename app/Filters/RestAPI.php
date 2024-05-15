<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\API\ResponseTrait;

class RestAPI implements FilterInterface
{
    use ResponseTrait;
    public function __construct()
    {
        $this->response = \Config\Services::response();
       
    }

    public function before(RequestInterface $request, $arguments = null)
    {
        if (empty($_SERVER['HTTP_DOLKODE_KEY'])) {
            $description = lang('API KEY is required');
            return $this->failUnauthorized($description);
        } else {
            if ($_SERVER['HTTP_DOLKODE_KEY'] != '12345') {
                $description = lang('WRONG API KEY');
                return $this->failUnauthorized($description);
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

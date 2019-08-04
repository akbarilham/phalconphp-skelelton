<?php

use Phalcon\Mvc\Controller as BaseController;
use Phalcon\Http\Response;

class Controllers extends BaseController{

    public function Show()
    {
        $response = new Response();
        $data = [
            'code' => 200,
            'status' => 'success',
            'message' => 'Hello Show',
            'payload' => [],
        ];
        $response->setJsonContent($data);
        return $response;
    }

    public function FindPagination($id)
    {
        $result = "Find Pagination";
        return $result;
    }

    public function Insert()
    {
        $result = "Insert";
        return $result;
    }

    public function Update($id)
    {
        $result = "Update";
        return $result;
    }

    public function Delete($id)
    {
        $result = "Hello Show";
        return $result;
    }
}
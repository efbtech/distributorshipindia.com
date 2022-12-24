<?php

namespace App\Services\Admin;
use App\Interfaces\Admin\QueryInterface;
use App\Interfaces\Admin\QueryServiceInterface;


class QueryServices implements QueryServiceInterface
{
    private $QueryInterface;

    public function __construct(QueryInterface $QueryInterface) 
    {
        $this->QueryInterface = $QueryInterface;
    }

    public function queryList($search)
    {
        return $this->QueryInterface->queryList($search);
    }

    public function singleMail($id)
    {
        return $this->QueryInterface->singleMail($id);
    }

    public function sendReply($request)
    {
        $this->QueryInterface->sendReply($request);
    }
}
?>
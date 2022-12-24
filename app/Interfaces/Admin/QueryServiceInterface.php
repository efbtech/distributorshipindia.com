<?php

namespace App\Interfaces\Admin;

Interface QueryServiceInterface
{
    public function queryList($search);

    public function singleMail($id);

    public function sendReply($request);
}
?>
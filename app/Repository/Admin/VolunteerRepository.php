<?php

namespace App\Repository\Admin;
use App\Interfaces\Admin\VolunteerInterface;
use App\Models\Web\QueryModel;

class VolunteerRepository implements VolunteerInterface
{
    public function volunteerList() {
        return QueryModel::select('*')->where('type','volunteer')->paginate(10);
    }
}
?>
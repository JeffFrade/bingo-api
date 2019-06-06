<?php

namespace App\Repositories;

use App\Repositories\Models\Bingo;

class BingoRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Bingo();
    }

    public function truncate()
    {
        $this->model->truncate();
    }
}

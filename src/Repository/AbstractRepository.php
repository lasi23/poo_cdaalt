<?php

namespace App\Repository;

use App\Database\Mysql;

abstract class AbstractRepository
{
    protected \PDO $bdd;

    public function __construct()
    {
        $this->bdd = Mysql::connectBdd();
    }
}

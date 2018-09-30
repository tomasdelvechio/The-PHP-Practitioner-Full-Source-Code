<?php

namespace App\Models;

use App\Core\Model;

class Tasks extends Model
{
    protected $table = 'users';

    public function get()
    {
        return $this->db->selectAll($this->table);
    }

    public function insert(array $user)
    {
        $this->db->insert($this->table, $user);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'mapinlac_myguests';

    protected $allowedFields = ['name', 'email', 'website','comment','gender'];

	public function getGuest()
    {
            return $this->findAll();
    }
}


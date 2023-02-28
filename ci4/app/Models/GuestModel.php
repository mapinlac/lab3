<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'mapinlac_myguests';

	public function getGuest()
    {
            return $this->findAll();
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
	protected $fillable = [
        'patient_id', 
        'visit_id', 
        'encounter',
        'markvisit',
        'markstar',
        'omitexams',
        'populateas',
        'percimp'
    ];
}

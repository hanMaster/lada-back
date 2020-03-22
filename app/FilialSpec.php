<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FilialSpec extends Pivot
{
    public $timestamps = false;
    protected $fillable = [
        'filial_id', 'spec_id'
    ];
}

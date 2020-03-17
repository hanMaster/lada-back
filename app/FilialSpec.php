<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FilialSpec extends Pivot
{
    protected $fillable = [
        'filial_id', 'spec_id'
    ];
}

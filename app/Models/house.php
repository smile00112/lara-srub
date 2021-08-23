<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        $filter->apply($builder);
    }
}

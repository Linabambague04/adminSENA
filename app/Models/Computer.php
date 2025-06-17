<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Computer extends Model
{
    protected $fillable = ['name'];
    protected $allowIncluded = [
        'apprentice',
        'apprentice.course',
        'apprentice.course.area',
        'apprentice.course.area.teachers',
        'apprentice.course.teachers',
        'apprentice.course.trainingCenter',
        'apprentice.course.trainingCenter.teachers'
    ];

    protected $allowFilter = [
        'id', 
        'number', 
        'brand'
    ];

    public function apprentice()
    {
        return $this->hasOne(Apprentice::class);
    }

    public function scopeIncluded(Builder $query)
    {
        if (empty($this->allowIncluded) || empty(request('included'))) {
            return $query;
        }
        
        $relations = explode(',', request('included')); 

        $allowIncluded = collect($this->allowIncluded); 

        foreach ($relations as $key => $relationship) { 
            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }
        return $query->with($relations); 
    }

    public function scopeFilter(Builder $query)
    {

        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value) {

            if ($allowFilter->contains($filter)) {

                $query->where($filter, 'LIKE', '%' . $value . '%');
            }
        }

    }
}

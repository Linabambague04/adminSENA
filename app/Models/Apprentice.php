<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Apprentice extends Model
{

    protected $fillable = ['name'];
    protected $allowIncluded = [
        'course',
        'computer',
        'course.area',
        'course.area.teachers',
        'course.teachers',
        'course.trainingCenter',
        'course.trainingCenter.teachers'
    ];
    protected $allowFilter = [
        'id', 
        'name', 
        'email', 
        'cell_number'
    ];
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function computer()
    {
        return $this->belongsTo(Computer::class);
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class TrainingCenter extends Model
{
    protected $fillable = ['name'];
    protected $allowIncluded = [
        'area', 
        'course.area.teachers', 
        'courses.apprentices.computer', 
        'courses.apprentices',
        'courses.area',
        'teachers',
        'courses'
    ];

    protected $allowFilter = [
        'id', 
        'name', 
        'location'
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
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

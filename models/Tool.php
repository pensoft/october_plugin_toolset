<?php namespace Pensoft\Toolset\Models;

use Model;

class Tool extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'pensoft_toolset_tools';

    protected $guarded = ['id'];

    protected $jsonable = [
        'features',
        'action_steps',
        'transform_with'
    ];

    public $rules = [
        'slug' => 'required',
        'title' => 'required',
        'role' => 'required'
    ];

    public $belongsTo = [
        'stage' => [
            Stage::class,
            'key' => 'stage_id'
        ]
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function scopeBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    public function getFeaturesListAttribute()
    {
        if (!$this->features || !is_array($this->features)) {
            return [];
        }
        return array_column($this->features, 'feature');
    }

    public function getStakeholdersListAttribute()
    {
        if (!$this->transform_with || !is_array($this->transform_with)) {
            return [];
        }
        return array_column($this->transform_with, 'name');
    }
}

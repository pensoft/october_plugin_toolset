<?php namespace Pensoft\Toolset\Models;

use Model;

class Stage extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'pensoft_toolset_stages';

    protected $guarded = ['id'];

    public $rules = [
        'name' => 'required',
        'title' => 'required',
        'role' => 'required'
    ];

    public $hasMany = [
        'tools' => [
            Tool::class,
            'key' => 'stage_id'
        ]
    ];
}

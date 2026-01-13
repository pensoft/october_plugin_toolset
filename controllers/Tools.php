<?php namespace Pensoft\Toolset\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Pensoft\Toolset\Models\Tool;
use Flash;

class Tools extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['pensoft.toolset.manage_tools'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Pensoft.Toolset', 'toolset', 'tools');
    }
}

<?php namespace Pensoft\Toolset\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftToolsetTools extends Migration
{
    public function up()
    {
        Schema::table('pensoft_toolset_tools', function($table)
        {
            $table->string('level')->nullable();
            $table->text('intro_questions')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_toolset_tools', function($table)
        {
            $table->dropColumn('level');
            $table->dropColumn('intro_questions');
        });
    }
}

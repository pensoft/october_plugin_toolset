<?php namespace Pensoft\Toolset\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStagesTable extends Migration
{
    public function up()
    {
        Schema::create('pensoft_toolset_stages', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->index();
            $table->string('title');
            $table->string('role')->index();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pensoft_toolset_stages');
    }
}

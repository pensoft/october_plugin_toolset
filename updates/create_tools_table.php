<?php namespace Pensoft\Toolset\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateToolsTable extends Migration
{
    public function up()
    {
        Schema::create('pensoft_toolset_tools', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('stage_id')->unsigned()->nullable()->index();
            $table->string('slug')->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->string('type')->default('researcher');
            $table->string('role')->index();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);

            // Extended content fields
            $table->string('intro_question')->nullable();
            $table->text('intro_content')->nullable();
            $table->text('end_goal')->nullable();
            $table->string('inspiration_title')->nullable();
            $table->text('inspiration_content')->nullable();
            $table->string('video_url')->nullable();
            $table->text('action_steps')->nullable();
            $table->text('transform_with')->nullable();
            $table->text('power_dynamics_content')->nullable();
            $table->text('references_content')->nullable();

            $table->timestamps();

            $table->foreign('stage_id')
                ->references('id')
                ->on('pensoft_toolset_stages')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pensoft_toolset_tools');
    }
}

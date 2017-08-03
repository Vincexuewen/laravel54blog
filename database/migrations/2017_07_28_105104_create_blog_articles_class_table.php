<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogArticlesClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_articles_class', function (Blueprint $table) {
            $table->increments('ar_class_id')->comment('分类id');
            $table->integer('parent_id')->commemt('父id');
            $table->string('ar_class_name')->unique()->comment('分类名');
            $table->string('c_name')->comment('中文名称');
            $table->integer('type')->comment('代表分类级别');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_articles_class');
    }
}

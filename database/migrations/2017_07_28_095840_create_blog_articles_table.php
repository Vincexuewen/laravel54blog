<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_articles', function (Blueprint $table) {
            $table->increments('ar_id')->comment('文章id');
            $table->string('ar_title')->comment('文章标题');
            $table->integer('ar_class_id')->comment('文章分类id');
            $table->string('ar_img_url')->comment('文章图片地址');
            $table->integer('ar_hits')->comment('文章浏览量')->default(0);
            $table->longText('ar_content')->comment('文章内容');
            $table->smallInteger('ar_status')->default(1)->comment('文章状态：1发布，2草稿');
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
        Schema::dropIfExists('blog_articles');
    }
}

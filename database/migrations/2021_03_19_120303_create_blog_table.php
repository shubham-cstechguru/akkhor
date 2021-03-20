<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title');
            $table->text('blog_description');
            $table->string('blog_image');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('blogcategory');
            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')->references('id')->on('blogtags');
            $table->string('blog_seo_title')->nullable();
            $table->string('blog_seo_keyword')->nullable();
            $table->text('blog_seo_description')->nullable();
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
        Schema::dropIfExists('blog');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
  `id` int(20) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `topic` varchar(25) NOT NULL,
  `desc` varchar(200) default NULL,
  `approved` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
        */
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->unique();
            $table->string('url',100)->nullable();
            $table->string('desc',300)->nullable();
            $table->tinyInteger('approved')->default(0);
            $table->string('category_id')->nullable()->index();            
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
        Schema::dropIfExists('websites');
    
    }
}

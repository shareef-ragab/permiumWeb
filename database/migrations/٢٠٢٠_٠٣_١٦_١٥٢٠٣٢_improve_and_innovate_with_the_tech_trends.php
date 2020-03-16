<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ImproveAndInnovateWithTheTechTrends extends Migration
{
    public function up()
    {
        Schema::create('improve_and_innovate_with_the_tech_trends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->string('image');
            $table->string('list-1');
            $table->string('list-2');
            $table->string('list-3');
            $table->string('list-4');
            $table->string('link');
            $table->softDeletes();
            $table->timestamp("dataCreate")->nullable()->useCurrent();
            $table->timestamp("dataUpdate")->nullable();
        });
        DB::unprepared("CREATE DEFINER=`root`@`localhost` TRIGGER `improve_and_innovate_with_the_tech_trends_BEFORE_UPDATE` BEFORE UPDATE ON `improve_and_innovate_with_the_tech_trends` FOR EACH ROW BEGIN
if new.dataCreate <>old.dataCreate then
	signal sqlstate '48101' set  message_text='Your cant not  edit this is field  ';
 end if;
set new.dataUpdate=sysdate();
END");
    }

    public function down()
    {
        Schema::dropIfExists('improve_and_innovate_with_the_tech_trends');
    }
}

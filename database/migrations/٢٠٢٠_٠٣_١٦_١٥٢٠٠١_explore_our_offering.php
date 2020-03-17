<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ExploreOurOffering extends Migration
{
    public function up()
    {
        Schema::create('explore_our_offering', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->string('list_1');
            $table->string('list_2');
            $table->string('list_3');
            $table->string('list_4');
            $table->string('link');
            $table->softDeletes();
            $table->timestamp("dataCreate")->nullable()->useCurrent();
            $table->timestamp("dataUpdate")->nullable();
        });
        DB::unprepared("CREATE DEFINER=`root`@`localhost` TRIGGER `explore_our_offering_BEFORE_UPDATE` BEFORE UPDATE ON `explore_our_offering` FOR EACH ROW BEGIN
if new.dataCreate <>old.dataCreate then
	signal sqlstate '48101' set  message_text='Your cant not  edit this is field  ';
 end if;
set new.dataUpdate=sysdate();
END");
    }

    public function down()
    {
        Schema::dropIfExists('explore_our_offering');
    }
}

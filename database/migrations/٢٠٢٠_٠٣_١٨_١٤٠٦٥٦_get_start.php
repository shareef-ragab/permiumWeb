<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GetStart extends Migration
{
    public function up()
    {
        Schema::create('get_start', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('company');
            $table->string('email');
            $table->text('content');
            $table->softDeletes();
            $table->timestamp("dataCreate")->nullable()->useCurrent();
            $table->timestamp("dataUpdate")->nullable();
        });
        DB::unprepared("CREATE DEFINER=`root`@`localhost` TRIGGER `get_start_BEFORE_UPDATE` BEFORE UPDATE ON `get_start` FOR EACH ROW BEGIN
if new.dataCreate <>old.dataCreate then
	signal sqlstate '48101' set  message_text='Your cant not  edit this is field  ';
 end if;
set new.dataUpdate=sysdate();
END");
    }

    public function down()
    {
        Schema::dropIfExists('get_start');
    }
}

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SolutionsWeDeliver extends Migration
{
    public function up()
    {
        Schema::create('solutions_we_deliver', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->string('link');
            $table->softDeletes();
            $table->timestamp("dataCreate")->nullable()->useCurrent();
            $table->timestamp("dataUpdate")->nullable();
        });
        DB::unprepared("CREATE DEFINER=`root`@`localhost` TRIGGER `solutions_we_deliver_BEFORE_UPDATE` BEFORE UPDATE ON `solutions_we_deliver` FOR EACH ROW BEGIN
if new.dataCreate <>old.dataCreate then
	signal sqlstate '48101' set  message_text='Your cant not  edit this is field  ';
 end if;
set new.dataUpdate=sysdate();
END");
    }

    public function down()
    {
        Schema::dropIfExists('solutions_we_deliver');
    }
}

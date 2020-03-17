<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ReognitionsPartnerships extends Migration
{
    public function up()
    {
        Schema::create('reognitions_partnerships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->softDeletes();
            $table->timestamp("dataCreate")->nullable()->useCurrent();
            $table->timestamp("dataUpdate")->nullable();
        });
        DB::unprepared("CREATE DEFINER=`root`@`localhost` TRIGGER `reognitions_partnerships_BEFORE_UPDATE` BEFORE UPDATE ON `reognitions_partnerships` FOR EACH ROW BEGIN
if new.dataCreate <>old.dataCreate then
	signal sqlstate '48101' set  message_text='Your cant not  edit this is field  ';
 end if;
set new.dataUpdate=sysdate();
END");
    }

    public function down()
    {
        Schema::dropIfExists('reognitions_partnerships');
    }
}

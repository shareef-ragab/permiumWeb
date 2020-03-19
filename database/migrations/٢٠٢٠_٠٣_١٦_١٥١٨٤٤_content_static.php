<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ContentStatic extends Migration
{
    public function up()
    {
        Schema::create('content_static', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->text('content');
            $table->softDeletes();
            $table->timestamp("dataCreate")->nullable()->useCurrent();
            $table->timestamp("dataUpdate")->nullable();
        });
        DB::unprepared("CREATE DEFINER=`root`@`localhost` TRIGGER `content_static_BEFORE_UPDATE` BEFORE UPDATE ON `content_static` FOR EACH ROW BEGIN
if new.dataCreate <>old.dataCreate then
	signal sqlstate '48101' set  message_text='Your cant not  edit this is field  ';
 end if;
set new.dataUpdate=sysdate();
END");
    }

    public function down()
    {
        Schema::dropIfExists('content_static');
    }
}

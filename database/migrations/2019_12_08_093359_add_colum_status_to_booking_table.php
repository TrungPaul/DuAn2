<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumStatusToBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_of_user', function (Blueprint $table) {
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // lịch đã hoàn thành trạng thái là 2
    // mặc định trạng thái là 1
    // hủy lịch trạng thái là 0
    public function down()
    {
        Schema::table('booking_of_user', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}

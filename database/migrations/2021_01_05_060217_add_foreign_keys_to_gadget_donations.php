<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGadgetDonations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gadget_donations', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_id');

            $table->foreign('transaction_id')->references('id')->on('header_transactions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gadget_donations', function (Blueprint $table) {
            $table->dropForeign(['transaction_id']);
        });
    }
}

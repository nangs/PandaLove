<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFortniteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fortnite_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('epic_id', 128);
            $table->integer('account_id', false, true)->nullable();

            $this->types($table, 'solo');
            $this->places($table, 'solo');

            $this->types($table, 'duo');
            $this->places($table, 'duo');

            $this->types($table, 'squad');
            $this->places($table, 'squad');

            $table->timestamps();
            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fortnite_stats');
    }

    private function types(Blueprint $table, string $type)
    {
        $table->integer($type . '_kills', false, true);
        $table->integer($type . '_matches', false, true);
        $table->integer($type . '_score', false, true);
        $table->integer($type . '_minutesplayed', false, true);
    }

    private function places(Blueprint $table, string $type)
    {
        $table->integer($type . '_top1', false, true);
        $table->integer($type . '_top3', false, true);
        $table->integer($type . '_top5', false, true);
        $table->integer($type . '_top10', false, true);
        $table->integer($type . '_top25', false, true);
    }
}

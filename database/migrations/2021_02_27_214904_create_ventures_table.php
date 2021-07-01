<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('startup_name');
            $table->string('venture_type');
            $table->text('about_startup');
            $table->string('picture_of_the_startup');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('Website')->nullable();
            $table->string('linkedIn_profile')->nullable();
            $table->string('facebook_profile')->nullable();
            $table->string('twitter_profile')->nullable();
            $table->string('other_profile')->nullable();
            $table->text('address');
            $table->text('industries');
            $table->string('total_invested_cash')->nullable();
            $table->string('making_revenue');
            $table->string('venture_stage');
            $table->string('founder_name');
            $table->string('founder_phone_number');
            $table->string('founder_email_address');
            $table->string('team_member_name')->nullable();
            $table->string('team_member_designation')->nullable();
            $table->string('team_member_phone_number')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('ventures');
    }
}

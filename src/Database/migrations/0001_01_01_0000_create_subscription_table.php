<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionTable extends Migration
{
    public function up()
    {
        Schema::create('email_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->boolean('status')->default(1)->comment('Status 1 = Active, 0 = Inactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_subscriptions');
    }
}

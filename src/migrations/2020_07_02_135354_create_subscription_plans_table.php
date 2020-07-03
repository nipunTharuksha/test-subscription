<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plans', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('plan_name_en')->nullable(false);
            $table->string('plan_name_si')->nullable(false);
            $table->string('plan_name_ta')->nullable(false);

            $table->longText('description_en')->nullable(false);
            $table->longText('description_si')->nullable(false);
            $table->longText('description_ta')->nullable(false);

            $table->decimal('price',8,2)->nullable(false);

            $table->tinyInteger('reply_count')->nullable(false);

            $table->smallInteger('validity')->unsigned()->nullable(false);

            $table->json('off_percentages')->nullable();

            $table->boolean('is_active')->default(true);
            $table->boolean('is_premium')->default(false);

            $table->softDeletes();
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
        Schema::dropIfExists('subscription_plans');
    }
}

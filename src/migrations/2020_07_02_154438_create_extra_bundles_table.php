<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_bundles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->tinyInteger('reply_count')->nullable(false);
            $table->smallInteger('expire_within_days')->nullable(false);
            $table->decimal('price',8,2)->nullable(false);
            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('extra_bundles');
    }
}

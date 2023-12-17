<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_management', function (Blueprint $table) {
            $table->id();
            $table->date('expense_date')->nullable();
            $table->text('description')->nullable();
            $table->string('item_name')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('asset_management');
    }
}

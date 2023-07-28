<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('users', function (Blueprint $table) {
                // Add the country_id column
                $table->unsignedBigInteger('country_id')->nullable()->after('id');
    
                // Add the foreign key constraint
                $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['country_id']);

            // Drop the country_id column
            $table->dropColumn('country_id');
        });
    }
}

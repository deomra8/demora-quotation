<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('upc')->nullable()->unique()->after('sku');
            $table->string('supplier')->nullable()->after('category');
            $table->string('lead_time')->nullable()->after('supplier');
            $table->decimal('cost', 12, 2)->nullable()->after('price');
            $table->decimal('width', 8, 2)->nullable()->after('stock_quantity');
            $table->decimal('height', 8, 2)->nullable()->after('width');
            $table->decimal('depth', 8, 2)->nullable()->after('height');
            $table->string('material')->nullable()->after('depth');
            $table->string('finish')->nullable()->after('material');
            $table->text('internal_notes')->nullable()->after('description');
            $table->string('image_path')->nullable()->after('internal_notes');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropUnique(['upc']);
            $table->dropColumn([
                'upc',
                'supplier',
                'lead_time',
                'cost',
                'width',
                'height',
                'depth',
                'material',
                'finish',
                'internal_notes',
                'image_path',
            ]);
        });
    }
};

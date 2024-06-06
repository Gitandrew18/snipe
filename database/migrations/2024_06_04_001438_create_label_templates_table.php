<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabelTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('label_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label_type')->nullable();
            $table->string('page_format')->nullable();
            $table->string('page_orientation')->nullable();
            $table->decimal('column1_x',6, 3)->nullable();
            $table->decimal('column2_x', 6, 3)->nullable();
            $table->decimal('row1_y', 6, 3)->nullable();
            $table->decimal('row2_y', 6, 3)->nullable();
            $table->decimal('label_width', 6, 3)->nullable();
            $table->decimal('label_border', 6, 3)->nullable();
            $table->decimal('label_height', 6, 3)->nullable();
            $table->decimal('barcode_size', 6, 3)->nullable();
            $table->decimal('barcode_margin', 6, 3)->nullable();
            $table->decimal('title_size', 6, 3)->nullable();
            $table->decimal('title_margin', 6, 3)->nullable();
            $table->char('title_align', 1)->nullable();
            $table->decimal('field_size', 6, 3)->nullable();
            $table->decimal('field_margin', 6, 3)->nullable();
            $table->decimal('label_size', 6, 3)->nullable();
            $table->decimal('label_margin', 6, 3)->nullable();
            $table->decimal('tag_size', 6, 3)->nullable();
            $table->char('tag_align', 1)->nullable();
            $table->string('tag_position')->nullable();
            $table->decimal('logo_max_width', 6, 3)->nullable();
            $table->decimal('logo_margin', 6, 3)->nullable();
            $table->string('measurement_unit')->nullable();
            $table->decimal('margin_top', 6, 3)->nullable();
            $table->decimal('margin_bottom', 6, 3)->nullable();
            $table->decimal('margin_left', 6, 3)->nullable();
            $table->decimal('margin_right', 6, 3)->nullable();
            $table->integer('fields_supported')->default(1);
            $table->boolean('tag_option')->nullable();
            $table->boolean('one_d_barcode_option')->nullable();
            $table->boolean('two_d_barcode_option')->nullable();
            $table->boolean('logo_option')->nullable();
            $table->boolean('title_option')->nullable();
            $table->decimal('tape_height', 6, 3)->nullable();
            $table->decimal('tape_width', 6, 3)->nullable();
            $table->decimal('tape_margin_sides', 6, 3)->nullable();
            $table->decimal('tape_margin_ends', 6, 3)->nullable();
            $table->decimal('tape_text_size_mod', 6, 3)->nullable();
            $table->integer('columns')->nullable();
            $table->integer('rows')->nullable();
            $table->timestamps();
        });
        $defaults =
            [
                [
                    'name' => 'Avery 5267',
                    'label_type' =>'',
                    'page_format' => 'LETTER',
                    'page_orientation' => 'P',
                    'column1_x' => 21.6,
                    'column2_x' => 169.2,
                    'row1_y' => 36.1,
                    'row2_y' => 72.1,
                    'label_width' => 126,
                    'label_border' => 0,
                    'label_height' => 36,
                    'barcode_size' => .175,
                    'barcode_margin' => 0,
                    'title_size' => .14,
                    'title_margin' => null,
                    'title_align' => 'L',
                    'field_size' => .15,
                    'field_margin' => null,
                    'label_size' => null,
                    'label_margin' => null,
                    'logo_max_width' => null,
                    'logo_margin' => null,
                    'measurement_unit' => 'in',
                    'margin_top' => .02,
                    'margin_bottom' => 0,
                    'margin_left' => .04,
                    'margin_right' => .04,
                    'fields_supported' => 1,
                    'tag_align' => null,
                    'tag_option' => 0,
                    'tag_position' => null,
                    'tag_size' => null,
                    'one_d_barcode_option' => 1,
                    'two_d_barcode_option' => 0,
                    'logo_option' => 0,
                    'title_option' => 1,
                    'tape_height' => null,
                    "tape_width" => null,
                    'tape_margin_sides' => null,
                    'tape_margin_ends' => null,
                    'tape_text_size_mod' => null,
                    'columns' => 4,
                    'rows' => 20,
                ],
                [
                    'name' => 'Avery 5520',
                    'label_type' =>'',
                    'page_format' => 'LETTER',
                    'page_orientation' => 'P',
                    'column1_x' => 13.55,
                    'column2_x' => 211.55,
                    'row1_y' => 36.1,
                    'row2_y' => 108.1,
                    'label_width' => 189.35,
                    'label_border' => 0,
                    'label_height' => 72,
                    'barcode_size' => null,
                    'barcode_margin' => .075,
                    'title_size' => .14,
                    'title_margin' => .04,
                    'title_align' => 'C',
                    'field_size' => .15,
                    'field_margin' => null,
                    'label_size' => .09,
                    'label_margin' => -.015,
                    'tag_size' => null,
                    'tag_position' => null,
                    'tag_align' => null,
                    'logo_max_width' => null,
                    'logo_margin' => null,
                    'measurement_unit' => 'in',
                    'margin_top' => .06,
                    'margin_bottom' => .06,
                    'margin_left' => .06,
                    'margin_right' => .06,
                    'fields_supported' => 3,
                    'tag_option' => 0,
                    'one_d_barcode_option' => 0,
                    'two_d_barcode_option' => 1,
                    'logo_option' => 0,
                    'title_option' => 1,
                    'tape_height' => null,
                    "tape_width" => null,
                    'tape_margin_sides' => null,
                    'tape_margin_ends' => null,
                    'tape_text_size_mod' => null,
                    'columns' => 3,
                    'rows' => 10,
                ],
                [
                    'name' => 'Avery L7162 2D Barcode',
                    'label_type' =>'',
                    'page_format' => 'A4',
                    'page_orientation' => 'P',
                    'column1_x' => 13.25,
                    'column2_x' => 301.25,
                    'row1_y' => 37,
                    'row2_y' => 133,
                    'label_width' => 280.8,
                    'label_border' => 0,
                    'label_height' => 96,
                    'barcode_size' => null,
                    'barcode_margin' => 1.6,
                    'title_size' => 4.2,
                    'title_margin' => 1.4,
                    'title_align' => 'L',
                    'field_size' => 4.6,
                    'field_margin' => .3,
                    'label_size' => 2.2,
                    'label_margin' => -.5,
                    'tag_size' => 4.6,
                    'logo_max_width' => null,
                    'logo_margin' => null,
                    'measurement_unit' => 'mm',
                    'margin_top' => 1,
                    'margin_bottom' => 1,
                    'margin_left' => 1,
                    'margin_right' => 1,
                    'fields_supported' => 4,
                    'tag_option' => 1,
                    'tag_position' => 'bottom',
                    'tag_align' => 'R',
                    'one_d_barcode_option' => 0,
                    'two_d_barcode_option' => 1,
                    'logo_option' => 0,
                    'title_option' => 1,
                    'tape_height' => null,
                    "tape_width" => null,
                    'tape_margin_sides' => null,
                    'tape_margin_ends' => null,
                    'tape_text_size_mod' => null,
                    'columns' => 2,
                    'rows' => 8,
                ],
                [
                    'name' => 'Avery L7162 1D Barcode',
                    'label_type' =>'',
                    'page_format' => 'A4',
                    'page_orientation' => 'P',
                    'column1_x' => 13.25,
                    'column2_x' => 301.25,
                    'row1_y' => 37,
                    'row2_y' => 133,
                    'label_width' => 280.8,
                    'label_border' => 0,
                    'label_height' => 96,
                    'barcode_size' => 6,
                    'barcode_margin' => 1.6,
                    'title_size' => 4.2,
                    'title_margin' => 1.2,
                    'title_align' => 'L',
                    'field_size' => 4.2,
                    'field_margin' => .3,
                    'label_size' => 2.2,
                    'label_margin' => -.5,
                    'tag_size' => 3.2,
                    'logo_max_width' => 25,
                    'logo_margin' => 2.2,
                    'measurement_unit' => 'mm',
                    'margin_top' => 1,
                    'margin_bottom' => 1,
                    'margin_left' => 1,
                    'margin_right' => 1,
                    'fields_supported' => 4,
                    'tag_option' => 1,
                    'tag_position' => 'bottom',
                    'tag_align' => 'R',
                    'one_d_barcode_option' => 1,
                    'two_d_barcode_option' => 0,
                    'logo_option' => 0,
                    'title_option' => 1,
                    'tape_height' => null,
                    "tape_width" => null,
                    'tape_margin_sides' => null,
                    'tape_margin_ends' => null,
                    'tape_text_size_mod' => null,
                    'columns' => 2,
                    'rows' => 8,
                ],
                [
                    'name' => 'Avery L163',
                    'label_type' =>'',
                    'page_format' => 'A4',
                    'page_orientation' => 'P',
                    'column1_x' => 13.25,
                    'column2_x' => 301.25,
                    'row1_y' => 43.05,
                    'row2_y' => 151.05,
                    'label_width' => 280.8,
                    'label_border' => 0,
                    'label_height' => 108,
                    'barcode_size' => null,
                    'barcode_margin' => 1.8,
                    'title_size' => 5,
                    'title_margin' => 1.8,
                    'title_align' => 'C',
                    'field_size' => 4.8,
                    'field_margin' => .3,
                    'label_size' => 2.35,
                    'label_margin' => -.3,
                    'tag_size' => 4.8,
                    'logo_max_width' => null,
                    'logo_margin' => null,
                    'measurement_unit' => 'mm',
                    'margin_top' => 1,
                    'margin_bottom' => 1,
                    'margin_left' => 1,
                    'margin_right' => 1,
                    'fields_supported' => 4,
                    'tag_option' => 1,
                    'tag_align' => 'R',
                    'tag_position' => 'bottom',
                    'one_d_barcode_option' => 0,
                    'two_d_barcode_option' => 1,
                    'logo_option' => 0,
                    'title_option' => 1,
                    'tape_height' => null,
                    "tape_width" => null,
                    'tape_margin_sides' => null,
                    'tape_margin_ends' => null,
                    'tape_text_size_mod' => null,
                    'columns' => 2,
                    'rows' => 7,
                ],
                [
                    "name" => "Brother TZE 12mm",
                    'label_type' =>'',
                    "page_format" => null,
                    "page_orientation" => "P",
                    "column1_x" => null,
                    "column2_x" => null,
                    "row1_y" => null,
                    "row2_y" => null,
                    "label_width" => null,
                    "label_border" => null,
                    "label_height" => null,
                    "barcode_size" => 1.00,
                    "barcode_margin" => 0.30,
                    "title_size" => null,
                    "title_margin" => null,
                    "field_size" => null,
                    "field_margin" => null,
                    "label_size" => null,
                    "label_margin" => null,
                    "tag_size" => null,
                    "logo_max_width" => null,
                    "logo_margin" => null,
                    "measurement_unit" => 0.00,
                    "margin_top" => null,
                    "margin_bottom" => null,
                    "margin_left" => null,
                    "margin_right" => null,
                    "fields_supported" => 1,
                    "tag_option" => 1,
                    "one_d_barcode_option" => 1,
                    "two_d_barcode_option" => 0,
                    "logo_option" => 0,
                    "title_option" => 0,
                    "tape_height" => 12.00,
                    "tape_width" => null,
                    "tape_margin_sides" => 3.20,
                    "tape_margin_ends" => 3.20,
                    "tape_text_size_mod" => 1.00,
                    'columns' => null,
                    'rows' => null,
                    'title_align' => null,
                    'tag_position' => null,
                    'tag_align' => null
                ],
                [
                    "name" => "Brother TZE 18mm",
                    'label_type' =>'',
                    "page_format" => null,
                    "page_orientation" => "P",
                    "column1_x" => null,
                    "column2_x" => null,
                    "row1_y" => null,
                    "row2_y" => null,
                    "label_width" => null,
                    "label_border" => null,
                    "label_height" => null,
                    "barcode_size" => 3.20,
                    "barcode_margin" => 0.30,
                    "title_size" => null,
                    "title_margin" => null,
                    "field_size" => null,
                    "field_margin" => null,
                    "label_size" => null,
                    "label_margin" => null,
                    "tag_size" => null,
                    "logo_max_width" => null,
                    "logo_margin" => null,
                    "measurement_unit" => 0.00,
                    "margin_top" => null,
                    "margin_bottom" => null,
                    "margin_left" => null,
                    "margin_right" => null,
                    "fields_supported" => 1,
                    "tag_option" => 1,
                    "one_d_barcode_option" => 1,
                    "two_d_barcode_option" => 0,
                    "logo_option" => 0,
                    "title_option" => 0,
                    "tape_height" => 18.00,
                    "tape_width" => 50.00,
                    "tape_margin_sides" => 3.20,
                    "tape_margin_ends" => 3.20,
                    "tape_text_size_mod" => 1.00,
                    'columns' => null,
                    'rows' => null,
                    'title_align' => null,
                    'tag_position' => null,
                    'tag_align' => null
                ],
                [
                    "name" => "Brother TZE 24mm",
                    'label_type' =>'',
                    "page_format" => null,
                    "page_orientation" => "P",
                    "column1_x" => null,
                    "column2_x" => null,
                    "row1_y" => null,
                    "row2_y" => null,
                    "label_width" => null,
                    "label_border" => null,
                    "label_height" => null,
                    "barcode_size" => null,
                    "barcode_margin" => 1.40,
                    "title_size" => 0.50,
                    "title_margin" => null,
                    "field_size" => 3.20,
                    "field_margin" => 0.15,
                    "label_size" => 2.00,
                    "label_margin" => -0.35,
                    "tag_size" => 2.80,
                    "logo_max_width" => null,
                    "logo_margin" => null,
                    "measurement_unit" => 0.00,
                    "margin_top" => null,
                    "margin_bottom" => null,
                    "margin_left" => null,
                    "margin_right" => null,
                    "fields_supported" => 3,
                    "tag_option" => 1,
                    "one_d_barcode_option" => 0,
                    "two_d_barcode_option" => 1,
                    "logo_option" => 0,
                    "title_option" => 1,
                    "tape_height" => 24.00,
                    "tape_width" => 65.00,
                    "tape_margin_sides" => 3.20,
                    "tape_margin_ends" => 3.20,
                    "tape_text_size_mod" => null,
                    'columns' => null,
                    'rows' => null,
                    'title_align' => null,
                    'tag_position' => null,
                    'tag_align' => null
                ],
                [
                    "name" => "Dymo Label Writer 30252",
                    'label_type' =>'',
                    "page_format" => null,
                    "page_orientation" => "P",
                    "column1_x" => null,
                    "column2_x" => null,
                    "row1_y" => null,
                    "row2_y" => null,
                    "label_width" => null,
                    "label_border" => null,
                    "label_height" => null,
                    "barcode_size" => null,
                    "barcode_margin" => 1.80,
                    "title_size" => 2.00,
                    "title_margin" => null,
                    "field_size" => 3.20,
                    "field_margin" => 0.15,
                    "label_size" => 2.00,
                    "label_margin" => -0.35,
                    "tag_size" => 2.80,
                    "logo_max_width" => 2.00,
                    "logo_margin" => 0.17,
                    "measurement_unit" => 0.00,
                    "margin_top" => null,
                    "margin_bottom" => null,
                    "margin_left" => null,
                    "margin_right" => null,
                    "fields_supported" => 3,
                    "tag_option" => 1,
                    "one_d_barcode_option" => 1,
                    "two_d_barcode_option" => 1,
                    "logo_option" => 0,
                    "title_option" => 1,
                    "tape_height" => 1.15,
                    "tape_width" => 96.52,
                    "tape_margin_sides" => 0.10,
                    "tape_margin_ends" => 0.10,
                    "tape_text_size_mod" => null,
                    'columns' => null,
                    'rows' => null,
                    'title_align' => null,
                    'tag_position' => null,
                    'tag_align' => null
                ],
                [
                    "name" => "Dymo Label Writer 1933081",
                    'label_type' =>'',
                    "page_format" => null,
                    "page_orientation" => "P",
                    "column1_x" => null,
                    "column2_x" => null,
                    "row1_y" => null,
                    "row2_y" => null,
                    "label_width" => null,
                    "label_border" => null,
                    "label_height" => null,
                    "barcode_size" => null,
                    "barcode_margin" => 1.80,
                    "title_size" => 2.80,
                    "title_margin" => 0.50,
                    "field_size" => 2.80,
                    "field_margin" => 0.15,
                    "label_size" => 2.80,
                    "label_margin" => -0.35,
                    "tag_size" => 2.80,
                    "logo_max_width" => 5.61,
                    "logo_margin" => 0.01,
                    "measurement_unit" => 0.00,
                    "margin_top" => null,
                    "margin_bottom" => null,
                    "margin_left" => null,
                    "margin_right" => null,
                    "fields_supported" => 5,
                    "tag_option" => 1,
                    "one_d_barcode_option" => 1,
                    "two_d_barcode_option" => 1,
                    "logo_option" => 0,
                    "title_option" => 1,
                    "tape_height" => 25.00,
                    "tape_width" => 89.00,
                    "tape_margin_sides" => 0.10,
                    "tape_margin_ends" => 0.10,
                    "tape_text_size_mod" => null,
                    'columns' => null,
                    'rows' => null,
                    'title_align' => null,
                    'tag_position' => null,
                    'tag_align' => null
                ],
                [
                    "name" => "Dymo Label Writer 2112283",
                    'label_type' =>'',
                    "page_format" => null,
                    "page_orientation" => "P",
                    "column1_x" => null,
                    "column2_x" => null,
                    "row1_y" => null,
                    "row2_y" => null,
                    "label_width" => null,
                    "label_border" => null,
                    "label_height" => null,
                    "barcode_size" => null,
                    "barcode_margin" => 1.80,
                    "title_size" => 2.80,
                    "title_margin" => 0.50,
                    "field_size" => 2.80,
                    "field_margin" => 0.15,
                    "label_size" => 2.80,
                    "label_margin" => -0.35,
                    "tag_size" => 2.80,
                    "logo_max_width" => null,
                    "logo_margin" => null,
                    "measurement_unit" => 0.00,
                    "margin_top" => null,
                    "margin_bottom" => null,
                    "margin_left" => null,
                    "margin_right" => null,
                    "fields_supported" => 5,
                    "tag_option" => 1,
                    "one_d_barcode_option" => 1,
                    "two_d_barcode_option" => 1,
                    "logo_option" => 0,
                    "title_option" => 1,
                    "tape_height" => 54.00,
                    "tape_width" => 25.00,
                    "tape_margin_sides" => 0.10,
                    "tape_margin_ends" => 0.10,
                    "tape_text_size_mod" => null,
                    'columns' => null,
                    'rows' => null,
                    'title_align' => null,
                    'tag_position' => null,
                    'tag_align' => null
                ]
            ];
        DB::table('label_templates')->insert($defaults);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('label_templates');
    }
}
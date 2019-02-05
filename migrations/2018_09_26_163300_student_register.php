<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentRegister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $date = new DateTime();
        $unixTimeStamp = $date->getTimestamp();
        /*
        |--------------------------------------------------------------------------
        | Student Family ID
        |--------------------------------------------------------------------------
        */
        Schema::connection('main')->create('student_family_id', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('family_code')->unsigned()->unique();
            $table->integer('address_type_id')->unsigned()->default(1);
            $table->integer('address_id')->unsigned()->default(1);

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('main')->table('student_family_id', function (Blueprint $table) {
            $table->foreign('address_type_id')->references('id')->on('_z_address_type');
            $table->foreign('address_id')->references('id')->on('_z_address');
        });
        DB::connection('main')->table('student_family_id')->insert([
            [
                'family_code' => '180001',
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ]
        ]);
        /*
        |--------------------------------------------------------------------------
        | Student Family Register
        |--------------------------------------------------------------------------
        */
        Schema::connection('main')->create('student_family', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name', 99)->nullable();
            $table->string('first_name', 49)->default('');
            $table->string('last_name', 49)->default('');
            $table->integer('relationship_id')->unsigned();
            $table->integer('marital_status_id')->unsigned()->default(1);
            $table->string('nationality', 99)->default('');
            $table->integer('family_id')->unsigned();

            $table->string('mobile_phone', 99)->default('');
            $table->string('email', 99)->default('');
            $table->string('nic', 99)->unique();

            $table->string('card_code', 99)->unique();
            $table->string('image', 99)->default('');
            $table->integer('profession_id')->unsigned()->default(1);

            $table->integer('q1')->unsigned()->default(1);
            $table->integer('q2')->unsigned()->default(1);
            $table->integer('w1')->unsigned()->default(1);

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('main')->table('student_family', function (Blueprint $table) {
            $table->foreign('relationship_id')->references('id')->on('_z_family_relationship');
            $table->foreign('marital_status_id')->references('id')->on('_z_marital_status');
            $table->foreign('family_id')->references('id')->on('student_family_id');
            $table->foreign('profession_id')->references('id')->on('_z_single_data');
            $table->foreign('q1')->references('id')->on('_z_qualification');
            $table->foreign('q2')->references('id')->on('_z_qualification');
            $table->foreign('w1')->references('id')->on('_z_work_detail');
        });
        DB::connection('main')->table('student_family')->insert([
            [
                'name' => 'Atif Naseem',
                'relationship_id' => 2,
                'marital_status_id' => 2,
                'family_id' => 1,
                'card_code' => "1",
                'nic' => '42101-1666',
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Hina Atif',
                'relationship_id' => 3,
                'marital_status_id' => 2,
                'family_id' => 1,
                'card_code' => "2",
                'nic' => '42101-1677',
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ]
        ]);
        /*
        |--------------------------------------------------------------------------
        | Student Register
        |--------------------------------------------------------------------------
        */
        Schema::connection('main')->create('student_register', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('reg_id')->unsigned()->unique();
            $table->string('name', 99);
            $table->string('abridged_name', 18)->default('');
            $table->string('call_name', 10)->default('');
            $table->string('first_name', 49)->default('');
            $table->string('last_name', 49)->default('');
            $table->enum('gender', ['g', 'b']);
            $table->date('dob');
            $table->string('nationality', 99)->default('');
            $table->integer('religion_id')->unsigned()->default(2);
            $table->integer('campus_id')->unsigned()->default(1);
            $table->integer('academic_session_id')->unsigned();
            $table->integer('academic_grade_id')->unsigned();
            $table->string('previous_school_name', 49)->default('');
            $table->string('image', 99)->default('');

            $table->string('mobile_phone', 99)->default('');
            $table->string('email', 99)->default('');
            $table->string('facebook', 99)->default('');
            $table->string('linkedin', 99)->default('');

            $table->integer('family_id')->unsigned();
            $table->integer('status_id')->unsigned()->default(2);
            $table->integer('sibling_no')->unsigned()->default(0);
            $table->integer('active_sibling_no')->unsigned()->default(0);

            $table->string('card_code', 99)->unique();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('main')->table('student_register', function (Blueprint $table) {
            $table->foreign('campus_id')->references('id')->on('organization');
            $table->foreign('academic_session_id')->references('id')->on('_academic_session');
            $table->foreign('academic_grade_id')->references('id')->on('_academic_grade');
            $table->foreign('family_id')->references('id')->on('student_family_id');
            $table->foreign('status_id')->references('id')->on('_academic_status');
            $table->foreign('religion_id')->references('id')->on('_z_single_data');
        });
        DB::connection('main')->table('student_register')->insert([
            [
                'reg_id' => '180001',
                'name' => 'S Atif',
                'abridged_name' => 'S Atif',
                'call_name' => 'S',
                'gender' => 'b',
                'dob' => '2013-11-20',
                'academic_session_id' => 1,
                'academic_grade_id' => 7,
                'family_id' => 1,
                'card_code' => '18-0001',
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'reg_id' => '180002',
                'name' => 'D Atif',
                'abridged_name' => 'D Atif',
                'call_name' => 'D',
                'gender' => 'b',
                'dob' => '2017-05-20',
                'academic_session_id' => 1,
                'academic_grade_id' => 6,
                'family_id' => 1,
                'card_code' => '18-0002',
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ]
        ]);
        /*
        |--------------------------------------------------------------------------
        | Student Emergency Contact
        |--------------------------------------------------------------------------
        */
        Schema::connection('main')->create('student_emergency_contact', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name', 49)->default('');
            $table->integer('family_id')->unsigned()->default(1);
            $table->integer('relationship_id')->unsigned();
            $table->integer('address_type_id')->unsigned()->default(1);
            $table->integer('address_id')->unsigned()->default(1);

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('main')->table('student_emergency_contact', function (Blueprint $table) {
            $table->foreign('family_id')->references('id')->on('student_family_id');
            $table->foreign('relationship_id')->references('id')->on('_z_family_relationship');
            $table->foreign('address_type_id')->references('id')->on('_z_address_type');
            $table->foreign('address_id')->references('id')->on('_z_address');
        });
        DB::connection('main')->table('student_emergency_contact')->insert([
            [
                'name' => 'Atif Naseem',
                'family_id' => 1,
                'relationship_id' => 2,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Student Academic Record
        |--------------------------------------------------------------------------
        */
        Schema::connection('main')->create('student_academic_record', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('campus_id')->unsigned()->default(1);
            $table->integer('academic_session_id')->unsigned();
            $table->integer('grade_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('house_id')->unsigned();
            // N - New
            // D - Detain
            // P - Promote
            $table->enum('entry', ['N', 'D', 'P']);

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->unique(['student_id', 'academic_session_id']);
            $table->engine = 'InnoDB';
        });
        Schema::connection('main')->table('student_academic_record', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('student_register');
            $table->foreign('campus_id')->references('id')->on('organization');
            $table->foreign('academic_session_id')->references('id')->on('_academic_session');
            $table->foreign('grade_id')->references('id')->on('_academic_grade');
            $table->foreign('section_id')->references('id')->on('_academic_section');
            $table->foreign('house_id')->references('id')->on('_academic_house');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('main')->drop('student_academic_record');
        Schema::connection('main')->drop('student_family_id');
        Schema::connection('main')->drop('student_family');
        Schema::connection('main')->drop('student_register');
        Schema::connection('main')->drop('student_emergency_contact');
    }
}

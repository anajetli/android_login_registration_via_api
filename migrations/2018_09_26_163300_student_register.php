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
        | Marital Status
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_marital_status', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name', 99);
            $table->text('description');
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        $position = 1;
        DB::connection('mysql')->table('_z_marital_status')->insert([
            [
                'name' => 'Undefined',
                'description' => '',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Married',
                'description' => 'This category includes persons whose opposite- or same-sex spouse is living, unless the couple is separated or a divorce has been obtained. Also included are persons in civil unions.',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Widowed',
                'description' => 'This category includes persons who have lost their legally-married spouse through death and have not remarried. Those who live with a common-law partner are included in this category.',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Separated',
                'description' => 'This category includes persons currently legally married but who are no longer living with their spouse (for any reason other than illness, work or school) and have not obtained a divorce. Those who live with a common-law partner are included in this category.',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Divorced',
                'description' => 'This category includes persons who have obtained a legal divorce and have not remarried. Those who live with a common-law partner are included in this category.',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Single',
                'description' => 'This category includes persons who have never married (including all persons less than 15 years of age). It also includes persons whose marriage has been legally annulled who were single before the annulled marriage and who have not remarried. Those who live with a common-law partner are included in this category.',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ]
        ]);
        /*
        |--------------------------------------------------------------------------
        | Family Relationship
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_family_relationship', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name', 99);
            $table->string('description')->default('');
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        $position = 1;
        DB::connection('mysql')->table('_z_family_relationship')->insert([
            [
                'name' => 'Undefined',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Father',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Mother',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Guardian',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Grandfather',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Grandmother',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Uncle',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Aunt',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Brother',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Sister',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Brother-in-law',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Sister-in-law',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Niece',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Nephew',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ]
        ]);

        /*
        |--------------------------------------------------------------------------
        | Data Single Type
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_single_category', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name', 99);
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        $position = 1;
        DB::connection('mysql')->table('_z_single_category')->insert([
            [
                'name' => 'Religion',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Profession',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Speciality',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Qualification Level',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Qualification Title',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Institute',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Organization',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Department',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Designation',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        Schema::connection('mysql')->create('_z_single_data', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('single_category_id')->unsigned();
            $table->string('name', 99);
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_single_data', function (Blueprint $table) {
            $table->foreign('single_category_id')->references('id')->on('_z_single_category');
        });
        $position = 1;
        DB::connection('mysql')->table('_z_single_data')->insert([
            [
                'single_category_id' => 1,
                'name' => 'Undefined',
                'position' => $position,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ]
        ]);
        $position = 1;
        DB::connection('mysql')->table('_z_single_data')->insert([
            [
                'single_category_id' => 1,
                'name' => 'Islam',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'single_category_id' => 1,
                'name' => 'Christian',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'single_category_id' => 1,
                'name' => 'Hindu',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'single_category_id' => 1,
                'name' => 'Jew',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        $position = 0;
        $names = array(
        'Abstractor', 'Accounting Technician', 'Actor/Actress', 'Actuary', 'Acupuncturist', 'Advertising Account Manager', 'Advertising Copywriter', 'Advice Worker', 'Aeronautical Engineer', 'Agricultural Consultant/Adviser', 'Aid Worker/Humanitarian Worker', 'Air Cabin Crew', 'Air Traffic Controller', 'Airline Pilot', 'Analytical Chemist', 'Animal Breeder', 'Animator', 'Antiques Dealer', 'Arboriculturalist', 'Archaeologist', 'Architect', 'Archivist', 'Aromatherapist', 'Art Gallery Manager', 'Arts Administrator', 'Arts Agent/Promoter', 'Arts Therapist', 'Audiologist', 'Auditor', 'Automotive Engineer',
        'Banker, Commercial/Corporate Lending', 'Banker, Investment, Corporate Finance', 'Barrister', 'Betting Shop Manager', 'Bilingual Secretary', 'Biochemical Engineer', 'Biochemist', 'Biomedical Engineer', 'Biomedical Scientist', 'Biotechnologist', 'Bookseller', 'Broadcaster', 'Building Services Engineer', 'Building Surveyor',
        'Call Centre Manager', 'Careers Adviser', 'Cartographer', 'Catering Manager', 'Charity Officer', 'Chartered Accountant', 'Chartered Loss Adjuster', 'Chemical Development Engineer', 'Chiropractor', 'Choreographer', 'Cinema Manager', 'Civil Engineer', 'Civil Service Administrator/Manager', 'Clerical Assistant', 'Clinical Cytogeneticist', 'Clinical Researcher', 'Clothing/Textile Technologist', 'Commissioning Engineer', 'Commodity Broker', 'Communications Engineer', 'Community Arts Worker', 'Community Education Officer', 'Community Welfare Officer', 'Community Worker/Community Development Worker', 'Community/Retail Pharmacist', 'Company Secretary', 'Composer', 'Conference/Event Organiser', 'Conservator/Restorer', 'Consulting Engineer', 'Counsellor', 'Credit Analyst', 'Curator', 'Customs Officer',
        'Database Administrator', 'Defence Forces', 'Dentist', 'Designer, Industrial Products', 'Designer/Maker', 'Dietician/Nutritionist', 'Diplomat', 'Doctor/Gp', 'Economist', 'Editor', 'Electrical Engineer', 'Electronic Engineer', 'Emergency Medical Technician (Paramedic)', 'Engineer, Manufacturing And Production', 'Engineer, Quality', 'Environmental Health Officer', 'Ergonomist', 'Estate Agent', 'Exhibition Organiser/Event Manager', 'Farm Manager', 'Fashion Designer', 'Field Trials Officer', 'Film/Tv Producer', 'Financial Accountant', 'Financial Regulator', 'Fine Artist', 'Firefighter', 'Fitness/Leisure Centre Manager', 'Forensic Scientist', 'Forestry Management', 'Fundraising Manager (Charity)', 'Furniture Designer', 'Geologist, Engineering', 'Geophysicist, Exploration', 'Graphic Designer', 'Guidance Counsellor, Second Level', 'Health And Safety Inspector', 'Health Education/Promotion Officer', 'Horticultural Consultant', 'Hotel Manager', 'Housing Manager/Officer', 'Human Resources Manager', 'Illustrator', 'Immigration Officer, Passport Control', 'Information Officer', 'Insurance Broker, Sales', 'Interior Designer', 'Interpreter', 'Investment Fund Administrator', 'Investment Fund Manager', 'It Project Manager', 'Journalist', 'Lecturer, Third Level', 'Legal Executive', 'Librarian', 'Loss Adjuster, Chartered', 'Make-Up Artist', 'Management Accountant', 'Management Consultant', 'Manager, Health Service', 'Market Researcher', 'Marketing Executive', 'Mechanical Engineer', 'Media Buyer/Planner', 'Medical Laboratory Scientist', 'Meteorologist', 'Microbiologist, Clinical', 'Midwife', 'Multimedia Designer', 'Museum Education Officer', 'Nature Conservation Officer', 'Network Engineer', 'Nurse', 'Occupational Hygienist', 'Occupational Psychologist', 'Occupational Therapist', 'Oceanographer', 'Optometrist', 'Patent Agent/Examiner', 'Personal Assistant/Secretary', 'Petroleum Engineer', 'Pharmacist (Hospital)', 'Pharmacologist', 'Photographer', 'Physicist', 'Physiotherapist', 'Picture Researcher/Editor', 'Police Officer/An Garda Síochána', 'Political Lobbyist', 'Presenter, Radio And Television', 'Print Production Manager/Assistant', 'Printmaker', 'Prison Officer', 'Probation And Welfare Officer', 'Production Manager/Planner', 'Programmer/Software Developer', 'Psychologist, Clinical', 'Psychologist, Educational', 'Psychologist, Sports', 'Psychotherapist', 'Public Relations Officer', 'Quality Assurance Manager', 'Quantity Surveyor', 'Radio Production', 'Radiographer, Diagnostic', 'Radiographer, Therapeutic', 'Records Manager', 'Recruitment Consultant', 'Recycling/Waste Disposal Officer', 'Retail Banker', 'Retail Buyer', 'Retail Manager', 'Retail Merchandiser', 'Risk Manager', 'Sales Executive', 'Scientist, Industrial R&D', 'Scientist, Quality Control', 'Scientist, Research', 'Social Researcher', 'Social Worker', 'Soil Scientist', 'Solicitor', 'Speech And Language Therapist', 'Sports Development Officer', 'Stage Manager, Theatre', 'Statistician', 'Stockbroker/Portfolio Manager', 'Structural Engineer', 'Systems Analyst/Business Analyst', 'Tax Adviser/Consultant', 'Tax Officer/Inspector', 'Teacher', 'Teacher, English As A Foreign Language', 'Teacher, Learning Support', 'Teacher, Primary Level', 'Teacher, Second Level', 'Teacher, Special Education', 'Technical Sales', 'Technical Sales Engineer', 'Technical Support', 'Telecommunications Engineer', 'Theatre Lighting Technician', 'Tourism Officer', 'Town Planner', 'Toxicologist', 'Training And Development Officer/Manager', 'Translator', 'Transport/Logistics Manager', 'Travel Agent', 'Veterinary Surgeon/Nurse', 'Web Developer', 'Writer, Radio/Tv/Film', 'Youth Worker'
        );
        $dataArray = array();
        foreach($names as $name){
            $dataArray[$position] = array(
                'single_category_id' => 2,
                'name' => $name,
                'position' => ($position++ + 1),
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            );
        }
        DB::connection('mysql')->table('_z_single_data')->insert($dataArray);
        /*
        |--------------------------------------------------------------------------
        | Country
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_country', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('iso', 6)->unique();
            $table->string('name', 99)->default('');
            $table->string('dname', 99)->default('');
            $table->string('iso3', 9)->unique();
            $table->integer('position')->unsigned();
            $table->smallInteger('numcode');
            $table->mediumInteger('phonecode');

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        $position = 1;
        DB::connection('mysql')->table('_z_country')->insert([
            ['iso' => 'XX', 'name' => 'UNKNOWN', 'dname' => 'Unknown', 'iso3' => 'XX', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AF', 'name' => 'AFGHANISTAN', 'dname' => 'Afghanistan', 'iso3' => 'AFG', 'numcode' => 4, 'phonecode' => 93, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AL', 'name' => 'ALBANIA', 'dname' => 'Albania', 'iso3' => 'ALB', 'numcode' => 8, 'phonecode' => 355, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'DZ', 'name' => 'ALGERIA', 'dname' => 'Algeria', 'iso3' => 'DZA', 'numcode' => 12, 'phonecode' => 213, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AS', 'name' => 'AMERICAN SAMOA', 'dname' => 'American Samoa', 'iso3' => 'ASM', 'numcode' => 16, 'phonecode' => 1684, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AD', 'name' => 'ANDORRA', 'dname' => 'Andorra', 'iso3' => 'AND', 'numcode' => 20, 'phonecode' => 376, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AO', 'name' => 'ANGOLA', 'dname' => 'Angola', 'iso3' => 'AGO', 'numcode' => 24, 'phonecode' => 244, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AI', 'name' => 'ANGUILLA', 'dname' => 'Anguilla', 'iso3' => 'AIA', 'numcode' => 660, 'phonecode' => 1264, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AQ', 'name' => 'ANTARCTICA', 'dname' => 'Antarctica', 'iso3' => 'AQ', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AG', 'name' => 'ANTIGUA AND BARBUDA', 'dname' => 'Antigua and Barbuda', 'iso3' => 'ATG', 'numcode' => 28, 'phonecode' => 1268, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AR', 'name' => 'ARGENTINA', 'dname' => 'Argentina', 'iso3' => 'ARG', 'numcode' => 32, 'phonecode' => 54, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AM', 'name' => 'ARMENIA', 'dname' => 'Armenia', 'iso3' => 'ARM', 'numcode' => 51, 'phonecode' => 374, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AW', 'name' => 'ARUBA', 'dname' => 'Aruba', 'iso3' => 'ABW', 'numcode' => 533, 'phonecode' => 297, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AU', 'name' => 'AUSTRALIA', 'dname' => 'Australia', 'iso3' => 'AUS', 'numcode' => 36, 'phonecode' => 61, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AT', 'name' => 'AUSTRIA', 'dname' => 'Austria', 'iso3' => 'AUT', 'numcode' => 40, 'phonecode' => 43, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AZ', 'name' => 'AZERBAIJAN', 'dname' => 'Azerbaijan', 'iso3' => 'AZE', 'numcode' => 31, 'phonecode' => 994, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BS', 'name' => 'BAHAMAS', 'dname' => 'Bahamas', 'iso3' => 'BHS', 'numcode' => 44, 'phonecode' => 1242, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BH', 'name' => 'BAHRAIN', 'dname' => 'Bahrain', 'iso3' => 'BHR', 'numcode' => 48, 'phonecode' => 973, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BD', 'name' => 'BANGLADESH', 'dname' => 'Bangladesh', 'iso3' => 'BGD', 'numcode' => 50, 'phonecode' => 880, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BB', 'name' => 'BARBADOS', 'dname' => 'Barbados', 'iso3' => 'BRB', 'numcode' => 52, 'phonecode' => 1246, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BY', 'name' => 'BELARUS', 'dname' => 'Belarus', 'iso3' => 'BLR', 'numcode' => 112, 'phonecode' => 375, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BE', 'name' => 'BELGIUM', 'dname' => 'Belgium', 'iso3' => 'BEL', 'numcode' => 56, 'phonecode' => 32, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BZ', 'name' => 'BELIZE', 'dname' => 'Belize', 'iso3' => 'BLZ', 'numcode' => 84, 'phonecode' => 501, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BJ', 'name' => 'BENIN', 'dname' => 'Benin', 'iso3' => 'BEN', 'numcode' => 204, 'phonecode' => 229, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BM', 'name' => 'BERMUDA', 'dname' => 'Bermuda', 'iso3' => 'BMU', 'numcode' => 60, 'phonecode' => 1441, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BT', 'name' => 'BHUTAN', 'dname' => 'Bhutan', 'iso3' => 'BTN', 'numcode' => 64, 'phonecode' => 975, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BO', 'name' => 'BOLIVIA', 'dname' => 'Bolivia', 'iso3' => 'BOL', 'numcode' => 68, 'phonecode' => 591, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BA', 'name' => 'BOSNIA AND HERZEGOVINA', 'dname' => 'Bosnia and Herzegovina', 'iso3' => 'BIH', 'numcode' => 70, 'phonecode' => 387, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BW', 'name' => 'BOTSWANA', 'dname' => 'Botswana', 'iso3' => 'BWA', 'numcode' => 72, 'phonecode' => 267, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BV', 'name' => 'BOUVET ISLAND', 'dname' => 'Bouvet Island', 'iso3' => 'BV', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BR', 'name' => 'BRAZIL', 'dname' => 'Brazil', 'iso3' => 'BRA', 'numcode' => 76, 'phonecode' => 55, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IO', 'name' => 'BRITISH INDIAN OCEAN TERRITORY', 'dname' => 'British Indian Ocean Territory', 'iso3' => 'IO', 'numcode' => 0, 'phonecode' => 246, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BN', 'name' => 'BRUNEI DARUSSALAM', 'dname' => 'Brunei Darussalam', 'iso3' => 'BRN', 'numcode' => 96, 'phonecode' => 673, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BG', 'name' => 'BULGARIA', 'dname' => 'Bulgaria', 'iso3' => 'BGR', 'numcode' => 100, 'phonecode' => 359, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BF', 'name' => 'BURKINA FASO', 'dname' => 'Burkina Faso', 'iso3' => 'BFA', 'numcode' => 854, 'phonecode' => 226, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'BI', 'name' => 'BURUNDI', 'dname' => 'Burundi', 'iso3' => 'BDI', 'numcode' => 108, 'phonecode' => 257, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KH', 'name' => 'CAMBODIA', 'dname' => 'Cambodia', 'iso3' => 'KHM', 'numcode' => 116, 'phonecode' => 855, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CM', 'name' => 'CAMEROON', 'dname' => 'Cameroon', 'iso3' => 'CMR', 'numcode' => 120, 'phonecode' => 237, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CA', 'name' => 'CANADA', 'dname' => 'Canada', 'iso3' => 'CAN', 'numcode' => 124, 'phonecode' => 1, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CV', 'name' => 'CAPE VERDE', 'dname' => 'Cape Verde', 'iso3' => 'CPV', 'numcode' => 132, 'phonecode' => 238, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KY', 'name' => 'CAYMAN ISLANDS', 'dname' => 'Cayman Islands', 'iso3' => 'CYM', 'numcode' => 136, 'phonecode' => 1345, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CF', 'name' => 'CENTRAL AFRICAN REPUBLIC', 'dname' => 'Central African Republic', 'iso3' => 'CAF', 'numcode' => 140, 'phonecode' => 236, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TD', 'name' => 'CHAD', 'dname' => 'Chad', 'iso3' => 'TCD', 'numcode' => 148, 'phonecode' => 235, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CL', 'name' => 'CHILE', 'dname' => 'Chile', 'iso3' => 'CHL', 'numcode' => 152, 'phonecode' => 56, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CN', 'name' => 'CHINA', 'dname' => 'China', 'iso3' => 'CHN', 'numcode' => 156, 'phonecode' => 86, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CX', 'name' => 'CHRISTMAS ISLAND', 'dname' => 'Christmas Island', 'iso3' => 'CX', 'numcode' => 0, 'phonecode' => 61, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CC', 'name' => 'COCOS (KEELING) ISLANDS', 'dname' => 'Cocos (Keeling) Islands', 'iso3' => 'CC', 'numcode' => 0, 'phonecode' => 672, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CO', 'name' => 'COLOMBIA', 'dname' => 'Colombia', 'iso3' => 'COL', 'numcode' => 170, 'phonecode' => 57, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KM', 'name' => 'COMOROS', 'dname' => 'Comoros', 'iso3' => 'COM', 'numcode' => 174, 'phonecode' => 269, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CG', 'name' => 'CONGO', 'dname' => 'Congo', 'iso3' => 'COG', 'numcode' => 178, 'phonecode' => 242, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CD', 'name' => 'CONGO', 'dname' => 'Congo', 'iso3' => 'CD', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CK', 'name' => 'COOK ISLANDS', 'dname' => 'Cook Islands', 'iso3' => 'COK', 'numcode' => 184, 'phonecode' => 682, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CR', 'name' => 'COSTA RICA', 'dname' => 'Costa Rica', 'iso3' => 'CRI', 'numcode' => 188, 'phonecode' => 506, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CI', 'name' => 'COTE DIVOIRE', 'dname' => 'Cote DIvoire', 'iso3' => 'CIV', 'numcode' => 384, 'phonecode' => 225, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'HR', 'name' => 'CROATIA', 'dname' => 'Croatia', 'iso3' => 'HRV', 'numcode' => 191, 'phonecode' => 385, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CU', 'name' => 'CUBA', 'dname' => 'Cuba', 'iso3' => 'CUB', 'numcode' => 192, 'phonecode' => 53, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CY', 'name' => 'CYPRUS', 'dname' => 'Cyprus', 'iso3' => 'CYP', 'numcode' => 196, 'phonecode' => 357, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CZ', 'name' => 'CZECH REPUBLIC', 'dname' => 'Czech Republic', 'iso3' => 'CZE', 'numcode' => 203, 'phonecode' => 420, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'DK', 'name' => 'DENMARK', 'dname' => 'Denmark', 'iso3' => 'DNK', 'numcode' => 208, 'phonecode' => 45, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'DJ', 'name' => 'DJIBOUTI', 'dname' => 'Djibouti', 'iso3' => 'DJI', 'numcode' => 262, 'phonecode' => 253, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'DM', 'name' => 'DOMINICA', 'dname' => 'Dominica', 'iso3' => 'DMA', 'numcode' => 212, 'phonecode' => 1767, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'DO', 'name' => 'DOMINICAN REPUBLIC', 'dname' => 'Dominican Republic', 'iso3' => 'DOM', 'numcode' => 214, 'phonecode' => 1809, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'EC', 'name' => 'ECUADOR', 'dname' => 'Ecuador', 'iso3' => 'ECU', 'numcode' => 218, 'phonecode' => 593, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'EG', 'name' => 'EGYPT', 'dname' => 'Egypt', 'iso3' => 'EGY', 'numcode' => 818, 'phonecode' => 20, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SV', 'name' => 'EL SALVADOR', 'dname' => 'El Salvador', 'iso3' => 'SLV', 'numcode' => 222, 'phonecode' => 503, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GQ', 'name' => 'EQUATORIAL GUINEA', 'dname' => 'Equatorial Guinea', 'iso3' => 'GNQ', 'numcode' => 226, 'phonecode' => 240, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ER', 'name' => 'ERITREA', 'dname' => 'Eritrea', 'iso3' => 'ERI', 'numcode' => 232, 'phonecode' => 291, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'EE', 'name' => 'ESTONIA', 'dname' => 'Estonia', 'iso3' => 'EST', 'numcode' => 233, 'phonecode' => 372, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ET', 'name' => 'ETHIOPIA', 'dname' => 'Ethiopia', 'iso3' => 'ETH', 'numcode' => 231, 'phonecode' => 251, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'FK', 'name' => 'FALKLAND ISLANDS (MALVINAS)', 'dname' => 'Falkland Islands (Malvinas)', 'iso3' => 'FLK', 'numcode' => 238, 'phonecode' => 500, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'FO', 'name' => 'FAROE ISLANDS', 'dname' => 'Faroe Islands', 'iso3' => 'FRO', 'numcode' => 234, 'phonecode' => 298, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'FJ', 'name' => 'FIJI', 'dname' => 'Fiji', 'iso3' => 'FJI', 'numcode' => 242, 'phonecode' => 679, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'FI', 'name' => 'FINLAND', 'dname' => 'Finland', 'iso3' => 'FIN', 'numcode' => 246, 'phonecode' => 358, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'FR', 'name' => 'FRANCE', 'dname' => 'France', 'iso3' => 'FRA', 'numcode' => 250, 'phonecode' => 33, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GF', 'name' => 'FRENCH GUIANA', 'dname' => 'French Guiana', 'iso3' => 'GUF', 'numcode' => 254, 'phonecode' => 594, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PF', 'name' => 'FRENCH POLYNESIA', 'dname' => 'French Polynesia', 'iso3' => 'PYF', 'numcode' => 258, 'phonecode' => 689, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TF', 'name' => 'FRENCH SOUTHERN TERRITORIES', 'dname' => 'French Southern Territories', 'iso3' => 'TF', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GA', 'name' => 'GABON', 'dname' => 'Gabon', 'iso3' => 'GAB', 'numcode' => 266, 'phonecode' => 241, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GM', 'name' => 'GAMBIA', 'dname' => 'Gambia', 'iso3' => 'GMB', 'numcode' => 270, 'phonecode' => 220, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GE', 'name' => 'GEORGIA', 'dname' => 'Georgia', 'iso3' => 'GEO', 'numcode' => 268, 'phonecode' => 995, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'DE', 'name' => 'GERMANY', 'dname' => 'Germany', 'iso3' => 'DEU', 'numcode' => 276, 'phonecode' => 49, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GH', 'name' => 'GHANA', 'dname' => 'Ghana', 'iso3' => 'GHA', 'numcode' => 288, 'phonecode' => 233, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GI', 'name' => 'GIBRALTAR', 'dname' => 'Gibraltar', 'iso3' => 'GIB', 'numcode' => 292, 'phonecode' => 350, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GR', 'name' => 'GREECE', 'dname' => 'Greece', 'iso3' => 'GRC', 'numcode' => 300, 'phonecode' => 30, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GL', 'name' => 'GREENLAND', 'dname' => 'Greenland', 'iso3' => 'GRL', 'numcode' => 304, 'phonecode' => 299, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GD', 'name' => 'GRENADA', 'dname' => 'Grenada', 'iso3' => 'GRD', 'numcode' => 308, 'phonecode' => 1473, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GP', 'name' => 'GUADELOUPE', 'dname' => 'Guadeloupe', 'iso3' => 'GLP', 'numcode' => 312, 'phonecode' => 590, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GU', 'name' => 'GUAM', 'dname' => 'Guam', 'iso3' => 'GUM', 'numcode' => 316, 'phonecode' => 1671, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GT', 'name' => 'GUATEMALA', 'dname' => 'Guatemala', 'iso3' => 'GTM', 'numcode' => 320, 'phonecode' => 502, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GN', 'name' => 'GUINEA', 'dname' => 'Guinea', 'iso3' => 'GIN', 'numcode' => 324, 'phonecode' => 224, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GW', 'name' => 'GUINEA-BISSAU', 'dname' => 'Guinea-Bissau', 'iso3' => 'GNB', 'numcode' => 624, 'phonecode' => 245, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GY', 'name' => 'GUYANA', 'dname' => 'Guyana', 'iso3' => 'GUY', 'numcode' => 328, 'phonecode' => 592, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'HT', 'name' => 'HAITI', 'dname' => 'Haiti', 'iso3' => 'HTI', 'numcode' => 332, 'phonecode' => 509, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'HM', 'name' => 'HEARD ISLAND AND MCDONALD ISLANDS', 'dname' => 'Heard Island and Mcdonald Islands', 'iso3' => 'HM', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'VA', 'name' => 'HOLY SEE (VATICAN CITY STATE)', 'dname' => 'Holy See (Vatican City State)', 'iso3' => 'VAT', 'numcode' => 336, 'phonecode' => 39, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'HN', 'name' => 'HONDURAS', 'dname' => 'Honduras', 'iso3' => 'HND', 'numcode' => 340, 'phonecode' => 504, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'HK', 'name' => 'HONG KONG', 'dname' => 'Hong Kong', 'iso3' => 'HKG', 'numcode' => 344, 'phonecode' => 852, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'HU', 'name' => 'HUNGARY', 'dname' => 'Hungary', 'iso3' => 'HUN', 'numcode' => 348, 'phonecode' => 36, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IS', 'name' => 'ICELAND', 'dname' => 'Iceland', 'iso3' => 'ISL', 'numcode' => 352, 'phonecode' => 354, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IN', 'name' => 'INDIA', 'dname' => 'India', 'iso3' => 'IND', 'numcode' => 356, 'phonecode' => 91, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ID', 'name' => 'INDONESIA', 'dname' => 'Indonesia', 'iso3' => 'IDN', 'numcode' => 360, 'phonecode' => 62, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IR', 'name' => 'IRAN', 'dname' => 'Iran', 'iso3' => 'IR', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IQ', 'name' => 'IRAQ', 'dname' => 'Iraq', 'iso3' => 'IRQ', 'numcode' => 368, 'phonecode' => 964, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IE', 'name' => 'IRELAND', 'dname' => 'Ireland', 'iso3' => 'IRL', 'numcode' => 372, 'phonecode' => 353, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IL', 'name' => 'ISRAEL', 'dname' => 'Israel', 'iso3' => 'ISR', 'numcode' => 376, 'phonecode' => 972, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'IT', 'name' => 'ITALY', 'dname' => 'Italy', 'iso3' => 'ITA', 'numcode' => 380, 'phonecode' => 39, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'JM', 'name' => 'JAMAICA', 'dname' => 'Jamaica', 'iso3' => 'JAM', 'numcode' => 388, 'phonecode' => 1876, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'JP', 'name' => 'JAPAN', 'dname' => 'Japan', 'iso3' => 'JPN', 'numcode' => 392, 'phonecode' => 81, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'JO', 'name' => 'JORDAN', 'dname' => 'Jordan', 'iso3' => 'JOR', 'numcode' => 400, 'phonecode' => 962, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KZ', 'name' => 'KAZAKHSTAN', 'dname' => 'Kazakhstan', 'iso3' => 'KAZ', 'numcode' => 398, 'phonecode' => 7, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KE', 'name' => 'KENYA', 'dname' => 'Kenya', 'iso3' => 'KEN', 'numcode' => 404, 'phonecode' => 254, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KI', 'name' => 'KIRIBATI', 'dname' => 'Kiribati', 'iso3' => 'KIR', 'numcode' => 296, 'phonecode' => 686, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KP', 'name' => 'KOREA', 'dname' => 'Korea', 'iso3' => 'KP', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KR', 'name' => 'KOREA', 'dname' => 'Korea', 'iso3' => 'KR', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KW', 'name' => 'KUWAIT', 'dname' => 'Kuwait', 'iso3' => 'KWT', 'numcode' => 414, 'phonecode' => 965, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KG', 'name' => 'KYRGYZSTAN', 'dname' => 'Kyrgyzstan', 'iso3' => 'KGZ', 'numcode' => 417, 'phonecode' => 996, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LA', 'name' => 'LAO PEOPLES DEMOCRATIC REPUBLIC', 'dname' => 'Lao Peoples Democratic Republic', 'iso3' => 'LAO', 'numcode' => 418, 'phonecode' => 856, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LV', 'name' => 'LATVIA', 'dname' => 'Latvia', 'iso3' => 'LVA', 'numcode' => 428, 'phonecode' => 371, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LB', 'name' => 'LEBANON', 'dname' => 'Lebanon', 'iso3' => 'LBN', 'numcode' => 422, 'phonecode' => 961, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LS', 'name' => 'LESOTHO', 'dname' => 'Lesotho', 'iso3' => 'LSO', 'numcode' => 426, 'phonecode' => 266, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LR', 'name' => 'LIBERIA', 'dname' => 'Liberia', 'iso3' => 'LBR', 'numcode' => 430, 'phonecode' => 231, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LY', 'name' => 'LIBYAN ARAB JAMAHIRIYA', 'dname' => 'Libyan Arab Jamahiriya', 'iso3' => 'LBY', 'numcode' => 434, 'phonecode' => 218, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LI', 'name' => 'LIECHTENSTEIN', 'dname' => 'Liechtenstein', 'iso3' => 'LIE', 'numcode' => 438, 'phonecode' => 423, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LT', 'name' => 'LITHUANIA', 'dname' => 'Lithuania', 'iso3' => 'LTU', 'numcode' => 440, 'phonecode' => 370, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LU', 'name' => 'LUXEMBOURG', 'dname' => 'Luxembourg', 'iso3' => 'LUX', 'numcode' => 442, 'phonecode' => 352, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MO', 'name' => 'MACAO', 'dname' => 'Macao', 'iso3' => 'MAC', 'numcode' => 446, 'phonecode' => 853, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MK', 'name' => 'MACEDONIA', 'dname' => 'Macedonia', 'iso3' => 'MK', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MG', 'name' => 'MADAGASCAR', 'dname' => 'Madagascar', 'iso3' => 'MDG', 'numcode' => 450, 'phonecode' => 261, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MW', 'name' => 'MALAWI', 'dname' => 'Malawi', 'iso3' => 'MWI', 'numcode' => 454, 'phonecode' => 265, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MY', 'name' => 'MALAYSIA', 'dname' => 'Malaysia', 'iso3' => 'MYS', 'numcode' => 458, 'phonecode' => 60, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MV', 'name' => 'MALDIVES', 'dname' => 'Maldives', 'iso3' => 'MDV', 'numcode' => 462, 'phonecode' => 960, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ML', 'name' => 'MALI', 'dname' => 'Mali', 'iso3' => 'MLI', 'numcode' => 466, 'phonecode' => 223, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MT', 'name' => 'MALTA', 'dname' => 'Malta', 'iso3' => 'MLT', 'numcode' => 470, 'phonecode' => 356, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MH', 'name' => 'MARSHALL ISLANDS', 'dname' => 'Marshall Islands', 'iso3' => 'MHL', 'numcode' => 584, 'phonecode' => 692, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MQ', 'name' => 'MARTINIQUE', 'dname' => 'Martinique', 'iso3' => 'MTQ', 'numcode' => 474, 'phonecode' => 596, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MR', 'name' => 'MAURITANIA', 'dname' => 'Mauritania', 'iso3' => 'MRT', 'numcode' => 478, 'phonecode' => 222, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MU', 'name' => 'MAURITIUS', 'dname' => 'Mauritius', 'iso3' => 'MUS', 'numcode' => 480, 'phonecode' => 230, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'YT', 'name' => 'MAYOTTE', 'dname' => 'Mayotte', 'iso3' => 'YT', 'numcode' => 0, 'phonecode' => 269, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MX', 'name' => 'MEXICO', 'dname' => 'Mexico', 'iso3' => 'MEX', 'numcode' => 484, 'phonecode' => 52, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'FM', 'name' => 'MICRONESIA', 'dname' => 'Micronesia', 'iso3' => 'FM', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MD', 'name' => 'MOLDOVA', 'dname' => 'Moldova', 'iso3' => 'MD', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MC', 'name' => 'MONACO', 'dname' => 'Monaco', 'iso3' => 'MCO', 'numcode' => 492, 'phonecode' => 377, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MN', 'name' => 'MONGOLIA', 'dname' => 'Mongolia', 'iso3' => 'MNG', 'numcode' => 496, 'phonecode' => 976, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MS', 'name' => 'MONTSERRAT', 'dname' => 'Montserrat', 'iso3' => 'MSR', 'numcode' => 500, 'phonecode' => 1664, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MA', 'name' => 'MOROCCO', 'dname' => 'Morocco', 'iso3' => 'MAR', 'numcode' => 504, 'phonecode' => 212, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MZ', 'name' => 'MOZAMBIQUE', 'dname' => 'Mozambique', 'iso3' => 'MOZ', 'numcode' => 508, 'phonecode' => 258, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MM', 'name' => 'MYANMAR', 'dname' => 'Myanmar', 'iso3' => 'MMR', 'numcode' => 104, 'phonecode' => 95, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NA', 'name' => 'NAMIBIA', 'dname' => 'Namibia', 'iso3' => 'NAM', 'numcode' => 516, 'phonecode' => 264, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NR', 'name' => 'NAURU', 'dname' => 'Nauru', 'iso3' => 'NRU', 'numcode' => 520, 'phonecode' => 674, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NP', 'name' => 'NEPAL', 'dname' => 'Nepal', 'iso3' => 'NPL', 'numcode' => 524, 'phonecode' => 977, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NL', 'name' => 'NETHERLANDS', 'dname' => 'Netherlands', 'iso3' => 'NLD', 'numcode' => 528, 'phonecode' => 31, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AN', 'name' => 'NETHERLANDS ANTILLES', 'dname' => 'Netherlands Antilles', 'iso3' => 'ANT', 'numcode' => 530, 'phonecode' => 599, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NC', 'name' => 'NEW CALEDONIA', 'dname' => 'New Caledonia', 'iso3' => 'NCL', 'numcode' => 540, 'phonecode' => 687, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NZ', 'name' => 'NEW ZEALAND', 'dname' => 'New Zealand', 'iso3' => 'NZL', 'numcode' => 554, 'phonecode' => 64, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NI', 'name' => 'NICARAGUA', 'dname' => 'Nicaragua', 'iso3' => 'NIC', 'numcode' => 558, 'phonecode' => 505, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NE', 'name' => 'NIGER', 'dname' => 'Niger', 'iso3' => 'NER', 'numcode' => 562, 'phonecode' => 227, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NG', 'name' => 'NIGERIA', 'dname' => 'Nigeria', 'iso3' => 'NGA', 'numcode' => 566, 'phonecode' => 234, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NU', 'name' => 'NIUE', 'dname' => 'Niue', 'iso3' => 'NIU', 'numcode' => 570, 'phonecode' => 683, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NF', 'name' => 'NORFOLK ISLAND', 'dname' => 'Norfolk Island', 'iso3' => 'NFK', 'numcode' => 574, 'phonecode' => 672, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'MP', 'name' => 'NORTHERN MARIANA ISLANDS', 'dname' => 'Northern Mariana Islands', 'iso3' => 'MNP', 'numcode' => 580, 'phonecode' => 1670, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'NO', 'name' => 'NORWAY', 'dname' => 'Norway', 'iso3' => 'NOR', 'numcode' => 578, 'phonecode' => 47, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'OM', 'name' => 'OMAN', 'dname' => 'Oman', 'iso3' => 'OMN', 'numcode' => 512, 'phonecode' => 968, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PK', 'name' => 'PAKISTAN', 'dname' => 'Pakistan', 'iso3' => 'PAK', 'numcode' => 586, 'phonecode' => 92, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PW', 'name' => 'PALAU', 'dname' => 'Palau', 'iso3' => 'PLW', 'numcode' => 585, 'phonecode' => 680, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PS', 'name' => 'PALESTINIAN TERRITORY', 'dname' => 'Palestinian Territory', 'iso3' => 'PS', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PA', 'name' => 'PANAMA', 'dname' => 'Panama', 'iso3' => 'PAN', 'numcode' => 591, 'phonecode' => 507, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PG', 'name' => 'PAPUA NEW GUINEA', 'dname' => 'Papua New Guinea', 'iso3' => 'PNG', 'numcode' => 598, 'phonecode' => 675, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PY', 'name' => 'PARAGUAY', 'dname' => 'Paraguay', 'iso3' => 'PRY', 'numcode' => 600, 'phonecode' => 595, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PE', 'name' => 'PERU', 'dname' => 'Peru', 'iso3' => 'PER', 'numcode' => 604, 'phonecode' => 51, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PH', 'name' => 'PHILIPPINES', 'dname' => 'Philippines', 'iso3' => 'PHL', 'numcode' => 608, 'phonecode' => 63, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PN', 'name' => 'PITCAIRN', 'dname' => 'Pitcairn', 'iso3' => 'PCN', 'numcode' => 612, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PL', 'name' => 'POLAND', 'dname' => 'Poland', 'iso3' => 'POL', 'numcode' => 616, 'phonecode' => 48, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PT', 'name' => 'PORTUGAL', 'dname' => 'Portugal', 'iso3' => 'PRT', 'numcode' => 620, 'phonecode' => 351, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PR', 'name' => 'PUERTO RICO', 'dname' => 'Puerto Rico', 'iso3' => 'PRI', 'numcode' => 630, 'phonecode' => 1787, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'QA', 'name' => 'QATAR', 'dname' => 'Qatar', 'iso3' => 'QAT', 'numcode' => 634, 'phonecode' => 974, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'RE', 'name' => 'REUNION', 'dname' => 'Reunion', 'iso3' => 'REU', 'numcode' => 638, 'phonecode' => 262, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'RO', 'name' => 'ROMANIA', 'dname' => 'Romania', 'iso3' => 'ROM', 'numcode' => 642, 'phonecode' => 40, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'RU', 'name' => 'RUSSIAN FEDERATION', 'dname' => 'Russian Federation', 'iso3' => 'RUS', 'numcode' => 643, 'phonecode' => 70, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'RW', 'name' => 'RWANDA', 'dname' => 'Rwanda', 'iso3' => 'RWA', 'numcode' => 646, 'phonecode' => 250, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SH', 'name' => 'SAINT HELENA', 'dname' => 'Saint Helena', 'iso3' => 'SHN', 'numcode' => 654, 'phonecode' => 290, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'KN', 'name' => 'SAINT KITTS AND NEVIS', 'dname' => 'Saint Kitts and Nevis', 'iso3' => 'KNA', 'numcode' => 659, 'phonecode' => 1869, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LC', 'name' => 'SAINT LUCIA', 'dname' => 'Saint Lucia', 'iso3' => 'LCA', 'numcode' => 662, 'phonecode' => 1758, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'PM', 'name' => 'SAINT PIERRE AND MIQUELON', 'dname' => 'Saint Pierre and Miquelon', 'iso3' => 'SPM', 'numcode' => 666, 'phonecode' => 508, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'VC', 'name' => 'SAINT VINCENT AND THE GRENADINES', 'dname' => 'Saint Vincent and the Grenadines', 'iso3' => 'VCT', 'numcode' => 670, 'phonecode' => 1784, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'WS', 'name' => 'SAMOA', 'dname' => 'Samoa', 'iso3' => 'WSM', 'numcode' => 882, 'phonecode' => 684, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SM', 'name' => 'SAN MARINO', 'dname' => 'San Marino', 'iso3' => 'SMR', 'numcode' => 674, 'phonecode' => 378, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ST', 'name' => 'SAO TOME AND PRINCIPE', 'dname' => 'Sao Tome and Principe', 'iso3' => 'STP', 'numcode' => 678, 'phonecode' => 239, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SA', 'name' => 'SAUDI ARABIA', 'dname' => 'Saudi Arabia', 'iso3' => 'SAU', 'numcode' => 682, 'phonecode' => 966, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SN', 'name' => 'SENEGAL', 'dname' => 'Senegal', 'iso3' => 'SEN', 'numcode' => 686, 'phonecode' => 221, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CS', 'name' => 'SERBIA AND MONTENEGRO', 'dname' => 'Serbia and Montenegro', 'iso3' => 'CS', 'numcode' => 0, 'phonecode' => 381, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SC', 'name' => 'SEYCHELLES', 'dname' => 'Seychelles', 'iso3' => 'SYC', 'numcode' => 690, 'phonecode' => 248, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SL', 'name' => 'SIERRA LEONE', 'dname' => 'Sierra Leone', 'iso3' => 'SLE', 'numcode' => 694, 'phonecode' => 232, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SG', 'name' => 'SINGAPORE', 'dname' => 'Singapore', 'iso3' => 'SGP', 'numcode' => 702, 'phonecode' => 65, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SK', 'name' => 'SLOVAKIA', 'dname' => 'Slovakia', 'iso3' => 'SVK', 'numcode' => 703, 'phonecode' => 421, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SI', 'name' => 'SLOVENIA', 'dname' => 'Slovenia', 'iso3' => 'SVN', 'numcode' => 705, 'phonecode' => 386, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SB', 'name' => 'SOLOMON ISLANDS', 'dname' => 'Solomon Islands', 'iso3' => 'SLB', 'numcode' => 90, 'phonecode' => 677, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SO', 'name' => 'SOMALIA', 'dname' => 'Somalia', 'iso3' => 'SOM', 'numcode' => 706, 'phonecode' => 252, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ZA', 'name' => 'SOUTH AFRICA', 'dname' => 'South Africa', 'iso3' => 'ZAF', 'numcode' => 710, 'phonecode' => 27, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GS', 'name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'dname' => 'South Georgia and the South Sandwich Islands', 'iso3' => 'GS', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ES', 'name' => 'SPAIN', 'dname' => 'Spain', 'iso3' => 'ESP', 'numcode' => 724, 'phonecode' => 34, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'LK', 'name' => 'SRI LANKA', 'dname' => 'Sri Lanka', 'iso3' => 'LKA', 'numcode' => 144, 'phonecode' => 94, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SD', 'name' => 'SUDAN', 'dname' => 'Sudan', 'iso3' => 'SDN', 'numcode' => 736, 'phonecode' => 249, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SR', 'name' => 'SURINAME', 'dname' => 'Suriname', 'iso3' => 'SUR', 'numcode' => 740, 'phonecode' => 597, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SJ', 'name' => 'SVALBARD AND JAN MAYEN', 'dname' => 'Svalbard and Jan Mayen', 'iso3' => 'SJM', 'numcode' => 744, 'phonecode' => 47, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SZ', 'name' => 'SWAZILAND', 'dname' => 'Swaziland', 'iso3' => 'SWZ', 'numcode' => 748, 'phonecode' => 268, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SE', 'name' => 'SWEDEN', 'dname' => 'Sweden', 'iso3' => 'SWE', 'numcode' => 752, 'phonecode' => 46, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'CH', 'name' => 'SWITZERLAND', 'dname' => 'Switzerland', 'iso3' => 'CHE', 'numcode' => 756, 'phonecode' => 41, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'SY', 'name' => 'SYRIAN ARAB REPUBLIC', 'dname' => 'Syrian Arab Republic', 'iso3' => 'SYR', 'numcode' => 760, 'phonecode' => 963, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TW', 'name' => 'TAIWAN', 'dname' => 'Taiwan', 'iso3' => 'TW', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TJ', 'name' => 'TAJIKISTAN', 'dname' => 'Tajikistan', 'iso3' => 'TJK', 'numcode' => 762, 'phonecode' => 992, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TZ', 'name' => 'TANZANIA', 'dname' => 'Tanzania', 'iso3' => 'TZ', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TH', 'name' => 'THAILAND', 'dname' => 'Thailand', 'iso3' => 'THA', 'numcode' => 764, 'phonecode' => 66, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TL', 'name' => 'TIMOR-LESTE', 'dname' => 'Timor-Leste', 'iso3' => 'TL', 'numcode' => 0, 'phonecode' => 670, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TG', 'name' => 'TOGO', 'dname' => 'Togo', 'iso3' => 'TGO', 'numcode' => 768, 'phonecode' => 228, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TK', 'name' => 'TOKELAU', 'dname' => 'Tokelau', 'iso3' => 'TKL', 'numcode' => 772, 'phonecode' => 690, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TO', 'name' => 'TONGA', 'dname' => 'Tonga', 'iso3' => 'TON', 'numcode' => 776, 'phonecode' => 676, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TT', 'name' => 'TRINIDAD AND TOBAGO', 'dname' => 'Trinidad and Tobago', 'iso3' => 'TTO', 'numcode' => 780, 'phonecode' => 1868, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TN', 'name' => 'TUNISIA', 'dname' => 'Tunisia', 'iso3' => 'TUN', 'numcode' => 788, 'phonecode' => 216, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TR', 'name' => 'TURKEY', 'dname' => 'Turkey', 'iso3' => 'TUR', 'numcode' => 792, 'phonecode' => 90, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TM', 'name' => 'TURKMENISTAN', 'dname' => 'Turkmenistan', 'iso3' => 'TKM', 'numcode' => 795, 'phonecode' => 7370, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TC', 'name' => 'TURKS AND CAICOS ISLANDS', 'dname' => 'Turks and Caicos Islands', 'iso3' => 'TCA', 'numcode' => 796, 'phonecode' => 1649, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'TV', 'name' => 'TUVALU', 'dname' => 'Tuvalu', 'iso3' => 'TUV', 'numcode' => 798, 'phonecode' => 688, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'UG', 'name' => 'UGANDA', 'dname' => 'Uganda', 'iso3' => 'UGA', 'numcode' => 800, 'phonecode' => 256, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'UA', 'name' => 'UKRAINE', 'dname' => 'Ukraine', 'iso3' => 'UKR', 'numcode' => 804, 'phonecode' => 380, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'AE', 'name' => 'UNITED ARAB EMIRATES', 'dname' => 'United Arab Emirates', 'iso3' => 'ARE', 'numcode' => 784, 'phonecode' => 971, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'GB', 'name' => 'UNITED KINGDOM', 'dname' => 'United Kingdom', 'iso3' => 'GBR', 'numcode' => 826, 'phonecode' => 44, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'US', 'name' => 'UNITED STATES', 'dname' => 'United States', 'iso3' => 'USA', 'numcode' => 840, 'phonecode' => 1, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'UM', 'name' => 'UNITED STATES MINOR OUTLYING ISLANDS', 'dname' => 'United States Minor Outlying Islands', 'iso3' => 'UM', 'numcode' => 0, 'phonecode' => 1, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'UY', 'name' => 'URUGUAY', 'dname' => 'Uruguay', 'iso3' => 'URY', 'numcode' => 858, 'phonecode' => 598, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'UZ', 'name' => 'UZBEKISTAN', 'dname' => 'Uzbekistan', 'iso3' => 'UZB', 'numcode' => 860, 'phonecode' => 998, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'VU', 'name' => 'VANUATU', 'dname' => 'Vanuatu', 'iso3' => 'VUT', 'numcode' => 548, 'phonecode' => 678, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'VE', 'name' => 'VENEZUELA', 'dname' => 'Venezuela', 'iso3' => 'VEN', 'numcode' => 862, 'phonecode' => 58, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'VN', 'name' => 'VIET NAM', 'dname' => 'Viet Nam', 'iso3' => 'VNM', 'numcode' => 704, 'phonecode' => 84, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'VG', 'name' => 'VIRGIN ISLANDS', 'dname' => 'Virgin Islands', 'iso3' => 'VG', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'VI', 'name' => 'VIRGIN ISLANDS', 'dname' => 'Virgin Islands', 'iso3' => 'VI', 'numcode' => 0, 'phonecode' => 0, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'WF', 'name' => 'WALLIS AND FUTUNA', 'dname' => 'Wallis and Futuna', 'iso3' => 'WLF', 'numcode' => 876, 'phonecode' => 681, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'EH', 'name' => 'WESTERN SAHARA', 'dname' => 'Western Sahara', 'iso3' => 'ESH', 'numcode' => 732, 'phonecode' => 212, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'YE', 'name' => 'YEMEN', 'dname' => 'Yemen', 'iso3' => 'YEM', 'numcode' => 887, 'phonecode' => 967, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ZM', 'name' => 'ZAMBIA', 'dname' => 'Zambia', 'iso3' => 'ZMB', 'numcode' => 894, 'phonecode' => 260, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
            ['iso' => 'ZW', 'name' => 'ZIMBABWE', 'dname' => 'Zimbabwe', 'iso3' => 'ZWE', 'numcode' => 716, 'phonecode' => 263, 'position' => $position++, 'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Country - Province
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_country_province', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('country_id')->unsigned();
            $table->string('name', 99);
            $table->string('code', 10)->default('xx');
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_country_province', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('_z_country');
        });
        $position = 1;
        DB::connection('mysql')->table('_z_country_province')->insert([
            [
                'country_id' => 1,
                'name' => 'Unknown',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Country - Province - City
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_country_city', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('province_id')->unsigned();
            $table->string('name', 99);
            $table->string('code', 10)->default('xx');
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_country_city', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('_z_country_province');
        });
        $position = 1;
        DB::connection('mysql')->table('_z_country_city')->insert([
            [
                'province_id' => 1,
                'name' => 'Unknown',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Country - Province - City - Region
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_country_region', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('name', 99);
            $table->string('code', 10)->default('xx');
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_country_region', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('_z_country_city');
        });
        $position = 1;
        DB::connection('mysql')->table('_z_country_region')->insert([
            [
                'city_id' => 1,
                'name' => 'Unknown',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Country - Province - City - Region - SubRegion
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_country_subregion', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('region_id')->unsigned();
            $table->string('name', 99);
            $table->string('code', 10)->default('xx');
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_country_subregion', function (Blueprint $table) {
            $table->foreign('region_id')->references('id')->on('_z_country_region');
        });
        $position = 1;
        DB::connection('mysql')->table('_z_country_subregion')->insert([
            [
                'region_id' => 1,
                'name' => 'Unknown',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Address Type
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_address_type', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name', 99);
            $table->string('description')->default('');
            $table->integer('position')->unsigned();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        $position = 1;
        DB::connection('mysql')->table('_z_address_type')->insert([
            [
                'name' => 'Residential',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Work',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Billing',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
            [
                'name' => 'Delivery',
                'position' => $position++,
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Address
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_address', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('line_1', 99);
            $table->string('line_2', 99)->default('');
            $table->string('line_3', 99)->default('');
            $table->string('apartment_no', 99)->default('');
            $table->string('building_name', 99)->default('');
            $table->string('plot_no', 99)->default('');
            $table->string('street_name', 99)->default('');
            $table->integer('country_id')->unsigned()->default(1);
            $table->integer('province_id')->unsigned()->default(1);
            $table->integer('city_id')->unsigned()->default(1);
            $table->integer('region_id')->unsigned()->default(1);
            $table->integer('subregion_id')->unsigned()->default(1);
            $table->string('zip_or_postal', 9)->default('');
            $table->string('phone', 99)->default('');
            $table->string('note', 99)->default('');

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_address', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('_z_country');
        });
        DB::connection('mysql')->table('_z_address')->insert([
            [
                'line_1' => '',
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Qualification
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_qualification', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('level_id')->unsigned()->default(1);
            $table->integer('title_id')->unsigned()->default(1);
            $table->integer('institute_id')->unsigned()->default(1);
            $table->string('completed', 4)->nullable();

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_qualification', function (Blueprint $table) {
            $table->foreign('level_id')->references('id')->on('_z_single_data');
            $table->foreign('title_id')->references('id')->on('_z_single_data');
            $table->foreign('institute_id')->references('id')->on('_z_single_data');
        });
        DB::connection('mysql')->table('_z_qualification')->insert([
            [
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);
        /*
        |--------------------------------------------------------------------------
        | Work Detail
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('_z_work_detail', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('organization_id')->unsigned()->default(1);
            $table->integer('department_id')->unsigned()->default(1);
            $table->integer('designation_id')->unsigned()->default(1);
            $table->string('from', 4)->nullable();
            $table->integer('address_id')->unsigned()->default(1);

            $table->integer('created')->unsigned();
            $table->integer('register_by')->unsigned();
            $table->integer('modified')->unsigned();
            $table->integer('modified_by')->unsigned();
            $table->boolean('record_deleted')->default(0);

            $table->engine = 'InnoDB';
        });
        Schema::connection('mysql')->table('_z_work_detail', function (Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('_z_address');
            $table->foreign('organization_id')->references('id')->on('_z_single_data');
            $table->foreign('department_id')->references('id')->on('_z_single_data');
            $table->foreign('designation_id')->references('id')->on('_z_single_data');
        });
        DB::connection('mysql')->table('_z_work_detail')->insert([
            [
                'created' => $unixTimeStamp,'register_by' => 1,'modified' => $unixTimeStamp,'modified_by' => 1,'record_deleted' => 0
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Student Family ID
        |--------------------------------------------------------------------------
        */
        Schema::connection('mysql')->create('student_family_id', function (Blueprint $table) {
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
        Schema::connection('mysql')->table('student_family_id', function (Blueprint $table) {
            $table->foreign('address_type_id')->references('id')->on('_z_address_type');
            $table->foreign('address_id')->references('id')->on('_z_address');
        });
        DB::connection('mysql')->table('student_family_id')->insert([
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
        Schema::connection('mysql')->create('student_family', function (Blueprint $table) {
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
        Schema::connection('mysql')->table('student_family', function (Blueprint $table) {
            $table->foreign('relationship_id')->references('id')->on('_z_family_relationship');
            $table->foreign('marital_status_id')->references('id')->on('_z_marital_status');
            $table->foreign('family_id')->references('id')->on('student_family_id');
            $table->foreign('profession_id')->references('id')->on('_z_single_data');
            $table->foreign('q1')->references('id')->on('_z_qualification');
            $table->foreign('q2')->references('id')->on('_z_qualification');
            $table->foreign('w1')->references('id')->on('_z_work_detail');
        });
        DB::connection('mysql')->table('student_family')->insert([
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
        Schema::connection('mysql')->create('student_register', function (Blueprint $table) {
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
        Schema::connection('mysql')->table('student_register', function (Blueprint $table) {
            $table->foreign('family_id')->references('id')->on('student_family_id');
        });
        DB::connection('mysql')->table('student_register')->insert([
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
        Schema::connection('mysql')->create('student_emergency_contact', function (Blueprint $table) {
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
        Schema::connection('mysql')->table('student_emergency_contact', function (Blueprint $table) {
            $table->foreign('family_id')->references('id')->on('student_family_id');
            $table->foreign('relationship_id')->references('id')->on('_z_family_relationship');
            $table->foreign('address_type_id')->references('id')->on('_z_address_type');
            $table->foreign('address_id')->references('id')->on('_z_address');
        });
        DB::connection('mysql')->table('student_emergency_contact')->insert([
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
        Schema::connection('mysql')->create('student_academic_record', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->integer('student_id')->unsigned();
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
        Schema::connection('mysql')->table('student_academic_record', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('student_register');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->drop('_z_marital_status');
        Schema::connection('mysql')->drop('_z_family_relationship');
        Schema::connection('mysql')->drop('_z_single_category');
        Schema::connection('mysql')->drop('_z_single_data');
        Schema::connection('mysql')->drop('_z_address_type');
        Schema::connection('mysql')->drop('_z_address');
        Schema::connection('mysql')->drop('_z_qualification');
        Schema::connection('mysql')->drop('_z_work_detail');
        Schema::connection('mysql')->drop('student_academic_record');
        Schema::connection('mysql')->drop('student_family_id');
        Schema::connection('mysql')->drop('student_family');
        Schema::connection('mysql')->drop('student_register');
        Schema::connection('mysql')->drop('student_emergency_contact');
    }
}

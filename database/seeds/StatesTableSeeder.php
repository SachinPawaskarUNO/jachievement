<?php

use Illuminate\Database\Seeder;

use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        State::create(['name' => 'Alabama','abbrevation' => 'AL','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Alaska','abbrevation' => 'AK','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Arizona','abbrevation' => 'AZ','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Arkansas','abbrevation' => 'AR','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'California','abbrevation' => 'CA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Colorado','abbrevation' => 'CO','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Connecticut','abbrevation' => 'CT','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Delaware','abbrevation' => 'DE','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'District of Columbia','abbrevation' => 'DC','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Florida','abbrevation' => 'FL','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Georgia','abbrevation' => 'GA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Hawaii','abbrevation' => 'HI','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Idaho','abbrevation' => 'ID','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Illinois','abbrevation' => 'IL','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Indiana','abbrevation' => 'IN','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Iowa','abbrevation' => 'IA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Kansas','abbrevation' => 'KS','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Kentucky','abbrevation' => 'KY','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Louisiana','abbrevation' => 'LA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Maine','abbrevation' => 'MN','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Maryland','abbrevation' => 'MD','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Massachusetts','abbrevation' => 'MA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Michigan','abbrevation' => 'MI','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Minnesota','abbrevation' => 'MN','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Mississippi','abbrevation' => 'MS','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Missouri','abbrevation' => 'MO','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Montana','abbrevation' => 'MN','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Nebraska','abbrevation' => 'NE','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Nevada','abbrevation' => 'NV','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'New Hampshire','abbrevation' => 'NH','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'New Jersey','abbrevation' => 'NJ','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'New Mexico','abbrevation' => 'NM','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'New York','abbrevation' => 'NY','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'North Carolina','abbrevation' => 'NC','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'North Dakota','abbrevation' => 'ND','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Ohio','abbrevation' => 'OH','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Oklahoma','abbrevation' => 'OK','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Oregon','abbrevation' => 'OR','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Pennsylvania','abbrevation' => 'PA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Rhode Island','abbrevation' => 'RI','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'South Carolina','abbrevation' => 'SC','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'South Dakota','abbrevation' => 'SD','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Tennessee','abbrevation' => 'TN','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Texas','abbrevation' => 'TX','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Utah','abbrevation' => 'UT','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Vermont','abbrevation' => 'VT','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Virginia','abbrevation' => 'VA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Washington','abbrevation' => 'WA','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'West Virginia','abbrevation' => 'WV','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Wisconsin','abbrevation' => 'WI','updated_at' => date_create(),'created_at'=>date_create()]);
        State::create(['name' => 'Wyoming','abbrevation' => 'WY','updated_at' => date_create(),'created_at'=>date_create()]);
    }
}

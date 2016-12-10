<?php
use Illuminate\Database\Seeder;
use App\Tag;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed the System Users/Roles/Permissions tables
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(UsersRolesPermissions::class);
        $this->command->info('User, Role and Permission tables seeded!');
        // Seed the Tags table
        $this->call(TagsTableSeeder::class);
        $this->command->info('Tags tables seeded!');
        $this->call(GradesTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        $this->command->info('Grades Programs tables seeded!');
        $this->call(StatesTableSeeder::class);
        $this->command->info('States tables seeded!');
        $this->call(OrganizationsTableSeeder::class);
        $this->command->info('Organizations tables seeded!');
        $this->call(CampaignsTableSeeder::class);
        $this->command->info('Campaign tables seeded!');
        $this->call(TeamsTableSeeder::class);
        $this->command->info('Team tables seeded!');
        $this->call(TeamMembersTableSeeder::class);
        $this->command->info('Team Members tables seeded!');
        $this->call(SchoolsTableSeeder::class);
        $this->command->info('Schools table seeded!');
        $this->call(DonorsTableSeeder::class);
        $this->command->info('Donors table seeded!');
        $this->call(DonationsTableSeeder::class);
        $this->command->info('Donations table seeded!');
        $this->call(StaticContentsTableSeeder::class);
        $this->command->info('Static Content table seeded!');
        $this->call(FAQsTableSeeder::class);
        $this->command->info('FAQs table seeded!');
    }
}
class TagsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('tags')->delete();
        Tag::create([ 'name' => 'Athlete']);
        Tag::create([ 'name' => 'First Generation']);
        Tag::create([ 'name' => 'Graduate']);
        Tag::create([ 'name' => 'International']);
        Tag::create([ 'name' => 'Military & Veteran']);
        Tag::create([ 'name' => 'Retention Risk']);
        Tag::create([ 'name' => 'Scotts Scholar']);
        Tag::create([ 'name' => 'Undergraduate']);
    }
}

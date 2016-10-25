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
        $this->call(TeamsTableSeeder::class);
        $this->command->info('Team tables seeded!');
        $this->call(TeamMembersTableSeeder::class);
        $this->command->info('Team Members tables seeded!');
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(UsersRolesPermissions::class);
        $this->command->info('User, Role and Permission tables seeded!');
        // Seed the Tags table
        $this->call(TagsTableSeeder::class);
        $this->command->info('Tags tables seeded!');
        $this->call(ProgramsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->command->info('Grades Programs tables seeded!');
        $this->call(StatesTableSeeder::class);
        $this->command->info('States tables seeded!');
        $this->call(OrganizationsTableSeeder::class);
        $this->command->info('Organizations tables seeded!');
        $this->call(CampaignsTableSeeder::class);
        $this->command->info('Campaign tables seeded!');


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

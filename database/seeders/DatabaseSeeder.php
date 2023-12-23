<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\User;
use App\Traits\UploadFile;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use UploadFile;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if ( ! file_exists( storage_path('oauth-private.key') ) )
            Artisan::call('passport:install');

        session()->flush();
        cache()->flush();
        $truncate_tables = ['emails', 'social_accounts', 'announcements'];

        foreach ($truncate_tables as $table) truncateTables($table);

        $this->call(LanguageSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(SuperadminSeeder::class);
        $this->call(ContentTypeSeeder::class);
        $this->call(SettingSeeder::class);
    }
}

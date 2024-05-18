<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\User;
use App\Utils\Constants;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        $users = User::where('user_group_id', Constants::USER_GROUP_BUNDA)->get();

        foreach($users as $user)
            $user->init_notification();
    }
}

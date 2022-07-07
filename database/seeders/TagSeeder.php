<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

            public function run()
            {

                Tag::query()
                    ->insert ([
                        [
                            'title' => 'تگ اول'
                        ],
                        [
                            'title' => 'تگ دوم'
                        ],
                        [
                            'title' => 'تگ سوم'
                        ],
                        [
                            'title' => 'تگ چهارم'
                        ],
                    ]);
            }

}

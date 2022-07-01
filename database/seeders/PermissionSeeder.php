<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * category permissions
         */
        Permission::query()
            ->insert([
                [
                    'title' => 'ایجاد دسته بندی'
                ],
                [
                    'title' => 'دیدن دسته بندی'
                ],
                [
                    'title' => 'ویرایش دسته بندی'
                ],
                [
                    'title' => 'حذف دسته بندی'
                ],
            ]);

        /**
         * user permissions
         */
        Permission::query()
            ->insert([
                [
                    'title' => 'ایجاد کاربر'
                ],
                [
                    'title' => 'دیدن کاربران'
                ],
                [
                    'title' => 'ویرایش کاربر'
                ],
                [
                    'title' => 'حذف کاربر'
                ],
            ]);

        /**
         * role permissions
         */
        Permission::query()
            ->insert([
                [
                    'title' => 'ایجاد نقش'
                ],
                [
                    'title' => 'دیدن نقش'
                ],
                [
                    'title' => 'ویرایش نقش'
                ],
                [
                    'title' => 'حذف نقش'
                ],
            ]);

        /**
         * post permissions
         */
        Permission::query()
            ->insert([
                [
                    'title' => 'ایجاد پست'
                ],
                [
                    'title' => 'دیدن پست'
                ],
                [
                    'title' => 'ویرایش پست'
                ],
                [
                    'title' => 'حذف پست '
                ],
            ]);

    }
}

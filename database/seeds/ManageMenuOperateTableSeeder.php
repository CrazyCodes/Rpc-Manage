<?php

use Illuminate\Database\Seeder;

class ManageMenuOperateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manage_menu_operate')->delete();
        
        \DB::table('manage_menu_operate')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '添加菜单',
                'params' => NULL,
                'url' => '/manage/menu/add',
                'manage_menu_id' => 2,
                'created_at' => '2018-02-22 06:46:31',
                'updated_at' => '2018-02-22 06:46:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '添加菜单操作',
                'params' => NULL,
                'url' => '/manage/menu/add_operate',
                'manage_menu_id' => 2,
                'created_at' => '2018-02-22 07:01:23',
                'updated_at' => '2018-02-22 07:01:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '修改菜单',
                'params' => NULL,
                'url' => '/manage/menu/update',
                'manage_menu_id' => 2,
                'created_at' => '2018-02-22 07:01:41',
                'updated_at' => '2018-02-22 07:01:41',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '添加服务',
                'params' => NULL,
                'url' => '/manage/service/add',
                'manage_menu_id' => 9,
                'created_at' => '2018-02-22 07:26:58',
                'updated_at' => '2018-02-22 07:26:58',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '修改服务',
                'params' => NULL,
                'url' => '/manage/service/update',
                'manage_menu_id' => 9,
                'created_at' => '2018-02-22 07:27:42',
                'updated_at' => '2018-02-22 07:27:42',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '添加客户端',
                'params' => NULL,
                'url' => '/manage/client/add',
                'manage_menu_id' => 19,
                'created_at' => '2018-02-22 07:28:19',
                'updated_at' => '2018-02-22 07:28:19',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '修改客户端',
                'params' => NULL,
                'url' => '/manage/client/update',
                'manage_menu_id' => 19,
                'created_at' => '2018-02-22 07:28:38',
                'updated_at' => '2018-02-22 07:28:38',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '添加群组',
                'params' => NULL,
                'url' => '/manage/service_group/add',
                'manage_menu_id' => 24,
                'created_at' => '2018-02-22 07:29:29',
                'updated_at' => '2018-02-22 07:29:29',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '添加提供者',
                'params' => NULL,
                'url' => '/manage/registry/add',
                'manage_menu_id' => 24,
                'created_at' => '2018-02-22 07:30:06',
                'updated_at' => '2018-02-22 07:30:06',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '修改提供者',
                'params' => NULL,
                'url' => '/manage/registry/update',
                'manage_menu_id' => 24,
                'created_at' => '2018-02-22 07:30:35',
                'updated_at' => '2018-02-22 07:30:35',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '测试详情',
                'params' => NULL,
                'url' => '/manage/service/test_detail',
                'manage_menu_id' => 27,
                'created_at' => '2018-02-22 07:31:29',
                'updated_at' => '2018-02-22 07:31:29',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '修改个人资料',
                'params' => NULL,
                'url' => '/manage/profile',
                'manage_menu_id' => 8,
                'created_at' => '2018-02-22 09:41:56',
                'updated_at' => '2018-02-22 09:41:56',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '添加用户组',
                'params' => NULL,
                'url' => '/manage/user_group/add',
                'manage_menu_id' => 30,
                'created_at' => '2018-02-23 04:38:40',
                'updated_at' => '2018-02-23 04:38:40',
            ),
        ));
        
        
    }
}
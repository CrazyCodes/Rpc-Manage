<?php

use Illuminate\Database\Seeder;

class ManageMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manage_menu')->delete();
        
        \DB::table('manage_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '系统设置',
                'pid' => 0,
                'url' => NULL,
                'icon' => 'fa fa-asterisk',
                'sort' => 0,
                'created_at' => '2018-02-10 06:30:23',
                'updated_at' => '2018-02-13 10:28:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '菜单管理',
                'pid' => 1,
                'url' => '/manage/menu',
                'icon' => '',
                'sort' => 0,
                'created_at' => '2018-02-10 06:30:23',
                'updated_at' => '2018-02-10 06:30:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '服务列表',
                'pid' => 0,
                'url' => NULL,
                'icon' => 'fa fa-feed',
                'sort' => 0,
                'created_at' => '2018-02-10 06:30:23',
                'updated_at' => '2018-02-13 10:28:39',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '服务治理',
                'pid' => 0,
                'url' => NULL,
                'icon' => 'fa fa-coffee',
                'sort' => 0,
                'created_at' => '2018-02-10 06:30:23',
                'updated_at' => '2018-02-13 10:29:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '查询测试',
                'pid' => 0,
                'url' => NULL,
                'icon' => 'fa fa-search',
                'sort' => 0,
                'created_at' => '2018-02-10 06:30:23',
                'updated_at' => '2018-02-13 10:29:39',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '进程管理',
                'pid' => 0,
                'url' => NULL,
                'icon' => 'fa fa-retweet',
                'sort' => 0,
                'created_at' => NULL,
                'updated_at' => '2018-02-13 10:30:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '进程列表',
                'pid' => 6,
                'url' => '/manage/process',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '用户管理',
                'pid' => 1,
                'url' => '/manage/user',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '提供者列表',
                'pid' => 3,
                'url' => '/manage/provider',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 19,
                'name' => '客户端列表',
                'pid' => 3,
                'url' => '/manage/client',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 06:44:34',
                'updated_at' => '2018-02-11 06:44:34',
            ),
            10 => 
            array (
                'id' => 21,
                'name' => '机房规则',
                'pid' => 4,
                'url' => NULL,
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 06:48:37',
                'updated_at' => '2018-02-11 06:48:37',
            ),
            11 => 
            array (
                'id' => 22,
                'name' => '服务鉴权',
                'pid' => 4,
                'url' => NULL,
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 06:48:47',
                'updated_at' => '2018-02-11 06:48:47',
            ),
            12 => 
            array (
                'id' => 23,
                'name' => '服务路由',
                'pid' => 4,
                'url' => NULL,
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 06:48:58',
                'updated_at' => '2018-02-11 06:48:58',
            ),
            13 => 
            array (
                'id' => 24,
                'name' => '服务归组',
                'pid' => 4,
                'url' => '/manage/service_group',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 06:49:07',
                'updated_at' => '2018-02-11 06:49:07',
            ),
            14 => 
            array (
                'id' => 25,
                'name' => '服务查询',
                'pid' => 5,
                'url' => '/manage/service_group/search',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 06:49:27',
                'updated_at' => '2018-02-17 09:06:03',
            ),
            15 => 
            array (
                'id' => 26,
                'name' => '服务报表',
                'pid' => 5,
                'url' => NULL,
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 07:02:56',
                'updated_at' => '2018-02-11 07:02:56',
            ),
            16 => 
            array (
                'id' => 27,
                'name' => '服务测试',
                'pid' => 5,
                'url' => '/manage/service/test',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 07:03:07',
                'updated_at' => '2018-02-11 07:03:07',
            ),
            17 => 
            array (
                'id' => 30,
                'name' => '用户组',
                'pid' => 1,
                'url' => '/manage/user_group',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-11 08:57:28',
                'updated_at' => '2018-02-11 08:57:28',
            ),
            18 => 
            array (
                'id' => 32,
                'name' => '接口列表',
                'pid' => 5,
                'url' => '/manage/interface',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-12 06:58:32',
                'updated_at' => '2018-02-12 06:58:32',
            ),
            19 => 
            array (
                'id' => 42,
                'name' => '基本设置',
                'pid' => 1,
                'url' => '/manage/basic',
                'icon' => NULL,
                'sort' => 0,
                'created_at' => '2018-02-23 07:56:55',
                'updated_at' => '2018-02-23 07:56:55',
            ),
        ));
        
        
    }
}
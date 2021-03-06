<?php

return [
    'userManagement' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                    => '編號',
            'id_helper'             => '',
            'title'                 => '標題',
            'title_helper'          => '',
            'permissions'           => '權限',
            'permissions_helper'    => '',
            'created_at'            => '建立時間',
            'created_at_helper'     => '',
            'updated_at'            => '更新時間',
            'updated_at_helper'     => '',
            'deleted_at'            => '刪除時間',
            'deleted_at_helper'     => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'country'        => [
        'title'          => '國家',
        'title_singular' => '國家',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'short_code'        => '短代碼',
            'short_code_helper' => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'city'           => [
        'title'          => '城市',
        'title_singular' => '城市',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'country'           => '國家',
            'country_helper'    => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'trip'           => [
        'title'          => '旅遊',
        'title_singular' => '旅遊',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'city_from'         => '起始城市',
            'city_from_helper'  => '',
            'date_from'         => '開始日期',
            'date_from_helper'  => '',
            'city_to'           => '終點城市',
            'city_to_helper'    => '',
            'date_to'           => '結束日期',
            'date_to_helper'    => '',
            'adults'            => '成人',
            'adults_helper'     => '',
            'children'          => '兒童',
            'children_helper'   => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
];

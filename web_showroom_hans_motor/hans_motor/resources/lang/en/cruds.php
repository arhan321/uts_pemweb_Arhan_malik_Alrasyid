<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],

    'cars' => [
        'title'          => 'Cars',
        'title_singular' => 'Cars',
    ],
    'product' => [
        'title'          => 'Data Mobil',
        'title_singular' => 'Mobil',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'tahun'              => 'Tahun mobil',
            'tahun_helper'       => ' ',
            'mesin'              => 'Jenis Mesin',
            'mesin_helper'       => ' ',
            'transmition'        => 'Transmition',
            'transmition_helper' => ' ',
            'warna'              => 'Warna',
            'warna_helper'       => ' ',
            'pajak'              => 'Pajak',
            'pajak_helper'       => ' ',
            'cc'                 => 'CC mobil',
            'cc_helper'          => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'stock'              => 'Stock',
            'stock_helper'       => ' ',
            'tipe'               => 'Tipe Mobil',
            'tipe_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],

];

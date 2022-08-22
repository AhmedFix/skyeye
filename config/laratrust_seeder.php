<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super_admin' => [
            'roles' => 'c,r,u,d',
            'admins' => 'c,r,u,d',
            'teachers' => 'c,r,u,d',
            'students' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'courses' => 'c,r,u,d',
            'settings' => 'c,r,u,d',
        ],
        'admin' => [
            'teachers' => 'c,r,u,d',
            'students' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'courses' => 'c,r,u,d',
        ],
        'teacher' => [
            'courses' => 'r',
        ],
        'student' => [
            'courses' => 'r',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

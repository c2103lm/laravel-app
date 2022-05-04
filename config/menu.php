<?php 
return [
    [
        'route' => 'admin.index',
        'title' => 'Dashboard',
        'icon'  => 'fa-home'
    ],
    [
        'route' => 'category.index',
        'title' => 'Danh mục',
        'icon'  => 'fa-th',
        'items' => [
            [
                'route' => 'category.index',
                'title' => 'Danh sách',
                'icon'  => 'fa-home'
            ],
            [
                'route' => 'category.create',
                'title' => 'Thêm mới',
                'icon'  => 'fa-home'
            ]
        ]
    ] ,
    [
        'route' => 'product.index',
        'title' => 'Sản phẩm',
        'icon'  => 'fa-th',
        'items' => [
            [
                'route' => 'product.index',
                'title' => 'Danh sách',
                'icon'  => 'fa-home'
            ],
            [
                'route' => 'product.create',
                'title' => 'Thêm mới',
                'icon'  => 'fa-home'
            ]
        ]
    ]
];

?>
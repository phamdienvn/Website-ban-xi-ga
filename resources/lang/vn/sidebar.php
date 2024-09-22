<?php   
return [
    'module' => [
        [
            'title' => 'Dashboard',
            'icon' => 'fa fa-database',
            'name' => ['dashboard'],
            'route' => 'dashboard/index',
            'class' => 'special'
        ],
        [
            'title' => 'Báo Cáo Doanh Thu',
            'icon' => 'fa fa-money',
            'name' => ['report'],
            'subModule' => [
                [
                    'title' => 'Theo thời gian',
                    'route' => 'report/time'
                ],
                [
                    'title' => 'Theo sản phẩm',
                    'route' => 'report/product'
                ],
                // [
                //     'title' => 'Theo nguồn khách',
                //     'route' => 'report/customer'
                // ],
            ]
        ],
        // [
        //     'title' => 'CRM',
        //     'icon' => 'fa fa-instagram',
        //     'name' => ['construction','agency'],
        //     'subModule' => [
        //         [
        //             'title' => 'QL Đại lý',
        //             'route' => 'agency/index'
        //         ],
        //         [
        //             'title' => 'QL Công trình',
        //             'route' => 'construction/index'
        //         ],
        //         [
        //             'title' => 'QL Kích hoạt bảo hành',
        //             'route' => 'construction/warranty'
        //         ],
        //     ]
        // ],
        [
            'title' => 'QL Danh Mục Sản Phẩm',
            'icon' => 'fa fa-cube',
            'name' => ['products'],
            'route' => 'products/catalogue/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Nhóm Sản Phẩm',
            //         'route' => 'product/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL Sản phẩm',
            //         'route' => 'product/index'
            //     ],
            //     [
            //         'title' => 'QL Loại thuộc tính',
            //         'route' => 'attribute/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL thuộc tính',
            //         'route' => 'attribute/index'
            //     ],
            // ]
        ],
        [
            'title' => 'QL Sản Phẩm',
            'icon' => 'fa fa-cube',
            'name' => ['product'],
            'route' => 'product/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Nhóm Sản Phẩm',
            //         'route' => 'product/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL Sản phẩm',
            //         'route' => 'product/index'
            //     ],
            //     [
            //         'title' => 'QL Loại thuộc tính',
            //         'route' => 'attribute/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL thuộc tính',
            //         'route' => 'attribute/index'
            //     ],

            // ]
        ],
        [
            'title' => 'QL Loại Thuộc Tính',
            'icon' => 'fa fa-cube',
            'name' => ['attributes'],
            'route' => 'attributes/catalogue/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Nhóm Sản Phẩm',
            //         'route' => 'product/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL Sản phẩm',
            //         'route' => 'product/index'
            //     ],
            //     [
            //         'title' => 'QL Loại thuộc tính',
            //         'route' => 'attribute/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL thuộc tính',
            //         'route' => 'attribute/index'
            //     ],

            // ]
        ],
        [
            'title' => 'QL Thuộc Tính',
            'icon' => 'fa fa-cube',
            'name' => ['attribute'],
            'route' => 'attribute/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Nhóm Sản Phẩm',
            //         'route' => 'product/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL Sản phẩm',
            //         'route' => 'product/index'
            //     ],
            //     [
            //         'title' => 'QL Loại thuộc tính',
            //         'route' => 'attribute/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL thuộc tính',
            //         'route' => 'attribute/index'
            //     ],

            // ]
        ],
        [
            'title' => 'QL Đơn Hàng',
            'icon' => 'fa fa-shopping-bag',
            'name' => ['order'],
            'route' => 'order/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Đơn Hàng',
            //         'route' => 'order/index'
            //     ],
            // ]
        ],
        // [
        //     'title' => 'QL Nhóm Khách hàng',
        //     'icon' => 'fa fa-user',
        //     'name' => ['customer'],
        //     'subModule' => [
        //         [
        //             'title' => 'QL Nhóm Khách hàng',
        //             'route' => asset('customer/catalogue/index')
        //         ],
        //         [
        //             'title' => 'QL Khách hàng',
        //             'route' => 'customer/index'
        //         ],
        //     ]
        // ],
        [
            // 'title' => 'QL Marketing',
            'title' => 'QL Khuyến mại',
            'icon' => 'fa fa-money',
            'name' => ['promotion', 'source'],
            'route' => 'promotion/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Khuyến mại',
            //         'route' => 'promotion/index'
            //     ],
            //     [
            //         'title' => 'QL nguồn khách',
            //         'route' => 'source/index'
            //     ],
            // ]
        ],
        // [
        //     'title' => 'Hệ thống phân phối',
        //     'icon' => 'fa fa-truck',
        //     'name' => ['distribution'],
        //     'route' => 'distribution/index'
        // ],
        [
            'title' => 'QL Nhóm Tin Tức',
            'icon' => 'fa fa-file',
            'name' => ['posts'],
            'route' => 'posts/catalogue/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Nhóm Bài Viết',
            //         'route' => 'post/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL Bài Viết',
            //         'route' => 'post/index'
            //     ]
            // ]
        ],
        [
            'title' => 'QL Tin Tức',
            'icon' => 'fa fa-file',
            'name' => ['post'],
            'route' => 'post/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Nhóm Bài Viết',
            //         'route' => 'post/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL Bài Viết',
            //         'route' => 'post/index'
            //     ]
            // ]
        ],
        [
            'title' => 'QL Bình Luận',
            'icon' => 'fa fa-comment',
            'name' => ['review'],
            'route' => 'review/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Bình Luận',
            //         'route' => 'review/index'
            //     ]
            // ]
        ],
        [
            'title' => 'QL Nhóm Thành Viên',
            'icon' => 'fa fa-user',
            'name' => ['users'],
            'route' => 'users/catalogue/index'
        ],
        [
            'title' => 'QL Thành Viên',
            'icon' => 'fa fa-user',
            'name' => ['user'],
            'route' => 'user/index'
            // 'subModule' => [
            //     [
            //         'title' => 'QL Nhóm Thành Viên',
            //         'route' => 'user/catalogue/index'
            //     ],
            //     [
            //         'title' => 'QL Thành Viên',
            //         'route' => 'user/index'
            //     ],
            //     [
            //         'title' => 'QL Quyền',
            //         'route' => 'permission/index'
            //     ]
            // ]
        ],
        [
            'title' => 'QL Quyền',
            'icon' => 'fa fa-user',
            'name' => ['permission'],
            'route' => 'permission/index'
        ],
        [
            // 'title' => 'QL Banner & Slide',
            'title' => 'Cài đặt Slide',
            'icon' => 'fa fa-picture-o',
            'name' => ['slide'],
            'route' => 'slide/index'
            // 'subModule' => [
            //     [
            //         'title' => 'Cài đặt Slide',
            //         'route' => 'slide/index'
            //     ],
            // ]
        ],
        [
            'title' => 'QL Menu',
            'icon' => 'fa fa-bars',
            'name' => ['menu'],
            'route' => 'menu/index'
            // 'subModule' => [
            //     [
            //         'title' => 'Cài đặt Menu',
            //         'route' => 'menu/index'
            //     ],
            // ]
        ],
        [
            'title' => 'Quản lý Widget',
            'icon' => 'fa fa-file',
            'name' => ['widget'],
            'route' => 'widget/index'
        ],
        [
            'title' => 'Cấu hình hệ thống',
            'icon' => 'fa fa-file',
            'name' => ['system'],
            'route' => 'system/index'
        ],
        // [
        //     'title' => 'Cấu hình chung',
        //     'icon' => 'fa fa-file',
        //     'name' => ['language', 'generate', 'system', 'widget'],
        //     'subModule' => [
        //         [
        //             'title' => 'QL Ngôn ngữ',
        //             'route' => 'language/index'
        //         ],
        //         [
        //             'title' => 'QL Module',
        //             'route' => 'generate/index'
        //         ],
        //         [
        //             'title' => 'Cấu hình hệ thống',
        //             'route' => 'system/index'
        //         ],
        //         [
        //             'title' => 'Quản lý Widget',
        //             'route' => 'widget/index'
        //         ],
                
        //     ]
        // ]
    ],
];

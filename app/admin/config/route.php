<?php
// +----------------------------------------------------------------------
// | 路由设置
// +----------------------------------------------------------------------

return [

    // 路由中间件
    /**
     * 这样，所有该应用下的请求都会执行 ViewInit 和 CheckAdmin
     */
    'middleware' => [

        // 后台视图初始化
        \app\admin\middleware\ViewInit::class,

        // 检测用户是否登录
        \app\admin\middleware\CheckAdmin::class,


    ],
];

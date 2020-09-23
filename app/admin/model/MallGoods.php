<?php

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | PHP交流群: 763822524
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zhongshaofa/EasyAdmin
// +----------------------------------------------------------------------

namespace app\admin\model;


use app\common\model\TimeModel;

class MallGoods extends TimeModel
{

    protected $table = "";

    protected $deleteTime = 'delete_time';
    //定义模型关联，函数名为标记 在 app/admin/controller/mall/Goods.php  line 42 时查询
    public function cate()
    {
        /**
         *https://www.kancloud.cn/manual/thinkphp6_0/1037600
         * belongsTo('关联模型','外键', '关联主键');
         * 除了关联模型外，其它参数都是可选。
         * 关联模型（必须）：关联模型类名
         * 外键：当前模型外键，默认的外键名规则是关联模型名+_id
         * 关联主键：关联模型主键，一般会自动获取也可以指定传入
         * 默认的关联外键是user_id，如果不是，需要在第二个参数定义
         *
         */
        return $this->belongsTo('app\admin\model\MallCate', 'cate_id', 'id');
    }

}

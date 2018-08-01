<?php
/**
 *
 * @copyright Copyright 2012-2017, BAONAHAO Software Foundation, Inc. ( http://api.baonahao.com/ )
 * @link http://api.baonahao.com api(tm) Project
 * @author zhanglibo <zhanglibo@xiaohe.com>
 */
return [
    // 生成应用公共文件
    '__file__' => ['common.php', 'config.php', 'database.php'],
    // 其他更多的模块定义
    'index' => [
        '__dir__' => ['model','view','controller'],
        'model' => ['test'],
        'view' => ['index/index','order/index'],
    ]
];
<?php

namespace DesignPatterns\Behavioral\Iterator;

/***
 * 模拟数据分页
 */
class Data
{
    protected array $data;

    public function __construct()
    {
        $this->data = json_decode('[{"adcode":"410000","name":"河南省"},{"adcode":"440000","name":"广东省"},{"adcode":"150000","name":"内蒙古自治区"},{"adcode":"230000","name":"黑龙江省"},{"adcode":"650000","name":"新疆维吾尔自治区"},{"adcode":"420000","name":"湖北省"},{"adcode":"210000","name":"辽宁省"},{"adcode":"370000","name":"山东省"},{"adcode":"610000","name":"陕西省"},{"adcode":"310000","name":"上海市"},{"adcode":"520000","name":"贵州省"},{"adcode":"500000","name":"重庆市"},{"adcode":"540000","name":"西藏自治区"},{"adcode":"340000","name":"安徽省"},{"adcode":"350000","name":"福建省"},{"adcode":"430000","name":"湖南省"},{"adcode":"460000","name":"海南省"},{"adcode":"320000","name":"江苏省"},{"adcode":"630000","name":"青海省"},{"adcode":"450000","name":"广西壮族自治区"},{"adcode":"640000","name":"宁夏回族自治区"},{"adcode":"330000","name":"浙江省"},{"adcode":"130000","name":"河北省"},{"adcode":"810000","name":"香港特别行政区"},{"adcode":"710000","name":"台湾省"},{"adcode":"820000","name":"澳门特别行政区"},{"adcode":"620000","name":"甘肃省"},{"adcode":"510000","name":"四川省"},{"adcode":"110000","name":"北京市"},{"adcode":"120000","name":"天津市"},{"adcode":"360000","name":"江西省"},{"adcode":"220000","name":"吉林省"},{"adcode":"140000","name":"山西省"},{"adcode":"530000","name":"云南省"}]', true);
    }

    public function paginate($page, $limit = 5): array
    {
        return [
            'total' => count($this->data),
            'page' => $page,
            'limit' => $limit,
            'list' => array_slice($this->data, ($page - 1) * $limit, $limit),
        ];
    }
}

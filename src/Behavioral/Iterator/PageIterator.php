<?php

namespace DesignPatterns\Behavioral\Iterator;

class PageIterator implements \Iterator
{
    protected int $page = 1;
    protected int $total = 0;
    protected array $result;

    /**
     * 返回当前元素
     * 每次會調用
     */
    public function current()
    {
        var_dump(__METHOD__);
        $this->total += count($this->result['list']);
        return $this->result['list'];
    }

    /**
     *  向前移动到下一个元素
     *  遍歷非第一次會調用
     */
    public function next()
    {
        var_dump(__METHOD__);
        $this->page++;
        $this->getData();
    }

    /**
     * 返回当前元素的键
     */
    public function key()
    {
        var_dump(__METHOD__);
        return $this->page;
    }

    /**
     * 检查当前位置是否有效
     * 每次會調用
     */
    public function valid()
    {
        var_dump(__METHOD__);

        return $this->result['total'] > $this->total;
    }

    /**
     * 返回到迭代器的第一个元素
     * 遍歷第一次會調用
     */
    public function rewind()
    {
        var_dump(__METHOD__);
        $this->page = 1;
        $this->getData();
    }

    protected function getData()
    {
        var_dump($this->page);
        $this->result = (new Data())->paginate($this->page);
    }
}

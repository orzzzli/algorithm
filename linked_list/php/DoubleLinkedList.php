<?php
/**
 * @user: ligongxiang (ligongxiang@rouchi.com)
 * @date : 2020/7/17
 * @version : 1.0
 * @file : DoubleLinkedList.php
 * @desc :
 */

class DoubleLinkedList
{
    protected $_start = null;
    protected $_end = null;
    protected $_count = 0;

    /**
     * @return ListNode
     */
    public function getStart()
    {
        return $this->_start;
    }

    /**
     * @return ListNode
     */
    public function getEnd()
    {
        return $this->_end;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->_count;
    }

    public function pushBack(ListNode $node)
    {
        $this->_count++;
        if (empty($this->_end)) {
            $this->_start = $node;
            $this->_end = $node;
        }else{
            //原尾节点的后置节点设置为node
            $this->_end->setNext($node);
            //node的前置节点为原尾节点
            $node->setPrev($this->_end);
            $this->_end = $node;
        }
    }

    public function pushFront(ListNode $node)
    {
        $this->_count++;
        if (empty($this->_start)) {
            $this->_start = $node;
            $this->_end = $node;
        }else{
            //原头节点的前置节点设置为node
            $this->_start->setPrev($node);
            //node的后置节点为原头节点
            $node->setNext($this->_start);
            $this->_start = $node;
        }
    }

    public function remove(ListNode $node)
    {
        $pre = $node->getPrev();
        $next = $node->getNext();
        $pre->setNext($next);
        $next->setPrev($pre);
    }

    public function printList()
    {
        var_dump($this->_start);
        var_dump($this->_end);
    }
}
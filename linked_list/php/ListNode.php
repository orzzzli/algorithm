<?php
/**
 * @user: ligongxiang (ligongxiang@rouchi.com)
 * @date : 2020/7/17
 * @version : 1.0
 * @file : ListNode.php
 * @desc :
 */

class ListNode
{
    protected $_next = null;
    protected $_prev = null;
    protected $_data = null;

    /**
     * @return ListNode
     */
    public function getNext()
    {
        return $this->_next;
    }

    /**
     * @param ListNode $next
     */
    public function setNext(ListNode $next)
    {
        $this->_next = $next;
    }

    /**
     * @return ListNode
     */
    public function getPrev()
    {
        return $this->_prev;
    }

    /**
     * @param ListNode $prev
     */
    public function setPrev(ListNode $prev)
    {
        $this->_prev = $prev;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->_data = $data;
    }


}
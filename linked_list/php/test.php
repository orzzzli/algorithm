<?php
/**
 * @user: ligongxiang (ligongxiang@rouchi.com)
 * @date : 2020/7/17
 * @version : 1.0
 * @file : test.php
 * @desc :
 */

require_once 'ListNode.php';
require_once 'DoubleLinkedList.php';

$a = new ListNode();
$a->setData('a');
$b = new ListNode();
$b->setData('b');
$c = new ListNode();
$c->setData('c');
$d = new ListNode();
$d->setData('d');
$e = new ListNode();
$e->setData('e');
$link = new DoubleLinkedList();
$link->pushBack($a);
$link->pushBack($b);
$link->pushBack($c);
$link->pushBack($d);
$link->pushBack($e);
$link->printList();

var_dump($link->getCount());

$node = $link->getStart();
print_r($node->getData());
while (true) {
    $node = $node->getNext();
    if ($node == null)
        break;
    print_r($node->getData());
}
echo "\n";

$node = $link->getEnd();
print_r($node->getData());
while (true) {
    $node = $node->getPrev();
    if ($node == null)
        break;
    print_r($node->getData());
}
echo "\n";

$node = $link->getStart();
while (true) {
    $node = $node->getNext();
    if ($node == null)
        break;
    if ($node->getData() == 'c') {
        $link->remove($node);
        break;
    }
}
$node = $link->getStart();
print_r($node->getData());
while (true) {
    $node = $node->getNext();
    if ($node == null)
        break;
    print_r($node->getData());
}
echo "\n";
<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 15/05/18
 * Time: 20:00
 *
 *
 * xample
 * 1
 * / \
 * 2 3
 * / \ / \
 * 4 5 6 7
 * Inverts to
 *   1
 * / \
 * 3 2
 * / \ / \
 * 7 6 5 4
 */

require_once("vendor/autoload.php");

use PHPUnit\Framework\TestCase;

// Tree data structure
class BinaryNode
{
    public $value = null; // node value
    public $left = null; // left child
    public $right = null; // right child

    public function __construct($value)
    {
        $this->value = $value;
    }
}

function invertTree($root)
{
    /** Invert the left with right */
    if ($root->right != null && $root->left != null) {
        list($root->right, $root->left) = [$root->left, $root->right];

        /** Now go Down the tree */
        $root->left = invertTree($root->left);
        $root->right = invertTree($root->right);
    }
    /** Return the modified tree */
    return $root;

}

/**
 * invertTree function goes here
 */
class InvertBinaryTreeTest extends TestCase
{
    public function testInvert()
    {
        $root = new BinaryNode(1);
        $rootLeftChild = new BinaryNode(2);
        $rootRightChild = new BinaryNode(3);
        $rootLeftChildLeftChild = new BinaryNode(4);
        $rootLeftChildRightNode = new BinaryNode(5);
        $rootRightChildLeftChild = new BinaryNode(6);
        $rootRightChildRightNode = new BinaryNode(7);
        $rootLeftChild->left = $rootLeftChildLeftChild;
        $rootLeftChild->right = $rootLeftChildRightNode;
        $rootRightChild->left = $rootRightChildLeftChild;
        $rootRightChild->right = $rootRightChildRightNode;
        $root->left = $rootLeftChild;
        $root->right = $rootRightChild;


        $invertedTree = invertTree($root);
        $this->assertEquals($invertedTree->value, 1);
        $this->assertEquals($invertedTree->left->value, 3);
        $this->assertEquals($invertedTree->right->value, 2);
        $this->assertEquals($invertedTree->left->left->value, 7);
        $this->assertEquals($invertedTree->left->right->value, 6);
        $this->assertEquals($invertedTree->right->left->value, 5);
        $this->assertEquals($invertedTree->right->right->value, 4);
    }
}
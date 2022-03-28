<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search.proto

namespace Google\Cloud\Vision\V1\ProductSearchResults;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a product.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ProductSearchResults.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * The Product.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1;</code>
     */
    private $product = null;
    /**
     * A confidence level on the match, ranging from 0 (no confidence) to
     * 1 (full confidence).
     *
     * Generated from protobuf field <code>float score = 2;</code>
     */
    private $score = 0.0;
    /**
     * The resource name of the image from the product that is the closest match
     * to the query.
     *
     * Generated from protobuf field <code>string image = 3;</code>
     */
    private $image = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\Product $product
     *           The Product.
     *     @type float $score
     *           A confidence level on the match, ranging from 0 (no confidence) to
     *           1 (full confidence).
     *     @type string $image
     *           The resource name of the image from the product that is the closest match
     *           to the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearch::initOnce();
        parent::__construct($data);
    }

    /**
     * The Product.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1;</code>
     * @return \Google\Cloud\Vision\V1\Product|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    public function hasProduct()
    {
        return isset($this->product);
    }

    public function clearProduct()
    {
        unset($this->product);
    }

    /**
     * The Product.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.Product product = 1;</code>
     * @param \Google\Cloud\Vision\V1\Product $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\Product::class);
        $this->product = $var;

        return $this;
    }

    /**
     * A confidence level on the match, ranging from 0 (no confidence) to
     * 1 (full confidence).
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * A confidence level on the match, ranging from 0 (no confidence) to
     * 1 (full confidence).
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * The resource name of the image from the product that is the closest match
     * to the query.
     *
     * Generated from protobuf field <code>string image = 3;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * The resource name of the image from the product that is the closest match
     * to the query.
     *
     * Generated from protobuf field <code>string image = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \Google\Cloud\Vision\V1\ProductSearchResults_Result::class);

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/mutation.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Arguments to [delete][google.spanner.v1.Mutation.delete] operations.
 *
 * Generated from protobuf message <code>google.spanner.v1.Mutation.Delete</code>
 */
class Mutation_Delete extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The table whose rows will be deleted.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     */
    private $table = '';
    /**
     * Required. The primary keys of the rows within [table][google.spanner.v1.Mutation.Delete.table] to delete.
     * Delete is idempotent. The transaction will succeed even if some or all
     * rows do not exist.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 2;</code>
     */
    private $key_set = null;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Mutation::initOnce();
        parent::__construct();
    }

    /**
     * Required. The table whose rows will be deleted.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Required. The table whose rows will be deleted.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * Required. The primary keys of the rows within [table][google.spanner.v1.Mutation.Delete.table] to delete.
     * Delete is idempotent. The transaction will succeed even if some or all
     * rows do not exist.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 2;</code>
     * @return \Google\Cloud\Spanner\V1\KeySet
     */
    public function getKeySet()
    {
        return $this->key_set;
    }

    /**
     * Required. The primary keys of the rows within [table][google.spanner.v1.Mutation.Delete.table] to delete.
     * Delete is idempotent. The transaction will succeed even if some or all
     * rows do not exist.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 2;</code>
     * @param \Google\Cloud\Spanner\V1\KeySet $var
     * @return $this
     */
    public function setKeySet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\KeySet::class);
        $this->key_set = $var;

        return $this;
    }

}


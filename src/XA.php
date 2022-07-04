<?php

namespace DtmClient;

use DtmClient\Api\ApiInterface;

class XA extends AbstractTransaction
{

    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    /**
     *  construct xa info from request
     */
    public function fromQuery(array $qs)
    {

    }

    /**
     * start a xa local transaction
     */
    public function localTransaction()
    {

    }

    /**
     * start a xa global transaction
     */
    public function globalTransaction()
    {

    }

    /**
     * start a xa global transaction with xa custom function
     */
    public function globalTransaction2()
    {

    }

    /**
     * call a xa branch
     */
    public function callBranch()
    {

    }
}
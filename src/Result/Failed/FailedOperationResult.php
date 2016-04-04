<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:50 AM
 */

namespace Vain\Operation\Result\Failed;


use Vain\Operation\Result\AbstractOperationResult;

class FailedOperationResult extends AbstractOperationResult
{
    public function __construct()
    {
        parent::__construct(false);
    }
}
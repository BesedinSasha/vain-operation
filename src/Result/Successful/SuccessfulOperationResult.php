<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 9:51 AM
 */

namespace Vain\Operation\Result\Successful;


use Vain\Operation\Result\AbstractOperationResult;

class SuccessfulOperationResult extends AbstractOperationResult
{
    public function __construct()
    {
        parent::__construct(true);
    }
}
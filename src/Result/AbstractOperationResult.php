<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 11:45 AM
 */

namespace Vain\Operation\Result;


abstract class AbstractOperationResult implements OperationResultInterface
{
    private $status;
    
    public function __construct($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
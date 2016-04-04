<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 11:54 AM
 */

namespace Vain\Operation\Result;


interface OperationResultInterface
{
    /**
     * @return bool
     */
    public function getStatus();
}
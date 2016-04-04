<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/28/16
 * Time: 11:43 AM
 */

namespace Vain\Operation;

use Vain\Operation\Result\OperationResultInterface;

interface OperationInterface
{
    /**
     * @return string
     */
    public function getId();
    
    /**
     * @return OperationResultInterface
     */
    public function execute();
}
<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:22 AM
 */
namespace Vain\Operation\Logger;

use Vain\Operation\Result\OperationResultInterface;
use Vain\Operation\OperationInterface;

interface OperationLoggerInterface
{
    /**
     * @param OperationInterface $operation
     *
     * @return OperationLoggerInterface
     */
    public function beforeExecution(OperationInterface $operation);

    /**
     * @param OperationInterface $operation
     * @param OperationResultInterface $result
     *
     * @return OperationLoggerInterface
     */
    public function afterExecution(OperationInterface $operation, OperationResultInterface $result);
}
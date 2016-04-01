<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:22 AM
 */
namespace Vain\Operation\Logger;

use Vain\Operation\Result\VainOperationResultInterface;
use Vain\Operation\VainOperationInterface;

interface VainOperationLoggerInterface
{
    /**
     * @param VainOperationInterface $operation
     *
     * @return VainOperationLoggerInterface
     */
    public function beforeExecution(VainOperationInterface $operation);

    /**
     * @param VainOperationInterface $operation
     * @param VainOperationResultInterface $result
     *
     * @return VainOperationLoggerInterface
     */
    public function afterExecution(VainOperationInterface $operation, VainOperationResultInterface $result);
}
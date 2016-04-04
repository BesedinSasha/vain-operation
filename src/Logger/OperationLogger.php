<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:19 AM
 */

namespace Vain\Operation\Logger;

use Vain\Logger\LoggerInterface;
use Vain\Operation\Result\OperationResultInterface;
use Vain\Operation\OperationInterface;

class OperationLogger implements OperationLoggerInterface
{
    const BEFORE_OPERATION_EXECUTION_MESSAGE = 'Ready to execute operation %s with id %d';
    const SUCCESSFUL_OPERATION_EXECUTION_MESSAGE = 'Successfully executed operation %s with id %s';
    const FAILED_OPERATION_EXECUTION_MESSAGE = 'Failed to execute operation %s with id %s';

    private $logger;

    /**
     * VainOperationLogger constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param OperationInterface $operation
     *
     * @return OperationLoggerInterface
     */
    public function beforeExecution(OperationInterface $operation)
    {
        
    }

    /**
     * @param OperationInterface $operation
     * @param OperationResultInterface $result
     *
     * @return OperationLoggerInterface
     */
    public function afterExecution(OperationInterface $operation, OperationResultInterface $result)
    {

    }
}
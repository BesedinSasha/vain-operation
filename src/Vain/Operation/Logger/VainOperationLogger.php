<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:19 AM
 */

namespace Vain\Operation\Logger;

use Vain\Logger\VainLoggerInterface;
use Vain\Operation\Result\VainOperationResultInterface;
use Vain\Operation\VainOperationInterface;

class VainOperationLogger implements VainOperationLoggerInterface
{
    const BEFORE_OPERATION_EXECUTION_MESSAGE = 'Ready to execute operation %s with id %d';
    const SUCCESSFUL_OPERATION_EXECUTION_MESSAGE = 'Successfully executed operation %s with id %s';
    const FAILED_OPERATION_EXECUTION_MESSAGE = 'Failed to execute operation %s with id %s';

    private $logger;

    /**
     * VainOperationLogger constructor.
     * @param VainLoggerInterface $logger
     */
    public function __construct(VainLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param VainOperationInterface $operation
     *
     * @return VainOperationLoggerInterface
     */
    public function beforeExecution(VainOperationInterface $operation)
    {
        
    }

    /**
     * @param VainOperationInterface $operation
     * @param VainOperationResultInterface $result
     *
     * @return VainOperationLoggerInterface
     */
    public function afterExecution(VainOperationInterface $operation, VainOperationResultInterface $result)
    {

    }
}
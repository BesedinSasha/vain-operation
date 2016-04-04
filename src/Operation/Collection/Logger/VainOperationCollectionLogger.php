<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 10:29 AM
 */

namespace Vain\Operation\Collection\Logger;

use Vain\Logger\VainLoggerInterface;
use Vain\Operation\Collection\VainOperationCollectionInterface;
use Vain\Operation\VainOperationInterface;
use Vain\Operation\Result\VainOperationResultInterface;

class VainOperationCollectionLogger implements VainOperationCollectionLoggerInterface
{
    const BEFORE_EXECUTION_MESSAGE = 'Ready to execute collection %s with id %s';
    const SUCCESSFUL_EXECUTION_MESSAGE = 'Successfully executed collection %s with id %s';
    const FAILED_EXECUTION_MESSAGE = 'Failed to execute collection %s with id %s';
    const ADD_OPERATION_MESSAGE = 'Adding operation %s with id %s to collection %s with id %s';

    private $logger;

    /**
     * VainOperationCollectionLogger constructor.
     * @param VainLoggerInterface $logger
     */
    public function __construct(VainLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @inheritDoc
     */
    public function beforeExecution(VainOperationCollectionInterface $collection)
    {
        $this->logger->debug(sprintf(self::BEFORE_EXECUTION_MESSAGE, $collection->getId()));

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function afterExecution(
        VainOperationCollectionInterface $collection,
        VainOperationResultInterface $vainOperationResult
    ) {
        if (false === $vainOperationResult->getStatus()) {
            $this->logger->info(sprintf(self::FAILED_EXECUTION_MESSAGE, get_class($collection), $collection->getId()));
        } else {
            $this->logger->debug(sprintf(self::SUCCESSFUL_EXECUTION_MESSAGE, get_class($collection),
                $collection->getId()));
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addOperation(VainOperationInterface $operation, VainOperationCollectionInterface $collection)
    {
        $this->logger->debug(sprintf(self::ADD_OPERATION_MESSAGE, get_class($operation), $operation->getId(),
            get_class($collection), $collection->getId()));
    }
}
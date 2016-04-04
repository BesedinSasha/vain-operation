<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 3/31/16
 * Time: 10:29 AM
 */

namespace Vain\Operation\Collection\Logger;

use Vain\Logger\LoggerInterface;
use Vain\Operation\Collection\CollectionInterface;
use Vain\Operation\OperationInterface;
use Vain\Operation\Result\OperationResultInterface;

class CollectionLogger implements CollectionLoggerInterface
{
    const BEFORE_EXECUTION_MESSAGE = 'Ready to execute collection %s with id %s';
    const SUCCESSFUL_EXECUTION_MESSAGE = 'Successfully executed collection %s with id %s';
    const FAILED_EXECUTION_MESSAGE = 'Failed to execute collection %s with id %s';
    const ADD_OPERATION_MESSAGE = 'Adding operation %s with id %s to collection %s with id %s';

    private $logger;

    /**
     * VainOperationCollectionLogger constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @inheritDoc
     */
    public function beforeExecution(CollectionInterface $collection)
    {
        $this->logger->debug(sprintf(self::BEFORE_EXECUTION_MESSAGE, $collection->getId()));

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function afterExecution(
        CollectionInterface $collection,
        OperationResultInterface $vainOperationResult
    ) {
        if (false === $vainOperationResult->getStatus()) {
            $this->logger->debug(sprintf(self::FAILED_EXECUTION_MESSAGE, get_class($collection), $collection->getId()));
        } else {
            $this->logger->debug(sprintf(self::SUCCESSFUL_EXECUTION_MESSAGE, get_class($collection),
                $collection->getId()));
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addOperation(OperationInterface $operation, CollectionInterface $collection)
    {
        $this->logger->debug(sprintf(self::ADD_OPERATION_MESSAGE, get_class($operation), $operation->getId(),
            get_class($collection), $collection->getId()));
    }
}
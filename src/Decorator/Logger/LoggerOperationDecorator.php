<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:17 AM
 */

namespace Vain\Operation\Decorator\Logger;

use Vain\Operation\Decorator\AbstractOperationDecorator;
use Vain\Operation\Logger\OperationLoggerInterface;
use Vain\Operation\OperationInterface;

class LoggerOperationDecorator extends AbstractOperationDecorator
{
    
    private $logger;

    /**
     * AbstractVainOperationLoggerDecorator constructor.
     * @param OperationLoggerInterface $logger
     * @param OperationInterface $operation
     */
    public function __construct(OperationLoggerInterface $logger, OperationInterface $operation)
    {
        $this->logger = $logger;
        parent::__construct($operation);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $this->logger->beforeExecution($this->getOperation());
        $result = parent::execute();
        $this->logger->afterExecution($this->getOperation(), $result);

        return $result;
    }
}
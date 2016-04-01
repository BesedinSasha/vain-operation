<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:17 AM
 */

namespace Vain\Operation\Decorator\Logger;


use Vain\Operation\Decorator\AbstractVainOperationDecorator;
use Vain\Operation\Logger\VainOperationLoggerInterface;
use Vain\Operation\VainOperationInterface;

class VainOperationLoggerDecorator extends AbstractVainOperationDecorator
{
    
    private $logger;

    /**
     * AbstractVainOperationLoggerDecorator constructor.
     * @param VainOperationLoggerInterface $logger
     * @param VainOperationInterface $operation
     */
    public function __construct(VainOperationLoggerInterface $logger, VainOperationInterface $operation)
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
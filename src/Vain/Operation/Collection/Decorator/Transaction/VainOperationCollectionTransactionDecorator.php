<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:11 AM
 */

namespace Vain\Operation\Collection\Decorator\Transaction;


use Vain\Database\VainDatabaseInterface;
use Vain\Operation\Collection\Decorator\AbstractVainOperationCollectionDecorator;
use Vain\Operation\Collection\VainOperationCollectionInterface;

class VainOperationCollectionTransactionDecorator extends AbstractVainOperationCollectionDecorator
{
    private $database;

    /**
     * VainOperationCollectionTransactionDecorator constructor.
     * @param VainDatabaseInterface $database
     * @param VainOperationCollectionInterface $collection
     */
    public function __construct(VainDatabaseInterface $database, VainOperationCollectionInterface $collection)
    {
        $this->database = $database;
        parent::__construct($collection);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $this->database->transaction(); 
        $result = parent::execute();
        if (false === $result->getStatus()) {
            $this->database->rollback();
        } else {
            $this->database->commit();
        }
        
        return $result;
    }
}
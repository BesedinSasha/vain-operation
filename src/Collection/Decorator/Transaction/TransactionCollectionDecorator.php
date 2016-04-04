<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 11:11 AM
 */

namespace Vain\Operation\Collection\Decorator\Transaction;

use Vain\Database\DatabaseInterface;
use Vain\Operation\Collection\Decorator\AbstractCollectionDecorator;
use Vain\Operation\Collection\CollectionInterface;

class TransactionCollectionDecorator extends AbstractCollectionDecorator
{
    private $database;

    /**
     * VainOperationCollectionTransactionDecorator constructor.
     * @param DatabaseInterface $database
     * @param CollectionInterface $collection
     */
    public function __construct(DatabaseInterface $database, CollectionInterface $collection)
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
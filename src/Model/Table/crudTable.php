<?php
namespace App\Model\Table;
use App\Model\Entity\Post;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;
class crudTable extends Table
{
     // example_id is the field name in the database
    public $primaryKey = 'Id';
    public function initialize(array $config)
    { 
        $this->addBehavior('Timestamp');
        parent::initialize($config);
        //$this->table('crud');
        $this->displayField('Name');
        $this->displayField('Address');
        $this->primaryKey('Id');
    }
}
    
?>
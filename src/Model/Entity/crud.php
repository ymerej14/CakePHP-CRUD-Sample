<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Crud extends Entity
{
    protected $_accessible = [
        'Id' => true,
        'Name'=> true,
        'Address'=> true,
    ];
}
?>
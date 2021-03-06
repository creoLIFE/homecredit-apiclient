<?php
namespace Homecredit\Api;

use Homecredit\Api\Client\WebClient;
use Homecredit\Api\Entity\CalcEntity;

class ICalc extends WebClient
{
    /**
     * @var array
     */
    protected $urlSchema = [
        'dev' => [
            'cz' => 'https://i-calc.train.homecredit.cz/icalc/entry.do',
            'sk' => 'https://i-calc.train.homecredit.sk/icalc/entry.do'
        ],
        'production' => [
            'cz' => 'https://i-calc.homecredit.cz/icalc/entry.do',
            'sk' => 'https://i-calc.homecredit.sk/icalc/entry.do'
        ],
        'production_alternative' => [
            'cz' => 'https://i-calc.homecredit.net/icalc/entry.do',
            'sk' => 'https://i-calcsk.homecredit.net/icalc/entry.do'
        ]
    ];

    /**
     * Create a link to iCalc with predefined product price
     * @param CalcEntity $entity
     * @return mixed
     */
    public function getCalcLink(CalcEntity $entity)
    {
        return parent::call('GetLink', $entity);
    }

}

<?php
namespace Gjo\GjoExampleRelation\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class OwnerManyToOneUniPerson extends AbstractEntity
{
    /**
     * @var string
     * @validate NotEmpty
     */
    protected $stringWithoutBreak = '';

    /**
     * @param string $stringWithoutBreak
     * @return void
     */
    public function setStringWithoutBreak($stringWithoutBreak)
    {
        $this->stringWithoutBreak = $stringWithoutBreak;
    }

    /**
     * @return string
     */
    public function getStringWithoutBreak()
    {
        return $this->stringWithoutBreak;
    }
}
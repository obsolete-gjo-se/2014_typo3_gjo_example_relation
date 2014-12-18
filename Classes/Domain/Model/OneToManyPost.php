<?php
namespace Gjo\GjoExampleRelation\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class OneToManyPost extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
<?php
namespace Gjo\GjoExampleRelation\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity,
    TYPO3\CMS\Extbase\Persistence\ObjectStorage;

use Gjo\GjoExampleRelation\Domain\Model\OneToManyPost;

class OneToManyBlog extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoExampleRelation\Domain\Model\OneToManyPost>
     */
    protected $postsCounter = 0;

    public function __construct()
    {
        $this->initStorageObjects();
    }

    public function initStorageObjects()
    {
        $this->postsCounter = new ObjectStorage();
    }

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

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoExampleRelation\Domain\Model\OneToManyPost> $postsCounter
     * @return void
     */
    public function setPostsCounter(ObjectStorage $postsCounter)
    {
        $this->postsCounter = $postsCounter;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gjo\GjoExampleRelation\Domain\Model\OneToManyPost>
     */
    public function getPostsCounter()
    {
        return $this->postsCounter;
    }

    /**
     * @param OneToManyPost $post
     * @return void
     */
    public function addPost(OneToManyPost $post)
    {
        $this->postsCounter->attach($post);
    }

    /**
     * @param OneToManyPost $post
     * @return void
     */
    public function removePost(OneToManyPost $post)
    {
        $this->postsCounter->detach($post);
    }


}
<?php
namespace Gjo\GjoExampleRelation\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

use Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog,
    Gjo\GjoExampleRelation\Domain\Model\OneToManyPost;

class OneToManyPostController extends ActionController {

	/**
	 * @var \Gjo\GjoExampleRelation\Domain\Repository\OneToManyPostRepository
	 * @inject
	 */
	protected $oneToManyPostRepository;

    /**
     * @var \Gjo\GjoExampleRelation\Domain\Repository\OneToManyBlogRepository
     * @inject
     */
    protected $oneToManyBlogRepository;

	/**
	 * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyPost $postObject
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
	 * @return void
	 */
	public function showAction(OneToManyPost $postObject, OneToManyBlog $blogObject) {
		$this->view->assign('post', $postObject);
        $this->view->assign('blog', $blogObject);
	}

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
     * @return void
     */
    public function addFormAction(OneToManyBlog $blogObject)
    {
        $this->view->assign('blogObject',$blogObject);
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyPost $addForm
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
     * @return void
     */
    public function addAction(OneToManyPost $addForm, OneToManyBlog $blogObject)
    {

        $blogObject->addPost($addForm);
        $this->oneToManyBlogRepository->update($blogObject);

        $this->redirect('show', 'OneToManyBlog', NULL, array('blogObject' => $blogObject));
    }


    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyPost $postObject
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
     * @return void
     */
    public function updateFormAction(OneToManyPost $postObject, OneToManyBlog $blogObject)
    {
        $this->view->assign('post', $postObject);
        $this->view->assign('blogObject', $blogObject);
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyPost $postObject
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
     * @return void
     */
    public function updateAction(OneToManyPost $updateForm, OneToManyBlog $blogObject)
    {
        $this->oneToManyPostRepository->update($updateForm);

        $this->redirect('show', 'OneToManyBlog', NULL, array('blogObject' => $blogObject));
    }


    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyPost $postObject
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
     * @return void
     */
    public function removeAction(OneToManyPost $postObject, OneToManyBlog $blogObject)
    {
        $blogObject->removePost($postObject);
        $this->oneToManyBlogRepository->update($blogObject);

        $this->oneToManyPostRepository->remove($postObject);

        $this->redirect('show', 'OneToManyBlog', NULL, array('blogObject' => $blogObject));
    }
}
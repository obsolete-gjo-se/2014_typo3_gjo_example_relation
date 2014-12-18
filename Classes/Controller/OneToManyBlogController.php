<?php
namespace Gjo\GjoExampleRelation\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

use Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog;

class OneToManyBlogController extends ActionController {

	/**
	 * blogRepository
	 *
	 * @var \Gjo\GjoExampleRelation\Domain\Repository\OneToManyBlogRepository
	 * @inject
	 */
	protected $oneToManyBlogRepository;

	/**
	 * @return void
	 */
	public function findAllAction() {
		$this->view->assign('blog', $this->oneToManyBlogRepository->findAll());
	}

	/**
	 * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
	 * @return void
	 */
	public function showAction(OneToManyBlog $blogObject) {
		$this->view->assign('blog', $blogObject);
	}

    /**
     * @return void
     */
    public function addFormAction() {}

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $addForm
     * @return void
     */
    public function addAction(OneToManyBlog $addForm) {
        $this->oneToManyBlogRepository->add($addForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
     * @return void
     */
    public function updateFormAction(OneToManyBlog $blogObject) {
        $this->view->assign('blog', $blogObject);
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $updateForm
     * @return void
     */
    public function updateAction(OneToManyBlog $updateForm) {
        $this->oneToManyBlogRepository->update($updateForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OneToManyBlog $blogObject
     * @return void
     */
    public function removeAction(OneToManyBlog $blogObject){
        $this->oneToManyBlogRepository->remove($blogObject);
        $this->redirect('findAll');
    }

}
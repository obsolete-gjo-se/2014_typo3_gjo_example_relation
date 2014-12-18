<?php
namespace Gjo\GjoExampleRelation\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Gjo\GjoExampleRelation\Domain\Model\OwnerManyToOneUniPerson;

class ManyToOneUniController extends ActionController
{
    /**
     * @var \Gjo\GjoExampleRelation\Domain\Repository\OwnerManyToOneUniPersonRepository
     * @inject
     */
    protected $ownerManyToOneUniPersonRepository;

    /**
     * @return void
     */
    public function findAllAction() {
        $this->view->assign('ownerManyToOneUniPerson', $this->ownerManyToOneUniPersonRepository->findAll());
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OwnerManyToOneUniPerson $ownerManyToOneUniPerson
     * @return void
     */
    public function showAction(OwnerManyToOneUniPerson $ownerManyToOneUniPerson) {
        $this->view->assign('ownerManyToOneUniPerson', $ownerManyToOneUniPerson);
    }

    /**
     * @return void
     */
    public function addFormAction() {}

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OwnerManyToOneUniPerson $addForm
     * @return void
     */
    public function addAction(OwnerManyToOneUniPerson $addForm) {
        $this->ownerManyToOneUniPersonRepository->add($addForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OwnerManyToOneUniPerson $ownerManyToOneUniPerson
     * @return void
     */
    public function updateFormAction(OwnerManyToOneUniPerson $ownerManyToOneUniPerson) {
        $this->view->assign('ownerManyToOneUniPerson', $ownerManyToOneUniPerson);
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OwnerManyToOneUniPerson $updateForm
     * @return void
     */
    public function updateAction(OwnerManyToOneUniPerson $updateForm) {
        $this->ownerManyToOneUniPersonRepository->update($updateForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExampleRelation\Domain\Model\OwnerManyToOneUniPerson $ownerManyToOneUniPerson
     * @return void
     */
    public function removeAction(OwnerManyToOneUniPerson $ownerManyToOneUniPerson){
        $this->ownerManyToOneUniPersonRepository->remove($ownerManyToOneUniPerson);
        $this->redirect('findAll');
    }
}
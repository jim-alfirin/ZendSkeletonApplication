<?php
namespace Album\Controller;

use Album\Model\Album;
use Album\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class AlbumController
 * @package Album\Controller
 */
class AlbumController extends AbstractActionController
{
    /**
     * @var AlbumTable
     */
    protected $albumTable;

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
        ));
    }

    /**
     *
     */
    public function addAction()
    {
    }

    /**
     *
     */
    public function editAction()
    {
    }

    /**
     *
     */
    public function deleteAction()
    {
    }

    /**
     * @return AlbumTable
     */
    public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }
}
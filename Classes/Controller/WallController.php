<?php
namespace CHR\ChrWallsio\Controller;




class WallController extends  \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{



    public function showAction() {
        $data = $this->configurationManager->getContentObject()->data;

        // Append flexform values
        $this->configurationManager->getContentObject()->readFlexformIntoConf($data['pi_flexform'], $data);

        // Assign to template
        $this->view->assign('data', $data);
    }



}

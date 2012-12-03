<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Marc Fl�ren (MF), <marc.floeren@fh-duesseldorf.de>
 */

class FaqController{
    
    /**
     * �bergibt Daten an Model
     *
     */
    public function forwarding($_POST){
        // Model einbinden
        require_once '../../models/faq.php';
        
        // Objekt erstellen
        $faqModel = new Faq();
        
		// POST �bergeben
        $faqModel->controllInput($_POST);
    }
	
	/**
     * F�hrt die Abfragemethode aus
     * @return Array
     */
    public function getFAQs(){
        // Model einbinden
        require_once '/models/faq.php';
        
        // FAQ-Objekt erstellen
		$faqModel = new Faq();
		
        // Methode ausf�hren und zur�ckgeben
        return $faq->getFaq();
    }
}
 
/* End of file faqController.php */
/* Location: ./controllers/faqController.php */
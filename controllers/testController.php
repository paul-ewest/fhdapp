<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

class TestController{
    
    /**
     * Führt die Abfragemethode aus
     * @return Array
     */
    public function personenauflistung(){
        // Model einbinden
        require_once 'models/test.php';
        
        // Test-Objekt erstellen
        $Test = new Test();
        // Methode ausführen und zurückgeben
        return $Test->getPerson();
    }
}
 
/* End of file testController.php */
/* Location: ./controllers/testController.php */
<?php

require_once dirname(__FILE__) . '/../../tao/test/TaoTestRunner.php';
include_once dirname(__FILE__) . '/../includes/raw_start.php';
/**
 * TODO Not a real unit test, script used for the dev. time , will be removed
 */
class exampleResultServerTestCase extends UnitTestCase {


	public function setUp(){		
		TaoTestRunner::initTest();
	}

    public function testLtiBasicOutcome() {
        $resultServer = new taoResultServer_models_classes_ResultServer(TAO_LTI_RESULT_SERVER_EXAMPLE);
        $api = $resultServer->getStorageInterface();
        $myResultIdentifier = "My_lis_result_sourcedid";
        $outComeVariable = new taoResultServer_models_classes_OutcomeVariable();
        $outComeVariable->setBaseType("int");
        $outComeVariable->setCardinality("single");
        $outComeVariable->setIdentifier("Rotation in Space");
        $outComeVariable->setValue(0.34);
        $api->storeTestVariable( $myResultIdentifier, "", $outComeVariable, "");
    }
    
}
?>
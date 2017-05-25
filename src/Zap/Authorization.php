<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright 2016 the ZAP development team
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Zap;


/**
 * This file was automatically generated.
 */
class Authorization {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Verkrijgt alle configuratie van de autorisatie detectie methode die momenteel is ingesteld voor een context.
	 */
	public function getAuthorizationDetectionMethod($contextid) {
		$res = $this->zap->request($this->zap->base . 'authorization/view/getAuthorizationDetectionMethod/', array('contextId' => $contextid));
		return reset($res);
	}

	/**
	 * Hiermee stelt u de autorisatie detectie methode in voor een context dat niet-geautoriseerde berichten identificeert aan de hand van: de statuscode van het bericht of een regex patroon in de header of body van de reponse. Ook kan er gespecificeerd worden via de logischeOperator parameter of alle voorwaarden overeen moeten komen of maar enkele. Deze accepteert twee waarden: "AND" (standaard), "OR".  
	 */
	public function setBasicAuthorizationDetectionMethod($contextid, $headerregex=NULL, $bodyregex=NULL, $statuscode=NULL, $logicaloperator=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'apikey' => $apikey);
		if ($headerregex !== NULL) {
			$params['headerRegex'] = $headerregex;
		}
		if ($bodyregex !== NULL) {
			$params['bodyRegex'] = $bodyregex;
		}
		if ($statuscode !== NULL) {
			$params['statusCode'] = $statuscode;
		}
		if ($logicaloperator !== NULL) {
			$params['logicalOperator'] = $logicaloperator;
		}
		$res = $this->zap->request($this->zap->base . 'authorization/action/setBasicAuthorizationDetectionMethod/', $params);
		return reset($res);
	}

}

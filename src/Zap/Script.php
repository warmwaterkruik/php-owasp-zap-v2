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
class Script {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Toont de beschikbare script engines
	 */
	public function listEngines() {
		$res = $this->zap->request($this->zap->base . 'script/view/listEngines/');
		return reset($res);
	}

	/**
	 * Toont de beschikbare scripts, met hun engine, naam, beschrijving, type en fout status.
	 */
	public function listScripts() {
		$res = $this->zap->request($this->zap->base . 'script/view/listScripts/');
		return reset($res);
	}

	/**
	 * Schakelt het script met de gegeven naam in
	 */
	public function enable($scriptname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'script/action/enable/', array('scriptName' => $scriptname, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt het script met de gegeven naam uit
	 */
	public function disable($scriptname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'script/action/disable/', array('scriptName' => $scriptname, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Laad een script in ZAP uit het gegeven lokale bestand, met de gegeven naam, type en engine, optioneel met een beschrijving
	 */
	public function load($scriptname, $scripttype, $scriptengine, $filename, $scriptdescription=NULL, $charset=NULL, $apikey='') {
		$params = array('scriptName' => $scriptname, 'scriptType' => $scripttype, 'scriptEngine' => $scriptengine, 'fileName' => $filename, 'apikey' => $apikey);
		if ($scriptdescription !== NULL) {
			$params['scriptDescription'] = $scriptdescription;
		}
		if ($charset !== NULL) {
			$params['charset'] = $charset;
		}
		$res = $this->zap->request($this->zap->base . 'script/action/load/', $params);
		return reset($res);
	}

	/**
	 * Verwijdert het script met de gegeven naam
	 */
	public function remove($scriptname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'script/action/remove/', array('scriptName' => $scriptname, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Voert het stand alone script met de gegeven naam uit
	 */
	public function runStandAloneScript($scriptname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'script/action/runStandAloneScript/', array('scriptName' => $scriptname, 'apikey' => $apikey));
		return reset($res);
	}

}

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
class Pscan {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Tells whether or not the passive scan should be performed only on messages that are in scope.
	 */
	public function scanOnlyInScope() {
		$res = $this->zap->request($this->zap->base . 'pscan/view/scanOnlyInScope/');
		return reset($res);
	}

	/**
	 * Het aantal records dat de passieve scanner nog moet scannen
	 */
	public function recordsToScan() {
		$res = $this->zap->request($this->zap->base . 'pscan/view/recordsToScan/');
		return reset($res);
	}

	/**
	 * Toont alle passieve scanners met hun ID, naam, ingeschakelde status, en waarschuwingsdrempel.
	 */
	public function scanners() {
		$res = $this->zap->request($this->zap->base . 'pscan/view/scanners/');
		return reset($res);
	}

	/**
	 * Stelt in of passief scannen is ingeschakeld of niet
	 */
	public function setEnabled($enabled, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'pscan/action/setEnabled/', array('enabled' => $enabled, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets whether or not the passive scan should be performed only on messages that are in scope.
	 */
	public function setScanOnlyInScope($onlyinscope, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'pscan/action/setScanOnlyInScope/', array('onlyInScope' => $onlyinscope, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt alle passieve scanners in
	 */
	public function enableAllScanners($apikey='') {
		$res = $this->zap->request($this->zap->base . 'pscan/action/enableAllScanners/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt alle passieve scanners uit
	 */
	public function disableAllScanners($apikey='') {
		$res = $this->zap->request($this->zap->base . 'pscan/action/disableAllScanners/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt alle passieve scanners in met de gegeven ID''s (door komma''s gescheiden lijst met ID''s)
	 */
	public function enableScanners($ids, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'pscan/action/enableScanners/', array('ids' => $ids, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt alle passieve scanners uit met de gegeven ID''s (door komma''s gescheiden lijst met ID''s)
	 */
	public function disableScanners($ids, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'pscan/action/disableScanners/', array('ids' => $ids, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Stelt de waarschuwingsdrempel in voor de passieve scanner met de gegeven ID, geaccepteerde waarden voor waarschuwingsdrempel: UIT, STANDAARD, LAAG, GEMIDDELD, en HOOG
	 */
	public function setScannerAlertThreshold($id, $alertthreshold, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'pscan/action/setScannerAlertThreshold/', array('id' => $id, 'alertThreshold' => $alertthreshold, 'apikey' => $apikey));
		return reset($res);
	}

}

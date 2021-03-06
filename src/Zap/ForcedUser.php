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
class ForcedUser {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Geeft ''true'' terug als ''forced user'' mode is ingeschakeld, anders ''false''
	 */
	public function isForcedUserModeEnabled() {
		$res = $this->zap->request($this->zap->base . 'forcedUser/view/isForcedUserModeEnabled/');
		return reset($res);
	}

	/**
	 * Geeft de gebruiker (ID) die als ''geforceerde gebruiker'' is ingesteld voor de gegeven context (ID)
	 */
	public function getForcedUser($contextid) {
		$res = $this->zap->request($this->zap->base . 'forcedUser/view/getForcedUser/', array('contextId' => $contextid));
		return reset($res);
	}

	/**
	 * Zet de gebruiker (ID) als ''geforceerde gebruiker'' in de gegeven context (ID)
	 */
	public function setForcedUser($contextid, $userid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'forcedUser/action/setForcedUser/', array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Stelt in of ''geforceerde gebruiker'' modus moet worden ingeschakeld of niet
	 */
	public function setForcedUserModeEnabled($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'forcedUser/action/setForcedUserModeEnabled/', array('boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

}

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
class HttpSessions {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Gets all of the sites that have sessions.
	 */
	public function sites() {
		$res = $this->zap->request($this->zap->base . 'httpSessions/view/sites/');
		return reset($res);
	}

	/**
	 * Geeft de sessies van de gegeven site. Geeft optioneel alleen de sessie met de gegeven naam.
	 */
	public function sessions($site, $session=NULL) {
		$params = array('site' => $site);
		if ($session !== NULL) {
			$params['session'] = $session;
		}
		$res = $this->zap->request($this->zap->base . 'httpSessions/view/sessions/', $params);
		return reset($res);
	}

	/**
	 * Geeft de naam van de actieve sessie voor de gegeven site.
	 */
	public function activeSession($site) {
		$res = $this->zap->request($this->zap->base . 'httpSessions/view/activeSession/', array('site' => $site));
		return reset($res);
	}

	/**
	 * Geeft de namen van de sessie tokens voor de gegeven site.
	 */
	public function sessionTokens($site) {
		$res = $this->zap->request($this->zap->base . 'httpSessions/view/sessionTokens/', array('site' => $site));
		return reset($res);
	}

	/**
	 * Maakt een lege sessie aan voor de gegeven site. Optioneel met de gegeven naam.
	 */
	public function createEmptySession($site, $session=NULL, $apikey='') {
		$params = array('site' => $site, 'apikey' => $apikey);
		if ($session !== NULL) {
			$params['session'] = $session;
		}
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/createEmptySession/', $params);
		return reset($res);
	}

	/**
	 * Verwijdert de sessie voor de gegeven site.
	 */
	public function removeSession($site, $session, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/removeSession/', array('site' => $site, 'session' => $session, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Maakt de gegeven sessie actief voor de gegeven site.
	 */
	public function setActiveSession($site, $session, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/setActiveSession/', array('site' => $site, 'session' => $session, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Maakt de actieve sessie voor de gegeven site inactief.
	 */
	public function unsetActiveSession($site, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/unsetActiveSession/', array('site' => $site, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Voegt een sessie token toe aan de gegeven site.
	 */
	public function addSessionToken($site, $sessiontoken, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/addSessionToken/', array('site' => $site, 'sessionToken' => $sessiontoken, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Verwijdert een sessie token voor de gegeven site.
	 */
	public function removeSessionToken($site, $sessiontoken, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/removeSessionToken/', array('site' => $site, 'sessionToken' => $sessiontoken, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Stelt de waarde van de sessie token in voor de gegeven sessie en de gegeven site.
	 */
	public function setSessionTokenValue($site, $session, $sessiontoken, $tokenvalue, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/setSessionTokenValue/', array('site' => $site, 'session' => $session, 'sessionToken' => $sessiontoken, 'tokenValue' => $tokenvalue, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Wijzigt de naam van de sessie voor de gegeven site.
	 */
	public function renameSession($site, $oldsessionname, $newsessionname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'httpSessions/action/renameSession/', array('site' => $site, 'oldSessionName' => $oldsessionname, 'newSessionName' => $newsessionname, 'apikey' => $apikey));
		return reset($res);
	}

}

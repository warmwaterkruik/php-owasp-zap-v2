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
class Context {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Toon context namen van de huidige sessie
	 */
	public function contextList() {
		$res = $this->zap->request($this->zap->base . 'context/view/contextList/');
		return reset($res);
	}

	/**
	 * Toon uitgesloten regexs voor context
	 */
	public function excludeRegexs($contextname) {
		$res = $this->zap->request($this->zap->base . 'context/view/excludeRegexs/', array('contextName' => $contextname));
		return reset($res);
	}

	/**
	 * Toon opgenomen regexs voor context
	 */
	public function includeRegexs($contextname) {
		$res = $this->zap->request($this->zap->base . 'context/view/includeRegexs/', array('contextName' => $contextname));
		return reset($res);
	}

	/**
	 * Toon de informatie over de genoemde context
	 */
	public function context($contextname) {
		$res = $this->zap->request($this->zap->base . 'context/view/context/', array('contextName' => $contextname));
		return reset($res);
	}

	/**
	 * Geeft een lijst met de namen van alle ingebouwde technologieen
	 */
	public function technologyList() {
		$res = $this->zap->request($this->zap->base . 'context/view/technologyList/');
		return reset($res);
	}

	/**
	 * Geeft de namen van alle technologieën die zijn ingeschakeld voor een context
	 */
	public function includedTechnologyList($contextname) {
		$res = $this->zap->request($this->zap->base . 'context/view/includedTechnologyList/', array('contextName' => $contextname));
		return reset($res);
	}

	/**
	 * Geeft de namen van alle technologieën die zijn uitgeschakeld in een context
	 */
	public function excludedTechnologyList($contextname) {
		$res = $this->zap->request($this->zap->base . 'context/view/excludedTechnologyList/', array('contextName' => $contextname));
		return reset($res);
	}

	/**
	 * Voeg uitgesloten regex toe aan context
	 */
	public function excludeFromContext($contextname, $regex, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/excludeFromContext/', array('contextName' => $contextname, 'regex' => $regex, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Voeg opgenomen regex toe aan context
	 */
	public function includeInContext($contextname, $regex, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/includeInContext/', array('contextName' => $contextname, 'regex' => $regex, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Maakt een nieuwe context aan in de huidige sessie
	 */
	public function newContext($contextname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/newContext/', array('contextName' => $contextname, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Verwijder een context uit de huidige sessie
	 */
	public function removeContext($contextname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/removeContext/', array('contextName' => $contextname, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Exporteert de context met de gegeven naam naar een bestand. Als een relatief bestandspad wordt opgegeven, begint het bij de "contexts" map in de ZAP "home" map.
	 */
	public function exportContext($contextname, $contextfile, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/exportContext/', array('contextName' => $contextname, 'contextFile' => $contextfile, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Importeert een context uit een bestand. Als een relatief pad wordt opgegeven, dan begint deze bij de "contexts" map in de ZAP "home" map.
	 */
	public function importContext($contextfile, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/importContext/', array('contextFile' => $contextfile, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt technologieën met de gegeven namen in in een context. De namen moeten worden gescheiden door een komma
	 */
	public function includeContextTechnologies($contextname, $technologynames, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/includeContextTechnologies/', array('contextName' => $contextname, 'technologyNames' => $technologynames, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt alle ingebouwde technologieën in in een context
	 */
	public function includeAllContextTechnologies($contextname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/includeAllContextTechnologies/', array('contextName' => $contextname, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt technologieën met de gegeven namen uit in een context. De namen moeten worden gescheiden door een komma
	 */
	public function excludeContextTechnologies($contextname, $technologynames, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/excludeContextTechnologies/', array('contextName' => $contextname, 'technologyNames' => $technologynames, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Schakelt alle ingebouwde technologieën uit in een context
	 */
	public function excludeAllContextTechnologies($contextname, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/excludeAllContextTechnologies/', array('contextName' => $contextname, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Zet een context in scope (contexts zijn standaard in scope)
	 */
	public function setContextInScope($contextname, $booleaninscope, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'context/action/setContextInScope/', array('contextName' => $contextname, 'booleanInScope' => $booleaninscope, 'apikey' => $apikey));
		return reset($res);
	}

}

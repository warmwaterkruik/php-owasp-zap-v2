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
class Spider {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	public function status($scanid=NULL) {
		$params = array();
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		$res = $this->zap->request($this->zap->base . 'spider/view/status/', $params);
		return reset($res);
	}

	public function results($scanid=NULL) {
		$params = array();
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		$res = $this->zap->request($this->zap->base . 'spider/view/results/', $params);
		return reset($res);
	}

	public function fullResults($scanid) {
		$res = $this->zap->request($this->zap->base . 'spider/view/fullResults/', array('scanId' => $scanid));
		return reset($res);
	}

	public function scans() {
		$res = $this->zap->request($this->zap->base . 'spider/view/scans/');
		return reset($res);
	}

	/**
	 * Gets the regexes of URLs excluded from the spider scans.
	 */
	public function excludedFromScan() {
		$res = $this->zap->request($this->zap->base . 'spider/view/excludedFromScan/');
		return reset($res);
	}

	/**
	 * Returns a list of unique URLs from the history table based on HTTP messages added by the Spider.
	 */
	public function allUrls() {
		$res = $this->zap->request($this->zap->base . 'spider/view/allUrls/');
		return reset($res);
	}

	/**
	 * Gets all the domains that are always in scope. For each domain the following are shown: the index, the value (domain), if enabled, and if specified as a regex.
	 */
	public function domainsAlwaysInScope() {
		$res = $this->zap->request($this->zap->base . 'spider/view/domainsAlwaysInScope/');
		return reset($res);
	}

	/**
	 * Use view domainsAlwaysInScope instead.
	 */
	public function optionDomainsAlwaysInScope() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScope/');
		return reset($res);
	}

	/**
	 * Use view domainsAlwaysInScope instead.
	 */
	public function optionDomainsAlwaysInScopeEnabled() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScopeEnabled/');
		return reset($res);
	}

	public function optionHandleParameters() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionHandleParameters/');
		return reset($res);
	}

	/**
	 * Gets the maximum number of child nodes (per node) that can be crawled, 0 means no limit.
	 */
	public function optionMaxChildren() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionMaxChildren/');
		return reset($res);
	}

	public function optionMaxDepth() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionMaxDepth/');
		return reset($res);
	}

	public function optionMaxDuration() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionMaxDuration/');
		return reset($res);
	}

	/**
	 * Gets the maximum size, in bytes, that a response might have to be parsed.
	 */
	public function optionMaxParseSizeBytes() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionMaxParseSizeBytes/');
		return reset($res);
	}

	public function optionMaxScansInUI() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionMaxScansInUI/');
		return reset($res);
	}

	public function optionRequestWaitTime() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionRequestWaitTime/');
		return reset($res);
	}

	public function optionScope() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionScope/');
		return reset($res);
	}

	public function optionScopeText() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionScopeText/');
		return reset($res);
	}

	public function optionSkipURLString() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionSkipURLString/');
		return reset($res);
	}

	public function optionThreadCount() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionThreadCount/');
		return reset($res);
	}

	public function optionUserAgent() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionUserAgent/');
		return reset($res);
	}

	/**
	 * Gets whether or not a spider process should accept cookies while spidering.
	 */
	public function optionAcceptCookies() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionAcceptCookies/');
		return reset($res);
	}

	public function optionHandleODataParametersVisited() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionHandleODataParametersVisited/');
		return reset($res);
	}

	public function optionParseComments() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionParseComments/');
		return reset($res);
	}

	public function optionParseGit() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionParseGit/');
		return reset($res);
	}

	public function optionParseRobotsTxt() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionParseRobotsTxt/');
		return reset($res);
	}

	public function optionParseSVNEntries() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionParseSVNEntries/');
		return reset($res);
	}

	public function optionParseSitemapXml() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionParseSitemapXml/');
		return reset($res);
	}

	public function optionPostForm() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionPostForm/');
		return reset($res);
	}

	public function optionProcessForm() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionProcessForm/');
		return reset($res);
	}

	/**
	 * Stelt in of de ''Referer'' header tijdens het spideren moet worden verstuurd of niet
	 */
	public function optionSendRefererHeader() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionSendRefererHeader/');
		return reset($res);
	}

	public function optionShowAdvancedDialog() {
		$res = $this->zap->request($this->zap->base . 'spider/view/optionShowAdvancedDialog/');
		return reset($res);
	}

	/**
	 * Voert de spider uit tegen de gegeven URL. Optioneel kan de ''maxChildren'' parameter worden ingesteld om het aantal te scannen kinderen te beperken. De ''recurse'' parameter kan worden ingesteld om te voorkomen dat de spider recursief te seeden.
	 */
	public function scan($url=NULL, $maxchildren=NULL, $recurse=NULL, $contextname=NULL, $subtreeonly=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($maxchildren !== NULL) {
			$params['maxChildren'] = $maxchildren;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($contextname !== NULL) {
			$params['contextName'] = $contextname;
		}
		if ($subtreeonly !== NULL) {
			$params['subtreeOnly'] = $subtreeonly;
		}
		$res = $this->zap->request($this->zap->base . 'spider/action/scan/', $params);
		return reset($res);
	}

	/**
	 * Voert de spider uit vanuit het perspectief van een Gebruiker, verkregen m. b. v. de gegeven Context ID en Gebruiker ID. Zie ''scan'' acties voor meer informatie.
	 */
	public function scanAsUser($contextid, $userid, $url=NULL, $maxchildren=NULL, $recurse=NULL, $subtreeonly=NULL, $apikey='') {
		$params = array('contextId' => $contextid, 'userId' => $userid, 'apikey' => $apikey);
		if ($url !== NULL) {
			$params['url'] = $url;
		}
		if ($maxchildren !== NULL) {
			$params['maxChildren'] = $maxchildren;
		}
		if ($recurse !== NULL) {
			$params['recurse'] = $recurse;
		}
		if ($subtreeonly !== NULL) {
			$params['subtreeOnly'] = $subtreeonly;
		}
		$res = $this->zap->request($this->zap->base . 'spider/action/scanAsUser/', $params);
		return reset($res);
	}

	public function pause($scanid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/pause/', array('scanId' => $scanid, 'apikey' => $apikey));
		return reset($res);
	}

	public function resume($scanid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/resume/', array('scanId' => $scanid, 'apikey' => $apikey));
		return reset($res);
	}

	public function stop($scanid=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($scanid !== NULL) {
			$params['scanId'] = $scanid;
		}
		$res = $this->zap->request($this->zap->base . 'spider/action/stop/', $params);
		return reset($res);
	}

	public function removeScan($scanid, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/removeScan/', array('scanId' => $scanid, 'apikey' => $apikey));
		return reset($res);
	}

	public function pauseAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/pauseAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	public function resumeAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/resumeAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	public function stopAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/stopAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	public function removeAllScans($apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/removeAllScans/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Clears the regexes of URLs excluded from the spider scans.
	 */
	public function clearExcludedFromScan($apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/clearExcludedFromScan/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Adds a regex of URLs that should be excluded from the spider scans.
	 */
	public function excludeFromScan($regex, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/excludeFromScan/', array('regex' => $regex, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Adds a new domain that''s always in scope, using the specified value. Optionally sets if the new entry is enabled (default, true) and whether or not the new value is specified as a regex (default, false).
	 */
	public function addDomainAlwaysInScope($value, $isregex=NULL, $isenabled=NULL, $apikey='') {
		$params = array('value' => $value, 'apikey' => $apikey);
		if ($isregex !== NULL) {
			$params['isRegex'] = $isregex;
		}
		if ($isenabled !== NULL) {
			$params['isEnabled'] = $isenabled;
		}
		$res = $this->zap->request($this->zap->base . 'spider/action/addDomainAlwaysInScope/', $params);
		return reset($res);
	}

	/**
	 * Modifies a domain that''s always in scope. Allows to modify the value, if enabled or if a regex. The domain is selected with its index, which can be obtained with the view domainsAlwaysInScope.
	 */
	public function modifyDomainAlwaysInScope($idx, $value=NULL, $isregex=NULL, $isenabled=NULL, $apikey='') {
		$params = array('idx' => $idx, 'apikey' => $apikey);
		if ($value !== NULL) {
			$params['value'] = $value;
		}
		if ($isregex !== NULL) {
			$params['isRegex'] = $isregex;
		}
		if ($isenabled !== NULL) {
			$params['isEnabled'] = $isenabled;
		}
		$res = $this->zap->request($this->zap->base . 'spider/action/modifyDomainAlwaysInScope/', $params);
		return reset($res);
	}

	/**
	 * Removes a domain that''s always in scope, with the given index. The index can be obtained with the view domainsAlwaysInScope.
	 */
	public function removeDomainAlwaysInScope($idx, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/removeDomainAlwaysInScope/', array('idx' => $idx, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Enables all domains that are always in scope.
	 */
	public function enableAllDomainsAlwaysInScope($apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/enableAllDomainsAlwaysInScope/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Disables all domains that are always in scope.
	 */
	public function disableAllDomainsAlwaysInScope($apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/disableAllDomainsAlwaysInScope/', array('apikey' => $apikey));
		return reset($res);
	}

	public function setOptionHandleParameters($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionHandleParameters/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Use actions [add|modify|remove]DomainAlwaysInScope instead.
	 */
	public function setOptionScopeString($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionScopeString/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionSkipURLString($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionSkipURLString/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionUserAgent($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionUserAgent/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets whether or not a spider process should accept cookies while spidering.
	 */
	public function setOptionAcceptCookies($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionAcceptCookies/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionHandleODataParametersVisited($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionHandleODataParametersVisited/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets the maximum number of child nodes (per node) that can be crawled, 0 means no limit.
	 */
	public function setOptionMaxChildren($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionMaxChildren/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionMaxDepth($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionMaxDepth/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionMaxDuration($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionMaxDuration/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets the maximum size, in bytes, that a response might have to be parsed. This allows the spider to skip big responses/files.
	 */
	public function setOptionMaxParseSizeBytes($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionMaxParseSizeBytes/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionMaxScansInUI($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionMaxScansInUI/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionParseComments($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionParseComments/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionParseGit($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionParseGit/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionParseRobotsTxt($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionParseRobotsTxt/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionParseSVNEntries($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionParseSVNEntries/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionParseSitemapXml($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionParseSitemapXml/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionPostForm($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionPostForm/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionProcessForm($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionProcessForm/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionRequestWaitTime($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionRequestWaitTime/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets whether or not the ''Referer'' header should be sent while spidering.
	 */
	public function setOptionSendRefererHeader($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionSendRefererHeader/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionShowAdvancedDialog($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionShowAdvancedDialog/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionThreadCount($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'spider/action/setOptionThreadCount/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

}

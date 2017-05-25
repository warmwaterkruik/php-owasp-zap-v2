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
class Core {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Verkrijgt een waarschuwing met het gegeven ID. Het bijbehorende HTTP bericht kan worden verkregen met het ''messageId'' veld en ''message'' API methode
	 */
	public function alert($id) {
		$res = $this->zap->request($this->zap->base . 'core/view/alert/', array('id' => $id));
		return reset($res);
	}

	/**
	 * Verkrijgt de waarschuwingen gegeven door ZAP, desgewenst gefilterd op URL en gepagineerd met ''start'' positie en ''count'' aantal waarschuwingen
	 */
	public function alerts($baseurl=NULL, $start=NULL, $count=NULL, $riskid=NULL) {
		$params = array();
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		if ($riskid !== NULL) {
			$params['riskId'] = $riskid;
		}
		$res = $this->zap->request($this->zap->base . 'core/view/alerts/', $params);
		return reset($res);
	}

	/**
	 * Gets number of alerts grouped by each risk level, optionally filtering by URL
	 */
	public function alertsSummary($baseurl=NULL) {
		$params = array();
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		$res = $this->zap->request($this->zap->base . 'core/view/alertsSummary/', $params);
		return reset($res);
	}

	/**
	 * Verkrijgt het aantal waarschuwingen, desgewenst gefilterd op URL
	 */
	public function numberOfAlerts($baseurl=NULL, $riskid=NULL) {
		$params = array();
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($riskid !== NULL) {
			$params['riskId'] = $riskid;
		}
		$res = $this->zap->request($this->zap->base . 'core/view/numberOfAlerts/', $params);
		return reset($res);
	}

	/**
	 * Verkrijgt de naam van de hosts die zijn benaderd door ZAP
	 */
	public function hosts() {
		$res = $this->zap->request($this->zap->base . 'core/view/hosts/');
		return reset($res);
	}

	/**
	 * Verkrijgt de sites die zijn benaderd via/door ZAP (schema en domein)
	 */
	public function sites() {
		$res = $this->zap->request($this->zap->base . 'core/view/sites/');
		return reset($res);
	}

	/**
	 * Verkrijgt de URL''s die zijn benaderd via/door ZAP
	 */
	public function urls($baseurl=NULL) {
		$params = array();
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		$res = $this->zap->request($this->zap->base . 'core/view/urls/', $params);
		return reset($res);
	}

	/**
	 * Krijgt de HTTP berichten met de gegeven ID. Geeft het ID, request/response header en bodies, cookies, en notities terug.
	 */
	public function message($id) {
		$res = $this->zap->request($this->zap->base . 'core/view/message/', array('id' => $id));
		return reset($res);
	}

	/**
	 * Verkrijgt de HTTP berichten verzonden door ZAP, request en response in HAR formaat, desgewenst gefilterd op URL en gepagineerd met ''start'' positie en ''count'' aantal berichten
	 */
	public function messages($baseurl=NULL, $start=NULL, $count=NULL) {
		$params = array();
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		$res = $this->zap->request($this->zap->base . 'core/view/messages/', $params);
		return reset($res);
	}

	/**
	 * Gets the HTTP messages with the given IDs.
	 */
	public function messagesById($ids) {
		$res = $this->zap->request($this->zap->base . 'core/view/messagesById/', array('ids' => $ids));
		return reset($res);
	}

	/**
	 * Verkrijgt het aantal berichten, desgewenst gefilterd op URL
	 */
	public function numberOfMessages($baseurl=NULL) {
		$params = array();
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		$res = $this->zap->request($this->zap->base . 'core/view/numberOfMessages/', $params);
		return reset($res);
	}

	/**
	 * Gets the mode
	 */
	public function mode() {
		$res = $this->zap->request($this->zap->base . 'core/view/mode/');
		return reset($res);
	}

	/**
	 * Verkrijgt het versienummer van ZAP
	 */
  public function version($api_key = '') {
    $res = $this->zap->request($this->zap->base . 'core/view/version/', array('apikey' => $api_key));
    return reset($res);
  }

	/**
	 * Verkrijgt de reguliere expressies die worden toegepast op URL''s om uit te sluiten van de Proxy
	 */
	public function excludedFromProxy() {
		$res = $this->zap->request($this->zap->base . 'core/view/excludedFromProxy/');
		return reset($res);
	}

	public function homeDirectory() {
		$res = $this->zap->request($this->zap->base . 'core/view/homeDirectory/');
		return reset($res);
	}

	/**
	 * Gets the location of the current session file
	 */
	public function sessionLocation() {
		$res = $this->zap->request($this->zap->base . 'core/view/sessionLocation/');
		return reset($res);
	}

	/**
	 * Gets all the domains that are excluded from the outgoing proxy. For each domain the following are shown: the index, the value (domain), if enabled, and if specified as a regex.
	 */
	public function proxyChainExcludedDomains() {
		$res = $this->zap->request($this->zap->base . 'core/view/proxyChainExcludedDomains/');
		return reset($res);
	}

	/**
	 * Use view proxyChainExcludedDomains instead.
	 */
	public function optionProxyChainSkipName() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyChainSkipName/');
		return reset($res);
	}

	/**
	 * Use view proxyChainExcludedDomains instead.
	 */
	public function optionProxyExcludedDomains() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyExcludedDomains/');
		return reset($res);
	}

	/**
	 * Use view proxyChainExcludedDomains instead.
	 */
	public function optionProxyExcludedDomainsEnabled() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyExcludedDomainsEnabled/');
		return reset($res);
	}

	/**
	 * Gets the path to ZAP's home directory.
	 */
	public function zapHomePath() {
		$res = $this->zap->request($this->zap->base . 'core/view/zapHomePath/');
		return reset($res);
	}

	/**
	 * Gets the maximum number of alert instances to include in a report.
	 */
	public function optionMaximumAlertInstances() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionMaximumAlertInstances/');
		return reset($res);
	}

	/**
	 * Gets whether or not related alerts will be merged in any reports generated.
	 */
	public function optionMergeRelatedAlerts() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionMergeRelatedAlerts/');
		return reset($res);
	}

	/**
	 * Gets the path to the file with alert overrides.
	 */
	public function optionAlertOverridesFilePath() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionAlertOverridesFilePath/');
		return reset($res);
	}

	/**
	 * Gets the user agent that ZAP should use when creating HTTP messages (for example, spider messages or CONNECT requests to outgoing proxy).
	 */
	public function optionDefaultUserAgent() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionDefaultUserAgent/');
		return reset($res);
	}

	/**
	 * Gets the TTL (in seconds) of successful DNS queries.
	 */
	public function optionDnsTtlSuccessfulQueries() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionDnsTtlSuccessfulQueries/');
		return reset($res);
	}

	public function optionHttpState() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionHttpState/');
		return reset($res);
	}

	public function optionProxyChainName() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyChainName/');
		return reset($res);
	}

	public function optionProxyChainPassword() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyChainPassword/');
		return reset($res);
	}

	public function optionProxyChainPort() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyChainPort/');
		return reset($res);
	}

	public function optionProxyChainRealm() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyChainRealm/');
		return reset($res);
	}

	public function optionProxyChainUserName() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyChainUserName/');
		return reset($res);
	}

	public function optionTimeoutInSecs() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionTimeoutInSecs/');
		return reset($res);
	}

	public function optionHttpStateEnabled() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionHttpStateEnabled/');
		return reset($res);
	}

	public function optionProxyChainPrompt() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionProxyChainPrompt/');
		return reset($res);
	}

	public function optionSingleCookieRequestHeader() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionSingleCookieRequestHeader/');
		return reset($res);
	}

	public function optionUseProxyChain() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionUseProxyChain/');
		return reset($res);
	}

	public function optionUseProxyChainAuth() {
		$res = $this->zap->request($this->zap->base . 'core/view/optionUseProxyChainAuth/');
		return reset($res);
	}

	/**
	 * Convenient and simple action to access a URL, optionally following redirections. Returns the request sent and response received and followed redirections, if any. Other actions are available which offer more control on what is sent, like, ''sendRequest'' or ''sendHarRequest''.
	 */
	public function accessUrl($url, $followredirects=NULL, $apikey='') {
		$params = array('url' => $url, 'apikey' => $apikey);
		if ($followredirects !== NULL) {
			$params['followRedirects'] = $followredirects;
		}
		$res = $this->zap->request($this->zap->base . 'core/action/accessUrl/', $params);
		return reset($res);
	}

	/**
	 * Sluit ZAP af
	 */
	public function shutdown($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/shutdown/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Maakt een nieuwe sessie aan, overschrijft desgewenst bestaande bestanden
	 */
	public function newSession($name=NULL, $overwrite=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($name !== NULL) {
			$params['name'] = $name;
		}
		if ($overwrite !== NULL) {
			$params['overwrite'] = $overwrite;
		}
		$res = $this->zap->request($this->zap->base . 'core/action/newSession/', $params);
		return reset($res);
	}

	/**
	 * Laad een sessie met de gegeven naam
	 */
	public function loadSession($name, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/loadSession/', array('name' => $name, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Slaat de sessie op met de gegeven naam, overschijft desgewenst bestaande bestanden
	 */
	public function saveSession($name, $overwrite=NULL, $apikey='') {
		$params = array('name' => $name, 'apikey' => $apikey);
		if ($overwrite !== NULL) {
			$params['overwrite'] = $overwrite;
		}
		$res = $this->zap->request($this->zap->base . 'core/action/saveSession/', $params);
		return reset($res);
	}

	public function snapshotSession($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/snapshotSession/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Clears the regexes of URLs excluded from the proxy.
	 */
	public function clearExcludedFromProxy($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/clearExcludedFromProxy/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Adds a regex of URLs that should be excluded from the proxy.
	 */
	public function excludeFromProxy($regex, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/excludeFromProxy/', array('regex' => $regex, 'apikey' => $apikey));
		return reset($res);
	}

	public function setHomeDirectory($dir, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setHomeDirectory/', array('dir' => $dir, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets the mode, which may be one of [safe, protect, standard, attack]
	 */
	public function setMode($mode, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setMode/', array('mode' => $mode, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Generates a new Root CA certificate for the Local Proxy.
	 */
	public function generateRootCA($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/generateRootCA/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Verstuurt de HTTP request en volgt desgewenst redirects. Geeft de verstuurde request, ontvangen response, en gevolgde redirects terug, als die er zijn.
	 */
	public function sendRequest($request, $followredirects=NULL, $apikey='') {
		$params = array('request' => $request, 'apikey' => $apikey);
		if ($followredirects !== NULL) {
			$params['followRedirects'] = $followredirects;
		}
		$res = $this->zap->request($this->zap->base . 'core/action/sendRequest/', $params);
		return reset($res);
	}

	/**
	 * Deletes all alerts of the current session.
	 */
	public function deleteAllAlerts($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/deleteAllAlerts/', array('apikey' => $apikey));
		return reset($res);
	}

	public function runGarbageCollection($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/runGarbageCollection/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Deletes the site node found in the Sites Tree on the basis of the URL, HTTP method, and post data (if applicable and specified). 
	 */
	public function deleteSiteNode($url, $method=NULL, $postdata=NULL, $apikey='') {
		$params = array('url' => $url, 'apikey' => $apikey);
		if ($method !== NULL) {
			$params['method'] = $method;
		}
		if ($postdata !== NULL) {
			$params['postData'] = $postdata;
		}
		$res = $this->zap->request($this->zap->base . 'core/action/deleteSiteNode/', $params);
		return reset($res);
	}

	/**
	 * Adds a domain to be excluded from the outgoing proxy, using the specified value. Optionally sets if the new entry is enabled (default, true) and whether or not the new value is specified as a regex (default, false).
	 */
	public function addProxyChainExcludedDomain($value, $isregex=NULL, $isenabled=NULL, $apikey='') {
		$params = array('value' => $value, 'apikey' => $apikey);
		if ($isregex !== NULL) {
			$params['isRegex'] = $isregex;
		}
		if ($isenabled !== NULL) {
			$params['isEnabled'] = $isenabled;
		}
		$res = $this->zap->request($this->zap->base . 'core/action/addProxyChainExcludedDomain/', $params);
		return reset($res);
	}

	/**
	 * Modifies a domain excluded from the outgoing proxy. Allows to modify the value, if enabled or if a regex. The domain is selected with its index, which can be obtained with the view proxyChainExcludedDomains.
	 */
	public function modifyProxyChainExcludedDomain($idx, $value=NULL, $isregex=NULL, $isenabled=NULL, $apikey='') {
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
		$res = $this->zap->request($this->zap->base . 'core/action/modifyProxyChainExcludedDomain/', $params);
		return reset($res);
	}

	/**
	 * Removes a domain excluded from the outgoing proxy, with the given index. The index can be obtained with the view proxyChainExcludedDomains.
	 */
	public function removeProxyChainExcludedDomain($idx, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/removeProxyChainExcludedDomain/', array('idx' => $idx, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Enables all domains excluded from the outgoing proxy.
	 */
	public function enableAllProxyChainExcludedDomains($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/enableAllProxyChainExcludedDomains/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Disables all domains excluded from the outgoing proxy.
	 */
	public function disableAllProxyChainExcludedDomains($apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/disableAllProxyChainExcludedDomains/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets the maximum number of alert instances to include in a report. A value of zero is treated as unlimited.
	 */
	public function setOptionMaximumAlertInstances($numberofinstances, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionMaximumAlertInstances/', array('numberOfInstances' => $numberofinstances, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets whether or not related alerts will be merged in any reports generated.
	 */
	public function setOptionMergeRelatedAlerts($enabled, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionMergeRelatedAlerts/', array('enabled' => $enabled, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets (or clears, if empty) the path to the file with alert overrides.
	 */
	public function setOptionAlertOverridesFilePath($filepath=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($filepath !== NULL) {
			$params['filePath'] = $filepath;
		}
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionAlertOverridesFilePath/', $params);
		return reset($res);
	}

	/**
	 * Sets the user agent that ZAP should use when creating HTTP messages (for example, spider messages or CONNECT requests to outgoing proxy).
	 */
	public function setOptionDefaultUserAgent($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionDefaultUserAgent/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionProxyChainName($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainName/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionProxyChainPassword($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPassword/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionProxyChainRealm($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainRealm/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Use actions [add|modify|remove]ProxyChainExcludedDomain instead.
	 */
	public function setOptionProxyChainSkipName($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainSkipName/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionProxyChainUserName($string, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainUserName/', array('String' => $string, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Sets the TTL (in seconds) of successful DNS queries (applies after ZAP restart).
	 */
	public function setOptionDnsTtlSuccessfulQueries($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionDnsTtlSuccessfulQueries/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionHttpStateEnabled($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionHttpStateEnabled/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionProxyChainPort($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPort/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionProxyChainPrompt($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionProxyChainPrompt/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionSingleCookieRequestHeader($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionSingleCookieRequestHeader/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionTimeoutInSecs($integer, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionTimeoutInSecs/', array('Integer' => $integer, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionUseProxyChain($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionUseProxyChain/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionUseProxyChainAuth($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'core/action/setOptionUseProxyChainAuth/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function proxypac($apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/proxy.pac/', array('apikey' => $apikey));
	}

	/**
	 * Gets the Root CA certificate of the Local Proxy.
	 */
	public function rootcert($apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/rootcert/', array('apikey' => $apikey));
	}

	public function setproxy($proxy, $apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/setproxy/', array('proxy' => $proxy, 'apikey' => $apikey));
	}

	/**
	 * Genereert een rapport in XML formaat
	 */
	public function xmlreport($apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/xmlreport/', array('apikey' => $apikey));
	}

	/**
	 * Genereert een rapport in HTML formaat
	 */
	public function htmlreport($apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/htmlreport/', array('apikey' => $apikey));
	}

	/**
	 * Generates a report in Markdown format
	 */
	public function mdreport($apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/mdreport/', array('apikey' => $apikey));
	}

	/**
	 * Verkrijgt het bericht met het gegeven ID in HAR formaat
	 */
	public function messageHar($id, $apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/messageHar/', array('id' => $id, 'apikey' => $apikey));
	}

	/**
	 * Verkrijgt de HTTP berichten die zijn verzonden via/door ZAP, in HAR formaat, desgewenst gefilterd op URL en gepagineerd met ''start'' positie en ''count'' aantal berichten
	 */
	public function messagesHar($baseurl=NULL, $start=NULL, $count=NULL, $apikey='') {
		$params = array('apikey' => $apikey);
		if ($baseurl !== NULL) {
			$params['baseurl'] = $baseurl;
		}
		if ($start !== NULL) {
			$params['start'] = $start;
		}
		if ($count !== NULL) {
			$params['count'] = $count;
		}
		return $this->zap->requestother($this->zap->base_other . 'core/other/messagesHar/', $params);
	}

	/**
	 * Gets the HTTP messages with the given IDs, in HAR format.
	 */
	public function messagesHarById($ids, $apikey='') {
		return $this->zap->requestother($this->zap->base_other . 'core/other/messagesHarById/', array('ids' => $ids, 'apikey' => $apikey));
	}

	/**
	 * Verstuurt de eerste HAR request en volgt desgewenst redirects. Geeft de verzonden requests, ontvangen responses, en gevolgde redirect in HAR formaat terug, als ze er zijn.
	 */
	public function sendHarRequest($request, $followredirects=NULL, $apikey='') {
		$params = array('request' => $request, 'apikey' => $apikey);
		if ($followredirects !== NULL) {
			$params['followRedirects'] = $followredirects;
		}
		return $this->zap->requestother($this->zap->base_other . 'core/other/sendHarRequest/', $params);
	}

}

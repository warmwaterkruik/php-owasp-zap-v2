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
class Autoupdate {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	/**
	 * Geeft het laatste versie nummer terug
	 */
	public function latestVersionNumber() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/latestVersionNumber/');
		return reset($res);
	}

	/**
	 * Geeft ''true'' terug als de huidige versie van ZAP de nieuwste is
	 */
	public function isLatestVersion() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/isLatestVersion/');
		return reset($res);
	}

	/**
	 * Return a list of all of the installed add-ons
	 */
	public function installedAddons() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/installedAddons/');
		return reset($res);
	}

	/**
	 * Return a list of any add-ons that have been added to the Marketplace since the last check for updates
	 */
	public function newAddons() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/newAddons/');
		return reset($res);
	}

	/**
	 * Return a list of any add-ons that have been changed in the Marketplace since the last check for updates
	 */
	public function updatedAddons() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/updatedAddons/');
		return reset($res);
	}

	/**
	 * Return a list of all of the add-ons on the ZAP Marketplace (this information is read once and then cached)
	 */
	public function marketplaceAddons() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/marketplaceAddons/');
		return reset($res);
	}

	public function optionAddonDirectories() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionAddonDirectories/');
		return reset($res);
	}

	public function optionDayLastChecked() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastChecked/');
		return reset($res);
	}

	public function optionDayLastInstallWarned() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastInstallWarned/');
		return reset($res);
	}

	public function optionDayLastUpdateWarned() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionDayLastUpdateWarned/');
		return reset($res);
	}

	public function optionDownloadDirectory() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionDownloadDirectory/');
		return reset($res);
	}

	public function optionCheckAddonUpdates() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionCheckAddonUpdates/');
		return reset($res);
	}

	public function optionCheckOnStart() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionCheckOnStart/');
		return reset($res);
	}

	public function optionDownloadNewRelease() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionDownloadNewRelease/');
		return reset($res);
	}

	public function optionInstallAddonUpdates() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionInstallAddonUpdates/');
		return reset($res);
	}

	public function optionInstallScannerRules() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionInstallScannerRules/');
		return reset($res);
	}

	public function optionReportAlphaAddons() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionReportAlphaAddons/');
		return reset($res);
	}

	public function optionReportBetaAddons() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionReportBetaAddons/');
		return reset($res);
	}

	public function optionReportReleaseAddons() {
		$res = $this->zap->request($this->zap->base . 'autoupdate/view/optionReportReleaseAddons/');
		return reset($res);
	}

	/**
	 * Download de laatste release, als die er is 
	 */
	public function downloadLatestRelease($apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/downloadLatestRelease/', array('apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Installs or updates the specified add-on, returning when complete (ie not asynchronously)
	 */
	public function installAddon($id, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/installAddon/', array('id' => $id, 'apikey' => $apikey));
		return reset($res);
	}

	/**
	 * Uninstalls the specified add-on 
	 */
	public function uninstallAddon($id, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/uninstallAddon/', array('id' => $id, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionCheckAddonUpdates($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionCheckAddonUpdates/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionCheckOnStart($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionCheckOnStart/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionDownloadNewRelease($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionDownloadNewRelease/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionInstallAddonUpdates($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionInstallAddonUpdates/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionInstallScannerRules($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionInstallScannerRules/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionReportAlphaAddons($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportAlphaAddons/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionReportBetaAddons($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportBetaAddons/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

	public function setOptionReportReleaseAddons($boolean, $apikey='') {
		$res = $this->zap->request($this->zap->base . 'autoupdate/action/setOptionReportReleaseAddons/', array('Boolean' => $boolean, 'apikey' => $apikey));
		return reset($res);
	}

}

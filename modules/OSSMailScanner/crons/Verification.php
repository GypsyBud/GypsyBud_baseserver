<?php
/**
 * Cron for scheduled import.
 *
 * @package   App
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Tomasz Kur <t.kur@yetiforce.com>
 */

/**
 * OSSMailScanner_Verification_Cron class.
 */
class OSSMailScanner_Verification_Cron extends \App\CronHandler
{
	/** {@inheritdoc} */
	public function process()
	{
		OSSMailScanner_Record_Model::verificationCron();
	}
}

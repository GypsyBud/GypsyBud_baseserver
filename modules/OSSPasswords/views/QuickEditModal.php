<?php
/**
 * Base quick edit modal view class file.
 *
 * @package   View
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Radosław Skrzypczak <r.skrzypczak@yetiforce.com>
 */
/**
 * Quick edit modal view class.
 */
class OSSPasswords_QuickEditModal_View extends Vtiger_QuickEditModal_View
{
	/** {@inheritdoc} */
	public function checkPermission(App\Request $request)
	{
		throw new \App\Exceptions\NoPermittedToRecord('ERR_NO_PERMISSIONS_FOR_THE_RECORD', 406);
	}
}

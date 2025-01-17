<?php
/**
 * Cron.
 *
 * @package App
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Tomasz Kur <t.kur@yetiforce.com>
 */

namespace App;

/**
 * Class to execute task.
 */
abstract class CronHandler
{
	/**
	 * Cron task instance.
	 *
	 * @var \vtlib\Cron
	 */
	protected $cronTask;

	/**
	 * Main function to execute task.
	 *
	 * @return void
	 */
	abstract public function process();

	/**
	 * Construct.
	 *
	 * @param \vtlib\Cron $cronTask
	 */
	public function __construct(\vtlib\Cron $cronTask)
	{
		$this->cronTask = $cronTask;
	}

	/**
	 * Check cron task timeout.
	 *
	 * @return bool
	 */
	public function checkTimeout(): bool
	{
		return $this->cronTask->checkTimeout();
	}

	/**
	 * Update cron task last action time.
	 *
	 * @return void
	 */
	public function updateLastActionTime(): void
	{
		$this->cronTask->updateLastActionTime();
	}
}

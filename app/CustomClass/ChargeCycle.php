<?php
namespace App\CustomClass;

class ChargeCycle {
	const HOURLY = "hourly";
	const DAILYs = "daily";
	const WEEKLY = "weekly";
	const MONTHLY = "monthly";
	const PROJECT_WISE = "project_wise";

	public function getConstants() {
		return [
			self::HOURLY,
			self::DAILYs,
			self::WEEKLY,
			self::MONTHLY,
			self::PROJECT_WISE,
		];
	}
}

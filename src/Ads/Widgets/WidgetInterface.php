<?php

namespace BackendApp\Ads\Widgets;

interface WidgetInterface
{
	public function getPointsValue(array $widget) : float;
}

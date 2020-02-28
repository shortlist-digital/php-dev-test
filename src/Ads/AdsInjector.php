<?php

namespace BackendApp\Ads;

use BackendApp\Ads\Widgets\WidgetFactory;

class AdsInjector implements AdsInjectorInterface
{
	const POINTS = 3.5;
	private $factory;

	public function __construct()
	{
		$this->factory = WidgetFactory::getInstance();
	}

	public function inject(array $article) : array
	{
		if (!isset($article['widgets'])) {
			return $article;
		}

		$points = 0;
		foreach ($article['widgets'] as $widget) {
			$class = $this->factory->create($widget['layout']);
			$points += $class->getPointsValue($widget);
		}

		return $article;
	}
}

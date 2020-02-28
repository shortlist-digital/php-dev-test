<?php

namespace BackendApp\Ads;

use BackendApp\Ads\Widgets\WidgetFactory;

class AdsInjector implements AdsInjectorInterface
{
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

		// if it gets to 3.5 points, it will render 1 ad
		$points = 0;
		foreach ($article['widgets'] as $widget) {
			$class = $this->factory->create($widget['layout']);
			$points += $class->getPointsValue($widget);

			if ($points > 3.5) {
				// oh yeah, lets inject 1 ad here!
			}
		}

		return $article;
	}
}

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
		$injected_article = array();
		$ad = array("layout" => "ad");

		if (!isset($article['widgets'])) {
			return $article;
		}

		$points = 0;
		foreach ($article['widgets'] as $index => $widget) {
			array_push($injected_article, $widget);
			$class = $this->factory->create($widget['layout']);
			$points += $class->getPointsValue($widget);
			if ($points >= 3.5) {
				$points = 0;
				array_push($injected_article, $ad);
			}
		}

		return $injected_article;
	}
}

<?php

namespace BackendApp\Ads\Widgets;

class Paragraph implements WidgetInterface
{
	public function getPointsValue(array $widget) : float
  {
    // 1000 characters yield 1 point
    return $this->getCharLength($widget['text']) / 1000;
  }

  private function getCharLength(string $paragraph) : float {
    return strlen(strip_tags($paragraph));
  }
}


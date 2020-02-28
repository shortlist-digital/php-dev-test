# BackendApp

Hello php developer candidate. This is a (very) simplified version of one of ours
backend applications. The purpose of this app is to get articles from the database
and inject the placements for ads.

## How does it work?

Our articles are divided in widgets. Each widget contains a `layout`. Examples of layouts
are: `paragraph`, `embed`, `related_articles`. You can find an article example in [src/Repository/Articles/1.json](src/Repository/Articles/1.json).
This is a simplified version of a real article (https://www.stylist.co.uk/fitness-health/weighlifting-should-women-train-differently-to-men-weight-training-bodybuilding/356867)

The application will iterate through the widgets and count its *points*. Each widget carries a certain amount of *points*. Here is the mapping:

 - `embed`: 1 point
 - `related_articles`: 1 point
 - `paragraph`: 1 point per 1000 characters

When it reaches 3.5 points, one ad widget should be placed. The ad widget should just have a `layout: ad` property.

## How to run the app?

Please fork this repo into your personal github account or, if you do not have a github account, download the zip file and send the result back to `romulo.delazzari@stylist.co.uk`.

Once you have the app locally, open a terminal and run `php -S localhost:8000`, then access `http://localhost:8000` in a browser.
you will notice that this error will come up:

```
Fatal error: Uncaught Error: Class 'BackendApp\Ads\Widgets\Paragraph' not found in /path/to/app/src/Ads/Widgets/WidgetFactory.php:30
```

This is exactly what this test is for, implement the Paragraph widget.

## What is the task?

1. Implement the paragraph widget. Keep in mind the rules explained earlier, `1 point per 1000 characters`.
2. In the [src/Ads/AdsInjector.php](src/Ads/AdsInjector.php) file, insert 1 ad every time the points counter reaches 3.5 points.

If a paragraph widget contains 870 characters, it should count 0.87 points. If it contains 1423 characters, it should count 1.423 points and so on.

The ad widget should look like this in the JSON returned:

```
{
  "layout": "ad"
}
```

## Why this test?

The purpose of this test is to verify your knowledge of Object oriented principles applied to php.


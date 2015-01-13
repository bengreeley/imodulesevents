=== Plugin Name ===
Contributors: ben.greeley
Tags: events, imodules, rss, sorting
Requires at least: 3.0.1
Tested up to: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays an RSS feed of iModules events in order on a WordPress website. Will also sort any RSS feeds that have descriptions starting with the date and text, which can be specified through this plugin.

== Description ==
Some RSS feeds that return events sort the returned results as the 'pubdate' value, which results in RSS event feeds being displayed out of order.
This plugin displays an RSS feed of events in order on a WordPress website. It was primarily created to output iModules RSS feeds but will work with
any feeds that have the date that can be pulled out from the first part of the description, eg:

Sample RSS description field:
<span style="font-weight: bold">Date:</span> January 30, 2015 11:30am

Will also sort any RSS feeds that have descriptions starting with the date and text, which can be specified through this plugin.

== Installation ==

1. Upload 'imoduleevents' folder to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place the shortcode [display-sortedrss] in the page, post or widget where you wish to output the events.

Parameters:
- url: (required). URL to RSS feed to read
- count: (optional, default 3). Number of items to output
- title: (optional). If a title is to be shown above the feed output, enter it here.
- rss_item_search (optional, default '<span style="font-weight: bold">Date:</span>'). If the feed you are parsing uses a different identifier for date, specify with this variable.

== Changelog ==

= 1.0 =
* Plugin created
=== Plugin Name ===
Contributors: Radices
Donate link: http://gtmanagement.com/plugins/u-design-1150/
Tags: plugins, css, 960, 1152, Themes
Requires at least: 3.0.1
Tested up to: 4.9.8
Stable tag: 1.02
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This wordpress plugin changes the css grid width of the popular U-Design Theme Ver: 2.2 or lower. 

== Description ==

*IMPORTANT NOTE: Works with U-Design Ver. 2.2 or lower. U-Design 2.3 has the feature built in! Delete this plugin if using U-Design VER 2.3 or higher.

A lot of people use the [U-Design theme](http://themeforest.net/item/udesign-wordpress-theme/253220?ref=Radices). 
It's the top selling theme on Themeforest.net. The theme was originally built on the 960.css grid. This was fine a few years ago and still is for many but I 
wanted more usable width for the wider screens. At first I just hacked the original 960.css file and kept a back-up copy. When updating the theme though it was
 written over with the original file and I'd have to replace it again.  After developing many sites using the U-Design theme that became quite tedious so I wrote this little plugin. 
 It simply deregisters the 960 style sheet and enqueue's the 1150 style sheet (1152px Wide with 24 Columns & 10px Margins). 
 I hope you find it useful.

== Installation ==

Follow the normal plugin activation steps.

== Frequently Asked Questions ==

= Where is the plugin accessed once activated =

There is no further set-up required.



== Changelog ==

= 1.02 =
Added function to enqueue the style sheet using the proper WP Hook.

= 1.01 =
Renamed css file to grid.css fixed broken path to file.

= 1.0 =
* Release Version


== Upgrade Notice ==

= 1.0 =
Initial Release

= 1.01 =
Typo fix
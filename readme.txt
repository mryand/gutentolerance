=== GutenTolerance ===
Contributors: mryand
Tags: gutenberg
Requires at least: 5.0
Tested up to: 5.3
Stable tag: 1.0.4
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Makes Gutenberg easier for new users by clearly labeling blocks & fields, and many other small UI tweaks to enhance the user experience.

== Description ==

Gutenberg can be daunting for those unfamiliar with the interface. This plugin makes Gutenberg easier on new users by labeling many interface elements that otherwise only appear on hover, and modifying the display of other elements that cause confusion for novice users.

## Why this plugin

[Usability research with untrained users at Carleton College](https://empatheticinterfaces.com/guten/) revealed a number of areas where the Gutenberg interface is unintuitive for new and casual WordPress users. This plugin seeks to soften the Gutenberg learning curve based on the recommendations in the report linked above.

## What this plugin does

1. Labels the Gutenberg toolbar icons
1. Labels the title field
1. Labels the top and bottom of the Gutenberg content
1. Adds a visible box around each Gutenberg block
1. Labels each core Gutenberg block with its name
1. Labels non-core Gutenberg blocks with the label "Custom Block"
1. Adds "Page" or "Post" to the "Document" tab in the Gutenberg sidebar
1. Optionally hides the preview button
1. Changes the "Author" label to "Posted By"
1. Adds a persistently visible "Add Block" label to the button at the end of the Gutenberg content
1. Adds "Save Edits" label to Update button

## Limitations

The technical approach used — namely, CSS applied to the DOM generated by Gutenberg's React components — has a number of limitations that keep this plugin from implementing the full suite of recommendations in the above linked report. For example:

1. No visual linkage between the current block and the sidebar block options panel
1. Does not remove "Document" language in sidebar tabs
1. Use of generated content likely results in redundant screen reader announcements

## Roadmap/To-Do

* Handle nested blocks better
* Handle full width blocks better
* List recommendations not currently implemented
* Add more configuration options in the settings page
* Implement the recommendation for a visual connection between the current block and the sidebar configurator
* Identify a more accessible implementation (many of the generated content elements are redundant with existing aria labels, "above" and "below" are visual terms that may not make sense to a non-sighted author.)
* Replace the "Document" tab label with the proper post type string, e.g. "Page", "Post", etc.
* Refine typography, design
* Add a persistent "Add Block" button at end of content

## Caution

Rather than recompiling Gutenberg's React components, this plugin applies its magic using mostly CSS and some JS, which interact with the DOM produced by Gutenberg. This plugin may not have full functionality if you are running a bleeding edge version of Gutenberg. If you are aware of an issue, please file an issue and note the version of Gutenberg in which you are seeing the issue.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/gutentolerance` directory, install the plugin through the WordPress plugins screen directly, or use composer or other dependency manager to draw from the [GutenTolerance Github repo](https://github.com/mryand/gutentolerance).
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->GutenTolerance screen to configure the plugin

== Frequently Asked Questions ==

= How do I report issues? =

The [GutenTolerance Github repo](https://github.com/mryand/gutentolerance) is the best place to report issues.

= I don't like X about this plugin! =

This plugin exists to resolve real-world issues identified in usability testing of the Gutenberg interface. If you can provide evidence that there is a better way to improve the usability of the tool, please contact the author and/or submit a PR. Alternately, you may submit a PR to add more configuration options.

== Changelog ==

= 1.0.4 =
* Moved settings page into settings menu (Thanks, smwcollege!)
* Made the label for our one setting a bit friendlier

= 1.0.3 =
* Adds WP-compatible version number

= 1.0.1 =
* Updated readme

= 1.0 =
* Resolves issue with some core blocks not being labeled
* Resolves issue with label placement on floated blocks
* Adds GLP v3 license
* Adds options page and ability to configure showing/hiding the preview button
* Start of semantic versioning

== Upgrade Notice ==

= 1.0.4 =
This update makes the settings menu a bit more unobtrusive & the settings page friendlier.


# GutenTolerance

Gutenberg can be daunting for those unfamiliar with the interface. This plugin makes Gutenberg easier on new users by labeling many interface elements that otherwise only appear on hover.

## Why this plugin

[Usability research with untrained users at Carleton College](https://docs.google.com/document/d/1OJKCAz-W3apnXub7X4hwljVTRtfsqhairAefqXUroAU/edit?usp=sharing) revealed a number of areas where the Gutenberg interface is unintuitive for new and casual WordPress users. This plugin seeks to soften the learning curve based on the recommendations in the report linked above. 

## Limitations

The technical approach used — namely, CSS applied to the DOM generated by Gutenberg's React components — has a number of limitations that keep this plugin from implementing the full suite of recommendations in the above linked report.

## Roadmap

* List the specific changes to the interface
* List recommendations not currently implemented
* Add a way to turn interface changes on and off in the admin interface

## Caution

Rather than recompiling Gutenberg's React components, this plugin applies its magic using mostly CSS and some JS, which interact with the DOM produced by Gutenberg. This plugin may not have full functionality if you are running a bleeding edge version of Gutenberg. If you are aware of an issue, please file an issue and note the version of Gutenberg in which you are seeing the issue.
=== Meisterplayer Lite ===
Contributors: meisterplayer
Tags: video, videoplayer, html5video, webplayer
License: Apache2
License URI: https://github.com/meisterplayer/meisterplayer/blob/develop/LICENSE

Elegant  html5-videoplayer with support for a wide range of streaming-formats and unique features.

== Description ==
With this Woodstock release of Meisterplayer you can play mp4, mp3, icecast, DASH-streams, HLS-streams and Smooth-streams on your WordPress website; we even support embedded YouTube videos! Personalise your content further by overlaying the video with a small watermark/logo.
This is just a small set of the features Meisterplayer has to offer; we have MeisterPlayer-plugins for DRM, advertising, various analytics providers, even a plugin to create your own UI. Check out our website on https://meisterplayer.com for more information.


== Installation ==
= Installing =
Upload the zip file onto your website from the admin interface by pressing “plugins” and then “add new”. You can also search for ‘Meisterplayer’ from the “add new” interface and click the “Install now” button.

= Usage =
To publish a video on your website open up the visual editor in a blogpost of a page. Click the Meisterplayer icon and select a video or audio file fro the Media selector. You’ll see the following code after successfully selecting your media:
[meisterplayer video=“[url to your media]” autoplay=“false” ]

You can finetune the behaviour of the player by adding or changing the following attributes:
- video: “url to your media”. The url of the media you want to play.
- autoplay: “true” of “false”. Setting this to true will cause the media to start playing when your page loads. This is false by default.
- muted: “true” or “false”. Setting this to true will mute the sound of the media. This is set to false by default. If you want to use the autoplay attribute on mobile devices you should also set the muted attribute to true, otherwise the media will not play automatically due to restrictions by the mobile platforms.

Optional attributes:
- type: “m3u8”, “mpd”, “smooth”, “youtube”. This is the type of media that you want to play. For more common types such as MP3 or MP4 you do not need to use this attribute. The types correspond to streaming methods: for HLS use “m3u8”, for DASH use “mpd”, for Smooth use “smooth”, and for YouTube videos use “youtube”. Further down we will elaborate a bit more on these special types.
- watermark: “url to your watermark”. A url of an image (we recommend PNG) which is displayed in the top-left corner of the player.

Playing HLS, DASH, and Smooth streams

Usually these kinds of streams will be hosted on a different domain so they won’t be available from the Media selector. You can play these by entering the url to the stream directly in the ‘video’ attribute. Please note that when you’re using streams from different domains you might run into CORS-header issues depending on the settings of the domain where the stream is located.

Playing YouTube videos

For YouTube videos you need to use the YouTube ID from the video instead of a url as the ‘video’ attribute. For example, to play the video from https://www.youtube.com/watch?v=_FVgD5KJPyE use the ID “_FVgD5KJPyE” as the ‘video’ attribute, and set the ‘type’ attribute to “youtube”

== Frequently Asked Questions ==
- Is Meisterplayer open source?
Yes it is! You can freely checkout and download the (ES6) source code on GitHub; https://github.com/meisterplayer/meisterplayer. A lot of our plugins can also be found on GitHub.

- Can I contribute?
Yes, please do! We like a fresh new look on our codebase and like to be inspired by new ideas to make Meisterplayer even better.

- Do you have technical support?
We have several technical support options. Check out our website for more information.

- Why are the DRM, advertising and analytics Meister-plugins not open-source?
We put considerable effort in creating stable and easy to use plugins for generally complex features. We strive to keep those plugins up to date in this world of rapidly evolving DRM, advertising, and analytics standards. In order to do so we need to invest time and effort, and we also like to eat ;)

- Can I use Meisterplayer for audio?
Sure you can; several Dutch radio station do so already.
This Meisterplayer WordPress plugin supports MP3, Icecast, and Ogg (as long as the browser supports the format). Should you need more options you can look into building a custom build of Meisterplayer.

- Can I create my own user interface?
This is not (yet) possible with this plugin, but you can with your own Meisterplayer build. You do need to set up a Node-js project to build your own instance of Meisterplayer though. It\'s to detailed to get into that here, but check out our GitHub to get more information: https://github.com/meisterplayer/meisterplayer

== Screenshots ==
1. Demo page Meisterplayer
2. WordPress-plugin in action
3. Meisterplayer as header video player


== Changelog ==
== v1.0.1 ==
First release!

== v1.0.2 ==
We have updated Meisterplayer to the latest release (5.1.1) and added the new HtmlUI plugin.

== v1.0.3 ==
Removed Fullscreen-configuration flag. This is not yet supported in Meisterplayer.

== v1.0.4 ==
Created assets, final checks and ready to go!!

== v1.0.5 ==
Fixed a little UI bug

== v1.0.6 ==
Update of the Meisterplayer library. Mainly stability improvements and bugfixes. No new features this time.

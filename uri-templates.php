<?php
/**
 * Library of common uri templates.
 */

// todo: setup optional params for templates where possible (oembed width/height for example)

use \Gdbots\UriTemplate\UriTemplateService;

UriTemplateService::registerTemplates([
    'vevo:playlist.canonical' => 'http://www.vevo.com/watch/playlist/{vevo_playlist_id}',
    'vevo:video.canonical' => 'http://www.vevo.com/watch/{vevo_video_id}',
    'vevo:video.player_url' => 'http://videoplayer.vevo.com/embed/Embedded?videoId={vevo_video_id}&playlist=false&autoplay=0&playerType=embedded',
    'vine:playlist.canonical' => 'https://vine.co/playlists/{vine_playlist_id}',
    'vine:video.canonical' => 'https://vine.co/v/{vine_video_id}',
    'vine:video.player_url' => 'https://vine.co/v/{vine_video_id}/card',
    'vine:video.oembed' => 'https://vine.co/oembed.{format}?url=https%3A%2F%2Fvine.co%2Fv%2F{vine_video_id}',
    'youtube:playlist.canonical' => 'http://www.youtube.com/watch?v={youtube_video_id}&amp;list={youtube_playlist_id}',
    'youtube:playlist.player_url' => 'https://www.youtube.com/embed/{youtube_video_id}?list={youtube_playlist_id}',
    'youtube:playlist.oembed' => 'http://www.youtube.com/oembed?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{youtube_video_id}%26list%3D{youtube_playlist_id}&amp;format={format}',
    'youtube:video.canonical' => 'http://www.youtube.com/watch?v={youtube_video_id}',
    'youtube:video.player_url' => 'https://www.youtube.com/embed/{youtube_video_id}',
    'youtube:video.oembed' => 'http://www.youtube.com/oembed?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{youtube_video_id}&amp;format={format}',
]);

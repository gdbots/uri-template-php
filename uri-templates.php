<?php
/**
 * Library of common uri templates.
 */

// todo: setup optional params for templates where possible (oembed width/height for example)
// todo: review do these embed and players work on mobile?

use \Gdbots\UriTemplate\UriTemplateService;

UriTemplateService::registerTemplates([
    /*
     * @link https://instagram.com/developer/embedding/
     */
    'instagram:media.canonical' => 'https://instagram.com/p/{instagram_media_id}',
    'instagram:media.embed' => 'https//instagram.com/p/{instagram_media_id}/embed/',
    'instagram:media.oembed' => 'https://api.instagram.com/publicapi/oembed/?url=http%3A%2F%2Finstagr.am%2Fp%2F{instagram_media_id}%2F',

    /*
     * oembed for vevo?
     * embed for vevo playlist?
     */
    'vevo:playlist.canonical' => 'http://www.vevo.com/watch/playlist/{vevo_playlist_id}',
    //'vevo:playlist.embed' => 'https://scache.vevo.com/assets/html/embed.html?video={vevo_playlist_id}&autoplay={autoplay}',
    'vevo:video.canonical' => 'http://www.vevo.com/watch/{vevo_video_id}',
    'vevo:video.embed' => 'https://scache.vevo.com/assets/html/embed.html?video={vevo_video_id}&autoplay={autoplay}',

    /*
     * embed sizing?
     */
    'vine:playlist.canonical' => 'https://vine.co/playlists/{vine_playlist_id}',
    'vine:video.canonical' => 'https://vine.co/v/{vine_video_id}',
    'vine:video.embed' => 'https://vine.co/v/{vine_video_id}/embed/simple',
    'vine:video.oembed' => 'https://vine.co/oembed/{vine_video_id}.{format}',

    /*
     * time codes too?
     * rel=0&amp;controls=0&amp;showinfo=0
     */
    'youtube:playlist.canonical' => 'http://www.youtube.com/watch?v={youtube_video_id}&amp;list={youtube_playlist_id}',
    'youtube:playlist.embed' => 'https://www.youtube.com/embed/{youtube_video_id}?list={youtube_playlist_id}',
    'youtube:playlist.oembed' => 'http://www.youtube.com/oembed?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{youtube_video_id}%26list%3D{youtube_playlist_id}&amp;format={format}',
    'youtube:video.canonical' => 'http://www.youtube.com/watch?v={youtube_video_id}',
    'youtube:video.embed' => 'https://www.youtube.com/embed/{youtube_video_id}',
    'youtube:video.oembed' => 'http://www.youtube.com/oembed?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{youtube_video_id}&amp;format={format}',
]);

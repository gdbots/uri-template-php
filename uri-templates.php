<?php
declare(strict_types=1);

/**
 * Library of common uri templates.
 */

use \Gdbots\UriTemplate\UriTemplateService;

UriTemplateService::registerTemplates([
    /*
     * @link https://instagram.com/developer/embedding/
     */
    'instagram:media.canonical' => 'https://instagram.com/p/{media_id}',
    'instagram:media.embed' => 'https://instagram.com/p/{media_id}/embed/',
    'instagram:media.oembed' => 'https://api.instagram.com/publicapi/oembed/?url=https%3A%2F%2Finstagr.am%2Fp%2F{media_id}%2F',

    /*
     * oembed for vevo?
     * embed for vevo playlist?
     */
    'vevo:playlist.canonical' => 'http://www.vevo.com/watch/playlist/{playlist_id}',
    //'vevo:playlist.embed' => 'https://scache.vevo.com/assets/html/embed.html?video={playlist_id}&autoplay={autoplay}',
    'vevo:video.canonical' => 'http://www.vevo.com/watch/{video_id}',
    'vevo:video.embed' => 'https://scache.vevo.com/assets/html/embed.html?video={video_id}&autoplay={autoplay}',

    /*
     * embed sizing?
     */
    'vine:playlist.canonical' => 'https://vine.co/playlists/{playlist_id}',
    'vine:video.canonical' => 'https://vine.co/v/{video_id}',
    'vine:video.embed' => 'https://vine.co/v/{video_id}/embed/simple',
    'vine:video.oembed' => 'https://vine.co/oembed/{video_id}.{format}',

    /*
     * time codes too?
     * rel=0&amp;controls=0&amp;showinfo=0
     */
    'youtube:playlist.canonical' => 'https://www.youtube.com/watch?v={video_id}&amp;list={playlist_id}',
    'youtube:playlist.embed' => 'https://www.youtube.com/embed/{video_id}?list={playlist_id}',
    'youtube:playlist.oembed' => 'https://www.youtube.com/oembed?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{video_id}%26list%3D{playlist_id}&amp;format={format}',
    'youtube:video.canonical' => 'https://www.youtube.com/watch?v={video_id}',
    'youtube:video.embed' => 'https://www.youtube.com/embed/{video_id}',
    'youtube:video.oembed' => 'https://www.youtube.com/oembed?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{video_id}&amp;format={format}',
]);

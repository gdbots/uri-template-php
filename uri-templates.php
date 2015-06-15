<?php
/**
 * Library of common uri templates.
 */

// todo: setup optional params for templates where possible (oembed width/height for example)

use \Gdbots\UriTemplate\UriTemplateService;

UriTemplateService::registerTemplates([
    'youtube:video.canonical' => 'http://www.youtube.com/watch?v={youtube_video_id}',
    'youtube:video.player_url' => 'https://www.youtube.com/embed/{youtube_video_id}',
    'youtube:video.oembed' => 'http://www.youtube.com/oembed?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{youtube_video_id}&amp;format={format}',
]);

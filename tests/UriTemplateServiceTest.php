<?php
declare(strict_types=1);

namespace Gdbots\Tests\UriTemplate;

use Gdbots\UriTemplate\UriTemplateService;
use PHPUnit\Framework\TestCase;

class UriTemplateServiceTest extends TestCase
{
    public function testExpand()
    {
        $expected = 'https://www.youtube.com/watch?v=123';
        $actual = UriTemplateService::expand('youtube:video.canonical', ['video_id' => '123']);
        $this->assertSame($expected, $actual);

        $expected = 'https://instagram.com/p/123';
        $actual = UriTemplateService::expand('instagram:media.canonical', ['media_id' => '123']);
        $this->assertSame($expected, $actual);
    }
}

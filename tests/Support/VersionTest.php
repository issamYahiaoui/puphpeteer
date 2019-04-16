<?php

namespace Nesk\Puphpeteer\Tests\Support;

use Nesk\Puphpeteer\Support\Version;
use Nesk\Puphpeteer\Tests\TestCase;
use org\bovigo\vfs\vfsStream;

class DocumentationFormatterTest extends TestCase
{
    public function setUp(): void
    {
        vfsStream::setup('scaffolding');
        vfsStream::setup('manifest');
    }

    /** @test */
    public function retrieve_puppeteer_version(): void
    {
        $version = new Version(static::setupScaffolding('.'));
    }

    protected static function createVersion(
        string $workingDirectory,
        string $versionRequirement,
        string $currentVersion
    ): Version {
        // return new Version();
    }
}

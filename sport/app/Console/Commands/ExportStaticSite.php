<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExportStaticSite extends Command
{
    protected $signature = 'site:export {--output=public : Directory where the static site is written}';

    protected $description = 'Export the public GET routes as static HTML files';

    public function handle(): int
    {
        $outputDirectory = base_path($this->option('output'));
        $routes = ['/', '/musculation', '/calisthenics', '/diet', '/sitemap'];

        foreach ($routes as $uri) {
            $response = app()->handle(Request::create($uri, 'GET'));

            if (! $response->isSuccessful()) {
                $this->error("Unable to export {$uri} (HTTP {$response->getStatusCode()}).");

                return self::FAILURE;
            }

            $path = $uri === '/' ? 'index.html' : trim($uri, '/').'/index.html';
            $file = $outputDirectory.DIRECTORY_SEPARATOR.str_replace('/', DIRECTORY_SEPARATOR, $path);

            File::ensureDirectoryExists(dirname($file));
            File::put($file, $response->getContent());
            $this->line("Exported {$uri} to {$path}");
        }

        return self::SUCCESS;
    }
}

# Stat Hub Package

A Laravel package that provides tracking functionality.

## Installation

You can install the package via composer:

First, sdd to composer.json
```json
...
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:crysdd/stat-hub.git"
    }
]
...
```

```bash
composer require crysdd/stat-hub:@dev
```

Publish the config file if necessary:

```bash
php artisan vendor:publish --provider="Vendor\StatHub\StatHubServiceProvider"
```

Then update your `.env` file with your stat service configuration:

```env
STAT_BASE_URI=http://your-stat-service.com
```

## Usage

After installing and publishing the configuration, the package will automatically register routes for:

- `GET /img`: Retrieves images from your stat service
- `GET /hit`: Sends hit tracking data to your stat service

## Configuration

The package provides a configuration file at `config/stat-hub.php` where you can customize:

- Base URI for the stat service
- Image endpoint path
- Hit tracking endpoint path

## Requirements

- PHP 8.3+
- Laravel 11.0+, 12.0+, or 13.0+
- Guzzle HTTP client

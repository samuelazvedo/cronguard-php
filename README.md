# Cronguard PHP SDK

The PHP SDK for the Cronguard API.

## Installation

You can install the package via composer:

```bash
composer require cronguard/cronguard-php
```

## Requirements

- PHP 8.1 or higher
- Guzzle HTTP Client

## Basic Usage

Instantiate the client with your API key:

```php
use Cronguard\Client;

$client = new Client('YOUR_API_KEY');
```

### Monitors

List all monitors:
```php
$monitors = $client->monitors()->list();
```

Create a new monitor:
```php
// Name, Period (seconds), Grace (seconds)
$newMonitor = $client->monitors()->create('Backup Database', 3600, 300);
```

Get a specific monitor:
```php
$monitor = $client->monitors()->get('MONITOR_ID');
```

Update a monitor:
```php
$client->monitors()->update('MONITOR_ID', [
    'name' => 'New Name',
    'period_seconds' => 7200
]);
```

Delete a monitor:
```php
$client->monitors()->delete('MONITOR_ID');
```

Get monitor events:
```php
$events = $client->monitors()->events('MONITOR_ID');
```

### Notifications

List notifications (paginated):
```php
$notifications = $client->notifications()->list(page: 1);
```

## Testing

To run the tests:

```bash
./vendor/bin/phpunit
```

## License

MIT

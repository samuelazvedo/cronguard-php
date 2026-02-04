<?php
namespace Cronguard;
use GuzzleHttp\Client as GuzzleClient;
use Cronguard\Resources\Monitors;
use Cronguard\Resources\Notifications;
class Client
{
    public const VERSION = '1.0.0';
    protected GuzzleClient $http;
    public function __construct(string $apiKey, string $baseUrl = 'https://api.cronguard.dev/v1/')
    {
        $this->http = new GuzzleClient([
            'base_uri' => $baseUrl,
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
                'User-Agent'    => 'Cronguard-PHP-SDK/' . self::VERSION,
            ],
            'http_errors' => false, // Permite tratarmos erros manualmente se precisar
        ]);
    }
    public function monitors(): Monitors
    {
        return new Monitors($this->http);
    }
    public function notifications(): Notifications
    {
        return new Notifications($this->http);
    }
}

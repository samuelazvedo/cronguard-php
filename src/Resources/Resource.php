<?php
namespace Cronguard\Resources;
use GuzzleHttp\Client;
abstract class Resource
{
    public function __construct(protected Client $http) {}
    protected function request(string $method, string $endpoint, array $data = [])
    {
        $options = [];
        if (!empty($data)) {
            $options[$method === 'GET' ? 'query' : 'json'] = $data;
        }
        $response = $this->http->request($method, $endpoint, $options);
        
        // Retorna o corpo da resposta como array associativo
        return json_decode($response->getBody()->getContents(), true);
    }
}

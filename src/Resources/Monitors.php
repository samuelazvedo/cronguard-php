<?php
namespace Cronguard\Resources;
class Monitors extends Resource
{
    public function list()
    {
        return $this->request('GET', 'monitors');
    }
    public function create(string $name, int $periodSeconds, int $graceSeconds)
    {
        return $this->request('POST', 'monitors', [
            'name' => $name,
            'period_seconds' => $periodSeconds,
            'grace_seconds' => $graceSeconds,
        ]);
    }
    public function get(string $id)
    {
        return $this->request('GET', "monitors/{$id}");
    }
    public function update(string $id, array $data)
    {
        return $this->request('PATCH', "monitors/{$id}", $data);
    }
    public function delete(string $id)
    {
        return $this->request('DELETE', "monitors/{$id}");
    }
    
    public function events(string $id)
    {
        return $this->request('GET', "monitors/{$id}/events");
    }
}

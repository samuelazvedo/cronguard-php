<?php
namespace Cronguard\Resources;
class Notifications extends Resource
{
    public function list(int $page = 1)
    {
        return $this->request('GET', 'notifications', ['page' => $page]);
    }
}

<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;

class AuthUserProvider extends EloquentUserProvider
{
    public function retrieveById($identifier)
    {
        $model = $this->createModel()->newQuery()
            // ->leftJoin('corps', 'users.corp_id', '=', 'corps.id')
            // ->leftJoin('shops', 'users.shop_id', '=', 'shops.id')
            // ->select(['users.*', 'corps.name as corp_name', 'shops.name as shop_name'])
            ->find($identifier);
        echo '<pre>';
        print_r($model->toArray());
        return $model;
    }
}

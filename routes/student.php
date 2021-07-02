<?php

use Illuminate\Support\Facades\Route;

Route::any('list', function() {
    echo json_encode([
        'code' => 200,
        'msg' => 'success',
        'data' => [
            [
                'id' => 1,
                'name' => '张三'
            ],
            [
                'id' => 2,
                'name' => '李四'
            ],
        ]
    ]);
});

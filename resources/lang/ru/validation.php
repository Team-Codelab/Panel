<?php

return [
    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute неверный URL.',
    'after' => ':attribute должно быть после даты :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать буквы, числа и тире.',
    'alpha_num' => ':attribute может содержать буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть перед датой :date.',
    'between' => [
        'array' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайт.',
        'numeric' => ':attribute должен быть между :min и :max.',
        'string' => ':attribute должен быть между :min и :max символов.',
    ],
    'boolean' => ':attribute поле должно быть true или false.',
    'confirmed' => ':attribute подтверждение не совпадает.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'date' => ':attribute неправильная дата.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должны бить различными.',
    'digits' => ':attributeдолжны быть :digits цифрами.',
    'digits_between' => ':attribute должны быть между :min и :max цифрами.',
    'exists' => 'Выбран недопустимый :attribute.',
    'filled' => ':attribute поле, обязательное для заполнения.',
    'image' => ':attribute должен быть изображением.',
    'in' => 'Выбран недопустимый :attribute.',
    'integer' => ':attribute должен быть целым числом.',
    'ip' => ':attribute должен быть IP адресом.',
    'json' => ':attribute должен быть JSON строкой.',
    'max' => [
        'array' => ':attribute не может иметь более :max позиций.',
        'file' => ':attribute не может быть больше, чем  :max килобайт.',
        'numeric' => ':attribute не может быть больше, чем :max.',
        'string' => ':attribute не может быть больше, че :max символов.',
    ],
    'mimes' => ':attribute должен быть файлом: :values.',
    'min' => [
        'array' => ':attribute должны иметь по крайней мере :min позиций.',
        'file' => ':attribute должен быть не менее :min килобайт.',
        'numeric' => ':attribute должен быть не менее :min.',
        'string' => ':attribute должен быть не менее :min символов.',
    ],
    'not_in' => 'Выбран недопустимый :attribute.',
    'numeric' => ':attribute должен быть числом.',
    'regex' => ':attribute недопустимый формат.',
    'required' => ':attribute обязательно к заполнению.',
    'required_if' => ':attribute должно быть заполнено когда :other в :value.',
    'required_with' => ':attribute поле должно быть заполнено когда :values присутствует.',
    'required_without' => ':attribute должно быть заполнено когда :values не присутствует.',
    'required_without_all' => ':attribute должно быть заполнено когда пустое значение :values.',
    'required_with_all' => ':attribute должно быть заполнено когда :values присутствует.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'array' => ':attribute должен содержать :size позиций.',
        'file' => ':attribute должен быть :size килобайт.',
        'numeric' => ':attribute должен быть :size.',
        'string' => ':attribute должен быть :size символов.',
    ],
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должен быть часовым поясом.',
    'totp' => 'Тotp токен недействителен. Просрочен?',
    'unique' => ':attribute уже использован.',
    'url' => ':attribute недопустимый формат.',
];

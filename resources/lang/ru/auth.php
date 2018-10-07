<?php
/**
 * @author Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Сообщения при аутентификации
    |--------------------------------------------------------------------------
    |
    | Следующие строки используются во время аутентификации для различных
    | сообщений, которые нам нужно отобразить пользователю. Вы можете свободно
    | изменять их в соответствии с требованиями вашего приложения.
    |
    */

    'failed'   => 'Имя пользователя или пароль указаны неверно.',
    'throttle' => 'Слишком много попыток входа. Пожалуйста, попробуйте снова через :seconds секунд.',

    'socialite'     => [
        'unacceptable' => ':provider не является допустимым типом входа.',
    ],
];

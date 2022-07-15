<?php

    $textStorage = [];

    function add(array &$storage, string $title, string $text,)
    {
        $storage[] = ['title' => $title, 'text' => $text];
    }

    add($textStorage, 'privet', 'приветствие');
    add($textStorage, 'Baikal', 'Bolshoe ozero');

    var_dump($textStorage);

    function remove(array $storage, int $numberText, )
        {
            if (isset($storage[$numberText]['text'])) {
                echo 'true'.PHP_EOL;
            } else {
                echo 'false'.PHP_EOL;
                    }
        };

        remove($textStorage, 0);
        remove($textStorage, 5);

        var_dump($textStorage);

        function edit(int $numberText,string $title, string $text, array $storage, ):void
        {
            if (isset($storage[$numberText]['text'])) {
                echo 'true'.PHP_EOL;
            } else {
                echo 'false'.PHP_EOL;
            }
        }

        edit(1, 'title', 'text', $textStorage);
        edit(3, 'title', 'text', $textStorage);










//        $textStorage[$i]['title'] = readline('Введи заголовок');
//        $textStorage[$i]['text'] = readline('Введи текст');

//    print_r($textStorage[0]['text']);
//    var_dump($textStorage[0]['text']);

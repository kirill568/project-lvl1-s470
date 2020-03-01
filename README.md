[![Maintainability](https://api.codeclimate.com/v1/badges/178f44023b0768f5c1d8/maintainability)](https://codeclimate.com/github/kirill568/project-lvl1-s470/maintainability)
[![Build Status](https://travis-ci.org/kirill568/project-lvl1-s470.svg?branch=master)](https://travis-ci.org/kirill568/project-lvl1-s470)

# Brain games

Набор мини-игр для тренировки когнитивных способностей.\
Пакет содержит 5 игр:
- "Проверка на четность"
- "Калькулятор"
- "НОД"
- "Арифметическая прогрессия"
- "Простое ли число?"

## Как установить

 * У вас должен быть установлен composer. Процесс установки Composer для каждой операционной системы описан в официальном руководстве:

    <https://getcomposer.org/download/>\
    <https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos>

* Вам нужно узнать в какую дирректорию composer складывает ссылки на исполняемые файлы c помощью команды `composer global config bin-dir --absolute`. Путь, который мы получили нужно добавить в переменную окружения PATH вот так:
    ```
    PATH=$PATH:путь
    export PATH
    ```
* Затем необходимо глобально установить пакет в систему с помощью команды `composer global require kirill568/brain-games:dev-master`

* Теперь вы можете запускать мини-игры из терминала

    Команды для запуска мини-игр:

    - brain-even ("Проверка на четность")
    - brain-calc ("Калькулятор")
	- brain-gcd ("НОД")
	- brain-progression ("Арифметическая прогрессия")
	- brain-prime ("Простое ли число?")

## Игровой процесс

+ Игра: "Проверка на четность"

    [![asciicast](https://asciinema.org/a/nxG6UETX5HC2RQsR2BdDQFg7z.svg)](https://asciinema.org/a/nxG6UETX5HC2RQsR2BdDQFg7z)

+ Игра: "Калькулятор"

    [![asciicast](https://asciinema.org/a/KBH4VVE2Dq4fVsVZEmRD6Fo30.svg)](https://asciinema.org/a/KBH4VVE2Dq4fVsVZEmRD6Fo30)

+ Игра "НОД"

   [![asciicast](https://asciinema.org/a/Lt3TLb0l3jSzpPRQYMuf5Eu2n.svg)](https://asciinema.org/a/Lt3TLb0l3jSzpPRQYMuf5Eu2n)

+ Игра "Арифметическая прогрессия"

   [![asciicast](https://asciinema.org/a/qMkbIVeAcA2WpDCRvxHDOJ6Ci.svg)](https://asciinema.org/a/qMkbIVeAcA2WpDCRvxHDOJ6Ci)

+ Игра "Простое ли число?"

   [![asciicast](https://asciinema.org/a/2rx8Sy1d2QWxRU5tjUx6pLKqV.svg)](https://asciinema.org/a/2rx8Sy1d2QWxRU5tjUx6pLKqV)

&copy;Проект реализован в рамках учебной программы Hexlet.

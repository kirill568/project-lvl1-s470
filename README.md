[![Maintainability](https://api.codeclimate.com/v1/badges/178f44023b0768f5c1d8/maintainability)](https://codeclimate.com/github/kirill568/project-lvl1-s470/maintainability)
[![Build Status](https://travis-ci.org/kirill568/project-lvl1-s470.svg?branch=master)](https://travis-ci.org/kirill568/project-lvl1-s470)

# Brain games
========================

Набор мини-игр для тренировки когнитивных способностей
Пакет содержит 5 игр:
- "Проверка на четность"
- "Калькулятор"
- "НОД"
- "Арифметическая прогрессия"
- "Простое ли число?"

## Как установить
-------------------------
 * У вас должен быть установлен composer. 
    Процесс установки Composer для каждой операционной системы описан в официальном руководстве:

<https://getcomposer.org/download/>
<https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos>

* Вам нужно узнать в какую дирректорию composer складывает ссылки на исполнемые файлы c помощью команды composer `global config bin-dir --absolute`
    Путь, который мы получили нужно добавить в переменныю окружения PATH вот так:
    ```
    PATH=$PATH:путь
    export PATH
    ```
* Затем необходимо глобально установить пакет в систему с помощью команды composer `global require kirill568/brain-games:dev-master`

* Теперь вы можете запускать мини-игры из терминала

    Команды для запуска мини-игр:

    ** brain-even ("Проверка на четность")
    ** brain-calc ("Калькулятор")
	** brain-gcd ("НОД")
	** brain-progression ("Арифметическая прогрессия")
	** brain-prime ("Простое ли число?")

## Игровой процесс
-------------------------
+ Игра: "Проверка на четность"

[![asciicast](https://asciinema.org/a/oyrXWq5R2f5aBDNHBbbZp0Cfq.svg)](https://asciinema.org/a/oyrXWq5R2f5aBDNHBbbZp0Cfq)

+ Игра: "Калькулятор"

[![asciicast](https://asciinema.org/a/BD1mWwbM4eSHcVpOtmgwePpOn.svg)](https://asciinema.org/a/BD1mWwbM4eSHcVpOtmgwePpOn)

+ Игра "НОД"

[![asciicast](https://asciinema.org/a/4QiiN5OVEj97F3HQtB10b8atk.svg)](https://asciinema.org/a/4QiiN5OVEj97F3HQtB10b8atk)

+ Игра "Арифметическая прогрессия"

[![asciicast](https://asciinema.org/a/UZLUfh1AV3Qc5qodjhSW9wJpo.svg)](https://asciinema.org/a/UZLUfh1AV3Qc5qodjhSW9wJpo)

+ Игра "Простое ли число?"

[![asciicast](https://asciinema.org/a/XDfE4JZulujaJJ9ZKvllCW5go.svg)](https://asciinema.org/a/XDfE4JZulujaJJ9ZKvllCW5go)

> Проект реализован в рамках учебной программы Hexlet
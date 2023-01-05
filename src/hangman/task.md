##Hangman
**Задача**: написать игру виселица

[Файл](https://prod-edxapp.edx-cdn.org/assets/courseware/v1/b537aed0f6d1e3c4a25fa1e640533c85/asset-v1:MITx+6.00.1x+2T2019+type@asset+block/words.txt) со словами

Механика:

- Сообщить сколько букв в слове
- Предложить дать догадку
- Вывести результат (верна ли догадка)
- Вывести слово с угаданными буквами

Требования:

- Всего 8 попыток (в каждом раунде сообщать о остатке попыток)
- Отправить можно одну букву за раунд (A-Z)
- Количество попыток игрока уменьшается только когда он ответил **не верно**
- Если пользователь ввел уже отгаданную букву, необходимо сообщить об этом и попросите ввести другую букву
- Игра заканчивается, когда пользователь угадал слово или закончились попытки ввода. Если игрок не угадал слово, нужно вывести его на экран

### Примеры вывода:

Выигрышный сценарий:

```
Loading word list from file...
	55900 words loaded.
Welcome to the game, Hangman!
I am thinking of a word that is 4 letters long.
-------------
You have 8 guesses left.
Available letters: abcdefghijklmnopqrstuvwxyz
Please guess a letter: a
Good guess: _ a_ _
------------
You have 8 guesses left.
Available letters: bcdefghijklmnopqrstuvwxyz
Please guess a letter: a
Oops! You've already guessed that letter: _ a_ _
------------
You have 8 guesses left.
Available letters: bcdefghijklmnopqrstuvwxyz
Please guess a letter: s
Oops! That letter is not in my word: _ a_ _
------------
You have 7 guesses left.
Available letters: bcdefghijklmnopqrtuvwxyz
Please guess a letter: t
Good guess: ta_ t
------------
You have 7 guesses left.
Available letters: bcdefghijklmnopqruvwxyz
Please guess a letter: r
Oops! That letter is not in my word: ta_ t
------------
You have 6 guesses left.
Available letters: bcdefghijklmnopquvwxyz
Please guess a letter: m
Oops! That letter is not in my word: ta_ t
------------
You have 5 guesses left.
Available letters: bcdefghijklnopquvwxyz
Please guess a letter: c
Good guess: tact
------------
Congratulations, you won!
```

Проигрышный сценарий:

```
Loading word list from file...
	55900 words loaded.
Welcome to the game Hangman!
I am thinking of a word that is 4 letters long
-----------
You have 8 guesses left
Available Letters: abcdefghijklmnopqrstuvwxyz
Please guess a letter: a
Oops! That letter is not in my word: _ _ _ _
-----------
You have 7 guesses left
Available Letters: bcdefghijklmnopqrstuvwxyz
Please guess a letter: b
Oops! That letter is not in my word: _ _ _ _
-----------
You have 6 guesses left
Available Letters: cdefghijklmnopqrstuvwxyz
Please guess a letter: c
Oops! That letter is not in my word: _ _ _ _
-----------
You have 5 guesses left
Available Letters: defghijklmnopqrstuvwxyz
Please guess a letter: d
Oops! That letter is not in my word: _ _ _ _
-----------
You have 4 guesses left
Available Letters: efghijklmnopqrstuvwxyz
Please guess a letter: e
Good guess: e_ _ e
-----------
You have 4 guesses left
Available Letters: fghijklmnopqrstuvwxyz
Please guess a letter: f
Oops! That letter is not in my word: e_ _ e
-----------
You have 3 guesses left
Available Letters: ghijklmnopqrstuvwxyz
Please guess a letter: g
Oops! That letter is not in my word: e_ _ e
-----------
You have 2 guesses left
Available Letters: hijklmnopqrstuvwxyz
Please guess a letter: h
Oops! That letter is not in my word: e_ _ e
-----------
You have 1 guesses left
Available Letters: ijklmnopqrstuvwxyz
Please guess a letter: i
Oops! That letter is not in my word: e_ _ e
-----------
Sorry, you ran out of guesses. The word was else.
```
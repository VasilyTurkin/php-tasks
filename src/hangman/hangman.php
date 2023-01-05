<?php

function loadWords(): array
{
    /*
    считывает все слова из файла
    */
    return [];
}


function chooseWord(array $wordlist): string
{
    /*
    выбирает рандомное слово из списка
    */
    return '';
}

function isWordGuessed(string $secretWord, array $lettersGuessed): bool
{
    /*
    проверяет угадано ли слово или нет
    */
    return false;
}


function getGuessedWord(string $secretWord, array $lettersGuessed): string
{
    /*
    возвращает часть угаданного слова в формате: h_ ng_ _ n
    */
    return '';
}

function getAvailableLetters(array $lettersGuessed): string
{
    /*
    возвращает неиспользованные буквы
    */
    return '';
}


function nextRound(string $secretWord, array $lettersGuessed, int $mistakesMade): array
{
    /*
    - говорит сколько осталось попыток
    - выводит доступные буквы
    - ожидает ввод от игрока
    - в зависимости от ввода сообщает: "Oops! You\'ve already guessed that letter", "Good guess" или "Oops! That letter is not in my word"
    */
    return [[], 0];
}


function startGame(string $secretWord): void
{
    /*
    Главная функция игры:
    - приветствует игрока
    - сообщает о длине загаданного слова
    - выводит поздравление, если слово разгадано или сообщает о поражении
    */
}


$wordlist = loadWords();
$secretWord = chooseWord($wordlist);
startGame($secretWord);
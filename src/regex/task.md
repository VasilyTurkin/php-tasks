Для каждой задачи написать функцию:

### Простые литералы
1. Функция для подсчета количества слов в строке
```php
$str = 'message with and, and another and';
countWord($str, 'and'); // => 3
```
2. Функция для замены всех слов "test" в строке на произвольный символ
```php
$str = 'testmessage with testword test';
replaceTest($str, ''); // => 'message with word '
```

### Классы символов
3. Функция для удаления всех символов кроме букв и цифр
```php
$str = '&.  some message 1234, with numbers -=+-??';
clearString($str); // => 'some message 1234 with numbers'
```
4. Функция для выборки всех номеров из строки. Ответ - массив
```php
$str = 'Get 123 something 3out of your 0 system786775';
extractNumbers($str); // => [123, 3, 0, 786775]
```
5. Функция для удаления лишних пробелов
```php
$str = 'test    test       test';
timpSpaces($str); // => 'test test test'
```

### Альтернативы
6. Функция для подсчета букв в строке (английские буквы в разном регистре)
```php
$str = 'GivE somEone the benEfit of the doubt';
countLetters($str, 'e'); // => 7
countLetters($str, 'E'); // => 7
```
7. Функция для извлечения слов английского алфавита
```php
extractWords('test123'); // => ['test']
extractWord('one123two_three'); // => ['one', 'two', 'three']
```

### Отрицательные классы
8. Функция для преобразования слова из snake или upper case в camel case
```php
transformToCamelCase('MOSCOW_TIME_ZONE'); // => 'moscowTimeZone'
transformToCamelCase('start_date_time'); // => 'startDateTime'
```
9. Функция для удаления html-тегов
```php
$str = '<strong>Header</strong><i>123</i><div>block</div>';
removeHtmlTags($str); // => 'Header123block'
```

### Квантификаторы повторений
10. Фукция извлекаюая телефон по формату <tel. 1234> (с точкой или без)
```php
getPhone('Some address, tel. 129800'); // => 'tel. 129800'
getPhone('tel 129838, some address'); // => 'tel 129838'
```
11. Функция для определения повторяется ли какой-либо символ заданное количество раз
```php
isCharRepeat('test tttest', 't', 3); // => true
isCharRepeat('Hello', 'l', 4); // => false
```
12. Функция для определения есть ли в строке число длиной от 3 до 5
```php
hasNumber('test 123'); // => true
hasNumber('test 12'); // => false
hasNumber('9812'); // => true
hasNumber('98123'); // => true
hasNumber('981231'); // => false
```
 
### Мнимые символы
13. Функция для проверки является ли строка одним букво цисленным словом
```php
isAlpaNumeric('test123'); // => true
isAlpaNumeric(' test123'); // => false
isAlpaNumeric('test123 '); // => false
isAlpaNumeric('test 123'); // => false
isAlpaNumeric('123'); // => true
isAlpaNumeric('word'); // => true
```

### Общие задачи *
14. Функция для парсинга параметров GET запроса
```php
$url = 'tutu.ru/poezda?from_date=20.10.2022&to_date=10.11.2022&train_number=120';
parseParams($url); // => ['from_date' => '20.10.2022', 'to_date' => '10.11.2022', 'train_number' => '120']
```
15. Функция для соответствия строки формату номеров телефона РФ (+79131502349)
```php
isValidatePhoneNumber('+79131502349'); // true
isValidatePhoneNumber('+791315023491'); // false
isValidatePhoneNumber('791315023491'); // false
isValidatePhoneNumber('891315023491'); // false
```
16. Функция для разделения слов и чисел пробелами
```php
splitWordsNums('test123word93'); // => 'test 123 word 93'
```
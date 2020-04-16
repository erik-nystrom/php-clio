# PHPClio

A basic class to help facilitate command line IO in your PHP scripts.

## Why did I make this?

For command line PHP applications that require some degree of input, this has served me well.

## Usage

Install via Composer:
```
composer require erik-nystrom/php-clio
```

Alias/Import into your script:
```
use PHPClio\Console as Console;
```

Output text to the console: 
```
Console::out("Here's some sample text");
```

Get user input from the console: 
```
$input = Console::in("Enter some text");
```

Get user input from the console, with restrictions: 
```
$input = Console::in("Enter some text", ["ValidInput1", "ValidInput2", "ValidInput3"]);
```

## License
[MIT](https://choosealicense.com/licenses/mit/)

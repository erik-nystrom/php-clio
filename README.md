# PHPClio

A basic class to help facilitate command line IO in your PHP scripts.

## Usage

Setup: 
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
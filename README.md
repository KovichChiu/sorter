# sorter
multiple of sort algorithm

## Allowed Sort Algorithm
| date       | sort algo  | author |
|------------|------------|--------|
| 2023/03/03 | Quick Sort | Sevenz |

## install
```
composer require "sevenz/sorter"
```

## use

```php
// example
namespace exam/your_programs;

use Sevenz\Sorter;

class Example
{
    $list = [
        [
            'name' => 'John',
            'age' => 25,
        ],
        [
            'name' => 'Anna',
            'age' => 32,
        ],
        [
            'name' => 'Tom',
            'age' => 18,
        ],
        [
            'name' => 'Sarah',
            'age' => 27,
        ],
        [
            'name' => 'Ben',
            'age' => 22,
        ],
    ];

    print_r(Sorter::quick($list, 'name'));
}
```
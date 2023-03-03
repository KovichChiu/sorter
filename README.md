# sorter
multiple of sort algorithm

## install
```
composer require "sevenz/sorter"
```

## use

```php
// example
namespace exam/your_programs;

use Sevenz\Sorter\sorter;

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

    print_r(sorter::quick($list, 'name'));
}
```
# -3x-1-function
# Collatz Analysis in PHP

This project provides functions to compute and analyze the Collatz sequence (3x+1) in PHP.

## Files
- `collatz_functions.php` – Contains functions for generating the Collatz sequence and analyzing a range of numbers.

## Functions

### `collatz_sequence($n)`
Computes the Collatz sequence for a given number `$n`.
- **Parameters:**
  - `$n` (int) – Starting number.
- **Returns:**
  - An array containing the sequence values, the highest value reached, and the total number of iterations.

### `analyze_collatz_range($start, $end)`
Analyzes the Collatz sequence for a range of numbers.
- **Parameters:**
  - `$start` (int) – Start of the range.
  - `$end` (int) – End of the range.
- **Returns:**
  - An array of results for each number, along with the number with the most iterations, the least iterations, and the highest value.

## Usage
1. Include `collatz_functions.php` in your PHP script.
2. Call `collatz_sequence($n)` to get the sequence of a single number.
3. Call `analyze_collatz_range($start, $end)` to analyze a range of numbers.

## Example
```php
include 'collatz_functions.php';

$number = 10;
list($sequence, $max_value, $iterations) = collatz_sequence($number);
echo "Sequence: " . implode(", ", $sequence) . "\n";
echo "Max value: $max_value\n";
echo "Iterations: $iterations\n";
```

## License
This project is open-source and free to use.


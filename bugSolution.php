```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately
      // Option 1: Ignore non-numeric values
      // Option 2: Throw an exception
      // Option 3: Use a default value
      echo "Warning: Skipping non-numeric value: " . $number . "\n";
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```
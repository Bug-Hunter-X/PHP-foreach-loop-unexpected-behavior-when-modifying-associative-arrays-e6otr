function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
        unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [foo] => foo [baz] => baz )

//The above code seems correct but produces an unexpected behavior.  The foreach loop removes the 'bar' element, but when passing an associative array, the keys get re-indexed after removing an element causing unexpected results. 
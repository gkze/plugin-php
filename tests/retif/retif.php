<?php

return true ? 1 : 2;
return ($testReallyReallyLong >= 1) ? $someOtherReallyReallyLongVariable : $thisOtherVariable;
return true ?: 2;
return ($testReallyReallyLong === $someOtherReallyReallyLongVariable && $otherTest != $someOtherTest) ? 1 : 0;

$test ? doSomething() : doSomethingElse();
return $test ? doSomething() : doSomethingElse();
$test ?: doSomething();
return $test ?: doSomething();

$category_color = get_field( Category_Meta::COLOR, 'category_' . $term_id ) ?: 'gold';

$var = $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
$var = ($someOtherReallyReallyLongVariable ? ($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable) : $someOtherReallyReallyLongVariable) ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
$var = $someOtherReallyReallyLongVariable ? ($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable) : ($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable);
$test = $foo ?: bar($someOtherReallyReallyLongVariable, $someOtherReallyReallyLongVariable, $someOtherReallyReallyLongVariable);
$test = ($testReallyReallyReallyReallyReallyReallyLong >= 1) ?: $someOtherReallyReallyReallyReallyReallyReallyLongVariable;
$test = $foo ?: bar([ 'foo' => 'bar' , 'bar' => 'foo']);
$test = $foo ?: bar([ 'foo' => $someOtherReallyReallyLongVariable , 'bar' => $someOtherReallyReallyLongVariable]);
$var = ($this->databasePath ?: $this->basePath . DIRECTORY_SEPARATOR . 'database') .
    ($path ? DIRECTORY_SEPARATOR . $path : $path);
$var = ($this->databasePath ? $this->basePath . DIRECTORY_SEPARATOR . 'other' : $this->basePath . DIRECTORY_SEPARATOR . 'database') .
    ($path ? DIRECTORY_SEPARATOR . $path : $path);
return ($this->databasePath ?: $this->basePath . DIRECTORY_SEPARATOR . 'database') .
    ($path ? DIRECTORY_SEPARATOR . $path : $path);

$test = $foo
    ? foo([ 'foo' => $someOtherReallyReallyLongVariable , 'bar' => $someOtherReallyReallyLongVariable])
    : bar([ 'foo' => $someOtherReallyReallyLongVariable , 'bar' => $someOtherReallyReallyLongVariable]);

$var = 'string' . $someOtherReallyReallyLongVariable . $someOtherReallyReallyLongVariable ? 1 : 2;
$var = 1 ? 'string' . $someOtherReallyReallyLongVariable . $someOtherReallyReallyLongVariable : 2;
$var = 1 ? 2 : 'string' . $someOtherReallyReallyLongVariable . $someOtherReallyReallyLongVariable;

($someOtherReallyReallyLongVariable
  ? $someOtherReallyReallyLongVariable
  : $someOtherReallyReallyLongVariable
)->call();
$var = $test ?: (true ? 1 : 2);
$var = $test ?: ($someOtherReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyLongVariable ? 1 : 2);
$var = $test ?: (true ? $someOtherReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyLongVariable : 2);
$var = $test ?: (true ? 1 : $someOtherReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyLongVariable);
$var = $test
    ? 'string'
    : ($someOtherReallyReallyLongVariable
        ? $someOtherReallyReallyLongVariable
        : $someOtherReallyReallyLongVariable);
$var = $test
    ? ($someOtherReallyReallyLongVariable
        ? $someOtherReallyReallyLongVariable
        : $someOtherReallyReallyLongVariable)
    : 'string';

$arr = [
    'step' => !empty($field['sliderStep']) && $field['sliderStep']
        ? (int) $field['sliderStep']
        : 1,
    'step' => true ? (int) $field['sliderStep'] : 1,
    'step' => true ? $someOtherReallyReallyLongVariable . $someOtherReallyReallyLongVariable : 1,
    'step' => $someOtherReallyReallyLongVariable ? (int) $field['sliderStep'] : 1,
    'step' => $someOtherReallyReallyLongVariable . 'string' ? (int) $field['sliderStep'] : 1,
    'step' => $someOtherReallyReallyLongVariable . $someOtherReallyReallyLongVariable ? (int) $field['sliderStep'] : 1,
    'step' => $someOtherReallyReallyReallyReallyLongVariable . $someOtherReallyReallyReallyReallyLongVariable ? (int) $field['sliderStep'] : 1,
    'step' => $someOtherReallyReallyReallyReallyLongVariable && $someOtherReallyReallyReallyReallyLongVariable ? (int) $field['sliderStep'] : 1,
];

$var = $var ?: $var ?: $var ?: 'string';
$var = $var ?: $var ?: $var ?: $var ?: $var ?: $var ?: $var ?: $var ?: $var ?: $var ?: $var ?: $var ?: 'string';

($var ? 'string' : 'other-string')();
($var ?: $var ?: $var ?: 'string')();
($someOtherReallyReallyLongVariable ?: 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString')();
($someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string')();
($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable)();

($var ? $var : $var)->call();
($var ?: $var ?: $var ?: 'string')->call();
($someOtherReallyReallyLongVariable ?: 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString')->call();
($someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string')->call();
($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable)->call();

($var ?: $var ?: $var ?: 'string')->foo;
($var ? $var : $var)->foo;
($someOtherReallyReallyLongVariable ?: 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString')->foo;
($someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string')->foo;
($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable)->foo;

call(function () {
    return 1;
}, $var ? 1 : 2);

call(function () {
    return 1;
}, $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable);

call(function () {
    return 1;
}, $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ? :'test');

$var = [
    'foo' =>  $var ?: $var ?: $var ?: 'string',
    'other-foo' =>  $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string'
];

return $var ? 'string' : 'other-string';
return $var ?: $var ?: $var ?: 'string';
return $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
return $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string';

$var = $this->databasePath ?: $this->basePath . DIRECTORY_SEPARATOR . 'database';

$var = $var ?: $otherVar ?: 'string' . 'string';
$var = $var ?: $otherVar ?: 'string' . 'string' . 'string' . 'string' . 'string' . 'string';
$var = $var ?: $otherVar ?: 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string';

echo $var ? 'string' : 'other-string';
echo $var ?: $var ?: $var ?: 'string';
echo $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
echo $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string';

print $var ? 'string' : 'other-string';
print $var ?: $var ?: $var ?: 'string';
print $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
print $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string';

include $var ? 'string' : 'other-string';
include $var ?: $var ?: $var ?: 'string';
include $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
include $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string';

$var = include $var ? 'string' : 'other-string';
$var = include $var ?: $var ?: $var ?: 'string';
$var = include $someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable;
$var = include $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string';

call($var ? 'string' : 'other-string');
call($var ?: $var ?: $var ?: 'string');
call($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable);
call($someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string');

exit($var ? 'string' : 'other-string');
exit($var ?: $var ?: $var ?: 'string');
exit($someOtherReallyReallyLongVariable ? $someOtherReallyReallyLongVariable : $someOtherReallyReallyLongVariable);
exit($someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: $someOtherReallyReallyLongVariable ?: 'string');

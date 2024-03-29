<?php








namespace JsonSchema\Constraints;







class StringConstraint extends Constraint
{



public function check($element, $schema = null, $path = null, $i = null)
{

 if (isset($schema->maxLength) && $this->strlen($element) > $schema->maxLength) {
$this->addError($path, "must be at most " . $schema->maxLength . " characters long");
}


 if (isset($schema->minLength) && $this->strlen($element) < $schema->minLength) {
$this->addError($path, "must be at least " . $schema->minLength . " characters long");
}


 if (isset($schema->pattern) && !preg_match('#' . str_replace('#', '\\#', $schema->pattern) . '#', $element)) {
$this->addError($path, "does not match the regex pattern " . $schema->pattern);
}

$this->checkFormat($element, $schema, $path, $i);
}

private function strlen($string)
{
if (extension_loaded('mbstring')) {
return mb_strlen($string, mb_detect_encoding($string));
} else {
return strlen($string);
}
}
}

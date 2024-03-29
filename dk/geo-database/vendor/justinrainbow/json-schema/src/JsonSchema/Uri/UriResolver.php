<?php








namespace JsonSchema\Uri;

use JsonSchema\Exception\UriResolverException;






class UriResolver
{






public function parse($uri)
{
preg_match('|^(([^:/?#]+):)?(//([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?|', $uri, $match);

$components = array();
if (5 < count($match)) {
$components = array(
'scheme' => $match[2],
'authority' => $match[4],
'path' => $match[5]
);
} 
if (7 < count($match)) {
$components['query'] = $match[7];
}
if (9 < count($match)) {
$components['fragment'] = $match[9];
}

return $components;
}







public function generate(array $components)
{
$uri = $components['scheme'] . '://' 
. $components['authority']
. $components['path'];

if (array_key_exists('query', $components)) {
$uri .= $components['query'];
}
if (array_key_exists('fragment', $components)) {
$uri .= '#' . $components['fragment'];
}

return $uri;
}








public function resolve($uri, $baseUri = null)
{
if ($uri == '') {
return $baseUri;
}

$components = $this->parse($uri);
$path = $components['path'];

if (! empty($components['scheme'])) {
return $uri;
}
$baseComponents = $this->parse($baseUri);
$basePath = $baseComponents['path'];

$baseComponents['path'] = self::combineRelativePathWithBasePath($path, $basePath);
if (isset($components['fragment'])) {
$baseComponents['fragment'] = $components['fragment'];
}

return $this->generate($baseComponents);
}









public static function combineRelativePathWithBasePath($relativePath, $basePath)
{
$relativePath = self::normalizePath($relativePath);
if ($relativePath == '') {
return $basePath;
}
if ($relativePath{0} == '/') {
return $relativePath;
}

$basePathSegments = self::getPathSegments($basePath);

preg_match('|^/?(\.\./(?:\./)*)*|', $relativePath, $match);
$numLevelUp = strlen($match[0]) /3 + 1;
if ($numLevelUp >= count($basePathSegments)) {
throw new UriResolverException(sprintf("Unable to resolve URI '%s' from base '%s'", $relativePath, $basePath));
}
$basePathSegments = array_slice($basePathSegments, 0, -$numLevelUp);
$path = preg_replace('|^/?(\.\./(\./)*)*|', '', $relativePath);

return implode('/', $basePathSegments) . '/' . $path;
}







private static function normalizePath($path)
{
$path = preg_replace('|((?<!\.)\./)*|', '', $path);
$path = preg_replace('|//|', '/', $path);

return $path;
}




private static function getPathSegments($path) {

return explode('/', $path);
}





public function isValid($uri)
{
$components = $this->parse($uri);

return !empty($components);
}
}

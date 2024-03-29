<?php










namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Output\OutputInterface;







class Table
{





private $headers = array();






private $rows = array();






private $columnWidths = array();






private $numberOfColumns;




private $output;




private $style;

private static $styles;

public function __construct(OutputInterface $output)
{
$this->output = $output;

if (!self::$styles) {
self::$styles = self::initStyles();
}

$this->setStyle('default');
}







public static function setStyleDefinition($name, TableStyle $style)
{
if (!self::$styles) {
self::$styles = self::initStyles();
}

self::$styles[$name] = $style;
}








public static function getStyleDefinition($name)
{
if (!self::$styles) {
self::$styles = self::initStyles();
}

if (!self::$styles[$name]) {
throw new \InvalidArgumentException(sprintf('Style "%s" is not defined.', $name));
}

return self::$styles[$name];
}








public function setStyle($name)
{
if ($name instanceof TableStyle) {
$this->style = $name;
} elseif (isset(self::$styles[$name])) {
$this->style = self::$styles[$name];
} else {
throw new \InvalidArgumentException(sprintf('Style "%s" is not defined.', $name));
}

return $this;
}






public function getStyle()
{
return $this->style;
}

public function setHeaders(array $headers)
{
$this->headers = array_values($headers);

return $this;
}

public function setRows(array $rows)
{
$this->rows = array();

return $this->addRows($rows);
}

public function addRows(array $rows)
{
foreach ($rows as $row) {
$this->addRow($row);
}

return $this;
}

public function addRow($row)
{
if ($row instanceof TableSeparator) {
$this->rows[] = $row;

return;
}

if (!is_array($row)) {
throw new \InvalidArgumentException('A row must be an array or a TableSeparator instance.');
}

$this->rows[] = array_values($row);

end($this->rows);
$rowKey = key($this->rows);
reset($this->rows);

foreach ($row as $key => $cellValue) {
if (!strstr($cellValue, "\n")) {
continue;
}

$lines = explode("\n", $cellValue);
$this->rows[$rowKey][$key] = $lines[0];
unset($lines[0]);

foreach ($lines as $lineKey => $line) {
$nextRowKey = $rowKey + $lineKey + 1;

if (isset($this->rows[$nextRowKey])) {
$this->rows[$nextRowKey][$key] = $line;
} else {
$this->rows[$nextRowKey] = array($key => $line);
}
}
}

return $this;
}

public function setRow($column, array $row)
{
$this->rows[$column] = $row;

return $this;
}













public function render()
{
$this->renderRowSeparator();
$this->renderRow($this->headers, $this->style->getCellHeaderFormat());
if (!empty($this->headers)) {
$this->renderRowSeparator();
}
foreach ($this->rows as $row) {
if ($row instanceof TableSeparator) {
$this->renderRowSeparator();
} else {
$this->renderRow($row, $this->style->getCellRowFormat());
}
}
if (!empty($this->rows)) {
$this->renderRowSeparator();
}

$this->cleanup();
}






private function renderRowSeparator()
{
if (0 === $count = $this->getNumberOfColumns()) {
return;
}

if (!$this->style->getHorizontalBorderChar() && !$this->style->getCrossingChar()) {
return;
}

$markup = $this->style->getCrossingChar();
for ($column = 0; $column < $count; $column++) {
$markup .= str_repeat($this->style->getHorizontalBorderChar(), $this->getColumnWidth($column)).$this->style->getCrossingChar();
}

$this->output->writeln(sprintf($this->style->getBorderFormat(), $markup));
}




private function renderColumnSeparator()
{
$this->output->write(sprintf($this->style->getBorderFormat(), $this->style->getVerticalBorderChar()));
}









private function renderRow(array $row, $cellFormat)
{
if (empty($row)) {
return;
}

$this->renderColumnSeparator();
for ($column = 0, $count = $this->getNumberOfColumns(); $column < $count; $column++) {
$this->renderCell($row, $column, $cellFormat);
$this->renderColumnSeparator();
}
$this->output->writeln('');
}








private function renderCell(array $row, $column, $cellFormat)
{
$cell = isset($row[$column]) ? $row[$column] : '';
$width = $this->getColumnWidth($column);


 if (function_exists('mb_strwidth') && false !== $encoding = mb_detect_encoding($cell)) {
$width += strlen($cell) - mb_strwidth($cell, $encoding);
}

$width += Helper::strlen($cell) - Helper::strlenWithoutDecoration($this->output->getFormatter(), $cell);

$content = sprintf($this->style->getCellRowContentFormat(), $cell);

$this->output->write(sprintf($cellFormat, str_pad($content, $width, $this->style->getPaddingChar(), $this->style->getPadType())));
}






private function getNumberOfColumns()
{
if (null !== $this->numberOfColumns) {
return $this->numberOfColumns;
}

$columns = array(count($this->headers));
foreach ($this->rows as $row) {
$columns[] = count($row);
}

return $this->numberOfColumns = max($columns);
}








private function getColumnWidth($column)
{
if (isset($this->columnWidths[$column])) {
return $this->columnWidths[$column];
}

$lengths = array($this->getCellWidth($this->headers, $column));
foreach ($this->rows as $row) {
if ($row instanceof TableSeparator) {
continue;
}

$lengths[] = $this->getCellWidth($row, $column);
}

return $this->columnWidths[$column] = max($lengths) + strlen($this->style->getCellRowContentFormat()) - 2;
}









private function getCellWidth(array $row, $column)
{
return isset($row[$column]) ? Helper::strlenWithoutDecoration($this->output->getFormatter(), $row[$column]) : 0;
}




private function cleanup()
{
$this->columnWidths = array();
$this->numberOfColumns = null;
}

private static function initStyles()
{
$borderless = new TableStyle();
$borderless
->setHorizontalBorderChar('=')
->setVerticalBorderChar(' ')
->setCrossingChar(' ')
;

$compact = new TableStyle();
$compact
->setHorizontalBorderChar('')
->setVerticalBorderChar(' ')
->setCrossingChar('')
->setCellRowContentFormat('%s')
;

return array(
'default' => new TableStyle(),
'borderless' => $borderless,
'compact' => $compact,
);
}
}

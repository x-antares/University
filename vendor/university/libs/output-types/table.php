<?php
use Symfony\Component\Console\Helper\TableCell;
use Symfony\Component\Console\Helper\Table;

$table = new Table($output);

$table->setHeaders(
    [
        [new TableCell($table_name, ['colspan' => 4])],
        $model_fields,
    ]
);

foreach ($models as $model) {
    $fields = [];
    foreach ($model_fields as $model_field) {
        $field_value = 'get' . $model_field;
        $fields[] = $model->$field_value();
    }
    $table->addRow(
        $fields,
    );
}
$table->render();
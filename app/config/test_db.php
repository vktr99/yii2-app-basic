<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'mysql:host=mytest_db_1;port=3306;dbname=yii2basic_test';

return $db;

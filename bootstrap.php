<?php

    require 'database/Connection.php';
    require 'database/QueryBuilder.php';
    $config = require 'config.php';

    $query = new QueryBuilder(Connection::make($config['database']));

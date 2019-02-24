<?php
        /*Connect using SQL Server authentication.*/
        $serverName = "tcp:ahsqlserver.database.windows.net,1433";
        $connectionOptions = array(
            "Database" => "ahSqlDatabase",
            "UID" => "admin1",
            "PWD" => "password1%"
        );
        $conn = sqlsrv_connect($serverName, $connectionOptions);
?>
- markdown
    - parse
        - ```glow {file_name}```

- sql
|action|MySQL|PostgreSQL|
|----|----|----|
|show version|```mysql -?```|```psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W```|
|show options help|```mysql -?```|```psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W```|
|connect(with password)|```mysql -u{user_name} -h{host_name} -p```|```psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W```|
|disconnect|```quit```|```\q```|
|database list|```show databases;```|```a```|

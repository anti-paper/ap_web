- vim
    - blank buffer
        - ```:enew```
    - save as
        - ```:w {file_name}```
    - reload current buffer(force)
        - ```:e(!)```
- markdown
    - parse
        - ```mdcat {file_name}```

- sql

|action|MySQL|PostgreSQL|
|----|----|----|
|install to ubuntu|sudo apt update && sudo apt install -y mysql-server-{version}|sudo apt install -y psql|
|show version|mysql --version|psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W|
|boot|sudo service mysql start|psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W|
|show options help|mysql -?|psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W|
|connect(with password)|mysql -u{user_name} -h{host_name} -p|psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W|
|disconnect|quit|\q|
|database list|show databases;|a|

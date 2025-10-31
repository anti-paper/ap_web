- bash(ubuntu)
    - update
        - ```sudo apt update```
    - upgrade(force)
        - ```sudo apt -y upgrade```
    - install(force)
        - ```sudo apt -y install {application_name}```
    - show installed
        - ```apt list --installed```
    - uninstall(with environment without dependencies)
        - ```sudo apt purge {application_name}```
    - uninstall unnecessary
        - ```sudo apt autoremove```
    - show services status
        - ```service --status-all```
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
|install to ubuntu|mysql-server-{version}|postgresql|
|show version|mysql --version|psql --version|
|boot|sudo service mysql start|sudo service psql start|
|show options help|mysql -?|psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W|
|connect(with password)|mysql -u{user_name} -h{host_name} -p|psql -h {host_name} -p {port_number} -U {role_name} -d {database_name} -W|
|disconnect|quit|\q|
|database list|show databases;|a|

↓あとで清書
mysql
pager on
\P -SF
pager off
\P

psql
init login
su - postgres && psql

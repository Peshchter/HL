● mariadb.service - MariaDB 10.3.22 database server
     Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)
     Active: active (running) since Tue 2020-05-26 10:27:11 UTC; 31min ago
       Docs: man:mysqld(8)
             https://mariadb.com/kb/en/library/systemd/
    Process: 14468 ExecStartPre=/usr/bin/install -m 755 -o mysql -g root -d /var/run/mysqld (code=exited, status=0/SUCCESS)
    Process: 14483 ExecStartPre=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)
    Process: 14485 ExecStartPre=/bin/sh -c [ ! -e /usr/bin/galera_recovery ] && VAR= ||   VAR=`/usr/bin/galera_recovery`; [ $? -eq 0 ]   && systemctl set-environment _WSREP_START_POSITION=$VAR || exit 1 (code=exited, status=0/SUCCESS)
    Process: 14577 ExecStartPost=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)
    Process: 14579 ExecStartPost=/etc/mysql/debian-start (code=exited, status=0/SUCCESS)
   Main PID: 14545 (mysqld)
     Status: "Taking your SQL requests now..."
      Tasks: 33 (limit: 2283)
     Memory: 63.5M
     CGroup: /system.slice/mariadb.service
             └─14545 /usr/sbin/mysqld

мая 26 10:27:11 webtest mysqld[14545]: 2020-05-26 10:27:11 0 [Note] /usr/sbin/mysqld (mysqld 10.3.22-MariaDB-1ubuntu1-log) starting as process 14545 ...
мая 26 10:27:11 webtest systemd[1]: Started MariaDB 10.3.22 database server.
мая 26 10:27:11 webtest /etc/mysql/debian-start[14581]: Upgrading MySQL tables if necessary.
мая 26 10:27:11 webtest /etc/mysql/debian-start[14584]: Looking for 'mysql' as: /usr/bin/mysql
мая 26 10:27:11 webtest /etc/mysql/debian-start[14584]: Looking for 'mysqlcheck' as: /usr/bin/mysqlcheck
мая 26 10:27:11 webtest /etc/mysql/debian-start[14584]: Version check failed. Got the following error when calling the 'mysql' command line client
мая 26 10:27:11 webtest /etc/mysql/debian-start[14584]: ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: NO)
мая 26 10:27:11 webtest /etc/mysql/debian-start[14584]: FATAL ERROR: Upgrade failed
мая 26 10:27:11 webtest /etc/mysql/debian-start[14594]: Checking for insecure root accounts.
мая 26 10:27:11 webtest debian-start[14597]: ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: NO)

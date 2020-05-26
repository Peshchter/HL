● mariadb.service - MariaDB 10.3.22 database server
     Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)
     Active: active (running) since Tue 2020-05-26 10:30:52 UTC; 30min ago
       Docs: man:mysqld(8)
             https://mariadb.com/kb/en/library/systemd/
    Process: 1594 ExecStartPre=/usr/bin/install -m 755 -o mysql -g root -d /var/run/mysqld (code=exited, status=0/SUCCESS)
    Process: 1606 ExecStartPre=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)
    Process: 1608 ExecStartPre=/bin/sh -c [ ! -e /usr/bin/galera_recovery ] && VAR= ||   VAR=`/usr/bin/galera_recovery`; [ $? -eq 0 ]   && systemctl set-environment _WSREP_START_POSITION=$VAR || exit 1 (code=exited, status=0/SUCCESS)
    Process: 1705 ExecStartPost=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)
    Process: 1707 ExecStartPost=/etc/mysql/debian-start (code=exited, status=0/SUCCESS)
   Main PID: 1673 (mysqld)
     Status: "Taking your SQL requests now..."
      Tasks: 36 (limit: 2283)
     Memory: 67.7M
     CGroup: /system.slice/mariadb.service
             └─1673 /usr/sbin/mysqld

мая 26 10:30:52 webtest2 mysqld[1673]: 2020-05-26 10:30:52 0 [Note] /usr/sbin/mysqld (mysqld 10.3.22-MariaDB-1ubuntu1-log) starting as process 1673 ...
мая 26 10:30:52 webtest2 /etc/mysql/debian-start[1709]: Upgrading MySQL tables if necessary.
мая 26 10:30:52 webtest2 systemd[1]: Started MariaDB 10.3.22 database server.
мая 26 10:30:52 webtest2 /etc/mysql/debian-start[1712]: Looking for 'mysql' as: /usr/bin/mysql
мая 26 10:30:52 webtest2 /etc/mysql/debian-start[1712]: Looking for 'mysqlcheck' as: /usr/bin/mysqlcheck
мая 26 10:30:52 webtest2 /etc/mysql/debian-start[1712]: Version check failed. Got the following error when calling the 'mysql' command line client
мая 26 10:30:52 webtest2 /etc/mysql/debian-start[1712]: ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: NO)
мая 26 10:30:52 webtest2 /etc/mysql/debian-start[1712]: FATAL ERROR: Upgrade failed
мая 26 10:30:52 webtest2 /etc/mysql/debian-start[1722]: Checking for insecure root accounts.
мая 26 10:30:52 webtest2 debian-start[1725]: ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: NO)

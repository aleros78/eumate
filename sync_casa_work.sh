#! /usr/bin/bash

mysqldump -u root --password=root --host=localhost -C eumate | ssh root@bestiahome.no-ip.org "mysql -u root --password=root eumate"

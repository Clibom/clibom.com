#!/bin/sh

HOST=ftp.cluster029.hosting.ovh.net
LOGIN=clibomd
PASSWORD=UnMVBbepwhzn1y4rpvsa
PORT=21

ftp -i -n $HOST $PORT << END_SCRIPT
quote USER $LOGIN
quote PASS $PASSWORD
cd www
prompt off
mdelete *
mdelete assets/*
mdelete assets/js/*
mdelete assets/sass/*
mdelete assets/webfonts/*
mdelete assets/css/*
mdelete assets/css/images/*
mdelete images/*
prompt on
quit
END_SCRIPT

#lftp -i -n $HOST $PORT << END_SCRIPT
#quote USER $LOGIN
#quote PASS $PASSWORD
#cd www
#prompt off
#mput src/*
#prompt on
#quit
#END_SCRIPT
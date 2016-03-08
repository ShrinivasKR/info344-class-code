build go application for your system
go build ./gowebserver.go

start background go procss
nohup ./gowebserver &

list background processes started on terminal sesssion
ps

list all background processes on system
ps -e 

searches using grep for your query
ps -e | grep gowebserver

can load entire wikipedia entries using swap file on web server
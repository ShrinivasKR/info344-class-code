Start with max number of cores
pm2 start server.js -i 0

restart nginx
sudo service nginx restart

tests syntax without executing, so you don't crash the server
sudo nginx -t

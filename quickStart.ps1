docker build -t website .
docker run -d -p 80:80 website
Start-Process "http://localhost:80"
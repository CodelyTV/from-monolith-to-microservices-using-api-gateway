curl -iXPOST -F'username=dani' -F'pwd=supu' http://localhost:8081/login

curl -iH'Cookie: PHPSESSID=45d6410c3cb928a888d545c8afe9fd78; path=/' "http://localhost:8081/paths?course_id=66748"
curl -iH'Cookie: PHPSESSID=45d6410c3cb928a888d545c8afe9fd78; path=/' http://localhost:8081/courses
curl -iH'Cookie: PHPSESSID=d730147394028567d5cd1fb22c588a28; path=/' http://localhost:8081/paths
curl -iH'Cookie: PHPSESSID=45d6410c3cb928a888d545c8afe9fd78; path=/' http://localhost:8081/authors
curl -iH'Cookie: PHPSESSID=45d6410c3cb928a888d545c8afe9fd78; path=/' http://localhost:8081/logout



curl -iH'Cookie: PHPSESSID=d730147394028567d5cd1fb22c588a28; path=/' http://192.168.99.100:8080/courses
curl -iH'Cookie: PHPSESSID=d730147394028567d5cd1fb22c588a28; path=/' http://192.168.99.100:8080/paths
curl -iH'Cookie: PHPSESSID=d730147394028567d5cd1fb22c588a28; path=/' http://192.168.99.100:8080/authors
curl -iH'Cookie: PHPSESSID=d730147394028567d5cd1fb22c588a28; path=/' http://192.168.99.100:8080/logout

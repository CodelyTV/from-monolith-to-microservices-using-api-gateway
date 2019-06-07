# De monolito a microservicios con API Gateway

### Available endpoints:
* `POST /login`: HTTP login. Valid combinations [here](utils.php). 

* `GET /authors`: All existing courses authors
* `GET /courses`: All courses
* `GET /paths?course_id=1234`: All course paths

### How to develop in local
php -S localhost:8081 index.php

#!/usr/bin/env bash

curl -iXPOST -F'username=dani' -F'pwd=supu' http://127.0.0.1:8081/login

curl -iH'Cookie: PHPSESSID=cc46b992e369d8e4df50e120aeee1eab; path=/' "http://127.0.0.1:8081/courses?course_id=77070"
curl -iH'Cookie: PHPSESSID=cc46b992e369d8e4df50e120aeee1eab; path=/' http://127.0.0.1:8081/logout

#!/usr/bin/env bash
# The login endpoint now points to our first microservice
# KrakenD signs this token.
# The backend doesn't need to check the signature of the token,
# but it has available the HTTP_AUTHORIZATION in the server.

# Login and capture of the JWT token:
echo "Logging in..."
TOKEN=$(curl -s -XPOST -F'username=dani' -F'pwd=supu' http://127.0.0.1:8080/login | jq -r '.access_token' )

# Inject the token in the following responses:
echo "Retrieving course 77070"
curl -iH"Authorization: bearer $TOKEN" "http://127.0.0.1:8080/courses?course_id=77070"

echo "Retrieving paths"
curl -iH"Authorization: bearer $TOKEN" "http://127.0.0.1:8080/paths"

echo "Retrieving paths"
curl -iH"Authorization: bearer $TOKEN" "http://127.0.0.1:8080/authors"

# Bye!
echo "Logging out"

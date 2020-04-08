#!/usr/bin/env bash
# The login endpoint has been modified in the monolith to return an access token instead.
# KrakenD signs this token.

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

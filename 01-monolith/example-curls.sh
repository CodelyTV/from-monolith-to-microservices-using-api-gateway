#!/usr/bin/env bash

# Login and capture of cookie value from the `Set-Cookie`header:
echo "Logging in..."
COOKIE=$(curl -s -iXPOST -F'username=dani' -F'pwd=supu' http://127.0.0.1:8081/login | grep Set-Cookie | cut -d' ' -f2-)

# Inject the cookie in the following responses:
echo "Retrieving protected endpoint"
curl -iH"Cookie: $COOKIE" "http://127.0.0.1:8081/courses?course_id=77070"

# Bye!
echo "Logging out"
curl -iH"Cookie: $COOKIE" http://127.0.0.1:8081/logout

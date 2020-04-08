#!/usr/bin/env bash
# Notice how all the traffic is now through KrakenD (8080) instead of the backend (8081)

# Login and capture of cookie value from the `Set-Cookie`header:
echo "Logging in..."
COOKIE=$(curl -s -iXPOST -F'username=dani' -F'pwd=supu' http://127.0.0.1:8080/login | grep Set-Cookie | cut -d' ' -f2-)

# Inject the cookie in the following responses:
echo "Retrieving protected endpoint"
curl -iH"Cookie: $COOKIE" "http://127.0.0.1:8080/courses?course_id=77070"

# Bye!
echo "Logging out"
curl -iH"Cookie: $COOKIE" http://127.0.0.1:8080/logout

curl -iH"Cookie: $(printf $COOKIE)" "http://127.0.0.1:8080/courses?course_id=77070"
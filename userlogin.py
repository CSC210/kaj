import cgi
import datetime

# to facilitate debugging
import cgitb
cgitb.enable()

form = cgi.FieldStorage()

print "Content-type: text/html"
# don't forget the extra newline!
print

print "<html>"
print "<head><title>My Account</title></head>"
print "<body>"
print "<h1>You have logged in!</h1>"
print "<h2>Your username is: " + form['username'].value + "</h2>"
print "<h2>The time is: " + str(datetime.datetime.now()) + "</h2>"
print "</body>"
print "</html>"

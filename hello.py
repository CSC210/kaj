#!/usr/bin/python

# Philip Guo - CSC 210
# put in public_html/cgi-bin/ and set the proper execute permissions

import cgi
import datetime

# to facilitate debugging
import cgitb
cgitb.enable()

form = cgi.FieldStorage()

name = form['my_name'].value

# a - append
f = open('data.txt', 'a')
f.write(name + ' hi');

f.close();

print "Content-type: text/html"
# don't forget the extra newline!
print

print "<html>"
print "<head><title>My webpage</title></head>"
print "<body>"
print "<h1>Hello world!!!!!!!!</h1>"
print "<h2>The time is: " + str(datetime.datetime.now()) + "</h2>"
print "<h2>Your name is: " + form['my_name'].value + "</h2>"
print "<h2>Your age is: " + form['my_age'].value + "</h2>"
print "<pre>"

	print "hi hi hi"
print "</pre>" # pre formatted: print onto html like how it prints onto temrinal
print "</body>"
print "</html>"


# print '''
# <html>
# </html>
# 
# '''

# post - put data in server. get - get from server via url append. but limited length. 

# POST URL = cgi-bin/hello.py (plus my_name, my_age). my_name, my_age not stored after they are displayed.
# simplest way to store

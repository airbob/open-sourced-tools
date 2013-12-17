#!/usr/bin/python

import os
import urllib
import MySQLdb
import re


db = MySQLdb.connect(host="localhost", user="username", passwd="password", db="dbname")
cursor = db.cursor()

INPUTFILEPATH = "./1gram"
totalfiles = len(os.listdir(INPUTFILEPATH))
index = 0

for file in os.listdir(INPUTFILEPATH):
    index += 1
    print "processing %s out of %s files " % (index, totalfiles)
    inputfilename = INPUTFILEPATH + "/" + file 
    open_file = open(inputfilename, 'r')
    contents = open_file.readlines()
    totalLines = len(contents)
    index2 = 0 
    for i in range(totalLines):
        index2 +=1
        print "processing %s out of %s lines " % (index2, totalLines)
        lineString = contents[i]
        lineString = lineString.rstrip('\n')
        values = lineString.split('\t')
        if ( len(re.findall(r'[0123456789_\'\.]',values[0])) > 0 ):  # in my case, I ignored all lines contains these chars, please remove these 2 lines if you do not need
            continue 
        message = """INSERT INTO %s(word,year,count,volume)VALUES('%s','%s','%s','%s')"""% ('1gram', values[0],values[1],values[2],values[3]) 
        cursor.execute(message)
        db.commit()

cursor.close()
db.close() 

   

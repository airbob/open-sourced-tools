#!/usr/bin/python

import os
import urllib



inputfilepath = "./sourceURL"
for file in os.listdir(inputfilepath):
    DOWNLOADS_DIR = './'+ file[:-4]
    os.system('mkdir '+file[:-4])
    
    inputfilename = inputfilepath + "/" + file
    open_file = open(inputfilename, 'r')
    contents = open_file.readlines()
    # For every line in the file
    total = len(contents)
    for i in range(len(contents)):
        print 'processing %s  out of %s files in %s \n' % (i,total, file)
        url = contents[i]
        name = url.rsplit('/', 1)[-1]
        name = name.rstrip('\n')
        print 'downloading '+name
        filename = os.path.join(DOWNLOADS_DIR, name)
    
        # Download the file if it does not exist
        if not os.path.isfile(filename):
            urllib.urlretrieve(url, filename)
            os.system('gunzip '+filename)
    

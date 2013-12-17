a preliminary word2vec result visulization 
=======

this repo is a basic [word2vec](https://code.google.com/p/word2vec/) result visuliztion. <br>
For instance, after you compiled word2vec and try out some words, you might have something like: <br>
![](images/source.png) <br>

I use the word interested as a center of all other related words, the distance presents the distance between them, in this demo it just shows 20 closest words(take china as example).
Result Screenshot:  <br>
![](images/word2vec_basic_visual.png) <br>

### critical files in this tool 

- index.html<br> 
	home page display
	
- D3.js <br>
	front end visulization javascript library
	
- data/china.csv<br>
	currently it is a local dataset obtained from word2vec


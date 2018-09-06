var xhrObj = new XMLHttpRequest();
xhrObj.open('GET', '/prod/rescue/news/index.html', false);
xhrObj.send('');
document.write(xhrObj.responseText);
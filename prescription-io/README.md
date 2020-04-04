Prescription pdf template generator module.
It starts a node.js server that accepts POST requests and generates a pdf. 
The pdf is then sent to the client as response.

To install the npm modules:
$ npm install

To start the server:
$ node index.js

Sample request JSON format is included in the request.json file. Run this command to send a POST request:
$ curl -H "Content-Type: application/json" --data @request.json http://localhost:3000/generateReport > prescription.pdf





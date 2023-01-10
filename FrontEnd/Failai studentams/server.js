const http = require('node:http');
const https = require('node:https');
const fsPromises = require('node:fs/promises');
function getPosts() {
    return new Promise(function(resolve, reject) {
        https.get('https://jsonplaceholder.typicode.com/posts', (res) => {
            const {
                statusCode
            } = res;
            const contentType = res.headers['content-type'];
            let error;
            // Any 2xx status code signals a successful response but
            // here we're only checking for 200.
            if (statusCode !== 200) {
                error = new Error('Request Failed.\n' +
                    `Status Code: ${statusCode}`);
            } else if (!/^application\/json/.test(contentType)) {
                error = new Error('Invalid content-type.\n' +
                    `Expected application/json but received ${contentType}`);
            }
            if (error) {
                reject(e)
                console.error(error.message);
                // Consume response data to free up memory
                res.resume();
                return;
            }
            res.setEncoding('utf8');
            let rawData = '';
            res.on('data', (chunk) => {
                rawData += chunk;
            });
            res.on('end', () => {
                try {
                    const parsedData = JSON.parse(rawData);
                    console.log(parsedData);
                    resolve(parsedData);
                } catch (e) {
                    reject(e)
                    console.error(e.message);
                }
            });
        }).on('error', (e) => {
            reject(e)
            console.error(`Got error: ${e.message}`);
        });
    });
}
const server = http.createServer(async (request,response) =>{
    // console.log(request.url);
    if (request.url == '/text') {
        let data = await fsPromises.readFile('./sample.txt', "utf8");
        response.writeHead(200, {
            'Content-Type': 'text/plain',
        });
        response.write(data);
    } else if (request.url == "/user" || request.url == "/users") {
        let data = await fsPromises.readFile('.' + request.url + '.json');
        response.writeHead(200, {
            'Content-Type': 'application/json',
        });
        response.write(data);
    } else if (request.url == "/posts") {
        let data = await getPosts();
        data = JSON.stringify(data);
        response.writeHead(200, {
            'Content-Type': 'application/json',
        });
        response.write(data);
    } else if (request.url == "/script.js") {
        let data = await fsPromises.readFile('./script.js');
        response.writeHead(200, {
            'Content-Type': 'text/javascript',
        });
        response.write(data);
    } else {
        const data = await fsPromises.readFile('./index.html');
        response.writeHead(200, {
            'Content-Type': 'text/html'
        });
        response.write(data);
    }
    response.end();
});
console.log('Server started at port 80');
server.listen(80);
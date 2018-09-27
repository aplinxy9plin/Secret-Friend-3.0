let express = require('express'),
    mysql = require('mysql'),
    navi_data = require('./config.json');
var app = express();

global.email = navi_data.email;
global.password = navi_data.password;
global.token = navi_data.token;

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "secret_friend"
});

con.connect(function(err) {
  con.query("SELECT * FROM users", (err, result, fields) => {
    console.log('Connect to database is successful');
  });
});

app.post('/reg', (req, res) => {
  var login = req.query.login,
      password = req.query.password,
      sex = req.query.sex,
      age = req.query.age,
      country = req.query.country,
      city = req.query.city,
      link = req.query.link,
      token = req.query.token;
  con.query("SELECT * FROM users", (err, result, fields) => {
    for (var i = 0; i < result.length; i++) {
      if(result[i].login == login){
        res.send(`{
          "type" : "reg",
          "status" : "bad_login"
        }`)
      }else{
        if(link == ''){
          var sql = "INSERT INTO `users`(`login`, `password`, `sex`, `age`, `country`, `city`, `token`) VALUES ('"+login+"', '"+password+"', '"+sex+"', "+age+", '"+country+"', '"+city+"', '"+token+"');"
        }else{
          var sql = "INSERT INTO `users`(`login`, `password`, `sex`, `age`, `country`, `city`, `link`, `token`) VALUES ('"+login+"', '"+password+"', '"+sex+"', "+age+", '"+country+"', '"+city+"', '"+link+"', '"+token+"');"
        }
        con.query(sql, () => {
          res.send(`{
            "type" : "reg",
            "status" : "ok"
          }`)
        });
      }
    }
  })
})

app.post('/login', (req, res) => {
  var login = req.query.login,
      password = req.query.password,
      token = req.query.token;
  con.query("SELECT * FROM users", (err, result, fields) => {
    var auth = false
    if(login == ''){
      for (var i = 0; i < result.length; i++) {
        if(token == result[0].token){
          auth = true
          break
        }
      }
    }else{
      for (var i = 0; i < result.length; i++) {
        if(login == result[0].login && token == result[0].token){
          auth = true
          break
        }
      }
    }
    if(auth){
      res.send(`{
        "type" : "auth",
        "status" : "ok"
      }`)
    }else{
      res.send(`{
        "type" : "auth",
        "status" : "error"
      }`)
    }
  })
})

app.post('/create_address', (req, res) => {

})

app.post('/get_token', (req, res) => {
  res.send(`{
    "token" : "7489ad20-28dd-4d8c-a707-97d089d07d1f"
  }
`)
})

function getToken(callback) {
    'use strict';

    const httpTransport = require('https');
    const responseEncoding = 'utf8';
    const httpOptions = {
        hostname: 'staging-api.naviaddress.com',
        port: '443',
        path: '/api/v1.5/Sessions',
        method: 'POST',
        headers: {"Content-Type":"application/json; charset=utf-8"}
    };
    httpOptions.headers['User-Agent'] = 'node ' + process.version;
    const request = httpTransport.request(httpOptions, (res) => {
        let responseBufs = [];
        let responseStr = '';

        res.on('data', (chunk) => {
            if (Buffer.isBuffer(chunk)) {
                responseBufs.push(chunk);
            }
            else {
                responseStr = responseStr + chunk;
            }
        }).on('end', () => {
            responseStr = responseBufs.length > 0 ?
                Buffer.concat(responseBufs).toString(responseEncoding) : responseStr;

            callback(null, res.statusCode, res.headers, responseStr);
        });

    })
    .setTimeout(0)
    .on('error', (error) => {
        callback(error);
    });
    request.write("{\"Email\":\""+global.email+"\",\"password\":\""+global.password+"\"}")
    request.end();
}

function create_address(callback) {
    var http = require("https");

    var options = {
      "method": "POST",
      "hostname": "staging-api.naviaddress.com",
      "port": null,
      "path": "/api/v1.5/addresses",
      "headers": {
        "content-type": "application/json",
        "auth-token": "7489ad20-28dd-4d8c-a707-97d089d07d1f",
        "content-length": "100"
      }
    };

    var req = http.request(options, function (res) {
      var chunks = [];

      res.on("data", function (chunk) {
        chunks.push(chunk);
      });

      res.on("end", function () {
        var body = Buffer.concat(chunks);
        console.log(body.toString());
      });
    });
    req.write("{\n\tlat: 56.4529699, \n\tlng: 84.9580723, \n\taddress_type: \"free\", \n\tdefault_lang: \"ru\"\n}");
    req.end();
}
create_address((body) => {
  console.log("BODY" + body);
})
// Так получаем токен
// getToken(((error, statusCode, headers, body) => {
//     console.log('ERROR:', error);
//     console.log('STATUS:', statusCode);
//     console.log('HEADERS:', JSON.stringify(headers));
//     console.log('BODY:', body);
// }))



app.listen('1338', () => {
  console.log('Server listening on port 1338');
})

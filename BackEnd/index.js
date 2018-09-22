let express = require('express'),
    mysql = require('mysql');
var app = express();

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
      token = req.query.token;
  con.query("SELECT * FROM users", (err, result, fields) => {
    for (var i = 0; i < result.length; i++) {
      if(result[i].login == login){
        res.send(`{
          "type" : "reg",
          "status" : "bad_login"
        }`)
      }else{
        var sql = "INSERT INTO `users`(`login`, `password`, `sex`, `age`, `country`, `city`, `token`) VALUES ('"+login+"', '"+password+"', '"+sex+"', "+age+", '"+country+"', '"+city+"', '"+token+"');"
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

app.listen('1338', () => {
  console.log('Server listening on port 1338');
})

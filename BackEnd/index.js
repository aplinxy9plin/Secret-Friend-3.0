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
      city = req.query.city;
  con.query("SELECT * FROM users", (err, result, fields) => {
    for (var i = 0; i < result.length; i++) {
      if(result[i].login == login){
        res.send('Bad_login')
      }else{
        var sql = "INSERT INTO `users`(`login`, `password`, `sex`, `age`, `country`, `city`) VALUES ('"+login+"', '"+password+"', '"+sex+"', "+age+", '"+country+"', '"+city+"');"
        con.query(sql, () => {
          res.send('good')
        });
      }
    }
  })
})

app.listen('1338', () => {
  console.log('Server listening on port 1338');
})

var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "bodybuilder"
});

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    var sql = "use project";
    con.query(sql, function (err, result) {
      if (err) throw err;
      
    });
  });
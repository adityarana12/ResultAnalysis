var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "bodybuilder",
  database: "project"
});
var db;
con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    var sql = "select * from paper";
    con.query(sql, function (err, result) {
      if (err) throw err;
      console.log(result[1].Subject );
      db=result;
      
    });
  });
  module.exports.db;
 
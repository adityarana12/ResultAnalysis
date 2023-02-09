var express = require('express')
var connection = require('../database.js')
var router = express.Router()

router.get('/', function (req, res, next) {
  connection.query('SELECT name from marks where roll_no=111604421', function (err, rows) {
    if (err) {
      req.flash('error', err)
      res.render('test', { data: '' })
    } else {
      res.render('test', { data: rows })
    }
  })
})
module.exports = router
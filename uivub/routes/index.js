var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res) {
  res.render('index', { title: 'Where Are We' });
});

router.get('/big', function(req, res) {
   res.render('big', {title: 'Big Layout'})
})

module.exports = router;

# edukasi-rest-client
#php Implementasi RESTful API-REST Client

#app ini tidak memiliki database, semua data diambil dari Restfull Api https://check-assignment.my.id/

ubah file berikut nameaplikasi->controller->config
cari sourcecode $config['base_url'] dan copypaste code dibawah ini
$config['base_url'] = 'http://localhost/edukasi-rest-client/';

ubah file berikut nameaplikasi->controller->autoload
cari sourcecode $autoload['libraries'] dan copypaste code dibawah ini
$autoload['libraries'] = array('session');

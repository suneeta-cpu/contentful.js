// contentful.php 3.0

$client = new Contentful\Delivery\Client(
  'MxRn8RiWzhMLdK47mOfovVfcpvr_hHZazo7X5_znikE',
  'uaq1fbe2zdmo',
  'master' // Defaults to "master" if ommitted
);

$entries = $client->getEntries();

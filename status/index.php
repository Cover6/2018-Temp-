<!DOCTYPE html>
<html>
	<head>
	<title>Cover6 - Status</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/bulma.css">
		<link rel="stylesheet" type="text/css" href="../css/status.css">
		<script type="text/javascript" src="../js/nav.js"></script>
	</head>
	
	<!--- Navigation Bar --->
	
	<nav class="navbar is-info">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="../images/icon-112-28.png" width="112" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="../index.html">
        <i class="fas fa-home"></i>&nbsp;Home
      </a>
	  <a class="navbar-item is-active" href="index.php">
        <i class="fas fa-signal"></i>&nbsp;Status
      </a>
	  <a class="navbar-item" href="../purchase.html">
        <i class="fas fa-shopping-cart"></i>&nbsp;Purchase
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="#">
         More
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="../tos.html">
            <i class="fas fa-gavel"></i>&nbsp;Terms of Service
          </a>
          <a class="navbar-item" href="../faq/index.html">
            <i class="far fa-question-circle"></i>&nbsp;FAQ
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button twitterbranding" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/Cover6Community">
              <span class="icon">
                <i class="fab fa-twitter"></i>
              </span>
              <span>
                Tweet
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button discordbranding" href="https://discord.gg/tGhA8pC">
              <span class="icon">
                <i class="fab fa-discord"></i>
              </span>
              <span>Discord</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>
	
	<!--- Navigation Bar --->

	<!--- Table --->
	<!--- 2.38 --->
	<div class="columns">
  <div class="column is-half centered">
  <section class="hero is-link tablehero">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
         RoRNet 2.38
      </h1>
      <h2 class="subtitle">
        Rigs of Rods version 0.4.7.0.
      </h2>
    </div>
  </div>
</section>
    <div class="table__wrapper">
<table class="table table is-bordered table is-hoverable rortable">
  <thead class="theadc">
    <tr>
      <th title="Slots"><i class="fas fa-users"></i>&nbsp;Slots</th>
      <th title="IP"><i class="fas fa-sitemap"></i>&nbsp;IP</th>
      <th title="Hostname"><i class="far fa-user"></i>&nbsp;Hostname</th>
      <th title="Status"><i class="fas fa-signal"></i>&nbsp;Status</th>
      <th title="Port"><i class="fas fa-info"></i>&nbsp;Port</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>8</th>
      <td>ror.cover6.net</td>
      <td>Cover6 Multi-Terrain</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12001';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12001</td>
    </tr>
<tr>
      <th>8</th>
      <td>ror.cover6.net</td>
      <td>Cover6 NeoQueretaro</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12002';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12002</td>
    </tr>
    <tr>
      <th>8</th>
      <td>ror.cover6.net</td>
      <td>Cover6 Events</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12003';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12003</td>
    </tr>
  </tbody>
</table>
</div>
  </div>
</div>
	<!--- 2.38 --->
	<!--- 2.37 --->
	<div class="columns">
  <div class="column is-half centered">
  <section class="hero is-primary tablehero">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
         RoRNet 2.37
      </h1>
      <h2 class="subtitle">
        Rigs of Rods version 0.38 - 0.4.6.0.
      </h2>
    </div>
  </div>
</section>
    <div class="table__wrapper">
<table class="table table is-bordered table is-hoverable rortable">
  <thead class="theadc">
    <tr>
      <th title="Slots"><i class="fas fa-users"></i>&nbsp;Slots</th>
      <th title="IP"><i class="fas fa-sitemap"></i>&nbsp;IP</th>
      <th title="Hostname"><i class="far fa-user"></i>&nbsp;Hostname</th>
      <th title="Status"><i class="fas fa-signal"></i>&nbsp;Status</th>
      <th title="Port"><i class="fas fa-info"></i>&nbsp;Port</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>10</th>
      <td>ror.cover6.net</td>
      <td>Cover6 Multi-Terrain</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12017';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12017</td>
    </tr>
<tr>
      <th>10</th>
      <td>ror.cover6.net</td>
      <td>Cover6 Multi-Terrain</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12018';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12018</td>
    </tr>
<tr>
      <th>-</th>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>
  </div>
</div>
	<!--- 2.37 --->
	<!--- Others --->
		<div class="columns">
  <div class="column is-half centered">
  <section class="hero is-danger tablehero">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
         Others
      </h1>
      <h2 class="subtitle">
        Rigs of Rods version 0.38 - 0.4.7.0.
      </h2>
    </div>
  </div>
</section>
    <div class="table__wrapper">
<table class="table table is-bordered table is-hoverable rortable">
  <thead class="theadc">
    <tr>
      <th title="Slots"><i class="fas fa-users"></i>&nbsp;Slots</th>
      <th title="Protocol"><i class="fas fa-sitemap"></i>&nbsp;Protocol</th>
      <th title="Hostname"><i class="far fa-user"></i>&nbsp;Hostname</th>
      <th title="Status"><i class="fas fa-signal"></i>&nbsp;Status</th>
      <th title="Port"><i class="fas fa-info"></i>&nbsp;Port</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>-</th>
      <td>2.38</td>
      <td>JDPS</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12005';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12005</td>
    </tr>
<tr>
      <th>-</th>
      <td>2.38</td>
      <td>Andy</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12009';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12009</td>
    </tr>
<tr>
      <th>-</th>
      <td>2.37</td>
      <td>EJCS</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12013';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12020</td>
    </tr>
	<tr>
      <th>-</th>
      <td>2.37</td>
      <td>SCPS</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12004';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12004</td>
    </tr>
	<tr>
      <th>-</th>
      <td>2.38</td>
      <td>DSS Server</td>
      <td><?php $debug = true;
                                 $offline = 'Offline';
								 $online = 'Online';
								 $site = 'ror.cover6.net';
                                 $port = '12007';
                                 $check = fsockopen( $site, $port, $errno, $errstr, 6 );
                                         if ( ! $check ) {
                                           if($debug){
                                           } 
                                   echo '<div class="offline">', $offline, '</div>';     
                                       } 
                                      else { 
                                  echo '<div class="online">', $online, '</div>';
                                                        }
                                    ?></td>
      <td>12007</td>
    </tr>
  </tbody>
</table>
</div>
  </div>
</div>
	<!--- Others --->
	<!--- Table --->
	<br>
	</body>
	</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>No connection to the internet</title>
    <style>
      html,body { margin:0; padding:0; }
      html {
        background: #ff2222 -webkit-linear-gradient(top, #000 0%, #ff2222 100%) no-repeat;
        background: #ff2222 linear-gradient(to bottom, #000 0%, #ff2222 100%) no-repeat;
      }
      body {
        font-family: sans-serif;
        color: #FFF;
        text-align: center;
        font-size: 150%;
      }
      h1, h2 { font-weight: normal; }
      h1 { margin: 0 auto; padding: 0.15em; font-size: 10em; text-shadow: 0 2px 2px #000; }
      h2 { margin-bottom: 2em; }
      .reload {
		font-family: Lucida Sans Unicode;
		font-size: 150%;
	  }
    </style>
  </head>
  <body>
    <h1>⚠</h1>
    <h2>No connection to the internet</h2>
    <p>This Display has a connection to your network but no connection to the internet.</p>
    <p class="desc">The connection to the outside world is needed for updates and keeping the time.</p>
    <a href="javascript:window.location.href=window.location.href" style="text-decoration: none; color: #fff; font-size: 100%;"><span class='reload'>&#x21bb;</span></a>
  </body>
</html>
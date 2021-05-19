<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PSA-IMS | Welcome</title>
  <!-- Compressed CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

  <!-- Compressed JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
  <style type="text/css">

    .holy-grail-grid {
      display: -ms-grid;
      display: grid;
      -ms-grid-columns: 1fr 6fr 0fr;
      grid-template-columns: 1fr 6fr 0fr;
      -ms-grid-rows: 1fr 8fr 1fr;
      grid-template-rows: 1fr 8fr 1fr;
      grid-gap: 20px;
      height: 100vh;
    }

    @media screen and (max-width: 60em) {
      .holy-grail-grid {
        -ms-grid-rows: 2fr 1fr 5fr 1fr;
        grid-template-rows: 2fr 1fr 5fr 1fr;
      }
    }

    .holy-grail-header,
    .holy-grail-left,
    .holy-grail-middle,
    .holy-grail-right,
    .holy-grail-footer {
      padding: 1rem;
      border: 1px solid #ededed;
      background-color: #ededed;
    }

    .holy-grail-header {
      -ms-grid-column: 1;
      grid-column-start: 1;
      grid-column-end: 4;
      -ms-grid-row: 1;
      grid-row-start: 1;
    }

    @media screen and (max-width: 60em) {
      .holy-grail-left {
        -ms-grid-row: 2;
        grid-row-start: 2;
        -ms-grid-column: 1;
        grid-column-start: 1;
        grid-column-end: 4;
      }
    }

    @media screen and (max-width: 60em) {
      .holy-grail-middle {
        -ms-grid-row: 3;
        grid-row-start: 3;
        -ms-grid-column: 1;
        grid-column-start: 1;
        grid-column-end: 4;
      }
    }

    @media screen and (max-width: 60em) {
      .right-nav {
        -ms-grid-row: 4;
        grid-row-start: 4;
        -ms-grid-column: 1;
        grid-column-start: 1;
        grid-column-end: 4;
      }
    }

    .holy-grail-footer {
      -ms-grid-column: 1;
      grid-column-start: 1;
      grid-column-end: 4;
    }


  </style>
</head>
<body>

  <div class="holy-grail-grid">
    <div class="holy-grail-header">
      <h3>Header</h3>
    </div>

    <div class="holy-grail-left">
      <h3>Nav</h3>
      <ul>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul>
    </div>

    <div class="holy-grail-middle">
      <h3>Content</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias mollitia debitis at atque temporibus ratione molestiae id eos, cupiditate numquam dolor vero totam, quisquam libero voluptas. Animi ipsa cumque, tempore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias mollitia debitis at atque temporibus ratione molestiae id eos, cupiditate numquam dolor vero totam, quisquam libero voluptas. Animi ipsa cumque, tempore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias mollitia debitis at atque temporibus ratione molestiae id eos, cupiditate numquam dolor vero totam, quisquam libero voluptas. Animi ipsa cumque, tempore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias mollitia debitis at atque temporibus ratione molestiae id eos, cupiditate numquam dolor vero totam, quisquam libero voluptas. Animi ipsa cumque, tempore.</p>
    </div>

    <!-- <div class="holy-grail-right">
      <h3>Nav</h3>
      <ul>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul>
    </div>-->

    <div class="holy-grail-footer">
      <h3>Footer</h3>
    </div>

  </div>

  <script src="assets/js/vendor.js"></script>
  <script src="assets/js/foundation.js"></script>
  <script src="assets/js/my-js.js"></script>
</body>
</html>

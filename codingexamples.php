<?php include('inc/head') ?>
  <link href="css/prism.css" rel="stylesheet" />
  <title>Henry Golding's Portfolio | Coding Examples</title>
</head>

<body>
  <header>
    <button id="sidebar-open">
      <span id="sidebar-open-out" class="iconify" data-icon="line-md:menu-fold-right" data-inline="false"></span>
    </button>
    <button id="sidebar-close">
      <span id="sidebar-open-in" class="iconify" data-icon="line-md:menu-fold-left" data-inline="false"></span>
    </button>
    <div id="sidebar-main" class="sidebar">
      <div class="initials"><a href="index.html">HG</a></div>
      <nav>
        <ul class="navlist">
          <li>
            <a href="aboutme.html">About Me</a>
          </li>
          <li>
            <a href="index.html#projects">My Portfolio</a>
          </li>
          <li>
            <a href="codingexamples.html">Coding Examples</a>
          </li>
          <li>
            <a href="scsscheme.html">SCS Scheme</a>
          </li>
          <li class="contact-link">
            <a href="index.html#contact">Contact Me</a>
          </li>
        </ul>
      </nav>
      <div class="social">
        <ul>
          <li>
            <a href="https://github.com/tr130" target="_blank"><span class="iconify" data-icon="akar-icons:github-fill"
                data-inline="false"></span></a>
          </li>
          <li>
            <a href="https://www.codewars.com/users/tr130" target="_blank"><span class="iconify" data-icon="cib:codewars"
                data-inline="false"></span></a>
          </li>
          <li>
            <a href="https://www.hackerrank.com/hgolding" target="_blank"><span class="iconify" data-icon="simple-icons:hackerrank" data-inline="false"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <section class="code">
    <h1 class="code-header">Coding Examples</h1>

    <div class="code-example">
      <h2>SQL Query showing a referee's average number of cards shown per game at Euro 2016</h2>
      <p>Based on a SQL database of match information from UEFA Euro 2016, this query returns a showing
        details of the number of cards shown by each referee, ordered by the average number of cards shown
        per game by each referee.
      </p>
      <div class="code-container">
        <h4 class="code-toggle code-toggle-upper">See the code</h4>
        <div class="code-text">
          <p>This query works on the database shown here.</p>
          <a href="images/soccer-database.png"><img src="images/soccer-database.png" alt="euro 2016 database structure"></a>
          <p>Based on the match_id information in the player bookings table, I generated totals for the number
          of cards shown by each referee. The table only indicated a difference between yellow and red cards
          by the value 'Y' shown in the 'sent_off' column, so to generate totals for the different cards I used
          cases. I generated totals for the number of games refereed by each referee by reference to the match
          master table, and used this to generate values for cards per game. I further formatted the yellow and red
          cards columns to present the data in a more readable fashion. I assigned aliases to the tables in my join
          statements to make the code less verbose.</p>

          <pre>
            <code>
SELECT r.referee_name AS "Referee", 
c.country_abbr AS "Country",
COUNT(DISTINCT(m.match_no)) AS "Matches", 
COUNT(1) AS "Cards",
ROUND(
  COUNT(1) *1.0 / 
  COUNT(DISTINCT(m.match_no)), 2) 
    AS "Cards Per Match",
COUNT(
  CASE
    WHEN p.sent_off != 'Y'
    THEN 1 ELSE NULL
    END) 
  || ' (' ||
  ROUND(
    COUNT(
      CASE
        WHEN p.sent_off != 'Y'
        THEN 1 ELSE NULL
        END) * 1.0 / 
    COUNT(DISTINCT(m.match_no)), 2) 
  || ')' 
  AS "Yellows (per match)",
COUNT(
  CASE
    WHEN p.sent_off = 'Y'
    THEN 1 ELSE NULL
    END) 
  || ' (' ||
  ROUND(
    COUNT(
      CASE
        WHEN p.sent_off = 'Y'
        THEN 1 ELSE NULL
        END) * 1.0 / 
    COUNT(DISTINCT(m.match_no)), 2) 
  || ')' 
  AS "Reds (per match)" 
FROM 
  player_booked p
  JOIN match_mast m
    ON p.match_no
    = m.match_no
  JOIN referee_mast r
    ON m.referee_id
    = r.referee_id
  JOIN soccer_country c
    ON r.country_id
    = c.country_id
GROUP BY "Referee", "Country"
ORDER BY "Cards Per Match" DESC;
            </code>
          </pre>
          <p>The query results in the following output:</p>

          <table class="table table-bordered table-hover table-condensed">
            <thead><tr><th title="Field #1">Referee</th>
            <th title="Field #2">Country</th>
            <th title="Field #3">Matches</th>
            <th title="Field #4">Cards</th>
            <th title="Field #5">Cards Per Match</th>
            <th title="Field #6">Yellows (per match)</th>
            <th title="Field #7">Reds (per match)</th>
            </tr></thead>
            <tbody><tr>
            <td>Sergei Karasev</td>
            <td>RUS</td>
            <td align="right">2</td>
            <td align="right">12</td>
            <td align="right">6</td>
            <td>12 (6.00)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Pavel Kralovec</td>
            <td>CZE</td>
            <td align="right">2</td>
            <td align="right">11</td>
            <td align="right">5.5</td>
            <td>11 (5.50)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Mark Clattenburg</td>
            <td>ENG</td>
            <td align="right">4</td>
            <td align="right">21</td>
            <td align="right">5.25</td>
            <td>21 (5.25)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Nicola Rizzoli</td>
            <td>ITA</td>
            <td align="right">4</td>
            <td align="right">20</td>
            <td align="right">5</td>
            <td>19 (4.75)</td>
            <td>1 (0.25)</td>
            </tr>
            <tr>
            <td>Ovidiu Hategan</td>
            <td>ROU</td>
            <td align="right">2</td>
            <td align="right">9</td>
            <td align="right">4.5</td>
            <td>9 (4.50)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Milorad Mazic</td>
            <td>SRB</td>
            <td align="right">3</td>
            <td align="right">13</td>
            <td align="right">4.33</td>
            <td>13 (4.33)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>William Collum</td>
            <td>SCO</td>
            <td align="right">2</td>
            <td align="right">8</td>
            <td align="right">4</td>
            <td>7 (3.50)</td>
            <td>1 (0.50)</td>
            </tr>
            <tr>
            <td>Svein Oddvar Moen</td>
            <td>NOR</td>
            <td align="right">2</td>
            <td align="right">8</td>
            <td align="right">4</td>
            <td>8 (4.00)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Viktor Kassai</td>
            <td>HUN</td>
            <td align="right">3</td>
            <td align="right">12</td>
            <td align="right">4</td>
            <td>11 (3.67)</td>
            <td>1 (0.33)</td>
            </tr>
            <tr>
            <td>Bjorn Kuipers</td>
            <td>NED</td>
            <td align="right">3</td>
            <td align="right">12</td>
            <td align="right">4</td>
            <td>12 (4.00)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Jonas Eriksson</td>
            <td>SWE</td>
            <td align="right">3</td>
            <td align="right">11</td>
            <td align="right">3.67</td>
            <td>11 (3.67)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Cuneyt Cakir</td>
            <td>TUR</td>
            <td align="right">3</td>
            <td align="right">11</td>
            <td align="right">3.67</td>
            <td>11 (3.67)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Szymon Marciniak</td>
            <td>POL</td>
            <td align="right">3</td>
            <td align="right">10</td>
            <td align="right">3.33</td>
            <td>10 (3.33)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Carlos Velasco Carballo</td>
            <td>ESP</td>
            <td align="right">3</td>
            <td align="right">10</td>
            <td align="right">3.33</td>
            <td>10 (3.33)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Felix Brych</td>
            <td>GER</td>
            <td align="right">3</td>
            <td align="right">9</td>
            <td align="right">3</td>
            <td>9 (3.00)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Clement Turpin</td>
            <td>FRA</td>
            <td align="right">1</td>
            <td align="right">3</td>
            <td align="right">3</td>
            <td>2 (2.00)</td>
            <td>1 (1.00)</td>
            </tr>
            <tr>
            <td>Martin Atkinson</td>
            <td>ENG</td>
            <td align="right">3</td>
            <td align="right">9</td>
            <td align="right">3</td>
            <td>9 (3.00)</td>
            <td>0 (0.00)</td>
            </tr>
            <tr>
            <td>Damir Skomina</td>
            <td>SLO</td>
            <td align="right">4</td>
            <td align="right">12</td>
            <td align="right">3</td>
            <td>12 (3.00)</td>
            <td>0 (0.00)</td>
            </tr>
            </tbody></table>
          <h4 class="code-toggle code-toggle-lower">Hide the code</h4>
        </div>
      </div>
    </div>

    <div class="code-example">
      <h2>Mixin for setting colours on service card based on a map of themes.</h2>
      <p>As part of my Netmatters Homepage project, I used mixins and maps throughout my SCSS files in order to 
        set the colours of various elements based on the colours in the themes. Here is an example of how I set the 
        colours for the grid of services cards. The results can be seen <a href="https://netmatters.henry-golding.netmatters-scs.co.uk/#services" target="blank">here</a>.
      </p>
    <div class="code-container">
      <h4 class="code-toggle code-toggle-upper">See the code</h4>
      <div class="code-text">
      <pre>
        <code>
//map containing hex values for page colours
$themes: (
  'webd': #926fb1,
  'it': #4183d7,
  'tele': #d64541,
  'besp': #67809f,
  'digm': #2ecc71,
  'cybs': #f62459,
  'contact': #999aa2,
  'devt': #926fb1,
  'culture': #ffffff,
  'base': #333645,
);

/* Mixin setting colour scheme.
Based on class names containing theme key mixin
sets reversible colour scheme with corresponding
colour value. The mixin is called elsewhere under
a rule:

  .services_item {
    @include switchthemes($themes)
  }

and relevant elements have class names such as
.services_item-webd .services_item-it */

@mixin switchthemes($map) {

  //loop through keys and values in map
  @each $theme,
  $color in $map {

    //select key-value pair based on class name
    &-#{$theme} {
      background-color: white;

      .fa-circle {
        color: $color;
      }

      .fa-stack-1x {
        color: white;
      }

      .btn {
        color: white;
        background-color: $color;
      }
    }

    &-#{$theme}:hover {
      background-color: $color;
      color: white;

      .fa-circle {
        color: white;
      }

      .btn,
      .services_item_rule {
        background-color: white;
        color: $color;
      }

      .fa-stack-1x {
        color: $color;
      }
    }
  }
}
        </code>
      </pre>
      <h4 class="code-toggle code-toggle-lower">Hide the code</h4>
    </div>
    </div>
    </div>

    <div class="code-example">
      <h2>Flask route handling an order submitted on ecommerce site</h2>
      <p>Written as a proof of concept with no pretensions to being a secure shopping platform, this is
        part of my <a href="https://nfi-wine-merchants.herokuapp.com" target="_blank">NFI Wine Merchants</a> Flask app. 
        It defines a route for handling the conclusion of a purchase. To see it in action, <a href="https://nfi-wine-merchants.herokuapp.com" target="_blank">
          create an account and buy some wine</a> (pretend wine).
      </p>
    <div class="code-container">
      <h4 class="code-toggle code-toggle-upper">See the code</h4>
      <div class="code-text">
      <pre>
        <code>
#route is only called when form submitted using post

@bp.route('confirmation', methods=('POST',))
def confirmation():
    error = None
    db = get_db()

    #get total and postage values from checkout form
    total = float(request.form['total'])
    postage = float(request.form['postage'])

    #get shopping cart from session cookie
    cart = session['shopping_cart']

    #initialize check total variable to check for errors
    checktotal = 0

    #check that user is logged in
    if g.user == None:
        error = 'You need to log in to complete your order'

    #check that cart is not empty
    if cart == None:
        error = "Your cart appears to be empty. Please try again. You haven't been charged."

    #calculate total of items in shopping cart
    for item in cart:
        checktotal += cart[item]['totalprice']
    checktotal += postage

    #check that total submitted through checkout form is not different to total of items in cart
    if checktotal != total:
        error = "Something went wrong. Please try again. You haven't been charged."
    
    #if any checks failed, redirect user to checkout summary page with error message
    if error is not None:
        flash(error)
        return redirect(url_for('checkout.summary'))

    #check that items in cart are still in stock. This was done before checkout view, but is repeated
    #here in case items have gone out of stock before checkout form submitted
    for item in cart:
        stock = db.execute('SELECT stocklevel FROM stock WHERE id = ?', (item,)).fetchone()
        session['shopping_cart'][item]['stocklevel'] = stock[0]

        #if any item quantity has fallen below stocklevel, stop the purchase and return to cart
        if stock[0] < cart[item]['quantity']:
            error = "We're afraid there's insufficient stock for one of your items. Please amend your cart"
            flash(error)
            return redirect(url_for('shopfront.ShowCart'))


    #the following code runs only if all previous checks have passed

    #create a new record in orders table, and immediately get the order id, then commit the changes
    db.execute('INSERT INTO orders (customer_id, totalprice) VALUES (?, ?)', (g.user['id'], total))
    order = db.execute('SELECT last_insert_rowid()').fetchone()
    db.commit()

    #update stocklevel, and create individual transaction records for each item, linked to the order
    for item in cart:
        db.execute('UPDATE stock SET stocklevel = stocklevel - ? WHERE id = ?', (cart[item]['quantity'], item))
        db.execute('INSERT INTO transactions (order_id, item_id, quantity, unitprice, totalprice) 
                  VALUES (?, ?, ?, ?, ?)', (order[0], item, cart[item]['quantity'], cart[item]['unitprice'], cart[item]['totalprice']))
    db.commit()

    #clear the session cart
    session['shopping_cart'].clear()
    session.modified = True
    cart = session['shopping_cart']

    #render the confirmation page with order number
    return render_template('checkout/confirmation.html', ordernum=order)
        </code>
      </pre>
      <h4 class="code-toggle code-toggle-lower">Hide the code</h4>
    </div>
    </div>
    </div>
    </section>
  </main>
  <script src="https://kit.fontawesome.com/6024042655.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <script src="sidebar.js"></script>
  <script src="codingexamples.js"></script>
  <script src="js/prism.js"></script>
</body>

</html>

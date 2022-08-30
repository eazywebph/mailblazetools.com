<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mailblaze Tools</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap JS Bundle (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Global CSS overrides -->
    <link rel="stylesheet" href="css/global.css">

    <!-- Icons Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    
    <!-- Bootstrap for SpamChecker -->
    <link rel="stylesheet" href="spamchecker/css/bootstrap@4.3.1.min.css">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>

    <!-- Navbar and Container Div start -->
    <nav class="navbar navbar-dark bg-dark sticky-top">
        <div class="container">
    
          <!-- Logo left + Brand -->
          <a class="navbar-brand" href="#"><i class="bi bi-tools"></i> Mailblaze Tools</a>
    
          <!-- Main ul start -->
          <ul class="nav">
            <!--
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tools
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Check Spam Words</a></li>
                <li><a class="dropdown-item" href="#">Delist Helper</a></li>
                <li><a class="dropdown-item" href="#">Bulk Email Checker</a></li>
              </ul>
            </li>

    
            <li class="nav-item">
              <button type="button" class="btn btn-primary">Sign Up</button>
            </li>

            &nbsp;&nbsp;

            <li class="nav-item">
              <button type="button" class="btn btn-secondary">Login</button>
            </li>
            -->
        </ul>
        <!-- Main ul end -->
    </div>
    </nav>
    <!-- Navbar and Container div ends -->

    <br><br><br>

    <div class="container text-center">
      <div class="row justify-content-md-center">
        <h3>
          Spam Words Checker<br>
          <small class="text-muted">Copy all the text from the top (after the header) down to the bottom (before the footer) and paste it below.</small>
        </h3>
      </div>
    </div>



</head>

  <body>

<section class="container mt-4 mb-5">
  <div class="mx-auto shadow-default border-radius-lg" style="border: 1px solid #e6e7eb">
	<div class="row" style="margin: 0 !important">
	  <div class="col-md-8">
		<div id="spam-checker--input">
		  <div class="hwt-container">
			<div class="hwt-backdrop">
				<div class="hwt-highlights hwt-content">
				</div></div>
				<textarea id="spam-checker--textarea" style="width: 100%" rows="20" class="hwt-input hwt-content" maxlength="500">

Greetings,

I am Michelle, one of the executives of Rich Field LLC.
I am writing to you for a proposal that I'm sure you'll love.

You can earn cash 100% of your ROI, all 100% guaranteed.

The best part is you don't get to do anything, just send us the money and we'll work it for you.

Win this exclusive offer and you'll get the chance of a lifetime to prosperity.


Kind regards,

Michelle
		</textarea></div>
		</div>
	  </div>
	  <aside class="col-md-4" style="background-color: #f2f3f5; border-radius: 0 0.5rem 0.5rem 0"><div id="spam-checker--aside"><table><tbody><tr><td>Overall score:</td><td><span class="text-great">Great</span></td></tr><tr><td>Words:</td><td>48</td></tr><tr><td>Read time:</td><td>a few seconds</td></tr></tbody></table><ul></ul></div></aside>
	</div>
  </div>
</section>



<style>
  #spam-checker--input {
    padding: 1rem;
    width: 100%;
  }

  #spam-checker--textarea {
    border-color: transparent;
    outline: none;
  }

  .hwt-container {
    position: relative;
  }

  .hwt-backdrop {
    position: absolute !important;
    top: 0 !important;
    right: -99px !important;
    bottom: 0 !important;
    left: 0 !important;
    padding-right: 99px !important;
    overflow-x: hidden !important;
    overflow-y: auto !important;
  }

  .hwt-highlights {
    width: auto !important;
    height: auto !important;
    border-color: transparent !important;
    white-space: pre-wrap !important;
    word-wrap: break-word !important;
    color: transparent !important;
    overflow: hidden !important;
  }

  .hwt-input {
    display: block !important;
    position: relative !important;
    margin: 0;
    padding: 0;
    border-radius: 0;
    font: inherit;
    overflow-x: hidden !important;
    overflow-y: auto !important;
  }

  .hwt-content {
    border: 1px solid;
    background: none transparent !important;
  }

  .hwt-content mark {
    padding: 0 !important;
    color: inherit;
    border-radius: 0.25rem;
  }

  .hwt-content mark.spam-category-shady {
    background-color: #f9a8d4; /* pink-300 */
  }

  .hwt-content mark.spam-category-money {
    background-color: #fcd34d; /* yellow-300 */
  }

  .hwt-content mark.spam-category-urgency {
    background-color: #f87171; /* red-400 */
  }

  .hwt-content mark.spam-category-overpromise {
    background-color: #fdba74; /* orange-300 */
  }

  .hwt-content mark.spam-category-unnatural {
    background-color: #d1d5db; /* grey-300 */
  }

  #spam-checker--aside li.spam-category-shady {
    border-radius: 3;
    border-left: 3px solid #f9a8d4; /* pink-300 */
  }

  #spam-checker--aside li.spam-category-money {
    border-radius: 3;
    border-left: 3px solid #fcd34d; /* yellow-300 */
  }

  #spam-checker--aside li.spam-category-urgency {
    border-radius: 3;
    border-left: 3px solid #f87171; /* red-400 */
  }

  #spam-checker--aside li.spam-category-overpromise {
    border-radius: 3;
    border-left: 3px solid #fdba74; /* orange-300 */
  }

  #spam-checker--aside li.spam-category-unnatural {
    border-radius: 3;
    border-left: 3px solid #d1d5db; /* grey-300 */
  }

  #spam-checker--aside {
    padding: 1rem 0.5rem;
  }

  #spam-checker--aside table {
    width: 100%;
    margin-bottom: 1rem;
  }

  #spam-checker--aside table td:first-child {
    color: #64748b;
  }

  #spam-checker--aside table td:last-child {
    text-align: right;
    font-weight: 600;
  }

  #spam-checker--aside table td:last-child .text-poor {
    color: #e11d48;
  }

  #spam-checker--aside table td:last-child .text-okay {
    color: #2563eb;
  }

  #spam-checker--aside table td:last-child .text-great {
    color: #16a34a;
  }

  #spam-checker--aside ul,
  #spam-checker--aside ol {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  #spam-checker--aside li {
    margin: 0.5rem 0;
    padding: 0.75rem;
    border-radius: 0.25rem;
    background-color: #fff;
    box-shadow: 0px 4px 24px rgba(4, 20, 58, 0.04);
  }
</style>

<script src="spamchecker/js/jquery@3.6.0.min.js"></script>
<script src="spamchecker/js/spam-checker.js"></script>





    
 

</body>
</html>
<!-- About Us Page -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
      * {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      #who_we_are p {
        margin-right: 500px;
        font-size: 24px;
      }

      #achievements .carousel-inner {
        padding: 1em;
      }
      #achievements .card {
        margin: 0 0.5em;
        border: none;
        border-right: 1px solid #999;
        border-radius: 0;
      }

      #achievements .card .card-body {
        height: 200px;
      }

      #achievements .carousel-control-prev,
      .carousel-control-next {
        background-color: #e1e1e1;
        width: 6vh;
        height: 6vh;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
      }
      @media (min-width: 768px) {
        #achievements .carousel-item {
          margin-right: 0;
          flex: 0 0 33.333333%;
          display: block;
        }
        #achievements .carousel-inner {
          display: flex;
        }
      }
      #achievements .card .img-wrapper {
        max-width: 100%;
        height: 13em;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      #achievements .card img {
        max-height: 100%;
      }

      @media (max-width: 767px) {
        #achievements .card .img-wrapper {
          height: 17em;
        }
      }

      #History .card {
        padding: 50px;
        padding-top: 40px;
        border-radius: 20px;
        width: 50rem;
        height: 55rem;
      }

      #History .btn {
        border: 1px solid white;
      }

      #page_cards img {
        width: 210px;
        height: 210px;
        margin: auto;
      }

      #page_cards .card {
        height: 485px;
        padding: 20px 5px 20px 5px;
        width: 430px;
      }

      @media (max-width: 767px) {
        #page_cards img {
          height: 150px;
          width: 150px;
          margin: auto;
        }

        #page_cards .card {
          height: 505px;
          padding: 5px 5px 5px 5px;
          width: 300px;
        }
      }

      #business_section .container {
        /* border: 1px solid green; */
        border-radius: 15px;
        width: 80rem;
        height: 25rem;
      }

      #business_section img {
        /* border: 1px solid red; */
        width: 100rem;
        height: 25rem;
        border-radius: 15px 0 0 15px;
      }

      #business_section .card_left {
        height: 25rem;
        border-radius: 0 15px 15px 0;
      }

      #business_section p {
        font-size: 18px;
        margin-bottom: 20px;
      }

      #business_section p span {
        font-weight: 700;
      }

      @media (max-width: 767px) {
        #business_section .container {
          height: 900px;
          width: 350px;
          margin: auto;
        }
        #business_section .card_left {
        height: 570px;
        width: 320px;
        border-radius: 0 15px 15px 0;
      }

      #business_section img {
        /* border: 1px solid red; */
        width: 320px;
        height: 400px;
        border-radius: 15px 0 0 15px;
      }
      }

      #news .carousel-inner {
        overflow-x: visible;
        padding-bottom: 1em;
        scrollbar-color: green #d1e7dd;
      }

      #news .card {
        margin: 0 0.5em;
        /* box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18); */
        border: none;
        height: 330px;
      }

      #news a {
        text-decoration: none;
        text-decoration-color: white;
      }

      #news a:hover {
        text-decoration: underline;
        text-decoration-color: green;
        transition: 0.4s ease;
      }

      #news .carousel-control-prev,
      .carousel-control-next {
        background-color: #e1e1e1;
        width: 6vh;
        height: 6vh;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
      }
      @media (min-width: 768px) {
        #news .carousel-item {
          margin-right: 0;
          flex: 0 0 33.333333%;
          display: block;
        }
        #news .carousel-inner {
          display: flex;
        }
      }
      #news .card .img-wrapper {
        max-width: 100%;
        height: 13em;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .card img {
        max-height: 100%;
      }

      @media (max-width: 767px) {
        .card .img-wrapper {
          height: 17em;
        }
      }

      :root {
        --royal-green: #023020;
      }

      .navbar {
        padding: 0;
        z-index: 1000;
      }

      .navbar-top {
        background-color: var(--royal-green);
        padding: 8px 0;
      }

      .navbar-top a {
        color: white;
        text-decoration: none;
        font-size: 14px;
        margin-left: 20px;
      }

      .main-navbar {
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        color: var(--royal-green);
      }

      .nav-link {
        color: var(--royal-green) !important;
        padding: 20px !important;
        font-weight: 500;
      }

      .mega-menu {
        position: absolute;
        width: 100%;
        left: 0;
        right: 0;
        padding: 30px;
        background-color: var(--royal-green);
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s ease;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
      }

      .nav-item:hover .mega-menu {
        visibility: visible;
        opacity: 1;
      }

      .mega-menu h3 {
        color: white;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      }

      .mega-menu-list {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .mega-menu-list li a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        padding: 8px 0;
        display: block;
        transition: all 0.3s ease;
      }

      .mega-menu-list li a:hover {
        color: white;
        padding-left: 5px;
      }

      .search-container {
        position: relative;
        margin-left: 20px;
      }

      .search-btn {
        background-color: var(--royal-green);
        border: none;
        color: white;
        padding: 10px 15px;
        border-radius: 4px;
        display: flex;
        align-items: center;
        gap: 5px;
      }

      .search-btn:hover {
        background-color: rgba(2, 48, 32, 0.9);
      }

      .search-btn i {
        font-size: 16px;
      }

      #banner .carousel-item {
        position: relative;
        height: 600px;
        background-size: cover;
        background-position: center;
      }

      #banner .carousel-caption {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 128, 0, 0.7);
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
      }
      .custom-footer {
        background-color: #006e2e; /* Replace with your desired color */
      }

      .navbar .medialinks {
        width: 97%;
      }

      .utility-links {
        margin-right: 10px;
      }

      .utility-links .imglink {
        margin-right: 10px;
      }

      .navbar .medialinks {
        width: 97%;
      }

      .utility-links {
        margin-right: 10px;
      }

      .utility-links .imglink {
        margin-right: 10px;
      }

      .main-navbar .navback {
        width: 98%;

        display: flex;
        justify-content: space-between;
        /* Push logo and nav items to corners */
        align-items: center;
        /* Center vertically */
      }

      .navbar-brand {
        font-size: 44px;
        font-weight: bold;
        color: var(--royal-green);
        margin-left: 20px;
      }

      .navbar-brand .trust-logo {
        height: 75px;
      }

      @media (max-width: 768px) {
        #who_we_are p {
          /* width: 400px; */
          margin-right: 0px;
        }

        #History .card {
          width: 300px;
          height: 600px;
          /* background-color: red; */
        }
      }
      
    @media screen and (max-width: 380px) and (max-height: 780px) {
      /* Styles for devices smaller than or equal to 360x740 */
      .utility-links .imglink {
        margin-right: 3px;
        /* margin-top: 10px; */
      }
    }
    :root {
       --dark-green: #023020;
       --white: #ffffff;
       --light-green: #c8e6c9;
       /* Added light green color */
   }

   .footer {
       background: var(--dark-green);
       color: var(--white);
       padding: 2rem 0 0.5rem 0;
       /* Reduced padding */
       position: relative;
       overflow: hidden;
   }

   .footer::before {
       content: '';
       position: absolute;
       top: 0;
       left: 0;
       right: 0;
       height: 3px;
       background: linear-gradient(90deg, transparent, #ffffff66, transparent);
   }

   .main-logo-section {
       text-align: center;
       margin-bottom: 1.5rem;
       /* Reduced margin */
       background-color: var(--white);
       /* Light green background for logo section */
       padding: 15px;
       /* Added padding for better spacing */
       border-radius: 8px;
       /* Optional: Rounded corners */
   }

   .main-logo {
       display: block;
       margin: 0 auto;
       max-width: 100%;
       height: auto;
       padding: 10px;
       /* Reduced padding */
       border-radius: 5px;
       background-color: transparent;
       /* Make the logo's background transparent */
   }

   .motto {
       font-size: 1rem;
       font-style: italic;
       color: #cccccc;
       margin-bottom: 1rem;
   }

   .footer-heading {
       font-size: 1rem;
       font-weight: 600;
       margin-bottom: 1rem;
       padding-bottom: 0.3rem;
       border-bottom: 2px solid #ffffff33;
   }

   .footer-link {
       color: var(--white);
       text-decoration: none;
       display: block;
       margin-bottom: 0.5rem;
       padding-left: 10px;
       position: relative;
       transition: all 0.3s;
   }

   .footer-link::before {
       content: '›';
       position: absolute;
       left: 0;
       transition: transform 0.3s;
   }

   .footer-link:hover {
       color: #e0e0e0;
       padding-left: 15px;
   }

   .footer-bottom {
       border-top: 1px solid rgba(255, 255, 255, 0.1);
       margin-top: 1.5rem;
       padding-top: 1rem;
   }

   .credentials-section {
       display: flex;
       align-items: center;
       justify-content: flex-end;
       gap: 1rem;
   }

   .badge-container {
       display: flex;
       gap: 0.8rem;
       align-items: center;
   }

   .badge-img {
       height: 30px;
       /* Reduced badge size */
       transition: transform 0.3s;
   }

   .badge-img:hover {
       transform: translateY(-3px);
   }

   .helpline {
       display: inline-flex;
       align-items: center;
       gap: 0.5rem;
       background: #dc3545;
       color: white;
       padding: 0.3rem 1rem;
       border-radius: 25px;
       font-size: 0.9rem;
       font-weight: bold;
       transition: transform 0.3s;
   }

   .helpline:hover {
       transform: translateY(-3px);
       color: white;
       text-decoration: none;
   }

   .social-icons {
       display: flex;
       gap: 0.8rem;
       justify-content: center;
       margin-top: 1rem;
   }

   .social-icon {
       color: white;
       font-size: 1.2rem;
       transition: all 0.3s;
   }

   .social-icon:hover {
       color: #e0e0e0;
       transform: translateY(-3px);
   }

   @media (max-width: 768px) {
       .credentials-section {
           flex-direction: column;
           align-items: center;
           gap: 1rem;
       }
   }

   .search-btn i {
       color: #cccccc;
       /* Light gray for visibility */
   }

    </style>
    <title>Document</title>
  </head>
  <body>
  <section class="">
      <nav class="navbar navbar-top">
        <div class="medialinks d-flex justify-content-between">
          <div class="social-links">
            <!-- Dropdown button for mobile view -->
            <!-- Button -->
            <div class="atmNav mt-6">
              <!-- Mobile Dropdown Button -->
              <button
                class="btn btn-primary w-100 d-md-none mobile-atm"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#socialLinksDropdown"
                aria-expanded="false"
                aria-controls="socialLinksDropdown"
                style="
                  outline: none;
                  box-shadow: none;
                  border: none;
                  background: none;
                "
              >
                <i class="bi bi-list fs-4"></i>
              </button>

              <!-- Collapsible Dropdown Content -->
              <div class="collapse mt-2" id="socialLinksDropdown">
                <a href="#" class="d-block py-2 border-bottom"
                  >ATM/Branch Locations</a
                >
                <a href="#" class="d-block py-2 border-bottom"
                  >Bank Note Security</a
                >
                <a href="#" class="d-block py-2 border-bottom"
                  >Complaint Cell</a
                >
                <a href="#" class="d-block py-2">Tender</a>
              </div>
            </div>

            <!-- Links for larger screens -->
            <div class="d-none d-md-block">
              <a href="#" class="d-inline-block me-3">ATM/Branch Locations</a>
              <a href="#" class="d-inline-block me-3">Bank Note Security</a>
              <a href="#" class="d-inline-block me-3">Complaint Cell</a>
              <a href="#" class="d-inline-block">Tender</a>
            </div>
          </div>

          <div class="utility-links">
            <a href="#"
              ><img src="imgs/web.png" alt="" class="imglink" /> iBanking
            </a>
            <a href="#"
              ><img src="imgs/tbl-ekyc.png" alt="" class="imglink" />ekYc</a
            >
            <a href="#"
              ><img src="imgs/tap-logo.png" alt="" class="imglink" />tap</a
            >
          </div>
        </div>
      </nav>

      <!-- Main Navbar -->
      <nav class="navbar main-navbar d-none d-lg-block">
        <div class="navback d-flex align-items-center justify-content-between">
          <a class="navbar-brand" href="/">
            <img src="tbl-logo.png" class="trust-logo" />
          </a>
          <div class="nav-items d-flex align-items-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row">
              <li class="nav-item">
                <a class="nav-link" href="#">FOR YOU</a>
                <div class="mega-menu">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3">
                        <h3>CONVENTIONAL BANKING</h3>
                        <ul class="mega-menu-list">
                          <li>
                            <a href="/DepositProducts.html">Deposit Products</a>
                          </li>
                          <li><a href="/LOAN/Loans.html">Loan</a></li>
                          <li>
                            <a href="/LOAN/defence Personel loan.html"
                              >Defence Personnel Loan</a
                            >
                          </li>
                          <li>
                            <a href="/CARD/TBL Card.html">Trust Bank Cards</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h3>ISLAMIC BANKING</h3>
                        <ul class="mega-menu-list">
                          <li>
                            <a href="/ISLAMIC BANK/about Islamic Banking.html"
                              >About</a
                            >
                          </li>
                          <li>
                            <a href="/ISLAMIC BANK/diposite.html">Deposite </a>
                          </li>
                          <li>
                            <a href="/ISLAMIC BANK/final Ratio.html"
                              >Final Ratio</a
                            >
                          </li>
                          <li>
                            <a href="/ISLAMIC BANK/investment.html"
                              >Investment</a
                            >
                          </li>
                          <li>
                            <a href="/ISLAMIC BANK/profit Sharing Ratio.html"
                              >Profit Sharing Ratio</a
                            >
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h3>NRB BANKING</h3>
                        <ul class="mega-menu-list">
                          <li><a href="/NRB_Bond.html">NRB BONDS</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h3>DIGITAL SOLUTION</h3>
                        <ul class="mega-menu-list">
                          <li>
                            <a href="/ISLAMIC BANK/Trust_Money_App.html"
                              >Trust Money App</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FOR YOUR BUSINESS</a>
                <div class="mega-menu">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3">
                        <h3>BUSINESS BANKING</h3>
                        <ul class="mega-menu-list">
                          <li>
                            <a href="/SME_Financing.html">SME Financing</a>
                          </li>
                          <li>
                            <a href="/SME_productBasedLoans.html"
                              >SME Product Based Loans</a
                            >
                          </li>
                          <li>
                            <a href="/Agriculture_loan.html"
                              >Agriculture Loan</a
                            >
                          </li>
                          <li>
                            <a href="/Trade_Financing.html">Trade Financing</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h3>CORPORATE SOLUTIONS</h3>
                        <ul class="mega-menu-list">
                          <li>
                            <a href="/AnnualGeneralMeeting.html"
                              >Annual General Meeting</a
                            >
                          </li>
                          <li>
                            <a href="/AnnualReports.html">Annual Reports</a>
                          </li>
                          <li>
                            <a href="/FinanceReports.html">Finance Reports</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h3>INDUSTRY EXPERTISE</h3>
                        <ul class="mega-menu-list">
                          <li>
                            <a href="/InvestorRelations.html"
                              >Investor Relations</a
                            >
                          </li>
                          <li>
                            <a href="/Provisional_mudaraba_profit_rate.html"
                              >Provisional Mudaraba Profit Rate</a
                            >
                          </li>
                          <li>
                            <a href="/Islamic_Banking_Investment_rate.html"
                              >Islamic Banking Investment Rate</a
                            >
                          </li>
                          <li>
                            <a href="/Foreign_exchange_rate.html"
                              >Foreign Exchange Rate</a
                            >
                          </li>
                          <li>
                            <a href="/FormandDownloads.html"
                              >Form and Downloads</a
                            >
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <h3>SPECIALIZED SERVICES</h3>
                        <ul class="mega-menu-list">
                          <li>
                            <a href="/Treasury_overview.html"
                              >Treasury Overview</a
                            >
                          </li>
                          <li>
                            <a href="/Sustainable_Green_product.html"
                              >Sustainable Green Product</a
                            >
                          </li>
                          <li>
                            <a href="/Sustainable_finance.html"
                              >Sustainable Finance</a
                            >
                          </li>
                          <li>
                            <a href="/Locker_service.html">Locker Service</a>
                          </li>
                          <li>
                            <a href="/Green_Finance.html">Green Finance</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#"
                  >ABOUT US</a
                >
              </li>
            </ul>
            <div class="search-container">
              <button class="search-btn">
                <i class="fas fa-search"></i>
                Search
              </button>
            </div>
          </div>
        </div>
      </nav>
    </section>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary d-lg-none mobile-nav">
      <div class="container-fluid mobileeNav">
        <div>
          <a class="navbar-brand" href="/">
            <img src="tbl-logo.png" class="trust-logo" />
          </a>
        </div>
        <div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  For You
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="/DepositProducts.html"
                      >Deposit Products</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/LOAN/Loans.html">Loan</a>
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="/LOAN/defence Personel loan.html"
                      >Defence Personnel Loan</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/CARD/TBL Card.html"
                      >Trust Bank Cards</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/CARD/TBL Card.html"
                      >Trust Bank Cards</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="/ISLAMIC BANK/about Islamic Banking.html"
                      >Islamic Banking</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/ISLAMIC BANK/diposite.html"
                      >Islamic Banking Deposit</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item"
                      href="/ISLAMIC BANK/final Ratio.html"
                      >Islamic Banking Final Ratio</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  For Your Business
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="/SME_Financing.html"
                      >SME Financing</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/SME_productBasedLoans.html"
                      >SME Product Loans</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/Agriculture_loan.html"
                      >Agriculture Loans</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/Trade_Financing.html"
                      >Trade Financing</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/AnnualGeneralMeeting.html"
                      >Annual General Meeting</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/AnnualReports.html"
                      >Annual Reports</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/FinanceReports.html"
                      >Finance Reports</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="/InvestorRelations.html"
                      >Investor Relations</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="/Whole About Page/About_page_body.php"
                  >About Us</a
                >
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>




 
    <section id="banner">
      <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div
            class="carousel-item active"
            style="background-image: url('img/trust_bank.jpg')"
          >
            <!-- <div class="carousel-caption">
          <h5>Annual Report</h5>
        </div> -->
          </div>
        <!-- <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#customCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button> -->
        <!-- <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#customCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
    </section>

    <section class="p-5 pb-2" id="who_we_are">
      <div class="container">
        <p class="">
          Trust Bank PLC. is one of the leading commercial banks in Bangladesh.
          The bank is sponsored by the Army Welfare Trust (AWT) first of its
          kind in Bangladesh. With a wide range of corporate, retail, SME, and
          Islamic Banking products TBL has been operating in Bangladesh from
          1999 and has since achieved public confidence as a sound and stable
          financial institution.
        </p>
      </div>
    </section>

    <!-- achievement section -->
    <section class="p-5" id="achievements">
      <div class="container">
        <h2 class="pb-3">Our Achievements</h2>
        <div id="carouselExampleControls2" class="carousel">
          <div class="carousel-inner" id="achieve_carousel">
            <div class="carousel-item active">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">119 Branches</h1>
                  <h4>Along with SME Centers and Sub-branches</h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">267 ATM Booths</h1>
                  <h4>20,000 pay points & above 500 POS</h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">2,300 Employees</h1>
                  <h4>Working Earnestly through-out the day</h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Online Banking</h1>
                  <h4>To facilitate all types of banking services</h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">13,64,894</h1>
                  <h4 class="">Happy Customers</h4>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias laudantium velit, distinctio eum pariatur praesentium,
                    obcaecati rem excepturi omnis
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">14 T-Lobby</h1>
                  <h4>Along with SME Centers and Sub-branches</h4>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
            <!-- <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title 7</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title 8</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title 9</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                </div>
              </div>
            </div> -->
          </div>
          <button
            class="carousel-control-prev bg-success"
            type="button"
            data-bs-target="#carouselExampleControls2"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next bg-success"
            type="button"
            data-bs-target="#carouselExampleControls2"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- Trust History Section -->
    <section class="p-5 d-none d-lg-block" id="History">
      <div class="container">
        <div class="card m-auto bg-success text-light">
          <img src="imgs/meeting2.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h2 class="card-title my-3">Our Story at a Glance</h2>
            <p class="card-text mb-4">
              Trust Bank PLC. is one of the leading private commercial banks
              having a spread network of 119 branches & SME centers, 8
              sub-branches, 267 ATM Booths and above 500 POS across Bangladesh
              and plans to open more branches to cover the important commercial
              areas in Dhaka, Chittagong, Sylhet and other areas in 2021. The
              bank, sponsored by the Army Welfare Trust (AWT), is first of its
              kind in the country. With a wide range of modern corporate and
              consumer financial products Trust Bank PLC. has been operating in
              Bangladesh since 1999 and has achieved public confidence as a
              sound and stable bank.
            </p>
            <a href="#" class="btn btn-success">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <section class="p-5 d-lg-none" id="History">
      <div class="container">
        <div class="card m-auto bg-success text-light">
          <img src="/imgs/meeting2.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h2 class="card-title my-3">Our Story at a Glance</h2>
            <p class="card-text mb-4">
              Trust Bank PLC. is one of the leading private commercial banks
              having a spread network of 119 branches & SME centers, 8
              sub-branches, 267 ATM Booths and above ...
            </p>
            <a href="#" class="btn btn-success">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Cards Section -->
    <section class="p-5 bg-success-subtle" id="page_cards">
      <div class="container">
        <h2 class="mb-5">Get To Know More</h2>
        <div class="row gx-5 gy-4">
          <div class="col-md-4 col-sm-6">
            <div class="card">
              <img
                src="img/company.png"
                class="card-img-top img-fluid"
                alt="img/trust_bank.jpg"
              />
              <div class="card-body">
                <h3 class="card-title text-success">Board of Directors</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Repudiandae at totam voluptates ratione quasi ea magni itaque
                  aliquid sit, saepe voluptate dignissimos distinctio quas
                  architecto amet hic voluptatum dolorem explicabo.
                </p>
                <a
                  href="/board_of_directors.html"
                  class="btn btn-outline-success"
                  >Know More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/executive (1).png"
                class="card-img-top img-fluid"
                alt="img/trust_bank.jpg"
              />
              <div class="card-body">
                <h3 class="card-title text-success">Executive Committee</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Veniam, odit fugiat! Excepturi rerum dolore suscipit,
                  architecto ducimus voluptate totam officiis hic quisquam,
                  consequatur eligendi unde veritatis nemo, eius maiores
                  incidunt.
                </p>
                <a href="/executive_comm.html" class="btn btn-outline-success"
                  >Know More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/accountability.png"
                class="card-img-top img-fluid"
                alt="img/trust_bank.jpg"
              />
              <div class="card-body">
                <h3 class="card-title text-success">Audit Committee</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nesciunt possimus consectetur repudiandae ut distinctio quo
                  asperiores mollitia, hic, neque fugiat cumque doloremque sint
                  minus tenetur veniam voluptate, beatae eum corporis.
                </p>
                <a href="/audit_comm.html" class="btn btn-outline-success"
                  >Know More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/team.png"
                class="card-img-top img-fluid"
                alt="img/trust_bank.jpg"
              />
              <div class="card-body">
                <h3 class="card-title text-success">
                  Risk Management Committee
                </h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                  magnam sunt consequuntur aliquid aut hic fugiat perferendis
                  quod cupiditate, nisi, fuga labore repellat accusamus animi
                  rerum est nam accusantium nihil!
                </p>
                <a href="/risk_management.html" class="btn btn-outline-success"
                  >Know More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/team (2).png"
                class="card-img-top img-fluid"
                alt="img/trust_bank.jpg"
              />
              <div class="card-body">
                <h3 class="card-title text-success">Senior Management Team</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Officiis iste labore nam magni consequuntur dolor explicabo
                  laudantium maiores. Exercitationem est magnam provident quos
                  tempore accusamus? Autem ratione exercitationem nemo debitis!
                </p>
                <a href="/snr_management.html" class="btn btn-outline-success"
                  >Know More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img
                src="img/location.png"
                class="card-img-top img-fluid"
                alt="img/trust_bank.jpg"
              />
              <div class="card-body">
                <h3 class="card-title text-success">Our Locations</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad,
                  suscipit eligendi! Iusto possimus adipisci quos et doloremque
                  aliquam. Necessitatibus exercitationem rem vitae sequi ipsum,
                  accusamus iusto sapiente officia cum aut.
                </p>
                <a href="/" class="btn btn-outline-success">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Business Section -->
    <section class="p-5" id="business_section">
      <div class="container">
        <div
          class="row align-items-center justify-content-between flex-column flex-md-row"
        >
          <div class="col-md m-0 p-0">
            <img
              src="img/634dc5f806d3960462e2f577.avif"
              class="img-fluid"
              alt=""
            />
          </div>
          <div
            class="card_left col-md p-5 pt-4 bg-success text-light text-center"
          >
            <h1 class="mt-0 mb-4">Our Values</h1>
            <p><span>Fair: </span>We treat everyone fairly and with respect</p>
            <p><span>Dependable: </span>We deliver on our promises</p>
            <p>
              <span>Reliable: </span>We do our job to the best of our ability
            </p>
            <p>
              <span>Professional: </span>We foster a professional environment
            </p>
            <p><span>Dynamic: </span>We are passionate to accomplish</p>
            <p><span>Trustworthy: </span>We do what is right</p>

            <!-- <h3>Fair</h3>
                        <p>We treat everyone fairly and with respect.</p>
                        <h3>Fair</h3>
                        <p>We treat everyone fairly and with respect.</p>
                        <h3>Fair</h3>
                        <p>We treat everyone fairly and with respect.</p>
                        <h3>Fair</h3>
                        <p>We treat everyone fairly and with respect.</p>
                        <h3>Fair</h3>
                        <p>We treat everyone fairly and with respect.</p>
                        <h3>Fair</h3>
                        <p>We treat everyone fairly and with respect.</p> -->
          </div>
        </div>
      </div>
    </section>
    <!-- News Section -->
    <section class="p-5" id="news">
      <div class="container">
        <h2 class="mb-5">Recent News</h2>
      </div>
      <div id="carouselExampleControls" class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/IMG-20241124-WA0002.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    Trust Payroll Signing Ceremony between Trust Bank PLC &
                    Leading University
                  </h4></a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/IMG-20241121-WA0000.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    Agreement Signing between Trust Bank PLC and Tropical Homes
                    Limited on 18 November 2024.
                  </h4></a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/1.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    The 60th Meeting of Trust Bank Shariah Supervisory Committee
                  </h4></a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/1_0.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    Bancassurance Agreement Signing Ceremony with Astha Life
                    Insurance Company Limited
                  </h4></a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/Gopalganj 1.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    Financial Literacy Program 2024
                  </h4></a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/1.jpeg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    Inauguration of Anowara Branch of Trust Bank Limited
                  </h4></a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/Mirerbazar SME Br.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    Trust Bank Limited (TBL) observed "Financial Literacy Day"
                    on March 04, 2024.
                  </h4></a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="img-wrapper">
                <img
                  src="img/1_0 (1).jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
              </div>
              <div class="card-body">
                <a href="http://"
                  ><h4 class="card-title text-center text-success">
                    The 57th Meeting of Trust Bank Shariah Supervisory Committee
                  </h4></a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
      </div>
    </section>
    <footer class="footer">
        <div class="container">
          <div class="main-logo-section">
            <img
              src="img_2/tbl-logo-footer.png"
              alt="Main Logo"
              class="main-logo"
            />
            <!-- <div class="motto">Trust Bank PLC - A Bank for Financial Freedom</div> -->
          </div>

          <div class="row">
            <div class="col-md-3 mb-4">
              <h5 class="footer-heading">QUICK LINKS</h5>
              <a href="#" class="footer-link">Home</a>
              <a href="#" class="footer-link">About Us</a>
              <a href="#" class="footer-link">Services</a>
              <a href="#" class="footer-link">Contact</a>
            </div>

            <div class="col-md-3 mb-4">
              <h5 class="footer-heading">SERVICES</h5>
              <a href="#" class="footer-link">Banking</a>
              <a href="#" class="footer-link">Loans</a>
              <a href="#" class="footer-link">Credit Cards</a>
              <a href="#" class="footer-link">Investments</a>
            </div>

            <div class="col-md-3 mb-4">
              <h5 class="footer-heading">SUPPORT</h5>
              <a href="#" class="footer-link">Board of Director</a>
              <a href="#" class="footer-link">Executive Committee</a>
              <a href="#" class="footer-link">Audit Committee</a>
              <a href="#" class="footer-link">Senior Management Team</a>
            </div>

            <div class="col-md-3 mb-4">
              <h5 class="footer-heading">NEWSLETTER</h5>
              <div class="d-flex gap-2">
                <input
                  type="email"
                  class="form-control email-input"
                  placeholder="Enter your email"
                />
                <button class="btn search-btn">
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
              <div class="social-icons">
                <a href="#" class="social-icon"
                  ><i class="fab fa-facebook"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a href="#" class="social-icon"
                  ><i class="fab fa-youtube"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="footer-bottom">
            <div class="row align-items-center">
              <div class="col-md-6">
                <p class="mb-md-0">
                  © 2024 Trust Bank PLC. All rights reserved.
                </p>
              </div>
              <div class="col-md-6">
                <div class="credentials-section">
                  <div class="badge-container">
                    <a
                      href="https://www.bb.org.bd/en/index.php"
                      target="_blank"
                    >
                      <img
                        src="img_2/passport.jpg"
                        alt="Badge 1"
                        class="badge-img"
                      />
                    </a>
                    <a href="https://www.cse.com.bd/" target="_blank">
                      <img src="img_2/cse.jpg" alt="Badge 2" class="badge-img" />
                    </a>
                    <a href="https://www.dsebd.org/" target="_blank">
                      <img
                        src="img_2/dhaka stock exchange.png"
                        alt="Badge 3"
                        class="badge-img"
                      />
                    </a>
                    <a href="http://www.passport.gov.bd/" target="_blank">
                      <img
                        src="img_2/passport.png"
                        alt="Badge 4"
                        class="badge-img"
                      />
                    </a>
                  </div>
                  <a href="tel:16201" class="helpline">
                    <i class="fas fa-phone-alt"></i> 16201
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        let multipleCardCarousel = document.querySelector(
          "#carouselExampleControls2"
        );

        if (window.matchMedia("(min-width: 768px)").matches) {
          let carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false, // Disable automatic sliding
            wrap: false, // Prevent wrapping at the end
          });

          let carouselWidth = document.querySelector(
            "#achievements .carousel-inner"
          ).scrollWidth;
          let cardWidth = document.querySelector(
            "#achievements .carousel-item"
          ).offsetWidth;
          let scrollPosition = 0;

          document
            .querySelector("#carouselExampleControls2 .carousel-control-next")
            .addEventListener("click", function () {
              if (scrollPosition < carouselWidth - cardWidth * 4) {
                scrollPosition += cardWidth;
                document
                  .querySelector("#carouselExampleControls2 .carousel-inner")
                  .scroll({ left: scrollPosition, behavior: "smooth" });
              }
            });

          document
            .querySelector("#carouselExampleControls2 .carousel-control-prev")
            .addEventListener("click", function () {
              if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                document
                  .querySelector("#carouselExampleControls2 .carousel-inner")
                  .scroll({ left: scrollPosition, behavior: "smooth" });
              }
            });
        } else {
          multipleCardCarousel.classList.add("slide");
        }
      });
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="lv">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="black" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="black" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title>Dizaina Mēbeļu Studija - mēbeļu ražošana</title>
    <link rel="stylesheet" href="styles/style.css" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />


    <script>
        function validateForm() {
          var a = document.forms["myForm"]["name"].value;
          var b = document.forms["myForm"]["subject"].value;
          var c = document.forms["myForm"]["mail"].value;
          var d = document.forms["myForm"]["number"].value;
          var e = document.forms["myForm"]["message"].value;
          if (a == "" || b == "" || c == "" || d == "" || e == "") {
            alert("Aizpildi visus laukus!");
            return false;
          }
        }
    </script>
  </head>

  <body id="top">
    <div class="nav-wrapper fixed-top">
      <nav>
        <a class="navbar-brand" href="#">
          <img src="./images/logo.jpeg" max-width="350" height="50" alt="" />
        </a>
        <div class="scrollmenu">
          <a href="./mebeles/virtuves.html">Virtuves mēbeles</a>
          <a href="./mebeles/iebuvejamie-skapji.html">Iebūvētie skapji</a>
          <a href="./mebeles/gulamistabas-mebeles.html">Guļamistabas mēbeles</a>
          <a href="./mebeles/viesistabas-mebeles.html">Viesistabas mēbeles</a>
          <a href="./mebeles/vannas-istabas-mebeles.html"
            >Vannasistabas mēbeles</a
          >
          <a href="./mebeles/dazadas-mebeles.html">Dažādas mēbeles</a>
        </div>
      </nav>
      <!--// Nav -->
    </div>
    <!--// Nav Wrapper -->

    <section class="cta" id="cta-id">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./images/cta-images/1.jpeg"
              class="d-block w-100"
              alt="image"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./images/cta-images/2.jpeg"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="./images/cta-images/3.jpeg"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!--// CTA -->
    <br />
    <br />
    <div class="container-fluid">
      <section id="furniture">
        <div class="container" style="background-color: aliceblue;">
          <div class="row">
            <div class="col-md-6">
              <img
                src="./images/about-img.jpeg"
                class="img-fluid"
                alt="Responsive image"
              />
              <br />
              <br />
            </div>

            <div class="col-md-6">
              <h3>”Dizaina Mēbeļu Studija”</h3>
              <br />
              <p>
                Ir mūsdienīgs mēbeļu ražošanas uzņēmums ar vairāk kā 15 gadu
                pieredzi. Pēc individuāla pasūtījuma izgatavojam visu veidu
                mēbeles, virtuves iekārtas, guļamistabas, viesistabas,
                iebūvējamos skapjus, vannas istabas, durvis, u.t.t. Visas
                mēbeles ir roku darbs, kas ir radīts ar daudzu gadu laikā radīto
                pieredzi un meistarību.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--// Services section -->

      <section class="top fixed-bottom">
        <div class="row">
          <div class="col-md-12 text-right">
            <div
              class="btn-group-vertical"
              role="group"
              aria-label="Basic example"
            >
              <a href="#top"><i class="fas fa-angle-up fa-3x"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!--// Scroll Top -->

      <section id="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h5>
                Ražošanas procesā tiek izmantotas jaunākās tehnoloģijas un
                augstākās kvalitātes materiāli:
              </h5>
              <br />
              <ul>
                <li>Lamināts</li>
                <li>Akrils</li>
                <li>MDF</li>
                <li>Finierējums</li>
                <li>Masīvkoks</li>
                <li>Plastikāts HPL</li>
                <li>Stikls</li>
                <li>Spoguļi</li>
                <li>Granīts</li>
                <li>Koriāns</li>
              </ul>
              <br />
            </div>
            <!--// Col -->
            <br />
            <br />
            <div class="col-md-6">
              <img
                src="./images/services-img.jpg"
                class="img-fluid"
                alt="Responsive image"
              />
            </div>
            <!--// Col -->

            <div class="col-md-6">
              <br />
              <h6>Nodrošinām pilna servisa pakalpojumu:</h6>
              <br />
              <ul>
                <li>Projektēšanu</li>
                <li>Izgatavošanu</li>
                <li>Uzstādīšanu</li>
              </ul>
              <br />
            </div>
          </div>
          <!--// Row -->
        </div>
      </section>
      <!--// Varanty -->

      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3><b>Kontakti</b></h3>
            </div>
          </div>
          <br />
          <form name="myForm" action="email.php" onsubmit="return validateForm()" method="POST">
            <div class="form-group">
              <label for="name">Vārds un uzvārds</label>
              <input type="text" name="name" class="form-control" id="name" />
            </div>
            <div class="form-group">
              <label for="subject">Temats</label>
              <input type="text" name="subject" class="form-control" id="subject" />
            </div>
            <div class="form-group">
              <label for="mail">E-pasta adrese</label>
              <input
                type="email"
                name="mail"
                class="form-control"
                id="mail"
              />
            </div>
            <div class="form-group">
              <label for="number">Tālrunis</label>
              <input
                type="number"
                name="number"
                class="form-control"
                id="number"
              />
            </div>
            <div class="form-group">
              <label for="message">Teksts</label>
              <textarea
                name="message"
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
            <br />
            <button type="submit" name="submit" class="btn btn-info mb-2" id="submit">
              Sūtīt ziņu
            </button>
          </form>

          <div class="mapouter">
            <div class="gmap_canvas">
              <br />
              <br />
              <iframe
                width="100%"
                height="400"
                id="gmap_canvas"
                src="https://maps.google.com/maps?q=Sia%20Dizaina%20M%C4%93be%C4%BCu%20Studija&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
              ></iframe>
            </div>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 400px;
                width: 100%;
              }

              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 400px;
                width: 100%;
              }
            </style>
          </div>

          <!--// Map -->
        </div>
      </section>
      <!--// Contact form -->

      <section class="partners">
        <div class="row text-center">
          <div class="col-md-3">
            <a href="https://attelsr.lv/" target="_blank"
              ><img
                src="./images/partners-logo/1.png"
                class="img-fluid"
                alt="Responsive image"
            /></a>
          </div>
          <!--// Col -->
          <div class="col-md-2">
            <a href="https://decoriga.lv/lv/" target="_blank"
              ><img
                src="./images/partners-logo/2.png"
                class="img-fluid"
                alt="Responsive image"
            /></a>
          </div>
          <!--// Col -->
          <div class="col-md-2">
            <a href="https://www.eamf.lv/" target="_blank"
              ><img
                src="./images/partners-logo/3.svg"
                class="img-fluid"
                alt="Responsive image"
            /></a>
          </div>
          <!--// Col -->
          <div class="col-md-2">
            <a href="http://intarsija.lv/" target="_blank"
              ><img
                src="./images/partners-logo/4.jpg"
                class="img-fluid"
                alt="Responsive image"
            /></a>
          </div>
          <!--// Col -->
          <div class="col-md-3">
            <a href="https://www.katesplates.lv/" target="_blank"
              ><img
                src="./images/partners-logo/5.svg"
                class="img-fluid"
                alt="Responsive image"
            /></a>
          </div>
          <!--// Col -->
        </div>
      </section>
      <!--// Partners -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              SIA Dizaina Mēbeļu studija, “Lode”, Blīdenes pag., Brocēnu nov.,
              Lv-3852 Reģ. nr. 40203164435, Konta nr. LV97HABA0551045600493
            </div>
          </div>
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">
            ©
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script>
            Visas tiesības aizsargātas:
            <a href="http://dizainamebelustudija.lv/">
              dizainamebelustudija.lv</a
            >
            tālrunis: 26605740, e-pasts: info@dizainamebelustudija.lv
          </div>
          <!-- Copyright -->
        </div>
      </footer>
      <!-- Footer -->
    </div>
    <!--// Main Container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- Custom -->
    <script src="./js/main.js"></script>
  </body>
</html>

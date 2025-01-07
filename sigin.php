<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netflix</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        box-sizing: border-box;
      }
      body {
        background: #000;
        color: #fff;
      }
      .header {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.7)
          ),
          url(2.jpg);
        background-size: cover;
        background-position: center;
        padding: 10px 8%;
        position: relative;
      }
      nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
      }
      .logo {
        width: 150px;
        cursor: pointer;
      }
      nav button {
        border: 0;
        outline: 0;
        background: #db0001;
        color: #fff;
        padding: 7px 20px;
        font-size: 12px;
        border-radius: 4px;
        cursor: pointer;
      }
      .language-btn {
        display: inline-flex;
        align-items: center;
        background: transparent;
        border: 1px solid #fff;
        padding: 7px 10px;
      }
      .language-btn img {
        width: 10px;
        margin-left: 10px;
      }
      .header-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        margin-top: 100px;
      }
      .header-content h1 {
        font-size: 60px;
        line-height: 70px;
        font-weight: 600;
        max-width: 650px;
      }
      .header-content h3 {
        font-size: 400;
        margin-bottom: 20px;
      }
      .email-signup {
        background: #fff;
        border-radius: 4px;
        display: flex;
        align-items: center;
        margin-top: 30px;
        overflow: hidden;
      }
      .email-signup input {
        flex: 1;
        border: 0;
        outline: 0;
        margin-left: 20px;
      }
      .email-signup button {
        background: #db0001;
        border: 0;
        outline: 0;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        padding: 15px 30px;
      }
      .email-signup .submit a {
        text-decoration: none;
      }
      .features {
        padding: 50px 12%;
        font-size: 22px;
      }
      .row {
        display: flex;
        width: 100%;
        align-items: center;
        flex-wrap: wrap;
        padding: 50px 0;
      }
      .text-col {
        flex-basis: 50%;
        margin-bottom: 20px;
      }
      .img-col {
        flex-basis: 50%;
        margin-bottom: 20px;
      }
      .img-col img {
        display: block;
        width: 90%;
        margin: auto;
      }
      .features h2 {
        font-size: 50px;
        font-weight: 600;
        margin-bottom: 20px;
      }
      .faq {
        padding: 10px 12%;
        text-align: center;
        font-size: 18px;
      }
      .faq h2 {
        font-weight: 500;
        font-size: 40px;
      }
      .accordion {
        margin: 60px auto;
        width: 100%;
        max-width: 750px;
      }
      .accordion li {
        list-style: none;
        width: 100%;
        padding: 5px;
      }
      .accordion li label {
        display: flex;
        align-items: center;
        padding: 20px;
        font-size: 18px;
        font-weight: 500;
        background: #303030;
        margin-bottom: 2px;
        cursor: pointer;
        position: relative;
      }
      label::after {
        content: "+";
        font-size: 34px;
        position: absolute;
        right: 20px;
        transition: transform 0.5s;
      }
      input[type="radio"] {
        display: none;
      }
      .accordion .content {
        background: #303030;
        text-align: left;
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s, padding 0.5;
      }
      .accordion input[type="radio"]:checked + label + .content {
        max-height: 600px;
        padding: 30px 20px;
      }
      .accordion input[type="radio"]:checked + label ::after {
        transform: rotate(135deg);
      }
      .feq .email-signup {
        max-width: 600px;
        margin: 20px auto 60px;
      }
      .footer {
        padding: 50px 15% 10px;
        border-top: 6px solid #333;
        color: #777;
      }
      .footer h2 {
        font-size: 18px;
        font-weight: 400;
        margin-bottom: 30px;
      }
      .footer .col {
        flex-basis: 25%;
        flex-grow: 1;
        margin-bottom: 20px;
      }
      .footer .col a {
        display: block;
        text-decoration: none;
        color: #777;
        font-size: 14px;
        margin-bottom: 10px;
      }
      .footer .row {
        align-items: flex-start;
        padding: 10px 0;
      }
      .footer .language-btn {
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
      }
      .copyright-btn {
        font-size: 14px;
        margin-top: 20px;
        margin-bottom: 10px;
      }
      @media only screen and (max-width: 600) {
        .logo {
          width: 100px;
        }

        nav button {
          padding: 5px 10px;
        }
        nav .language-btn {
          padding: 4px 8px;
        }
        .header-content {
          position: unset;
          transform: none;
          padding-top: 150px;
        }
        .header-content h1 {
          font-size: 30px;
        }
        .email-signup button {
          font-size: 12px;
          padding: 10px;
        }
        .text-col,
        .img-col {
          flex-basis: 100%;
        }
        .features h2 {
          font-size: 30px;
        }
        .features p {
          font-family: 15px;
        }
        .row:nth-child(2),
        .row:nth-child(4) {
          flex-direction: column-reverse;
        }
        .feq h2 {
          font-size: 20px;
        }
        .accordion .content {
          font-size: 14px;
        }
        .accordion li label {
          padding: 10px;
          font-size: 14px;
        }
        label::after {
          font-size: 22px;
        }
      }
    </style>
  </head>
  <body>
    <div class="header">
      <nav>
        <img src="download.png" class="logo" />
        <div>
          <button class="language-btn">English <img src="10.png" /></button>
          <a href="nazmul.html"> <button>Sign in</button></a>
        </div>
      </nav>
      <div class="header-content">
        <h1>Unlimited movies, TV shows and more</h1>
        <h3>Watch anywhere. Cancel anytime.</h3>
        <p>
          Ready to watch? Enter your email to create or restart your membership
        </p>
        <form class="email-signup">
          <input type="email" placeholder="Email address" required />

          <button class="submit">
            <a href="foyej.html">Get Started</a>
          </button>
        </form>
      </div>
    </div>
    <div class="features">
      <div class="row">
        <div class="text-col">
          <h2>Enjoy on your TV.</h2>
          <p>
            Watch on smart TVs, PlayStation, Xbox, Chromecast,Apple TV, Blu-ray
            players and more
          </p>
        </div>
        <div class="img-col">
          <img src="3.jpeg" />
        </div>
      </div>
      <div class="row">
        <div class="img-col">
          <img src="7.png" />
        </div>
        <div class="text-col">
          <h2>
            Download your<br />
            shows to watch<br />
            offline
          </h2>
          <p>
            Save your favorites easily and always have<br />
            something to watch.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="text-col">
          <h2>Watch everywhere</h2>
          <p>
            Stream unlimited movies and TV <br />shows on your phone, tablet,
            laptop, <br />and TV.
          </p>
        </div>
        <div class="img-col">
          <img src="5.jpeg" />
        </div>
      </div>
      <div class="row">
        <div class="img-col">
          <img src="9.png" />
        </div>
        <div class="text-col">
          <h2>Create profiles for kids</h2>
          <p>
            Send kids on adventures with their favorite characters in a space
            made just for them—free with your membership.
          </p>
        </div>
      </div>
    </div>
    <div class="faq">
      <h2>Frequently Asked Questions</h2>
      <ul class="accordion">
        <li>
          <input type="radio" name="accordion" id="first" />
          <label for="first">What is Netflix?</label>
          <div class="content">
            <p>
              Netflix is a streaming service that offers a wide variety of
              award-winning TV shows, movies, anime, documentaries, and more on
              thousands of internet-connected devices.
            </p>
            <br />
            <p>
              You can watch as much as you want, whenever you want without a
              single commercial – all for one low monthly price. There's always
              something new to discover and new TV shows and movies are added
              every week!
            </p>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="second" />
          <label for="second">How much does Netflix cost?</label>
          <div class="content">
            <p>
              Watch Netflix on your smartphone, tablet, Smart TV, laptop, or
              streaming device, all for one fixed monthly fee. Plans range from
              USD 2.99 to USD 9.99 a month. No extra costs, no contracts.
            </p>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="third" />
          <label for="third">Where can I watch?</label>
          <div class="content">
            <p>
              Netflix is flexible. There are no pesky contracts and no
              commitments. You can easily cancel your account online in two
              clicks. There are no cancellation fees – start or stop your
              account anytime.
            </p>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="four" />
          <label for="four">How do I cancel?</label>
          <div class="content">
            <p>
              Netflix is flexible. There are no pesky contracts and no
              commitments. You can easily cancel your account online in two
              clicks. There are no cancellation fees – start or stop your
              account anytime.
            </p>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="fifth" />
          <label for="fifth">What can I watch on Netflix?</label>
          <div class="content">
            <p>
              Netflix has an extensive library of feature films, documentaries,
              TV shows, anime, award-winning Netflix originals, and more. Watch
              as much as you want, anytime you want..
            </p>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="six" />
          <label for="six">Is Netflix good for kids?</label>
          <div class="content">
            <p>
              The Netflix Kids experience is included in your membership to give
              parents control while kids enjoy family-friendly TV shows and
              movies in their own space. Kids profiles come with PIN-protected
              parental controls that let you restrict the maturity rating of
              content kids can watch and block specific titles you don’t want
              kids to see.
            </p>
          </div>
        </li>
      </ul>
      <small
        >Ready to watch? Enter you email to create or restart your
        memership.</small
      >
      <form class="email-signup">
        <input type="email" placeholder="Email address" />
        <button class="submit">
          <a href="foyej.html">Get Started</a>
        </button>
      </form>
    </div>
    <div class="footer">
      <h2>Questions? call 000-000-000-000</h2>
      <div class="row">
        <div class="col">
          <a href="#">FAQ</a>
          <a href="#">Investor Relation</a>
          <a href="#">Privacy</a>
          <a href="#">Speed Test</a>
        </div>
        <div class="col">
          <a href="#">Help Center</a>
          <a href="#">Jobs</a>
          <a href="#">Cookies Prefernces</a>
          <a href="#">Legal Notices</a>
        </div>
        <div class="col">
          <a href="#">Account</a>
          <a href="#">Ways to watch</a>
          <a href="#">Corporate Information</a>
          <a href="#">Only on Netflix</a>
        </div>
        <div class="col">
          <a href="#">Media Centre</a>
          <a href="#">Terms of Use</a>
          <a href="#">Contact Us</a>
        </div>
      </div>
      <button class="language-btn">English<img src="10.png" /></button>
      <p class="copyright-txt">Netflix Bangladesh</p>
    </div>
  </body>
</html>

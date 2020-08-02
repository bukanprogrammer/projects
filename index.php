<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Produktif XI TKJ 1</title>
    <style>
        /*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v7.0.29,
* Autoprefixer: v9.7.6
* Browsers: last 4 version
*/

/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html {
    scroll-behavior: smooth;
}

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}


/* HTML5 display-role reset for older browsers */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

body {
  line-height: 1;
}

ol,
ul {
  list-style: none;
}

blockquote,
q {
  quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

body {
  font-family: 'Raleway', sans-serif;
  scroll-behavior: smooth;
}

.nav {
  /*flex: 1;*/
  height: 625px;
  /*border: 1px solid red;*/
  background-position: center;
  background-size: cover;
  -webkit-box-flex: .44;
      -ms-flex: .44;
          flex: .44;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /*padding: 40px;*/
  z-index: 9999;
  position: relative;
  left: 50px;
}

.desc h1 {
  text-align: center;
  padding-right: 5px;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-size: 50px;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 5px;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
  background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
  background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
}

.desc p {
  width: 400px;
  /*border: 1px solid red;*/
  text-align: justify;
  line-height: 30px;
  font-family: 'Roboto', sans-serif;
}

.desc a {
  text-decoration: none;
  color: white;
}

.hdr-button {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  /*border: 1px solid red;*/
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.learn-more {
  margin-right: 10px;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  border-radius: 5px;
  background: -webkit-gradient(linear, left top, right top, from(#ff416c), to(#ff4b2b));
  background: -o-linear-gradient(left, #ff416c, #ff4b2b);
  background: linear-gradient(to right, #ff416c, #ff4b2b);
}

.abs {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  /*border-top: 1px solid #2948ff;
  border-bottom: 5px solid #2948ff;
  border-left: 1px solid #2948ff;
  border-right: 1px solid #2948ff;*/
  border-radius: 5px;
  /*color: black;*/
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  text-align: center;
  background-image: -o-linear-gradient( 340.4deg, rgba(6, 183, 249, 1) 11.2%, rgba(25, 74, 236, 1) 91.1%);
  background-image: linear-gradient( 109.6deg, rgba(6, 183, 249, 1) 11.2%, rgba(25, 74, 236, 1) 91.1%);
}

.sidebar {
  /*border: 1px solid red;*/
  color: white;
  height: 625px;
  background-image: url(img/3777639.jpg);
  background-position: center;
  background-size: cover;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  /*z-index: 999;*/
  position: relative;

}

mark {
  padding-left: 5px;
  padding-right: 5px;
  text-align: center;
  font-weight: bold;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
  background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
  background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
}

.navbar {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background-color: white;
  margin: auto;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  color: black;
  padding: 20px;
  /*border: 1px solid red;*/
}

.navbar .title {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  font-size: 40px;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /*border: 1px solid red;*/
  font-family: 'Montserrat', sans-serif;
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
  color: black;
  text-align: center;
  font-weight: bold;
}

.navbar a,
.materi a,
.tentang-guru a {
  text-decoration: none;
  color: white;
}

.beranda {
  /*padding-right: 30px;
    padding-left: 30px;*/
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /*border: 1px solid red;*/
  font-family: 'Raleway', sans-serif;
  -webkit-box-flex: .5;
      -ms-flex: .5;
          flex: .5;
  color: black;
  padding: 20px;
  height: 80px;
}

.materi {
  /*padding-right: 30px;
    padding-left: 30px;*/
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /*border: 1px solid red;*/
  font-family: 'Raleway', sans-serif;
  -webkit-box-flex: .5;
      -ms-flex: .5;
          flex: .5;
  color: black;
  padding: 20px;
  height: 80px;
}

.tentang-guru {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /*padding-right: 30px;
    padding-left: 30px;*/
  /*border: 1px solid red;*/
  font-family: 'Raleway', sans-serif;
  -webkit-box-flex: .1;
      -ms-flex: .1;
          flex: .1;
  color: black;
  padding: 20px;
  height: 80px;
}

.hero-images {
  width: 110.5%;
  background-color: white;
  /*border: 1px solid red;*/
  height: 625px;
  background-position: center;
  background-size: cover;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  /*justify-content: center;*/
  position: relative;
  right: 58px;
}

.materi-pembelajaran h1 {
  text-align: center;
  font-size: 30px;
  color: black;
  padding: 20px;
  font-family: 'Raleway', sans-serif;
}

.pak-wahyu {
  /*border: 1px solid red;*/
  height: 100%;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: 1fr 20px 1fr 20px 1fr;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  padding-top: 20px;
  padding-bottom: 60px;
  padding-left: 80px;
  padding-right: 80px;
  position: relative;
  bottom: 10px;
}

.pak-rio {
  /*border: 1px solid red;*/
  height: 100%;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: 1fr 20px 1fr 20px 1fr;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  padding: 0px 40px 40px 40px;
}

.me {
  /*border: 1px solid red;*/
  height: 100%;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: 1fr 20px 1fr 20px 1fr;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  padding: 80px;
}

.items {
  border: 1px solid black;
  height: 256px;
}

.thumbnail {
  background-image: url(img/2811889.jpg);
  width: 100%;
  height: 196.5px;
  /* border: 1px solid red; */
  color: black;
  font-size: 30px;
  /* display: flex;
      justify-content: center;
      align-items: center; */
  background-position: center;
  background-size: cover;
  /*border-top-left-radius: 10px;
      border-top-right-radius: 10px;*/
  /*border-top: 1px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;*/
  /*border: 1px solid red;*/
}

.thumbnail-2 {
  background-image: url(img/3227422.jpg);
  width: 100%;
  height: 196.5px;
  /* border: 1px solid red; */
  color: black;
  font-size: 30px;
  /* display: flex;
      justify-content: center;
      align-items: center; */
  background-position: center;
  background-size: cover;
  /*border-top-left-radius: 10px;
      border-top-right-radius: 10px;*/
  /*border-top: 1px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;*/
  /*border: 1px solid red;*/
}

.thumbnail-3 {
  background-image: url(img/3227455.jpg);
  width: 100%;
  height: 196.5px;
  /* border: 1px solid red; */
  color: black;
  font-size: 30px;
  /* display: flex;
      justify-content: center;
      align-items: center; */
  background-position: center;
  background-size: cover;
  /*border-top-left-radius: 10px;
      border-top-right-radius: 10px;*/
  /*border-top: 1px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;*/
  /*border: 1px solid red;*/
}

.items .artc {
  width: 100%;
  padding: 20px;
  font-size: 15px;
  text-align: left;
  /*border-left: 1px solid black;
      border-right: 1px solid black;*/
  margin: auto;
  background-color: black;
  color: white;
  text-align: center;
}

.subject-data {
  width: 70%;
  /*border: 1px solid blue; */
  height: 57px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 20px;
  border-bottom-left-radius: 9px;
  border-bottom-right-radius: 9px;
  /*border-left: 1px solid black;
      border-bottom: 1px solid black;
      border-right: 1px solid black;*/
  /*border-top: 1px solid black;*/
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: auto;
}


/* .artc, 
.effect-2, 
.effect-3{border: 0; padding: 7px 0; border-bottom: 1px solid #ccc;}

.artc ~ .focus-border{position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background-color: #3399FF; transition: 0.4s;}
.artc:focus ~ .focus-border{width: 100%; transition: 0.4s;}*/

.mr-wahyu {
  background-image: url(img/unnamed.jpg);
  width: 50px;
  height: 50px;
  /*border: 1px solid red; */
  margin-right: 10px;
  background-position: center;
  background-size: cover;
  border-radius: 50%;
  /*border: 5px solid black;*/
}

.teachers-name {
  height: 50px;
  /*border: 1px solid red;*/
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.teachers-name h1 {
  font-size: 15px;
  font-weight: bold;
  border: 1px solid transparent;
  padding: 0;
}

.date span {
  margin-left: 3px;
}

.sr {
  margin-right: 70px;
}

.tentang-section {
  width: 60%;
  /*border: 1px solid red;*/
  margin: auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.footer {
  background-color: black;
  padding: 60px;
  color: white;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.copyright {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-family: 'Montserrat', sans-serif;
}

.copyright {
  text-indent: 8px;
}

.copyright h1 {
  letter-spacing: 5px;
}

form {
  width:1300px;
  /*border: 1px solid red;*/
  color: white;
  padding: 20px;
  font-family: 'Raleway', sans-serif;
  margin: auto;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[3];
  grid-template-columns: repeat(3, 1fr);
}

.insput {
  width: 25px;
  height: 25px;
  background-color: black;
  border-radius: 50%;
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  border: none;
}

.checkbox {
  padding: 20px;
  margin-bottom: 20px;
  /*border: 1px solid red;*/
  display: flex;
    justify-content: center;
    align-items: center;
}

.no {
  /*border: 1px solid black;*/
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #f53b57;
  font-weight: bold;
}

.absen_wrapper {
  /*display: flex;*/
  margin: auto;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[3];
  grid-template-columns: repeat(3,1fr);
}

.nama_siswa {
  width: 235px;
  /*border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-right: 1px solid black;*/
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #3c40c6;
}

.submist {
  margin: auto;
  border: none;
  border-radius: 5px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 12px;
  margin-right: 5px;
}

.date {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  color: red;
  padding: 13.5px;
  border-radius: 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: white;
  background-color: #1e272e;
  margin-left: 90px;
  height: 19.9px;
}

.sbmt_wrapper {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-family: 'Roboto', sans-serif;
}

.absen_wrapper {
  /*border: 1px solid red;*/
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

@media only screen and (min-device-width: 300px) and (max-device-width: 374px) {

  .navbar {
    width: 100%;
    display: block;
    /*border: 1px solid red;*/
    padding: 0;
  }

  .navbar .title {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    font-size: 30px;
    padding-top: 40px;
    padding-bottom: 10px;
    padding-left: 0px;
    padding-right: 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Montserrat', sans-serif;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
    color: black;
    text-align: center;
    font-weight: bold;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    margin: auto;
  }

  .beranda {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  } 

  .materi {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  }

  .tentang-guru {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*padding-right: 30px;
      padding-left: 30px;*/
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .1;
        -ms-flex: .1;
            flex: .1;
    color: black;
    padding: 20px;
  }

  .nav {
    height: 500px;
    /*border: 1px solid red;*/
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 20px;
  }

  .desc h1 {
    text-align: center;
    padding-right: 5px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    font-size: 40px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 5px;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
    background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
  } 

  .desc p {
    width: 250px;
    /*border: 1px solid red;*/
    text-align: justify;
    line-height: 30px;
    font-family: 'Roboto', sans-serif;
  }

  .desc a {
    text-decoration: none;
    color: white;
  }

  .sidebar {
    display: none;
  }

  .hero-images {
    height: 500px;
    width: 100%;
    background-color: white;
    /*border: 1px solid red;*/
    height: 500px;
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    /*justify-content: center;*/
    position: relative;
    right: 37px;
  }

  .materi-pembelajaran h1, .xde {
    text-align: center;
    font-size: 20px;
    color: black;
    font-family: 'Raleway', sans-serif;
    padding: 40px;
  }

  .pak-wahyu {
    /*border: 1px solid red;*/
    height: 100%;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 40px;
    padding-right: 40px;
    position: relative;
    bottom: 10px; 
  }

  .items {
    background-color: black;
  }

  .items .artc {
    width: 80%;
    padding: 20px;
    font-size: 15px;
    text-align: left;
    /*border-left: 1px solid black;
      border-right: 1px solid black;*/
    margin: auto;
    background-color: black;
    color: white;
    text-align: center;
 }

form {
  width: 100%;
  /*border: 1px solid black;*/
  color: white;
  padding-top: 0px;
  padding-left: 0px;
  padding-right: 0px;
  padding-bottom: 11px;
  font-family: 'Raleway', sans-serif;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[1];
  grid-template-columns: repeat(1, 1fr);
}

.insput {
  width: 15px;
  height: 15px;
  background-color: black;
  border-radius: 50%;
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  border: none;
}

.checkbox {
    display: flex;
    justify-content: center;
    align-items: center;
  padding-top: 0;
  padding-bottom: 0;
  padding-right: 0px;
  padding-left: 10px;
  margin-bottom: 10px;
  /*border:1px solid black;*/
}

.no {
  /*border: 1px solid black;*/
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 10px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #f53b57;
  font-weight: bold;
}

.absen_wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
 margin: auto;
 /*border: 1px solid red;*/
 margin-bottom: 0;
}

.nama_siswa {
  width: 130px;
  /*border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-right: 1px solid black;*/
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 10px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #3c40c6;
  font-size: 13px;
}

.submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 28px;
  border-radius: 5px;
  margin-right: 5px;
}

.date {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 13.5px;
  border-radius: 0px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: black;
  background-color:yellow;
  margin-left: 0px;
  height: 19px;
  border: none;
  border-radius: 5px;
}

.sbmt_wrapper {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-family: 'Roboto', sans-serif;
}

}

@media only screen and (min-device-width: 330px) and (max-device-width: 330px) {
    .submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 34px;
  border-radius: 5px;
  margin-right: 5px;
}
}

@media only screen and (min-device-width: 340px) and (max-device-width: 340px) {
    .submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 38px;
  border-radius: 5px;
  margin-right: 5px;
}
}

@media only screen and (min-device-width: 350px) and (max-device-width: 350px) {
    .submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 44px;
  border-radius: 5px;
  margin-right: 5px;
}
}

@media only screen and (min-device-width: 360px) and (max-device-width: 360px) {
    .pak-wahyu {
        grid-gap: 40px;
    }
    .submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 48px;
  border-radius: 5px;
  margin-right: 5px;
}
}

@media only screen and (min-device-width: 370px) and (max-device-width: 370px) {
    .submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 53px;
  border-radius: 5px;
  margin-right: 5px;
}
}

@media only screen and (min-device-width: 375px) and (max-device-width: 400px) {
  
  .navbar {
    width: 100%;
    display: block;
    /*border: 1px solid red;*/
    padding: 0;
  }

  .navbar .title {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    font-size: 30px;
    padding-top: 40px;
    padding-bottom: 10px;
    padding-left: 0px;
    padding-right: 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Montserrat', sans-serif;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
    color: black;
    text-align: center;
    font-weight: bold;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    margin: auto;
  }

  .beranda {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  } 

  .materi {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  }

  .tentang-guru {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*padding-right: 30px;
      padding-left: 30px;*/
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .1;
        -ms-flex: .1;
            flex: .1;
    color: black;
    padding: 20px;
  }

  .nav {
    height: 500px;
    /*border: 1px solid red;*/
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 20px;
  }

  .desc h1 {
    text-align: center;
    padding-right: 5px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    font-size: 40px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 5px;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
    background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
  } 

  .desc p {
    width: 250px;
    /*border: 1px solid red;*/
    text-align: justify;
    line-height: 30px;
    font-family: 'Roboto', sans-serif;
  }

  .desc a {
    text-decoration: none;
    color: white;
  }

  .sidebar {
    display: none;
  }

  .hero-images {
    height: 500px;
    width: 100%;
    background-color: white;
    /*border: 1px solid red;*/
    height: 500px;
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    /*justify-content: center;*/
    position: relative;
    right: 0px;
  }

  .materi-pembelajaran h1, .xde {
    text-align: center;
    font-size: 20px;
    color: black;
    font-family: 'Raleway', sans-serif;
    padding: 40px
  }

  .pak-wahyu {
    /*border: 1px solid red;*/
    height: 100%;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 40px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 40px;
    padding-right: 40px;
    position: relative;
    bottom: 10px; 
  }

  .items {
    background-color: black;
  }

  .items .artc {
    width: 80%;
    padding: 20px;
    font-size: 15px;
    text-align: left;
    /*border-left: 1px solid black;
      border-right: 1px solid black;*/
    margin: auto;
    background-color: black;
    color: white;
    text-align: center;
 }

 form {
  width: 100%;
  /*border: 1px solid black;*/
  color: white;
  padding-bottom: 20px;
  font-family: 'Raleway', sans-serif;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[1];
  grid-template-columns: repeat(1, 1fr);
  padding-top: 0px;
  padding-bottom: 10px;
  padding-left: 0px;
  padding-right: 0px;
}

@media only screen and (min-device-width: 385px) and (max-device-width: 385px) {
    .submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 53px;
  border-radius: 5px;
  margin-right: 5px;
}
}

input[type=radio] {
  width: 20px;
  height: 20px;
 /* border-radius: 50%;*/
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  border: none;
  /*border-bottom: 5px solid red;*/
  /*padding: 20px;*/
  padding: 20px;
}

.checkbox {
    display: flex;
    justify-content: center;
    align-items: center;
  padding-top: 0;
  padding-bottom: 0;
  padding-right: 0px;
  padding-left: 10px;
  margin-bottom: 10px;
  /*border:1px solid black;*/
}

.no {
  /*border: 1px solid black;*/
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 10px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #f53b57;
  font-weight: bold;
}

.absen_wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
 margin: auto;
 /*border: 1px solid red;*/
 margin-bottom: 0;
}

.nama_siswa {
  width: 180px;
  /*border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-right: 1px solid black;*/
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 10px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #3c40c6;
  font-size: 13px;
}

.submist {
  margin: auto;
  border: none;
  border-radius: 0px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 28px;
  border-radius: 5px;
  margin-right: 5px;
}

.date {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 13.5px;
  border-radius: 0px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: black;
  background-color:yellow;
  margin-left: 0px;
  height: 19px;
  border: none;
  border-radius: 5px;
}

.sbmt_wrapper {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-family: 'Roboto', sans-serif;
}

}

@media only screen and (min-device-width: 425px) and (max-device-width: 600px) {
  
  .navbar {
    width: 100%;
    display: block;
    /*border: 1px solid red;*/
    padding: 0;
  }

  .navbar .title {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    font-size: 30px;
    padding-top: 40px;
    padding-bottom: 10px;
    padding-left: 0px;
    padding-right: 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Montserrat', sans-serif;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
    color: black;
    text-align: center;
    font-weight: bold;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    margin: auto;
  }

  .beranda {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  } 

  .materi {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  }

  .tentang-guru {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*padding-right: 30px;
      padding-left: 30px;*/
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .1;
        -ms-flex: .1;
            flex: .1;
    color: black;
    padding: 20px;
  }

  .nav {
    height: 500px;
    /*border: 1px solid red;*/
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 20px;
  }

  .desc h1 {
    text-align: center;
    padding-right: 5px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    font-size: 50px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 5px;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
    background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
  } 

  .desc p {
    width: 300px;
    /*border: 1px solid red;*/
    text-align: justify;
    line-height: 30px;
    font-family: 'Roboto', sans-serif;
  }

  .desc a {
    text-decoration: none;
    color: white;
  }

  .sidebar {
    display: none;
  }

  .hero-images {
    height: 500px;
    width: 99.25%;
    background-color: white;
    /*border: 1px solid red;*/
    height: 500px;
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    /*justify-content: center;*/
    position: relative;
    right: 0px;
  }

  .materi-pembelajaran h1, .xde {
    text-align: center;
    font-size: 20px;
    color: black;
    font-family: 'Raleway', sans-serif;
    padding: 40px;
  }

  .pak-wahyu {
    /*border: 1px solid red;*/
    height: 100%;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 40px;
    padding-right: 40px;
    position: relative;
    bottom: 10px; 
  }

  .items {
    background-color: black;
  }

  .items .artc {
    width: 80%;
    padding: 20px;
    font-size: 15px;
    text-align: left;
    /*border-left: 1px solid black;
      border-right: 1px solid black;*/
    margin: auto;
    background-color: black;
    color: white;
    text-align: center;
 }

 form {
  width: 100%;
  /*border: 1px solid black;*/
  color: white;
  padding-top: 0px;
  padding-bottom: 10px;
  padding-left: 0px;
  padding-top: 0px;
  font-family: 'Raleway', sans-serif;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[1];
  grid-template-columns: repeat(1, 1fr);
}

.insput {
  width: 15px;
  height: 15px;
  background-color: black;
  border-radius: 50%;
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  border: none;
}

.checkbox {
  padding-top: 0px;
  padding-bottom: 0px;
  padding-left: 10px;
  padding-right: 0px;
  margin-bottom: 10px;
  /*border: 1px solid red;*/
}

.no {
  /*border: 1px solid black;*/
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 10px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #f53b57;
  font-weight: bold;
}

.absen_wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
 margin: auto;
 /*border: 1px solid red;*/
 margin-bottom: 0;
}

.nama_siswa {
  width: 230px;
  /*border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-right: 1px solid black;*/
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 10px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #3c40c6;
  font-size: 15px;
}

.submist {
  margin: auto;
  border: none;
  border-radius: 5px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 29px;
  margin-right: 5px;
}

.date {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  color: black;
  padding: 13.5px;
  border-radius: 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: blacks;
  background-color: yellow;
  margin-left: 69px;
  height: 19px;
}

.sbmt_wrapper {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-family: 'Roboto', sans-serif;
}

}

@media only screen and (min-device-width: 601px) and (min-device-width: 768px) {
  
  .navbar {
    width: 100%;
    display: block;
    /*border: 1px solid red;*/
    padding: 0;
  }

  .navbar .title {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    font-size: 30px;
    padding-top: 40px;
    padding-bottom: 10px;
    padding-left: 0px;
    padding-right: 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Montserrat', sans-serif;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
    color: black;
    text-align: center;
    font-weight: bold;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    margin: auto;
  }

  .beranda {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  } 

  .materi {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  }

  .tentang-guru {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*padding-right: 30px;
      padding-left: 30px;*/
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .1;
        -ms-flex: .1;
            flex: .1;
    color: black;
    padding: 20px;
  }

  .nav {
    height: 460px;
    /*border: 1px solid red;*/
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 20px;
    width: 94.5%;
    position: relative;
    left:0px;
  }

  .desc h1 {
    text-align: center;
    padding-right: 5px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    font-size: 50px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 5px;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
    background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
  } 

  .desc p {
    width: 400px;
    /*border: 1px solid red;*/
    text-align: justify;
    line-height: 30px;
    font-family: 'Roboto', sans-serif;
  }

  .desc a {
    text-decoration: none;
    color: white;
  }

  .sidebar {
    display: none;
  }

  .hero-images {
    height: 500px;
    width: 99.7%;
    background-color: white;
    /*border: 1px solid black;*/
    background-position: center;
    background-size: cover;
    display: block;
    /*justify-content: center;*/
    position: relative;
    right: 0px;
    border: 0px solid yellow;
  }

  .materi-pembelajaran h1, .xde {
    text-align: center;
    font-size: 20px;
    color: black;
    font-family: 'Raleway', sans-serif;
    padding: 40px;
  }

  .pak-wahyu {
    /*border: 1px solid red;*/
    height: 100%;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 20px 1fr;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 40px;
    padding-right: 40px;
    position: relative;
    bottom: 10px; 
  }

  .items {
    background-color: black;
  }

  .items .artc {
    width: 80%;
    padding: 20px;
    font-size: 15px;
    text-align: left;
    /*border-left: 1px solid black;
      border-right: 1px solid black;*/
    margin: auto;
    background-color: black;
    color: white;
    text-align: center;
 }

  form {
  width: 100%;
  /*border: 1px solid black;*/
  color: white;
  padding-top: 0;
  padding-bottom: 20px;
  padding-left: 0px;
  padding-right: 0px;
  font-family: 'Raleway', sans-serif;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[2];
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 0px;
}

.insput {
  width: 15px;
  height: 15px;
  background-color: black;
  border-radius: 50%;
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  border: none;
}

.checkbox {
  padding-top: 0px;
  padding-bottom: 0px;
  padding-left: 10px;
  padding-right: 10px;
  margin-bottom: 20px;
  /*border: 1px solid red;*/
  display: flex;
  justify-content: center;
  align-items: center;
}

.no {
  /*border: 1px solid black;*/
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #f53b57;
  font-weight: bold;
}

.absen_wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
 margin: auto;
 /*border: 1px solid red;*/
 margin-bottom: 0;
}

.nama_siswa {
  width: 180px;
  /*border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-right: 1px solid black;*/
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #3c40c6;
  font-size: 15px;
}

.submist {
  margin: auto;
  border: none;
  border-radius: 5px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-left: 29px;
  margin-right: 5px
}

.date {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  color: red;
  padding: 13.5px;
  border-radius: 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: black;
  background-color: yellow;
  margin-left: 69px;
  height: 19px;
}

.sbmt_wrapper {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-family: 'Roboto', sans-serif;
}

}

@media only screen and (min-device-width: 769px) and (max-device-width: 1024px) {
  
  .navbar {
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    /*border: 1px solid red;*/
    padding: 0;
  }

  .navbar .title {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    font-size: 30px;
    padding: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Montserrat', sans-serif;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
    color: black;
    text-align: center;
    font-weight: bold;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    margin: auto;
    text-indent: 50px;
  }

  .beranda {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  } 

  .materi {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  }

  .tentang-guru {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*padding-right: 30px;
      padding-left: 30px;*/
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .1;
        -ms-flex: .1;
            flex: .1;
    color: black;
    padding: 20px;
    margin-right: 40px;
  }

  .nav {
    height: 460px;
    /*border: 1px solid red;*/
    background-position: center;
    background-size: cover;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding: 20px;
    width: 94.5%;
    position: relative;
    left:0px;
  }

  .desc h1 {
    text-align: center;
    padding-right: 5px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    font-size: 50px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 5px;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
    background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
  } 

  .desc p {
    width: 400px;
    /*border: 1px solid red;*/
    text-align: justify;
    line-height: 30px;
    font-family: 'Roboto', sans-serif;
  }

  .desc a {
    text-decoration: none;
    color: white;
  }

  .sidebar {
    display: none;
  }

  .hero-images {
    height: 500px;
    width: 99.7%;
    background-color: white;
    /*border: 1px solid black;*/
    background-position: center;
    background-size: cover;
    display: block;
    /*justify-content: center;*/
    position: relative;
    right: 0px;
    border: 0px solid yellow;
  }

  .materi-pembelajaran h1, .xde {
    text-align: center;
    font-size: 20px;
    color: black;
    font-family: 'Raleway', sans-serif;
    padding: 40px;
  }

  .pak-wahyu {
    /*border: 1px solid red;*/
    height: 100%;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 20px 1fr 20px 1fr;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 40px;
    padding-right: 40px;
    position: relative;
    bottom: 10px; 
  }

  .items {
    background-color: black;
  }

  .items .artc {
    width: 80%;
    padding: 20px;
    font-size: 15px;
    text-align: left;
    /*border-left: 1px solid black;
      border-right: 1px solid black;*/
    margin: auto;
    background-color: black;
    color: white;
    text-align: center;
 }

 form {
  width: 95.9%;
  /*border: 1px solid black;*/
  color: white;
  padding: 0;
  font-family: 'Raleway', sans-serif;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[3];
  grid-template-columns: repeat(3, 1fr);
  padding: 20px;
}

.insput {
  width: 15px;
  height: 15px;
  background-color: black;
  border-radius: 50%;
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  border: none;
}

.checkbox {
  padding: 20px;
  margin-bottom: 20px;
  /*border: 1px solid red;*/
}

.no {
  /*border: 1px solid black;*/
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #f53b57;
  font-weight: bold;
}

.absen_wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
 margin: auto;
 /*border: 1px solid red;*/
 margin-bottom: 0;
}

.nama_siswa {
  width: 161px;
  /*border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-right: 1px solid black;*/
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #3c40c6;
  font-size: 13px;
}

.submist {
  margin: auto;
  border: none;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  /*position: relative;
  left: 2px;*/
  margin-right: 5px
}

.date {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  color: red;
  padding: 13.5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: black;
  background-color: yellow;
  margin-left: 69px;
  height: 19px;
  position: relative;
  left: 0px;
}

.sbmt_wrapper {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-family: 'Roboto', sans-serif;
}

}

@media only screen and (min-width: 1200px) {
  
  .navbar {
    width: 96.5%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    /*border: 1px solid red;*/
    padding: 20px;
  }

  .navbar .title {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    font-size: 30px;
    padding: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Montserrat', sans-serif;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    /*background: linear-gradient(to right, #ff416c, #ff4b2b);*/
    color: black;
    text-align: center;
    font-weight: bold;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    margin: auto;
  }

  .beranda {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  } 

  .materi {
    /*padding-right: 30px;
      padding-left: 30px;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .5;
        -ms-flex: .5;
            flex: .5;
    color: black;
    padding: 20px;
  }

  .tentang-guru {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    /*padding-right: 30px;
      padding-left: 30px;*/
    /*border: 1px solid red;*/
    font-family: 'Raleway', sans-serif;
    -webkit-box-flex: .1;
        -ms-flex: .1;
            flex: .1;
    color: black;
    padding: 20px;
  }

  .nav {
  /*flex: 1;*/
  height: 625px;
  /*border: 1px solid red;*/
  background-position: center;
  background-size: cover;
  -webkit-box-flex: .44;
      -ms-flex: .44;
          flex: .44;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  /*padding: 40px;*/
  z-index: 9999;
  position: relative;
  left: 50px;
}

  .desc h1 {
    text-align: center;
    padding-right: 5px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    font-size: 50px;
    font-family: 'Montserrat', sans-serif;
    letter-spacing: 5px;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(255, 255, 255, 0)), color-stop(60%, yellow));
    background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 60%, yellow 60%);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, yellow 60%);
  } 

  .desc p {
  width: 400px;
  /*border: 1px solid red;*/
  text-align: justify;
  line-height: 30px;
  font-family: 'Roboto', sans-serif;
}

  .desc a {
    text-decoration: none;
    color: white;
  }

  .sidebar {
    display: block;
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
  }

  .hero-images {
  width: 99.7%;
  backgrund-color: white;
  /*border: 1px solid red;*/
  height: 625px;
  background-position: center;
  background-size: cover;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  /*justify-content: center;*/
  position: relative;
  right: 0px;
}

  .materi-pembelajaran h1, .xde {
  text-align: center;
  font-size: 30px;
  color: black;
  padding: 40px;
  font-family: 'Raleway', sans-serif;
  /*border: 1px solid red;*/
}

  .pak-wahyu {
  /*border: 1px solid red;*/
  height: 100%;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: 1fr 20px 1fr 20px 1fr;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 80px;
  padding-right: 80px;
  position: relative;
  bottom: 10px;
}

  .items {
    background-color: black;
  }

  .items .artc {
    width: 80%;
    padding: 20px;
    font-size: 15px;
    text-align: left;
    /*border-left: 1px solid black;
      border-right: 1px solid black;*/
    margin: auto;
    background-color: black;
    color: white;
    text-align: center;
 }

 form {
  width:1300px;
  /*border: 1px solid red;*/
  color: white;
  padding: 20px;
  font-family: 'Raleway', sans-serif;
  margin: auto;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[3];
  grid-template-columns: repeat(3, 1fr);
}

.insput {
  width: 25px;
  height: 25px;
  background-color: black;
  border-radius: 50%;
  -webkit-transition: .5s;
  -o-transition: .5s;
  transition: .5s;
  border: none;
}

.checkbox {
  padding: 20px;
  margin-bottom: 20px;
  /*border: 1px solid red;*/
}

.no {
  /*border: 1px solid black;*/
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #f53b57;
  font-weight: bold;
}

.absen_wrapper {
  /*display: flex;*/
  margin: auto;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (1fr)[3];
  grid-template-columns: repeat(3,1fr);
}

.nama_siswa {
  width: 260px;
  /*border-top: 1px solid black;
  border-bottom: 1px solid black;
  border-right: 1px solid black;*/
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 20px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  background-color: #3c40c6;
}

.submist {
  margin: auto;
  border: none;
  border-radius: 5px;
  background-color: #1e272e;
  color: white;
  outline: none;
  float: left;
  padding: 15.3px;
  font-family: 'Roboto', sans-serif;
  margin-right: 5px;
}

.date {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  color: red;
  padding: 13.5px;
  border-radius: 5px
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: black;
  background-color: yellow;
  margin-left: 69px;
  height: 19.9px;
}

.sbmt_wrapper {
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  font-family: 'Roboto', sans-serif;
}

.absen_wrapper {
  /*border: 1px solid red;*/
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

}
    </style>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
</head>
<body>
    
    <div class="container">
            <div class="navbar">
                
                <h1 class="title">XI TKJ 1</h1>
                <a href="#">
                    <div class="beranda">Beranda</div>
                </a>
                <a href="#">
                    <div class="materi">Materi</div>
                </a>
                <a href="#absen">
                    <div class="materi">Absen</div>
                </a>
                <a href="#">
                    <div class="tentang-guru">Login</div>
                </a>

            </div>

            <div class="hero-images">
                <div class="nav">
                    <div class="desc">
                        <h1>Welcome.</h1>
                        <br>
                        <p>
                            Selamat Datang di Website <mark>E-Learning</mark> kelas <mark>XI TKJ 1.</mark> Website ini merupakan sarana pendukung daripada <mark>Google Classroom.</mark> Website ini bisa digunakan untuk mempelajari materi - materi yang telah diberikan oleh guru produktif serta bisa juga digunakan untuk melakukan absensi untuk jam pelajaran produktif.
                        </p>
                        <br>
                        <div class="hdr-button">
                              <a href="#materi">
                                <div class="learn-more">
                                    Jelajahi Materi
                                </div>
                            </a>
                            <a href="#absen">
                                <div class="abs">
                                    Absen
                                </div>
                            </a>  
                        </div>
                    </div>
                </div>
                <div class="sidebar"></div>
            </div>

            <div class="materi-pembelajaran">

                <h1>Materi Pembelajaran</h1>

                <div class="pak-wahyu">
                            
                                <div class="items">
                                    <div class="thumbnail">
                                    </div>
                                    <h1 class="artc">
                                    Media Transmisi</h1>
                                </div>
                                <div class="items">
                                    <div class="thumbnail-2">
                                    </div>
                                    <h1 class="artc">
                                    Kelas IP Address</h1>
                                </div>
                                <div class="items">
                                    <div class="thumbnail-3">
                                    </div>
                                    <h1 class="artc">
                                    IP Address versi 4</h1>
                                </div>
                                <div class="items">
                                    <div class="thumbnail-3">
                                    </div>
                                    <h1 class="artc">
                                    Mengenal IP Address</h1>
                                </div>
                                <div class="items">
                                    <div class="thumbnail">
                                    </div>
                                    <h1 class="artc">
                                    Komunikasi Data</h1>
                                </div>
                                <div class="items">
                                    <div class="thumbnail-2">
                                    </div>
                                    <h1 class="artc">
                                    Konsep Jaringan</h1>
                                </div>
                                <div class="items">
                                    <div class="thumbnail-3">
                                    </div>
                                    <h1 class="artc">
                                    VLAN</h1>
                                </div>

                </div>

            </div>

            <h1 class="xde" id="absen">Absen</h1>

            <?php

  //mengambil koneksi dari koneksi.php
  include 'koneksi.php';

  ?>

  <?php
  $sql="select no_absen,nama from siswa";
  $result = $conn->query($sql);
  if ($result->num_rows>0) {
   echo "<form action='' method='get'>";
     $no = 0;
     while ($row = $result->fetch_assoc()) {
      echo "<div class='absen_wrapper'>";
        echo "<div class='no'>";
          echo $row['no_absen'];
        echo ".</div>";
        echo "<div class='nama_siswa'>";
          echo $row['nama'];
        echo "</div>";
        echo "<div class='checkbox'>";
          echo "<input type='radio' class='insput' name='nama[]' value='".$row['nama']."'/><br/>";
        echo "</div>";
        $no++;
      echo "</div>";
     }
     echo "<div class='sbmt_wrapper'>";
      echo "<input type='submit' class='submist' name='submit'/>";
      if (isset($_GET['submit'])) {
       $date = date("Y - m - d");
       echo "<div class='date'>";
       echo $date."<br/>";
       echo "</div>";
       $ket = 'Hadir';
       foreach ($_GET['nama'] as $nama) {
        $insert = "insert into absen values('".$nama."','".$ket."','".$date."')";
        if ($conn->query($insert)===TRUE) {
        }
        else{
         echo "error".$isert."<br/>".$conn->error;
        }
       }
      }
      //menutup koneksi
      $conn->close();
    echo "</div>";
   echo "</form>";
  }
  ?>

  <?php
  

 ?>


            <!-- <div class="footer">
                <div class="copyright">
                    <p>&copy</p> <h1>XI TKJ 1.</h1>
                </div>
            </div> -->



        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
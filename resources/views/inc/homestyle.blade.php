<style>
    
h1, h2, h3, h4, h5, h6 { font-family: 'Questrial', sans-serif; font-weight: 600; margin: 0px; line-height: 1.5; color: #374948; }
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: inherit; }
label { font-weight: normal; }
h1 { font-size: 3.052em; }
h2 { font-size: 2.300em; }
h3 { font-size: 1.953em; }
h4 { font-size: 1.400em; }
h5 { font-size: 1.200em; }
h6 { font-size: 1.0em; }
    .titles{
        color:#2b2732;
        font-weight: bold;
        
    }
    /*Gallery*/
    .row.bottom{
        padding-left:15px;
        padding-right:15px;
    }            
* {
  box-sizing: border-box;
}


/* Position the image container (needed to position the left and right arrows) */
.container.gallery {
  position: relative;
  margin-top: 40px;
  margin-bottom: 40px;
  padding-top: 30px;
}

/* Hide the images by default */
div.mySlides {
  display: none;
  box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
}
div.mySlides h4{
    color: #090909;
    font-weight: bold;
    font-size: 20px;
}
div.mySlides p{
    color: #A6A5A5;
    font-size: 15px;
    padding-left: 80px;
    padding-right: 80px;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Container for image text 
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: #454242;
}
*/
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 25%;
  text-align: center;
  padding-bottom: 40px;
}
.column .btn.btn-default.btn-lg{
    border-radius: 0;
    background: #ffffff;
    border: none;
    font-size: 12px;
    color: rgba(68, 221, 97, 0.92);
    font-weight: bold;


}
.column button.btn.btn-default.btn-lg:hover{
    border-radius: 0;
    border: none;

}

/* Add a transparency effect for thumnbail images */
.demo{
  opacity: 0.6;
  color: grey;
}

.active,
.demo:hover {
  opacity: 1;
}
body{
                background:linear-gradient(rgb(11, 15, 236),rgba(1, 1, 44, 0.719)), url('img/bg2.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                background-attachment:fixed;
                }
div.container-fluid.main{
                padding-bottom: 200px;
                background:linear-gradient(rgb(11, 15, 236),rgba(1, 1, 44, 0.719)), url('img/bg2.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                background-attachment:fixed;
                color: #ffa500;

}
div.container-fluid.main .container{
    padding-top: 50px;
}
div.container-fluid.main .container div.col-sm-4 {
  text-align: center;
  padding-top: 30px;
  padding-bottom: 30px;
  background-color: transparent;
  border-radius: 20px;
}
div.container-fluid.main .container div.col-sm-4:hover{
  text-align: center;
  background-color: transparent;
  padding-top: 30px;
  padding-bottom: 30px;
  border-radius: 0px;
}
h1.spot{
    font-weight: bold;
    font-size: 65px;
    line-height: 2em;
    color: #ffa500;
    font-family: 'Grenze', serif;
}
h1.spot a,
h1.spot a:hover{
    text-decoration: none;
}
h3.subtheme{
    color:#ffa6009b;
    font-weight: bold;
    font-family: 'Grenze', serif;
    line-height: 2em;
    word-spacing: 10px;
}
div.container-fluid.main p{
    padding-right: 90px;
}
a.btn.btn-success{
    background: #ffa500;
    border-radius: 0;
    border-color: #ffa500;
    margin-top: 20px;
    font-weight: bold;
}
a.btn.btn-success:hover{
    background: transparent;
    border-radius: 0;
    color: #ffa500;
}
a.btn.btn-success.pull-left{
    margin-left: 0px;

}
p.btn.btn-info{
    background: #eee1e1;
    padding: 10px 30px;
    border-radius: 20px;
    margin-bottom: 10px;
    color: #ffa500;
    border-color: #ffa500;
    font-weight: bold;

}
p.text-justify{
    padding: 10px;
    font-size: 18px;
}
a.btn.btn-success.pull-right.transparent{
    margin-right: 300px;
    background: transparent;
    border-color: #ffa500;
    color: #ffa500;
    font-weight: bold;

}
a.btn.btn-success.pull-right.transparent:hover{
    background:#ffa500;
    border-color: #ffa500;
    color: #fff;

}
    
    @media only screen and (max-width: 768px) {
body{
                background:linear-gradient(rgb(11, 15, 236),rgba(1, 1, 44, 0.719)), url('img/bg2.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                background-attachment:fixed;
                }
div.container-fluid.main{
                padding-bottom: 20px;
                background:linear-gradient(rgb(11, 15, 236),rgba(1, 1, 44, 0.719)), url('img/bg2.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                background-attachment:fixed;
                color: #ffa500;

}
div.container-fluid.main .container{
    padding-top: 20px;
}
div.container-fluid.main .container div.col-sm-4{
  text-align: center;
  padding-top: 30px;
  padding-bottom: 30px;
  background-color: transparent;
  border-radius: 20px;
  margin-top: 200px;
    display: none;
}
h1.spot{
    font-weight: bold;
    font-size: 30px;
    line-height: 1.3em;
    color: #ffa500;
    font-family: 'Grenze', serif;
}
h3.subtheme{
    color:#ffa6009b;
    font-weight: bold;
    font-family: 'Grenze', serif;
    line-height: 2em;
    word-spacing: 10px;
}
div.container-fluid.main p{
    padding: 0px;
    font-size: 15px;
    line-height: 1.5em;

}
a.btn.btn-success{
    background: #ffa500;
    border-radius: 0;
    border-color: #ffa500;
    margin-top: 20px;
    font-weight: bold;
}
a.btn.btn-success:hover{
    background: transparent;
    border-radius: 0;
    color: #ffa500;
}
a.btn.btn-success.pull-left{
    margin-left: 0px;

}
p.btn.btn-info{
    background: #eee1e1;
    padding: 10px 10px;
    border-radius: 20px;
    margin-bottom: 10px;
    color: #ffa500;
    border-color: #ffa500;
    font-weight: bold;
    display: none;

}
a.btn.btn-success.pull-right.transparent{
    margin-right: 66px;
    margin-top: 50px;
    margin-bottom: 200px;
    background: transparent;
    border-color: #ffa500;
    color: #ffa500;
    font-weight: bold;

}
a.btn.btn-success.pull-right.transparent:hover{
    background:#ffa500;
    border-color: #ffa500;
    color: #fff;

}
    }
</style>
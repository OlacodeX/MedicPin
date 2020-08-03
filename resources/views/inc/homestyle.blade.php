<style>
    
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
    margin-right: 360px;
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
        
        /* Bottom left text */
        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 5px;
        }
        .bottom-left h4{
            font-weight: bold;
        }
        .bottom-left .fa{
            font-weight: 200;
            font-size: 30px;
        }
        
        /* Top left text */
        .top-left {
            position: absolute;
            top: 0px;
            padding: 10px;
            left: 0px;
            background: rgba(240, 245, 241, 0.92);
        }
        
        .top-left b{
            color: rgba(68, 221, 97, 0.92);
            font-size: 30px;
            padding-left: 10px;
        }
        .top-left .btn.btn-primary{
            background: #272E4F;
            border-radius: 0;
            color: white;
            border: none;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .bottom-left{
            color: rgba(68, 221, 97, 0.92);
            font-weight: bold;
            padding-left: 15px;
        }
        .bottom-left .btn.btn-default{
            border: none;
            background: #272E4F;
            font-size: 15px;
            margin-left: 0;
            margin-right: 90px;
            color: #f1f1f1;
            font-weight: bold;
            margin-top: 0;
            border-radius: 0
        }
        .container-fluid.event .col-sm-3.second .bottom-left .btn.btn-default{
            border-radius: 100%;
            padding: 0px 3px;
            border: none;
            font-size: 15px;
            margin-left: 0;
            margin-right: 110px;
        }
        .container-fluid.event .col-sm-3.third .bottom-left .btn.btn-default{
            border-radius: 100%;
            padding: 0px 3px;
            border: none;
            font-size: 15px;
            margin-left: 0;
            margin-right: 140px;
        }
        .container-fluid.services div.col-sm-3.one{
                background:linear-gradient(rgba(253, 253, 253, 0),rgba(12, 1, 1, 0.514)), url('img/web.jpeg') no-repeat;
                background-size: cover;
                background-position: center;
                padding-bottom: 200px;
                }
        .container-fluid.services div.col-sm-3.two{
                background:linear-gradient(rgba(253, 253, 253, 0),rgba(12, 1, 1, 0.514)), url('img/webm.jpeg') no-repeat;
                background-size: cover;
                background-position: center;
                padding-bottom: 200px;
                }
        .container-fluid.services div.col-sm-3.three{
                background:linear-gradient(rgba(253, 253, 253, 0),rgba(12, 1, 1, 0.514)), url('img/seo.jpeg') no-repeat;
                background-size: cover;
                background-position: center;
                padding-bottom: 200px;
                }
        .container-fluid.services div.col-sm-3.four{
                background:linear-gradient(rgba(253, 253, 253, 0),rgba(12, 1, 1, 0.514)), url('img/gr.jpeg') no-repeat;
                background-size: cover;
                background-position: center;
                padding-bottom: 200px;
                }
        
        .bottom-left .glyphicon.glyphicon-menu-right{
            font-size: 13px;
        }

    .container-fluid.services .jumbotron{
        background: transparent;
        height: 200px;
        padding-bottom: 10px;
    }
    .container-fluid.services .jumbotron h3{
        padding-top: 10px;
        padding-bottom: 50px;
        font-size: 35px;
        line-height: 2em;
        color: #2b2732;
    }
    .container-fluid.services .col-sm-3{
        background: #FAF8F8;
        padding-top: 100px;
        padding-bottom: 100px;
    }
    .container-fluid.services .col-sm-3 p{
        text-align: center;
        line-height: 2em;
        font-size: 25px;
        font-weight: normal;
        color: #A6A5A5;
    }
    .container-fluid.services .column button.btn.btn-default.btn-lg{
        background: transparent;
        border: none;
    }
    .container-fluid.services .column button.btn.btn-default.btn-lg .fa{
        font-size: 30px;
    }
    .container-fluid.services .column button.btn.btn-default.btn-lg .active{
        color: rgba(68, 221, 97, 0.92);
    }

        .container-fluid.why .container.pricing{
            padding-top: 50px;
            padding-bottom: 100px;
        }
        .container-fluid.why{
            padding-bottom: 150px;
            padding-top: 60px;
        }
        .container-fluid.why .col-sm-8 h6{
            color: #A6A5A5;
        }
        .container-fluid.why .col-sm-8 .col-sm-6 h6{
            color: rgba(68, 221, 97, 0.92);
            line-height: 2em;
            font-size: 20px;
            font-weight: bold;
        }
        .container-fluid.why .col-sm-8 .col-sm-6 .fa{
            color: rgba(68, 221, 97, 0.92);
            line-height: 2em;
            font-size: 40px;
            font-weight: bold;
        }
        .container-fluid.why .col-sm-8 h4{
            color:#2b2732;
            font-weight: bold;
        }
        .container-fluid.why .col-sm-4 img{
            padding-top: 20px;
            height: 400px;
            transform: rotate(10deg);
        }
        li{
            list-style: square;
        }
        li.green{
            color: rgba(68, 221, 97, 0.92);
        }
        .container.pricing .panel-default{
        box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
        text-align: justify;

        }
        .container.pricing .panel-default:hover{
        box-shadow:none;
        text-align: justify;

        }
        .container.pricing .col-sm-4 .panel-default .panel-body h2{
            color: rgba(68, 221, 97, 0.92);
            font-size: 20px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .container.pricing .col-sm-4 .panel-default .panel-body h2 span{
            color: rgba(68, 221, 97, 0.92);
            font-size: 12px;
        }
        hr.hrr {
         height: 2px;
         color: rgba(68, 221, 97, 0.92);
        background-color: rgba(68, 221, 97, 0.92);
        border: none;
       }
        .text-center p.pad{
            padding-left: 120px;
            padding-right: 120px;
            padding-top: 15px;
        }
        .fa.fa-ellipsis-h{
            font-size: 50px;
        }     
          .fa.fa-ellipsis-h.green{
            font-size: 50px;
            color: rgba(68, 221, 97, 0.92);
        }
    .container-fluid.portfolio{
        padding-left: 0;
        padding-right: 0;
        text-align: center;
    }
    .container-fluid.portfolio .btn.btn-success:hover{
        color: #eee;
    }
    .container-fluid.portfolio .col-sm-3{
        padding-left: 0;
        padding-right: 0;
    }
    .container-fluid.portfolio .col-sm-3 img{
        height: 200px;
        width: 102%;
    }
    
    .container-fluid.bg{
        background: rgba(68, 221, 97, 0.92);
        text-align: center;
        color: #fff;
    }
    .container-fluid.bg h3{
        padding-bottom: 15px;
    }
    .container-fluid.bg p{
        padding-bottom: 25px;
    }
    .container.folio {
  position: relative;
  width: 100%;
  margin: 0;
  padding: 0;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: rgba(68, 221, 97, 0.92);
  color: #eee;
}
.overlay p{
    padding-top: 80px;
}
.container.folio:hover .overlay {
  opacity: 1;
}

.icon {
  color: white;
  font-size: 40px;
  position: absolute;
  left: 50%;
  padding-bottom: 20px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
            .container-fluid.blog{
                background: aliceblue;
                padding-top: 70px;
                padding-bottom: 80px;
            }
            .container-fluid.blog div.text-center{
                padding-bottom: 60px;
            }
            .container.blog{
                padding-left: 120px;
                padding-right: 120px;
            }
            .container.blog .panel-default{
                width: 450px;
                box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
            }
            .container.blog .panel-default:hover{
                
                box-shadow:none;
            }
            .btn.btn-success.transparent{
                background: transparent;
                color: rgba(68, 221, 97, 0.92);
            }
            .btn.btn-success.transparent:hover{
                background: rgba(68, 221, 97, 0.92);
                color: #eee;
            }
            .container.blog .panel-default .panel-body img{
                width: 450px;
                height: 300px;
            }
            .container.blog .panel-default .panel-body{
                margin-bottom: 0;
                padding-bottom: 0;
                padding-left: 0;
                border:none;
            }
            .container.blog .panel-default .panel-footer{
                margin-top: 0;
                width: 450px;
                background: #ffffff;
                margin-bottom: 50px;
                border:none;
                padding-bottom: 30px;
            }
            .container.blog .panel-default .panel-footer .fa{
                color: rgba(68, 221, 97, 0.92);
            }
            .container.blog .panel-default .panel-footer span{
                color:#A6A5A5;
            }
            .container.blog .panel-default .panel-footer p{
                color:#767677;
            }
    .container-fluid.contact{
        padding-bottom: 0px;
        padding-top: 0px;
        padding-right: 0;
    }
    .container-fluid.contact .col-sm-6.quick{
        box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
        padding: 50px;
        background: aliceblue;

    }
    .container-fluid.contact .col-sm-6{
        padding: 50px;
    }
    
@media only screen and (min-width: 600px) {
            .container.blog .btn.btn-success{
                margin-right: 50px;
            }
            .container.blog .panel-default{
                
                box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
            }
            .container.blog .panel-default:hover{
                
                box-shadow:none;
            }
            .container.blog .panel-default .panel-body img{
                
                width: 450px;
            }
            .container.blog .panel-default .panel-body{
                margin-bottom: 0;
                padding-bottom: 0;
                padding-left: 0;
            }
            .container.blog .panel-default .panel-footer{
                margin-top: 0;
                width: 450px;
                background: #ffffff;
                margin-bottom: 30px;
            }
        .container.pricing .col-sm-4 .panel-default .panel-body h2{
            color: rgba(68, 221, 97, 0.92);
            font-size: 11px;
            padding-top: 10px;
            padding-bottom: 15px;
        }
        
.btn.btn-success.pull-left{
    margin-left: 0px;
    font-size: 15px;

}
.btn.btn-success.pull-right.transparent{
    margin-right: 0px;
    background: transparent;
    border-color: rgba(68, 221, 97, 0.92);
    color: rgba(68, 221, 97, 0.92);
    font-weight: bold;
    font-size: 15px;

}
    .container-fluid.portfolio .btn.btn-success{
        margin-top: 0px;
    }
    .container-fluid.portfolio .col-sm-3 img{
        height: 250px;
        width: 102%;
    }
}
    @media only screen and (max-width: 768px) {
div.container-fluid.main{
                background:linear-gradient(rgba(253, 253, 253, 0.404),rgba(230, 227, 227, 0.514)), url('img/bg3.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                background-attachment:fixed;
                padding-bottom: 200px;

}
div.container-fluid.main .container{
    padding-top: 50px;
}
div.container-fluid.main .container div.col-sm-4 {
  text-align: center;
  background-color: #ffffff;
  padding-top: 30px;
  padding-bottom: 30px;
  border-radius: 20px;
}
div.container-fluid.main .container div.col-sm-4:hover{
  text-align: center;
  background-color: #ffffff;
  padding-top: 30px;
  padding-bottom: 30px;
  border-radius: 0px;
}
h1.spot{
    font-weight: bold;
    font-size: 45px;
    word-spacing: 2px;
    line-height: 2em;
    color: #2b2732;
    font-family: 'Grenze', serif;
}
h3.subtheme{
    color:rgba(68, 221, 97, 0.92);
    font-weight: bold;
    font-family: 'Grenze', serif;
    line-height: 2em;
    word-spacing: 5px;
}
div.container-fluid.main p{
    padding: 20px 10px 50px 10px;
    line-height: 1.9em;
    font-size: 15px;
}
.btn.btn-success.pull-left{
    margin-left: 20px;
    padding-left: 30px;
    padding-right: 30px;

}
.btn.btn-success.pull-right.transparent{
    margin-right: 5px;
    background: transparent;
    border-color: rgba(68, 221, 97, 0.92);
    color: rgba(68, 221, 97, 0.92);
    font-weight: bold;
    margin-top: 20px;

}
.btn.btn-success.pull-right.transparent:hover{
    margin-right: 5px;
    background:rgba(68, 221, 97, 0.92);
    border-color: rgba(68, 221, 97, 0.92);
    color: #fff;

}
div.container-fluid.main .container div.col-sm-4 {
  text-align: center;
  background-color: #ffffff;
  padding-top: 30px;
  padding-bottom: 100px;
  border-radius: 20px;
  margin-top: 100px;
}
div.container-fluid.main .container div.col-sm-4:hover{
  text-align: center;
  background-color: #ffffff;
  padding-top: 30px;
  padding-bottom: 100px;
  border-radius: 0px;
}
.column.one .btn.btn-default.btn-lg{
    margin-left: 0px;

}
.column.last .btn.btn-default.btn-lg{
    margin-right: 0px;

}

.column {
  float: none;
  width: 25%;
  text-align: center;
  padding-bottom: 40px;
}
.column.one{
    
    float: right;
}
.column.third{
    float: left;
}
.column.last{
    padding: 0;
    margin-left: 250px;
}


.text-center p.pad{
            padding-left: 70px;
            padding-right: 70px;
            padding-top: 15px;
        }
    .container-fluid.portfolio .col-sm-3 img{
        height: 200px;
        width: 100%;
    }     
         .container.blog{
                padding-left: 20px;
                padding-right: 20px;
            }  
            .container.blog .panel-default{
                 width: 300px;
                box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
            }
            .container.blog .panel-default .panel-body img{
                width: 300px;
            }
            .container.blog .panel-default .panel-body{
                margin-bottom: 0;
                padding-bottom: 0;
                padding-left: 0;
            }
            .container.blog .panel-default .panel-footer{
                margin-top: 0;
                width: 300px;
                background: #ffffff;
                margin-bottom: 30px;
            }
        .container.pricing .col-sm-4 .panel-default .panel-body h2{
            color: rgba(68, 221, 97, 0.92);
            font-size: 15px;
            padding-top: 10px;
            padding-bottom: 15px;
        }
    .container-fluid.contact .col-sm-6.quick{
        box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
        padding: 50px 50px 100px 50px;
        background: aliceblue;

    }
    }
</style>
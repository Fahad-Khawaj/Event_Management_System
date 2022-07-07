<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Organization</title>
        <?php require 'libraries/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'libraries/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'libraries/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			                       <!--WEDDING-->

            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/wedding2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Wedding</h1><!--title-->
                            <p><!--content-->
                            The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="bookevent.php"><button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Book Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button></a>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div> 
                                      <!--BIRTHDAY-->
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/birthday2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Birthday</h1><!--title-->
                            <p><!--content-->
                            Whether an all-day or the ultimate extravaganza that
                            lasts well into the wee hours, our Urban Events team is here to make sure all your birthday
                            party wishes come true so you can kick back, drink up and enjoy your special day!
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="bookevent.php"><button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Book Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button></a>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
                                           <!--FASHION-->
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/fashion2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Fashion</h1><!--title-->
                            <p><!--content-->
                            Fast becoming to go-to location for fashion events, PR gatherings and product launches, 
                            The Urban Purveyor Group venues provide you with choice and quality in premium locations 
                            for all your event needs.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="bookevent.php"><button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Book Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button></a>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>
                                  <!--MEETING-->
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/meeting2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Meeting</h1><!--title-->
                            <p><!--content-->
                            From formal, to not-so-formal, our flexible event
                            spaces can cater to your every need for meetings and conferences large or small, and our
                            dedicated event team can assist with all aspects of your event planning.
                            </p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <a href="bookevent.php"><button type="button" class="btn btn-default btn-lg"><!--view event button (no function implemented)-->
                            Book Events  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon--> 
                            </button></a> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'libraries/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

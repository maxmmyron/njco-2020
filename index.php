<!DOCTYPE html>
<html>
    <head>
        <title>POPs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/build/bootstrap.min.css">
        <link rel="stylesheet" href="css/build/font-awesome.min.css">
        <link rel="stylesheet" href="css/build/flickity.min.css">

        <link rel="stylesheet" href="css/build/global.css">
        <link rel="stylesheet" href="css/build/index.css">
    </head>
    <body>
        <?php include('header.php') ?>
        <main class="w-100">
            <section class="w-100">
                <div class="d-flex flex-column flex-lg-row align-items-center w-100" id="landing">
                    <canvas id="POP-landing-canvas"></canvas>
                    <div class="d-flex justify-content-center">
                        <h1 id="landing-title" class="manrope font-weight-bolder color-title textsize-7em">Persistent<br>Organic<br>Pollutants</h1>
                    </div>
                </div>
            </section>
            <section class="w-100" style="background-color:#45ADA8">
                <div class="container">
                    <p class="manrope textsize-2em text-white mb-0">
                        "<span class="font-weight-bolder">Persistent Organic Pollutants</span> (POPs) are organic chemical substances, that is, they are carbon-based. They possess a particular combination of physical and chemical properties such that, once released into the environment, they
                        <ul class="manrope textsize-2em text-white ml-3 list-style-dash">
                            <li>
                                <span class="font-weight-bolder">remain intact</span> for exceptionally long periods of time (many years);
                            </li>
                            <li>
                                <span class="font-weight-bolder">become widely distributed</span> throughout the environment as a result of natural processes involving soil, water and, most notably, air;
                            </li>
                            <li>
                                <span class="font-weight-bolder">accumulate</span> in the fatty tissue of living organisms including humans, and are found at higher concentrations at higher levels in the food chain; and
                                are toxic to both humans and wildlife."                                
                            </li>
                        </ul>
                    </p>
                    <p class="manrope font-weight-lighter textsize-2em font-italics mb-0 text-white" id="from">-Stockholm Convention</p>
                </div>
            </section>
            <section class="w-100" id="POP-preview-section">
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-end w-100" style="min-height: 50vh;">
                    <div class="w-100 d-flex flex-column">
                        <div class="w-100 d-flex justify-content-center">
                            <h1 class="manrope font-weight-bolder color-title textsize-6em text-dark">The Dirty Dozen</h1>
                        </div>
                    </div>                    
                </div>
                <div class="container">
                    <p class="manrope textsize-2em text-dark">The original definition of Persistent Organic Pollutants specifically mentioned 12 chemicals that fit the criteria above.</p>
                    <p class="manrope textsize-2em text-center text-dark">These 12 chemicals are known as the <span class="font-weight-bolder">Dirty Dozen</span></p>
                    <div class="row">
                        <!--Aldrin Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="aldrin"></canvas>
                                        <h1 class="text-center manrope text-dark">Aldrin</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Chlordane Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="chlordane"></canvas>
                                        <h1 class="text-center manrope text-dark">Chlordane</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--DDT Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="ddt"></canvas>
                                        <h1 class="text-center manrope text-dark">DDT</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Deildrin Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="deildrin"></canvas>
                                        <h1 class="text-center manrope text-dark">Deildrin</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Endrin Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="endrin"></canvas>
                                        <h1 class="text-center manrope text-dark">Endrin</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Heptachlor Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="heptachlor"></canvas>
                                        <h1 class="text-center manrope text-dark">Heptachlor</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Hexachlorobenzene Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="hexachlorobenzene"></canvas>
                                        <h1 class="text-center manrope text-dark">Hexachlorobenzene</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Mirex Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="mirex"></canvas>
                                        <h1 class="text-center manrope text-dark">Mirex</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PCBs Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="pcb"></canvas>
                                        <h1 class="text-center manrope text-dark">PCBs</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PCDD Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="pcdd"></canvas>
                                        <h1 class="text-center manrope text-dark">PCDDs</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PCDF Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="pcdf"></canvas>
                                        <h1 class="text-center manrope text-dark">PCDFs</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Toxaphene Preview-->
                        <div class="col-12 col-lg-6">
                            <div class="m-2">
                                <div class="content-square w-100">
                                    <div class="content-in-square d-flex flex-column justify-content-between p-3">
                                        <canvas class="POP-preview-canvas h-100" id="toxaphene"></canvas>
                                        <h1 class="text-center manrope text-dark">Toxaphene</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="manrope textsize-2em text-right font-weight-bolder text-gradient-mint-blue"><a href="dirtydozen.php">Learn more >></a></p>
                </div>
            </section>
            <section id="toxicity-section" class="w-100">
                <div class="w-100 py-3">
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-end w-100" style="min-height: 15vh;">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex justify-content-center">
                                <h1 class="manrope font-weight-bolder color-title textsize-6em">Toxicity</h1>
                            </div>
                        </div>                    
                    </div>
                    <div class="container">
                        <p class="manrope textsize-2em text-left text-dark">Humans are exposed to these chemicals in a variety of ways: mainly through food consumption, but also through the intake of air and drinking of water, in the outdoors, indoors and at the workplace. POPs have the ability to leave effects on all aspects of human and animal health including the respiratory, digestive, reproductive, integumentary, developmental, endocrine, nervous, cardiovascular, and immune systems. The liver, kidneys, thyroid, and lungs are also commonly affected. Even more, many persistent organic pollutants are known to be carcinogens, cause birth defects, and even death at lethal doses. As for child development, pollutants can cause deficiencies including growth delay, natal teeth, hyperpigmentation, deformed nails, neurological effects, lower birth weights, smaller head circumferences, shorter attention spans, and abnormal reflexes. On the contrary, animals can be adversely affected as well, including developmental impacts on birds, vitamin and thyroid deficiencies in fish, cancer and other effects in rats, and dopamine alterations in other animals. Persistent organic pollutants leave irreversible effects on those living around them.</p>
                    </div>
                </div>
            </section>
            <section id="why-section" class="w-100">
                <div class="w-100 py-3">
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-end w-100" style="min-height: 15vh;">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex justify-content-center">
                                <h1 class="manrope font-weight-bolder text-white textsize-6em">Why care?</h1>
                            </div>
                        </div>                    
                    </div>
                    <div class="container">
                        <p class="manrope textsize-2em text-left text-white">Due to their chemical features, persistent organic pollutants prove to be incredibly resistant to chemical, biological, and photolytic degradational processes. The environmental resistance of POPs allow them to accumulate in the biosphere and create hazardous consequences for wildlife and the environment.</p>
                        <br>
                        <p class="manrope textsize-2em text-left text-white">Fortunately, procedures and processes have been developed to help prevent the spread of organic pollutants along with the hope of entirely eradicating them from the biosphere. Such methods involve the use of chemicals, heat, or organisms to remediate the harmful compounds. While many techniques are currently in testing stages, others are being utilized to their fullest all across the globe.</p>
                        <p class="manrope textsize-2em text-right font-weight-bolder text-white"><a href="remediation.php">Learn more about the solutions>></a></p>
                    </div>
                </div>
            </section>
        </main>
        <?php include('footer.php') ?>
        <script src="js/flickity.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ChemDoodleWeb.js"></script>
        <script src="js/fitty.min.js"></script>
        <script src="js/index.js"></script>
        <script src="visuals.js"></script>
        <script src="js/global.js"></script>
    </body>
</html>
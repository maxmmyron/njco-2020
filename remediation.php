<!DOCTYPE html>
<html>
    <head>
        <title>Remediation Methods</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="css/build/bootstrap.min.css">
        <link rel="stylesheet" href="css/build/font-awesome.min.css">
        <link rel="stylesheet" href="css/build/flickity.min.css">

        <link rel="stylesheet" href="css/build/global.css">
        <link rel="stylesheet" href="css/build/general.css">
        <link rel="stylesheet" href="css/build/ataglance.css">
    </head>
    <body>
        <?php include('header.php') ?>
        <main class="w-100">
            <section class="w-100 bg-color" style="height:75vh;">
                <div class="container h-100">
                    <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="textsize-5em manrope font-weight-bolder">Remediation</h1>
                        <p class="text-center textsize-2em manrope font-weight-bold">How do we end the traitorous reign of persistent organic pollutants?</p>
                    </div>
                </div>
            </section>
            <section class="w-100" id="general-container">
                <div class="container my-5 pt-5">
                <h1 class="manrope font-weight-bolder text-center text-gradient-mint-blue textsize-4em">At A Glance</h1>
                <p class="manrope font-weight-thin textsize-1em" id="introduction-text">The following is a quick and simple reference in regards to the information that will be discussed below.</p>
                    <table class="reference-table">
                        <a class="top-link" name="top"> </a>
                        <tbody>
                            <tr>
                                <td>Remediation Method</td>
                                <td>Scale</td>
                                <td>POPs Treated</td>
                                <td>Relative<br>Location</td>
                                <td>Remediation<br>Strength</td> 
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Bioremediation">Bioremediation</a></td>
                                <td>Current</td>
                                <td>Pesticides, PCB</td>
                                <td>In situ / Ex situ</td>
                                <td>Low / High</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Coagulation">Coagulation and Flocculation</a></td>
                                <td>Current</td>
                                <td>*Unknown</td>
                                <td>In situ</td>
                                <td>High</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Gas-Phase">Gas-Phase Chemical Reduction</a></td>
                                <td>Current</td>
                                <td>HCB, DDT, PCB, Dioxins, Furans</td>
                                <td>Ex situ</td>
                                <td>Low</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Daramend">Daramend®</a></td>
                                <td>Current</td>
                                <td>Toxaphene, DDT</td>
                                <td>In situ / Ex situ</td>
                                <td>Low</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Phytotechnology">Phytotechnology</a></td>
                                <td>Experimental</td>
                                <td>*Unknown</td>
                                <td>In situ / Ex situ</td>
                                <td>Low</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Sonic">Sonic Tochnology</a></td>
                                <td>Experimental</td>
                                <td>PBC</td>
                                <td>Ex situ</td>
                                <td>Low / High</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Guar">Guar Gum / Xanthan Gum</a></td>
                                <td>Theorized</td>
                                <td>**Phenol, DEPH</td>
                                <td>In situ</td>
                                <td>High</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#TDT">TDT-3R<sup>TM</sup></a></td>
                                <td>Theorized</td>
                                <td>HCB</td>
                                <td>Ex situ</td>
                                <td>High</td>
                            </tr>
                            <tr>
                                <td><a href="remediation.php#Self-Propagating">Self-Propagating High-Temperature Dehalogation</a></td>
                                <td>Theorized</td>
                                <td>HCB</td>
                                <td>Ex situ</td>
                                <td>High</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 class="manrope font-weight-bolder">Disclaimer</h3>
                    <p class="manrope font-weight-thinner textsize-1em">The methods stated are only few of the many methods used, tested, and theorized in order to cleanse persistent organic pollutants from the biosphere. We have taken the approach of specifically describing only a few of the many known methods. (*) Exact organic pollutants can not be specified due to the multiple ways these prodcedures are executed. (**) POPs not listed under the Dirty Dozen.</p>

                    <a href="remediation.php#top">
                        <div class="top-button">
                            <span class="top-button-name">^</span>
                        </div>
                    </a>

                    <h1 class="manrope font-weight-bolder text-center text-gradient-mint-blue">Introduction</h1>
                    <p class="manrope font-weight-thin textsize-1em" id="introduction-text">The accumulation of persistent organic pollutants has lead to and is furthering environmental and ecological issues. It is society’s responsibility to find solutions to the dangerous consequences of the poisonous chemicals. Effective remediation methods have been confined to very specific processes due to many complications of locating and destroying POPs. But these methods can be generalized into three main categories consisting of <b>Current Methods</b>, <b>Experimental Methods</b>, and <b>Theorized Methods</b>. Each method is placed into these categories depending on its progress stage.</p>
                   

                    <h1 class="manrope font-weight-bolder text-center text-gradient-mint-blue">Current Remediation Methods</h1>
                    <p class="manrope font-weight-thin textsize-1em">There are several remediation methods that have been tested in real-world experiments and are currently deployed around the globe to help diminish the amount of certain POPs.</p>

                    <h3 class="manrope font-weight-bolder">Bioremediation</h3>
                    <a class="anchor" name="Bioremediation"> </a>
                    <p class="manrope font-weight-thin textsize-1em">Bioremediation is a process that uses genetically modified microorganisms to remove organic pollutants from the environment, generally including PCBs and pesticides. Enzymes produced by microorganisms are used to chemically break down the pollutants, therefore, destroying their harmful properties. The biological alteration includes the modification of enzyme expression level, enzyme activity, and substrate specificity. This task can be preformed via rational design, where molecules are combined with the enzymes to create specific results, or directed evolution, where a natural selection-like procedure results in enzymes with characteristics closely related to a predefined characteristic.</p>
                    <p class="manrope font-weight-thin textsize-1em">The research behind using microorganisms to prevent POP pollution has been expanding exponentially. Bioremediation is very commonly used and cost-effective, promoting is use worldwide. It can completely degrade organic pollutants without chemically destroying the plants and animals in the surrounding environment. This technique can also be executed under extreme conditions regarding factors like pH levels and temperature. Unfortunately, though, the restriction of the capabilities of microorganisms can leave bioremediation less useful as other techniques. Depending on the diversity and amount of organic pollutants, the process can also produce slow results.</p>

                    <h3 class="manrope font-weight-bolder">Coagulation and Flocculation</h3>
                    <a class="anchor" name="Coagulation"> </a>
                    <p class="manrope font-weight-thin textsize-1em">These procedures consist of the addition of compounds in a colloidal solution that result in the creation of flocs, or loosely clumped particles, of a desired pollutant. Then these flocs are easily removed from the solution. Adjusting the pH level of the solution is a costly undertaking but can allow strong bonds to be broken and increase the efficiency of the process. Coagulation and flocculation are used for treating wastewater contaminated with persistent organic pollutants. The methods are simple to complete and very effective for high concentrations of POP contamination.</p>

                    <h3 class="manrope font-weight-bolder">Gas-Phase Chemical Reduction</h3>
                    <a class="anchor" name="Gas-Phase"> </a>
                    <p class="manrope font-weight-thin textsize-1em">Also described as GPCR<sup>TM</sup>, this process is conducted via two stages. Contaminated soil, while experiencing anoxic conditions, is first transferred through a thermal reduction batch processor with temperatures of around 600° Celsius. Such heat causes the desorption of organic compounds who then enter a gaseous phase, separating from the solid matrix. The healthy soil cools following the heating process and is taken off site. The second stage begins with the combination of the excess polluted gas and hydrogen gas using a GPCRTM reactor at 850° to 900° Celsius. Resulting products include mainly methane and water, with the possibility of acid gases. Finally after filtered and scrubbed, the methane-rich gases are collected and stored for extra fuel.</p>

                    <h3 class="manrope font-weight-bolder">Daramend®</h3>
                    <a class="anchor" name="Daramend"> </a>
                    <p class="manrope font-weight-thin textsize-1em">Daramend is an increasingly widespread remediation process in which enhanced organic soil amendments are integrated into a preferred soil matrix. The procedure includes the addition of specific Daramend® solutions and chemically inactive zero valent iron shavings. The two additives promote anoxic conditions. Aftwards, the soil-solution mix is periodically tilled and repeatedly put through oxic and anoxic conditions. Daramend® acts well in clearing out low concentrations of Toxaphene and DDTs, but fails to securely remove any high concentrations of POPs. Costing nearly 55 dollars per ton, this method has already been implemented in widespread areas including Montgomery, Alabama and Charleston South Carolina.</p>


                    <h1 class="manrope font-weight-bolder text-center text-gradient-mint-blue">Experimental Remediation Methods</h1>
                    <p class="manrope font-weight-thin textsize-1em">Remediation methods presently being tested are considered experimental and are currently in development. These methods can be implemented at real-world locations but under controlled and predetermined conditions.</p>

                    <h3 class="manrope font-weight-bolder">Phytotechnology</h3>
                    <a class="anchor" name="Phytotechnology"> </a>
                    <p class="manrope font-weight-thin textsize-1em">This process requires the use of plants to remove, stabilize, or destroy soil contaminants. While only a minimum amount of plant species can preform POP remediation, they provide numerous possible operations in which to be executed in polluted soil including:</p>
                    <p class="manrope font-weight-thin textsize-1em">
                         <ol>
                             <li>Enhanced rhizosphere biodegradation - pollutants immediately surrounding plant roots are degraded</li>
                             <li>Phytovolatilization - the relocation of contaminates from the soil to the air via a plant’s transpiration stream</li>
                             <li>Phytoextraction / phytoaccumulation - the transfer of contaminates by the plant from the soil to a plant’s shoots and leaves</li>
                             <li>Phytodegradation - the degradation of pollutants within tissue via plant metabolism</li>
                             <li>Phytostabilization - the immobilization of organic pollutants within the rhizosphere</li>
                             <li>Hydraulic control - the prevention of ground water pollution by the use of trees which transpire and intercept the path of organic pollutants</li>
                        </ol>
                    <p class="manrope font-weight-thin textsize-1em">Phytotechnology can only remediate low quantities of POPs in sediment and sludges and has a relatively small area of influence. But such multitudinous botanical solutions encourage its global use. For example, the Connecticut Agricultural Experimental Station has research proving that certain cucurbitas (squash) can effectively treat soil contaminated with DDE and chlordane; The Royal Military College of Canada has found certain species of plants can extract and hold large amounts of PBC and DDT; Ukraine discovered that bean plants can decompose DDT. As of 2005, ninety percent of PCBs (255ppm) were removed from a forty year old scrap yard with the use of mulberry trees and bermuda grasses, Aberdeen Pesticides Dumps has been using trees and grasses to remove dieldrin and HCB, and Fort Wainwright, Alaska has incorporated the use of willow trees to treat aldrin and dieldrin.</p>

                    <h3 class="manrope font-weight-bolder">Sonic Technology</h3>
                    <a class="anchor" name="Sonic"> </a>
                    <p class="manrope font-weight-thin textsize-1em">Sonic remediation involves using low frequency sound waves in order to separate organic contaminants from a soil matrix. The polluted soil is firstly mixed in a solvent. In order separate and suspend PBCs from the solution, a sound wave generator exerts sonic energy through the mix. The safely removed PBC mix is then combined with sodium and put against sonic energy again to achieve the dechlorination of the PBCs. The latter solvent can then be recycled afterwards. Contaminated soil cannot be cleaned on site and must be removed from its primary location and transported to a sonic laboratory. Although Sonic Technology is considered experimental, it has already been implemented at Juker Holding sites in Vancouver, British Colombia, and Canada, treating three thousand total tons of PCB-contaminated soil. At the same time a separate testing location has reported a drop in PBC pollution ratio from 388:436 mg/kg to 0.35:0.81 mg/kg after instituting this method.</p>



                    <h1 class="manrope font-weight-bolder text-center text-gradient-mint-blue">Theorized Remediation Methods</h1>
                    <p class="manrope font-weight-thin textsize-1em">Theorized remediation methods are those who are yet to be implemented at any real world or testing sites. These methods are still early in development and are expected to be in use in the future.</p>

                    <h3 class="manrope font-weight-bolder">Guar gum; Xanthan Gum</h3>
                    <a class="anchor" name="Guar"> </a>
                    <p class="manrope font-weight-thin textsize-1em">Guar gum and Xanthan gum are potential additives to a coagulation or flocculation process. The addition of the gum allows for more efficient polymerization and chemical bonding while creating flocs within the aquatic solutions. Flocs created with the help of the gums are extensively more compact and condensed than those created without the gums. With smaller flocs comes less transportation costs and overall increased cost efficiency. Tests have proved that adding these gums yields substantially better results than many other remediation procedures including aluminum sulfate and alum. In addition, it is completely non-toxic, biodegradable, capable under any given pH, and can clear 99.70 percent and 99.99 percent of phenol and DEHP respectively. Because the gums are produced in abundance and accessible at low costs, they are easily and readily available as well.</p>

                    <h3 class="manrope font-weight-bolder">TDT-3R<sup>TM</sup></h3>
                    <a class="anchor" name="TDT"> </a>
                    <p class="manrope font-weight-thin textsize-1em">Developed in Hungary by Terra Humana Clean Technology Engineering Ltd, this method is a low temperature thermal desorption reaction. POP-concentrated soil would be moved off site into a vacuum-sealed rotary kiln; the kiln is then heated to a temperature of 300° to 350° Celsius. Inside, the soil is compressed under zero to fifty pascal of air pressure, where POPs and other organic pollutants are vaporized and desorbed from the mix. All contaminants are finally recovered and are delt with in a thermal oxidizer. Testing sites in Gare, Hungary have noted that hexachlorobenzene(HCB) levels were reduced from 1215 to 0.1 mg/kg in a one hundred kilogram sample of contaminated soil.</p>

                    <h3 class="manrope font-weight-bolder">Self-Propagating High-Temperature Dehalogenation</h3>
                    <a class="anchor" name="Self-Propagating"> </a>
                    <p class="manrope font-weight-thin textsize-1em">Such a procedure begins with stockpiles of polluted soil combined with chlorine hydride or chlorine metal. The mixture is then placed into a testing chamber equipped with a tungsten coil. The addition of argon gas then causes the chamber to pressurize. Exothermic, self-propagating reactions finally occur after electrical pulses are ran through the tungsten coil. These reactions can reach a temperature of 3727° Celsius. Self-Propagating High-Temperature Dehalogenation was developed by Centro Studi Sulle Reazioni Autopropaganti in Italy and specifically treats stockpiles of HCB-contaminated soil.</p>
                </div>
            </section>
        </main>
        <?php include('footer.php') ?>
        <script src="js/flickity.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ChemDoodleWeb.js"></script>
        <script src="js/global.js"></script>
    </body>
</html>

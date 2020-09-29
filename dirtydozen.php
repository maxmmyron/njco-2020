<!DOCTYPE html>
<html>
    <head>
        <title>Dirty Dozen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://kit.fontawesome.com/03f8d4cd10.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/build/bootstrap.min.css">
        <link rel="stylesheet" href="css/build/font-awesome.min.css">
        <link rel="stylesheet" href="css/build/flickity.min.css">

        <link rel="stylesheet" href="css/build/global.css">
        <link rel="stylesheet" href="css/build/dozen.css">
    </head>
    <body>
        <?php include('header.php') ?>
        <main>
            <div id="nav-system">
                <div class="circle-handling circle-handling__clip-sm">
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-intro"><span>Intro</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-aldrin"><span>Aldrin</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-chlordane"><span>Chlordane</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-ddt"><span>DDT</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-dieldrin"><span>Dieldrin</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-endrin"><span>Endrin</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-heptachlor"><span>Heptachlor</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-hexachlorobenzene"><span>Hexachlorobenzene</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-mirex"><span>Mirex</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-pcb"><span>PCBs</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-pcdd"><span>PCDDs</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-pcdf"><span>PCDFs</span></a></div>
                    <div class="circle-handling__item circle-handling__item-sm"><a class="circle-handling__item--name" href="#pop-toxaphene"><span>Toxaphene</span></a></div>
                    <div id="circle-handling__clip-fill"></div>
                    <div class="circle-handling__button"><i class="fas fa-plus"></i></div>
                </div>
            </div>
            <div class="pop-item">
                <a id="pop-intro"></a>
                <div class="intro-container">
                    <div class="d-flex flex-column">
                        <div class="px-5 pt-5 container d-flex flex-column position-relative">
                            <h1 class="text-center textsize-5em pt-5 font-weight-bolder text-gradient-mint-blue colorD manrope">The Dirty Dozen</h1>
                            <p class="text-center textsize-2em colorD manrope">
                                The "dirty dozen" is a name given to the first twelve compounds classified under the Stockholm convention as "persistent organic pollutants". They are toxic, harmuful, bioaccumulating chemicals that, while having been banned since the 1970's for many chemicals, still linger around in the air, water, and soil. They have, and still are accumulating inside of us, and continue to pose a threat to our health years after their discontinuance of use. The following is a list of those twelve chemicals. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--✔ for basic info (name, formula, quick facts), ✔✔ for added paragraph info, ✔✔✔ for added toxicity information-->
            <div class="pop-item"><!--Aldrin✔-->
                <a id="pop-aldrin"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">Aldrin</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>12</sub>H<sub>8</sub>Cl<sub>6</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="aldrin"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">Aldrin</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Aldrin was a common insecticide used widely up until the 1990s when it was banned in many countries. It is unnaturally synthesized by combining two organic compounds, norbornadiene and hexachlorocyclopentadiene, in a special type of reaction known as a Diels-Alder reaction. Aldrin itself is not toxic to insects, however once inside an insects body, it will oxidize into the potent and toxic dieldrin, which is an extremely effective insecticide.</p>
                                    <p class="pr-5 pb-2 mr-5">Aldrin can easily localize in the air, water, and once in the environment, will deteriorate into dieldrin which lasts much longer. Aldrin is a part of the cyclodiene family, which encompasses other pollutants like chlordane, dieldrin, and endrin.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>12</sub>H<sub>8</sub>Cl<sub>6</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Kills soil insects</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>364.9 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>4.69</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>6.50</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>39 - 98 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Aldrin is a known neurotoxin. Exposure to aldrin can cause disruption and stimulation to the central nervous system, which could give rise of seizures. Likewise, aldrin has the ability to inhibit ion pumps in the brain that help to relieve the nerve system of excess calcium. When aldrin inhibits these pumps, calcium can build up inside the nerve terminal and cause a buildup in ammonia concentrations. 
                                <br>
                                Aldrin can more directly act as a neurotoxic by blocking chloride receptors in the brain, which makes chloride unable to move into the synapse, which can hamper the hyperpolarization of neural synapses.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--Chlordane✔-->
                <a id="pop-chlordane"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">Chlordane</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>10</sub>H<sub>6</sub>Cl<sub>8</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="chlordane"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">Chlordane</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Chlordane is an organochloride that was commonly used as a pesticide. It was popularized after Julius Hymann attempted to find possible uses for various by-products of synthetic rubber production. Chlordane easily accumulates in the fats of animals and humans, which can lead to easily increasing concentrations of Chlordane.</p>
                                    <p class="pr-5 pb-2 mr-5">Chlordane is a part of the cyclodiene family, which encompasses other pollutants like aldrin, dieldrin, and endrin.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>10</sub>H<sub>6</sub>Cl<sub>8</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Kills soil insects, acts as general purpose insecticide</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>409.8 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>4.71</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>6.16</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>300 - 840 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                    Chlordane is linked to cancer, diabetes, and neurological disorders. Chlordane easily accumulates in the fats of animals and humans, which can lead to easily increasing concentrations of Chlordane. A study from the National Cancer Institute showed that an increased concentration of Chlordane in a home can lead to higher levels of non-Hodgkin lymphoma.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--DDT✔-->
                <a id="pop-ddt"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">DDT</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>14</sub>H<sub>9</sub>Cl<sub>5</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="ddt"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">DDT</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Dichlorodiphenyltrichloroethane, commonly referred to as DDT, is an organochloride that was used (and in remote cases, still is used) extensively as an insecticide. DDT was banned in the United States in 1972 following an enormous outcry calling for its ban due to its harmful effects, and soon a global campaign to end the use of DDT was underway. DDT is still used today because it is an integral part of curving malaria infection rates, however its use is still very limited and regulated. </p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>14</sub>H<sub>9</sub>Cl<sub>5</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Widely used in past to protect against insect-spread diseases; continues to be applied to control malaria</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>354.5 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>5.90</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>6.91</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>100 - 800 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                DDT is an endocrine disruptor, meaning that it disrupts the delicate balance of hormones in the human body. An imbalance in the endocrine system can lead to a multitude of issues, from cancer to developmental disorders. While indirect exposure to DDT is non-toxic, direct exposure to it is classified as “moderately toxic” by the US National Toxicology Program. DDT is also a possible carcinogen, and associations between DDT exposure and testicular cancer have been drawn.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--Dieldrin✔-->
                <a id="pop-dieldrin"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">Dieldrin</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>12</sub>H<sub>8</sub>Cl<sub>6</sub>O)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="dieldrin"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">Dieldrin</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Dieldrin is an organochloride that was developed in the late 1940s as an insecticide. It was an alternative to DDT, and was highly effective at its job of neutralizing and killing insects attacking crops. Dieldrin is known to be extremely resistant to breakdown, and is not only applied directly as dieldrin, but is broken down into aldrin, a separate pollutant.</p>
                                    <p class="pr-5 pb-2 mr-5">Dieldrin is a part of the cyclodiene family, which encompasses other pollutants like aldrin, chlordane, and endrin.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>12</sub>H<sub>8</sub>Cl<sub>6</sub>O</td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Controls termites and textile pests; used against insect-borne diseases and in agriculture</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>380.9 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>4.41</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>5.40</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>38 - 213 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Dieldrin is toxic to humans and animals. It is linked to many diseases such as Parkinson’s and cancer, and like DDT, is an endocrine disruptor. Dieldrin is known to harm fetuses because of this.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--Endrin✔-->
                <a id="pop-endrin"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">Endrin</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>12</sub>H<sub>8</sub>Cl<sub>6</sub>O)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="endrin"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">Endrin</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Endrin is an organochloride that was used as an emulsifier, insecticide, rodenticide, and piscicide. Endrin is created through the condensation of hexachlorocyclopentadiene and vinyl chloride. Endrin is a stereoisomer of dieldrin.</p>
                                    <p class="pr-5 pb-2 mr-5">Endrin is a part of the cyclodiene family, which encompasses other pollutants like aldrin, chlordane, and dieldrin.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>12</sub>H<sub>8</sub>Cl<sub>6</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Kills insects on cotton and grains; used against rodents</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>380.9 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>4.06</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>5.20</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>7 - 18 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Endrin is not directly classified as a mutagen or carcinogen, however it is toxic in that it is a neurotoxin to humans and causes several development effects. Exposure to endrin can lead to a slew of symptoms, including vomiting, convulsions, confusion, and headaches, and in some cases seizure and death. In some animals, liver necrosis has been observed.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--Heptachlor✔-->
                <a id="pop-heptachlor"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">Heptachlor</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>10</sub>H<sub>5</sub>Cl<sub>7</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="heptachlor"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">Heptachlor</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Heptachlor is an organochlorine compound that used to be used as an insecticide. It is a cyclodiene insecticide, meaning it is made from a reaction of a molecule with hexachlorocyclopentadiene. Heptachlor has a very stable structure, which allows it to persist for many years in the environment. It is likely that humans are impacted by heptachlor through drinking water, consumables, and breast milk.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>10</sub>H<sub>5</sub>Cl<sub>7</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Kills soil insects, termites, cotton insects, grasshoppers & mosquitoes.</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>373.3 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>4.00</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>6.10</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>40 - 195 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                While there are currently no deaths from heptachlor, it is still a directly toxic chemical with a LD<sub>50</sub> of around 100mg/kg. The chemical can be absorbed via the skin, lungs, and digestive system, casuing hyperexcitation of the central nervous system and liver damage.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--Hexachlorobenzene✔-->
                <a id="pop-hexachlorobenzene"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope hcb">Hexachlorobenzene</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>6</sub>Cl<sub>6</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="hexachlorobenzene"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope hcb w-60">Hexachlorobenzene</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Hexachlorobenzene is an organochloride that is used as a fungicide and agricultural pesticide. It does not occur naturally, usually becoming a byproduct of municipal waste. The chemical was introduced in 1945 and has been globally banned since 1981.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>12</sub>H<sub>8</sub>Cl<sub>6</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Fungicide; unintentional by-product</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Kills fungi that affect crops; released during chemical manufacturing and from processes that give rise to dioxins and furans.</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>284.8 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>4.90</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>5.73</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>3500 - 10000 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Hexachlorobenzene is a known animal carcinogen, and is believed to be a possible human carcinogen. Hexachlorobenzene increases the rates of liver and thyroid cancers in animals. In humans, exposure to this chemical can lead to porphyria cutanea tarda, which is a liver disease. Contact with Hexachlorobenzene may end up irritating the skin, eyes and mucous membranes.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--Mirex✔-->
                <a id="pop-mirex"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">Mirex</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>10</sub>Cl<sub>12</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="mirex"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">Mirex</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Mirex is an organochloride that was used as an insecticide. It was most commonly used against fire ants. First synthesized in 1946, Mirex was created through the dimerization of hexachlorocyclopentadiene with aluminium chloride, which makes it a cyclodiene. Mirex is unique in that it must be consumed and ingested into the stomach for its insensitive properties to take effect. In 1976, the EPA banned the use of Mirex in the United States.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>10</sub>Cl<sub>12</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide, flame retardant</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Combats rants and termites; fire retardant in plastics, rubber, and electronics</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>545.5 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>3.76</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>6.89</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>306 - 2000 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Mirex is moderately toxic, and is reported to have an LD<sub>50</sub> of around 1000mg/kg. It primarily causes issues in the liver, but can also cause physiological disorders in animals that ingest a toxic amount. Mirex is speculated to be a carcinogen to humans.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--PCBs✔-->
                <a id="pop-pcb"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope"><sup><small>*</small></sup>PCBs</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>12</sub>H<sub>10-n</sub>Cl<sub>n</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="pcb"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60"><sup><small>*</small></sup>PCBs</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">A polychlorinated biphenyl is an organochlorine chemical. PCBs come in many forms, all of which are persistent organic pollutants. They were often used as coolant and heat-transfer fluids, and were banned in the U.S. in 1978. PCBs share structural similarities to dioxins, another persistent organic pollutant, and some also share similar toxicity. PCBs are still sometimes used today in applications involving pigments, where they are a component of inks and dyes for paper. PCBs are highly bioaccumulative and easily build up in fat pockets in animals and humans.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>12</sub>H<sub>10-n</sub>Cl<sub>n</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Industrial Chemical</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Used in industry as heat exchange fluids; electrical transformers and capacitors, and as additives in paint, sealants, and plastics.</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>NA</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                PCBs commonly show exposure effects in the form of various skin conditions like chloracne, which is a type of acne breakout caused by exposure to chemicals that are highly halogenated.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--PCDDs✔-->
                <a id="pop-pcdd"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope"><sup><small>*</small></sup>PCDDs</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>12</sub>H<sub>8-n</sub>Cl<sub>n</sub>O<sub>2</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="pcdd"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60"><sup><small>*</small></sup>PCDDs</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Polychlorinated dibenzodioxins, also known as dioxins, are a group of organic compounds that are heavy environmental polluters. Dioxins are a by-product of organochlorines, and are also released during the incineration of waste containing  polyvinyl chloride. Dioxins were produced in the late 19th and 20th centuries, and are extremely toxic. They bioaccumulate easily and remain in the environment for long periods of time.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>12</sub>H<sub>8-n</sub>Cl<sub>n</sub>O<sub>2</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>unintentional by-product</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>emitted from burning of hospital waste, municipal waste, and hazardous waste; automobile emissions, peat, coal, and wood</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>NA</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Congeners that, at the least, contain chlorine atoms in the 2, 3, 7, and 8 positions are considered to be significantly more toxic than the rest of the family. Dioxins are considered to be extremely toxic, possibly being considered a carcinogen. They also pose threats to the human immune systems and its sexual development.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--PCDFs✔-->
                <a id="pop-pcdf"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope"><sup><small>*</small></sup>PCDFs</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>12</sub>H<sub>8-n</sub>Cl<sub>n</sub>O)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="pcdf"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60"><sup><small>*</small></sup>PCDFs</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Polychlorinated dibenzofurans (PCDFs) are family of organic chemicals, differing depending on which hydrogens are replaced by chlorines. The model shown has 4 chlorines replacing hydrogens on the number 2, 3, 7, and 8 carbons. They can be formed by thermal synthesis, pyrolysis, or incineration of substances where chlorine is present. They have no specific use, as they commonly result as byproducts of chlorine-related industrial tasks. Consumption of polychlorinated dibenzofurans can be via inhalation and contact with the skin, but the most common method is through eating animal meat.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>12</sub>H<sub>8-n</sub>Cl<sub>n</sub>O</td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>unintentional by-product</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>During productions of PCBs; share many of same emission patterns as dioxins as well as from emissions from waste incinerators and automobiles</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>NA</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>NA</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Like PCDDs, PCDFs with any combination of chlorine atoms involving locations in the 2, 3, 7, and 8 positions are referred to be the most toxic among the family. Furans are a possible human carcinogen. When exposed to furans at doses much higher (nearly 2000 times) the normal projected dosage from consumption, the risk of hepatocellular tumors was seen to rise dramatically.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <div class="pop-item"><!--Toxaphene✔-->
                <a id="pop-toxaphene"></a>
                <div class="clipped-container">
                    <div class="clipped d-flex flex-column clip-lg clippedL">
                        <div class="px-5 pt-5 container d-flex position-relative">
                            <h1 class="pt-5 molecule-title colorD manrope">Toxaphene</h1>
                            <h1 class="pt-5 molecule-formula colorLight manrope">(C<sub>10</sub>H<sub>8</sub>Cl<sub>8</sub>)</h1>
                        </div>
                        <div class="canvas-container">
                            <canvas class="molecule" id="toxaphene"></canvas>
                        </div>
                    </div>
                    <div class="clipped clip-sm clippedD">
                        <div class="px-5 pt-5 container d-flex">
                            <div class="w-60">
                                <h1 class="pt-5 molecule-title colorL manrope w-60">Toxaphene</h1>
                                <div class="information-container">
                                    <p class="pr-5 pb-2 mr-5">Toxaphene was widely used as an insecticide in the 1960s, 70s, and 80s. Its purpose was to protect southern United States crops, usually being cotton. It was also used to kill insects on grazing livestock and eliminate unwanted fish. Banned from the United States in 1990, this pollutant can remain in the environment for anywhere up to 14 years. This chemical is produced by reacting chlorine gas with camphene, a bicyclic monoterpene hydrocarbon.</p>
                                </div>
                            </div>
                            <div class="w-40">
                                <h1 class="pt-5 quick-fact-title colorL manrope">Quick Facts</h1>
                                <div class="d-flex justify-content-end">
                                    <table class="fact-table">
                                        <tr>
                                            <td>Formula</td>
                                            <td>C<sub>10</sub>H<sub>8</sub>Cl<sub>8</sub></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td>Pesticide</td>
                                        </tr>
                                        <tr>
                                            <td>Purpose</td>
                                            <td>Kills insects on crops; kill ticks and mites</td>
                                        </tr>
                                        <tr>
                                            <td>Mass</td>
                                            <td>411.8 g/mol</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>oc</sub></td>
                                            <td>4.98</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> K<sub>ow</sub></td>
                                            <td>5.90</td>
                                        </tr>
                                        <tr>
                                            <td><small>log</small> LD<sub>50</sub></td>
                                            <td>80 - 293 mg/kg</td>
                                        </tr>
                                    </table>
                                </div>
                                <h1 class="pt-5 quick-fact-title text-danger manrope">Toxicity</h1>
                                <div class="information-container">
                                Depending on the amount ingested, the chemical can cause liver, kidney, and lung damage. It is also known to cause convulsive seizures. Toxaphene was proven to cause liver and thyroid cancer in rats and fetal development changes in other animals. Large amounts of Toxaphene can be lethal and lead to death.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plus-button"><i class="fas fa-plus"></i></div>
                    <div class="circling-text-container"></div>
                </div>
            </div>
            <br>
            <div class="extraInfo">
            <p class="manrope font-weight-thin textsize-1em">* These pollultants have multiple combinations regarding where and how many chlorine atoms are bonded to the molecules in exchange for hydrogen atoms. The different combinations are grouped together under their respective families named above. The models seen are one of the molecules within their respected family.</p>
            <div>
        </main>
        <script src="js/flickity.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ChemDoodleWeb.js"></script>
        <script src="js/global.js"></script>
        <script src="js/dozen.js"></script>
    </body>
</html>

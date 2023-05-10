<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Random Formatters</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <link rel="stylesheet" href="style.css">
   <script src="js\index.js"></script>
</head>

<body>
   <?php
   include('common\topbar.php')
      ?>
   <div class="columns" style="margin:0;">
      <?php
      include('common\sidebar.php');
      ?>
      <div class="column pt-6" style="height: 100vh; overflow-y: scroll; margin: 0; padding: 0; ">
         <section class="container section pt-5 is-fluid">
            <!-- Header And Add to Fav button -->
            <div class="columns">
               <div class="column is-3"></div>
               <div class="column">
                  <h1 class="title has-text-centered has-text-white" id="mainTitle">Random Superhero Generator</h1>
               </div>
               <div class="column is-3">
                  <div class="has-text-right has-text-centered-mobile">
                     <button class="button" onclick="makeFav()" title="Add this tool to Favorites">
                        <span class="icon"><svg class="svgicon">
                              <use id="favIcon" xlink:href="#heart-no-fill"></use>
                           </svg></span>
                        <span id="favText">Add to Fav</span>
                     </button>
                     <button id="new" type="button" class="button is-info" onclick="loadNewView()">New</button>
                  </div>
               </div>
            </div>

            <!-- Navbar Buttons & Inputs  -->
            <div class="columns is-centered">
               <div class="column is-6" style="width: auto;">
                  <div class="buttons is-centered">
                     <div class="button is-rounded is-outlined is-primary onclick=" sampleSuperheros(5);">5
                        Superheros</div>
                     <div class="button is-rounded is-outlined is-info" onclick="sampleSuperheros(10);">10 Superheros
                     </div>
                     <div class="button  is-success is-outlined is-rounded" onclick="sampleSuperheros(15);">15
                        Superheros</div>
                     <div class="button is-rounded is-link is-outlined" onclick="sampleSuperheros('random');">Random
                     </div>
                  </div>
               </div>
               <div class="column is-3">
                  <div class="field has-addons">
                     <div class="control is-expanded">
                        <input type="number" class="input" id="inputRandomNumber" placeholder="Enter Number" value="10">
                     </div>
                     <div class="control">
                        <button class="button is-primary" type="button" title="Generate Superheros Breeds"
                           onclick="sampleSuperheros('generate');">Generate</button>
                     </div>
                  </div>
               </div>
               <div class="column is-2 has-text-centered" style="width: auto;">
                  <button class="button is-link is-outlined" onclick="sampleSuperheros('all');">Show
                     All</button>
                  <div class="select m-0">
                     <select>
                        <option>Text</option>
                        <option>JSON</option>
                        <option>CSV</option>
                     </select>
                  </div>
                  <button class="button m-0">Download</button>
               </div>
            </div>
            <!-- Generating Superheros  Card -->
            <div class="columns is-multiline is-centered" id="SuperherosSectionArea">
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Superman">
                           <b>
                              <span class="Superheros">
                                 Superman</span>
                           </b>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Oswald+Cobblepot">
                           <b>
                              <span class="Superheros">Oswald
                                 Cobblepot</span>
                           </b>
                        </a></div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Firestorm">
                           <b><span class="Superheros">Firestorm</span>
                           </b></a></div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Giganta">
                           <b>
                              <span class="Superheros">Giganta</span>
                           </b>

                        </a>
                     </div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Doctor+Octopus">
                           <b>
                              <span class="Superheros">Doctor
                                 Octopus</span>
                           </b>

                        </a></div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Spawn">
                           <b>
                              <span class="Superheros">Spawn</span>
                           </b>
                        </a></div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Beast+Boy">
                           <b>
                              <span class="Superheros">Beast
                                 Boy</span>
                           </b>
                        </a></div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+The+Joker's+Daughter">
                           <b>
                              <span class="Superheros">The
                                 Joker's Daughter</span>
                           </b>
                        </a></div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Helena+Bertinelli">
                           <b>
                              <span class="Superheros">Helena
                                 Bertinelli</span>
                           </b>
                        </a></div>
                  </div>
               </div>
               <div class="column is-narrow">
                  <div class="card  has-text-centered customize-card">
                     <div class="card-content"><a target="_blank" rel="noopener"
                           href="https://www.google.com/search?q=Superhero+Power+Girl">
                           <b>
                              <span class="Superheros">Power
                                 Girl</span>
                           </b>
                        </a></div>
                  </div>
               </div>
            </div>
            <!-- Display Superheros Message -->
            <div class="notification is-link is-light title is-3 has-text-centered mt-5">
               <span>Showing</span>
               <span id="generatedSuperheros">10</span>
               <span>Superheros</span>
            </div>
         </section>
         <div class="container is-fluid">
            <div class="columns">
               <div class="column is-7">
                  <section class="pt-1">
                     <h2 class="title">Superhero Generator Online</h2>
                     <hr>
                     <div class="content">
                        <p class="is-size-5">We are dedicated to bringing you endless hours of entertainment by
                           generating random superheroes for you to learn about and enjoy. Whether you're a die-hard
                           comic book fan or just someone who enjoys learning about fictional characters, our
                           generator has something for everyone.</p>
                        <p class="is-size-5">With our vast database of superhero names, the possibilities are
                           endless. Each time you use our generator, you will be presented with a new and unique
                           superhero. Whether you're looking for a classic hero like Superman or a lesser-known hero
                           like Hellcat, our generator has got you covered.</p>
                        <p class="is-size-5">In addition to the randomly generated superheroes, our site also have
                           image of each character. Whether you're a seasoned comic book reader or a newcomer to the
                           genre, you're sure to find something of interest on our site.</p>
                        <p class="is-size-5">Know more about <a href="https://en.wikipedia.org/wiki/Superhero"
                              target="_blank" rel="noopener">Superhero on Wikipedia </a></p>
                        <h2>Information about Superheros</h2>
                        <div class="content">
                           <p class="is-size-5">The world of superheroes is a vast and varied one, with characters of
                              all shapes, sizes, and abilities. From super-strong heroes like Superman and the Hulk,
                              to more technologically advanced heroes like Iron Man and Cyborg, there is truly
                              something for everyone.</p>
                           <p class="is-size-5">One of the defining features of superheroes is their powers. These
                              powers range from the traditional, such as super strength and flight, to the more
                              unique, such as the ability to manipulate time or shoot laser beams from their eyes.
                              It's these powers that set superheroes apart from regular people and make them capable
                              of performing amazing feats and saving the world from evil.</p>
                           <p class="is-size-5">Another key aspect of superheroes is their secret identities. Many
                              heroes choose to keep their true identities hidden from the public, adopting a secret
                              alter-ego that they can use to protect themselves and their loved ones. This dual
                              identity is often a source of conflict for superheroes, as they struggle to balance
                              their superhero duties with their personal lives.</p>
                           <p class="is-size-5">Despite their powers and secret identities, superheroes are often
                              more relatable than one might think. Many heroes struggle with personal demons, such as
                              depression or addiction, and use their superhero personas as a way to cope. Others must
                              balance their superhero duties with demanding day jobs, while still others must
                              navigate complicated relationships with family and friends.</p>
                           <p class="is-size-5">So whether you're a fan of classic heroes like Batman and Wonder
                              Woman, or newer heroes like Ms. Marvel and the Young Avengers, there is truly something
                              for everyone in the world of superheroes. With their exciting powers, compelling
                              backstories, and relatable struggles, it's no wonder that superheroes have captured the
                              hearts and imaginations of fans of all ages.</p>
                        </div>
                  </section>
               </div>

               <div class="column is-5 is-hidden-mobile">
                  <section class="section pt-1">
                     <p class="title">Related Tools</p>
                     <hr>
                     <div class="content">
                        <a class="is-ghost button" href="/random-superpower-generator"
                           title="Random Superpower Generator" target="_blank" rel="noopener">Random Superpower
                           Address</a>
                        <a class="is-ghost button" href="/monster-generator" title="Random Monster Generator"
                           target="_blank" rel="noopener">Random Monster Generator</a>
                        <a class="is-ghost button" href="/random-league-champion" target="_blank" rel="noopener">Ramdom
                           League Champion</a>
                        <a class="is-ghost button" href="/random-dinosaur-generator" target="_blank" rel="noopener"
                           title="Random Dinosaur Generator">Random Dinosaur Generator</a>
                        <a class="is-ghost button" href="/random-bird-generator" target="_blank" rel="noopener"
                           title="Random Dinosaur Generator">Random Bird Generator</a>
                     </div>
                  </section>
                  <section class="section">
                     <h2 class="title">Recently visited pages</h2>
                     <hr>
                     <div class="content">
                        <ul id="visitedTools">
                        </ul>
                     </div>
                  </section>
                  <section class="section">
                     <h2 class="title">Tags</h2>
                     <hr>
                     <div class="tags">
                        <a class="tag is-info is-large" href="/random-generators">Random Generators</a>
                     </div>
                  </section>
               </div>
            </div>
         </div>
         <?php
         include('common\footer.php')
            ?>
      </div>
   </div>

</body>

</html>
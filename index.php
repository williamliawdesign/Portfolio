<?php
$pageTitle = 'William Liaw | Portfolio'; 
include('./templates/header.php');
?>
            </ul>
        </nav>
    </div>
    <header>
        <img src="./images/william_liaw.png" alt="Photo of William Liaw">
        <h1>William Liaw</h1>
        <p>Hi there, my name is William Liaw. Most people call me Will. I'm a designer who cares about the front-end user. I make sure things are clean, simple, and easy to use. I also do front-end developemtn. That's a bit about me, take a look at my portfolio!</p>
    </header>
    <main>
        
        <div id="filters" class="button-group">
          <button class="button is-checked" data-filter="*">Show all</button>
          <button class="button" data-filter=".ui-ux">UI/UX</button>
          <button class="button" data-filter=".development">HTML/CSS</button>
        </div>
    
        <section class="clearfix" id="container">
            
            <!-- Scholarship -->
            <div class="ui-ux">
            <a href="./scholarship-strategy.php">
                <figure class="box">
                    <img src="images/scholarship-strategy/scholarship-strategy-cover.jpg" alt="Scholarship Strategy case study">
                    <figcaption>
                        <h2>Scholarship Strategy</h2>
                        <h3>UX/UI Design</h3>
                        <div>
                            <p>An online video tutorial platform help students succeed.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a>
            </div><!-- End of Scholarship -->
            
            <!-- End of Event Database -->
            <div class="ui-ux">
            <a href="./event-database.php">
                <figure class="box">
                    <img src="images/event-database/event-cover.jpg" alt="Event Database case study">
                    <figcaption>
                        <h2>Event Database</h2>
                        <h3>UX/UI Design</h3>
                        <div>
                            <p>Redesigned and improved overall user experience for a event database.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of Event Database -->

            <!-- Online learning -->
            <div class="ui-ux">
            <a href="./online-learning.php">
                <figure class="box">
                    <img src="images/online-learning/online-learning-cover.jpg" alt="Online Learning Platform case study">
                    <figcaption>
                        <h2>Online Learning Platform</h2>
                        <h3>UX/UI Design</h3>
                        <div>
                            <p>Online tutoring services that connect students and teacher online.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of online learning -->
            
            <!-- HiretheWorld -->
            <div class="ui-ux">    
            <a href="./hiretheworld.php">
                <figure class="box">
                    <img src="images/hiretheworld/hiretheworld-cover.jpg" alt="HiretheWorld.com case study">
                    <figcaption>
                        <h2>HiretheWorld.com</h2>
                        <h3>UX/UI Design</h3>
                        <div>
                            <p>An online resource that connects employers with professional designers.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of HiretheWorld -->
            
            <!-- OAT BCIT -->
            <div class="development">    
            <a href="./oat.php">
                <figure class="box">
                    <img src="images/oat/oat-cover.jpg" alt="BCIT Internal Client case study">
                    <figcaption>
                        <h2>BCIT Internal Client</h2>
                        <h3>HTML/CSS/JavaScript/PHP</h3>
                        <div>
                            <p>Design for BCIT's Office Administrator of Technology Program.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of OAT BCIT -->
            
             <!-- Responsive Blog -->
            <div class="development">    
            <a href="./responsive-blog.php">
                <figure class="box">
                    <img src="images/responsive-blog/responsive-blog-cover.jpg" alt="Responsive blog site">
                    <figcaption>
                        <h2>Responsive Blog</h2>
                        <h3>HTML/CSS</h3>
                        <div>
                            <p>A responsive blog design for food reviews.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of Responsive Blog -->
            
            <!-- Paris site -->
            <div class="development">
            <a href="./paris.php">
                <figure class="box">
                    <img src="images/paris/paris-cover.jpg" alt="Paris tourism site case study">
                    <figcaption>
                        <h2>Paris tourism site</h2>
                        <h3>HTML/CSS/PHP</h3>
                        <div>
                            <p>A tourism website design for Paris.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of Paris site -->
            
            <!-- JavaScript 101 -->
            <div class="development">    
            <a href="./javascript.php">
                <figure class="box">
                    <img src="images/javascript/javascript-cover.jpg" alt="JavaScript Tutorial case study">
                    <figcaption>
                        <h2>JavaScript Tutorial</h2>
                        <h3>HTML/CSS/JavaScript</h3>
                        <div>
                            <p>A javascript tutorial site for beginners.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of JavaScript 101 -->

            <!-- Iceland site -->
            <div class="development">    
            <a href="./iceland.php">
                <figure class="box">
                    <img src="images/iceland/iceland-cover.jpg" alt="project-1">
                    <figcaption>
                        <h2>Iceland tourism site</h2>
                        <h3>HTML/CSS</h3>
                        <div>
                            <p>My first hand-coded project. A tourism website design for Iceland.</p>
                            <p class="button">Take a Look</p>
                        </div>
                    </figcaption>
                </figure>
            </a></div><!-- End of Iceland site -->
           
        </section>
    </main>
<?php
include('./templates/footer.php');
?>

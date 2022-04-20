<!DOCTYPE html>
<html lang="en-US" class="no-js">
<?php
                include("head.php")
            ?>

    <!-- photo_2022-02-19_19-13-42 -->
    <body class="home page-template-default page page-id-12780 gdlr-core-body cpl-body cpl-body-front cpl-full cpl-with-sticky-navigation cpl-blockquote-style-3 gdlr-core-link-to-lightbox">
        
        <?php
                include("header.php")
            ?>
        <div class="cpl-body-outer-wrapper">
            <div class="cpl-body-wrapper clearfix cpl-with-frame">
           
            
            
                <div class="cpl-page-title-wrap cpl-style-custom cpl-left-align">
                    <!-- <a href="#" class="connect-btn"> 
                        <div class="border-color"></div>
                        <div class="connect">CONNECT</div> 
                    </a> -->
                    <div class="cpl-header-transparent-substitute"></div>
                   
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="cpl-page-title-container cpl-container">
                                <div class="cpl-page-title-content cpl-item-pdlr">
                                <img src="./upload/gif/IMG_0375.GIF" alt="">
                         
                                    <div class="cpl-page-caption">Welcome</div>
                                    <h1 class="cpl-page-title">Octo Celebrities</h1>
                                    <a href="singleport.php">Join Discord</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cpl-page-title-container cpl-container">
                                <div class="cpl-page-title-content cpl-item-pdlr">
                                    <img src="./upload/gif/IMG_0374.GIF" alt="">
                                    <div class="cpl-page-caption">Welcome</div>
                                    <h1 class="cpl-page-title">Octo Celebrities</h1>
                                    <a href="singleport.php">Join Discord</a>
                                </div>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="cpl-page-title-container cpl-container">
                                <div class="cpl-page-title-content cpl-item-pdlr">
                                <img src="./upload/gif/IMG_0371.gif" alt="">
                                    <div class="cpl-page-caption">Welcome</div>
                                    <h1 class="cpl-page-title">Octo Celebrities</h1>
                                    <a href="singleport.php">Join Discord</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                       
                </div>
        
                            

                <section class="section-description ">
                    <div class="d-flex gdlr-core-pbf-section-container gdlr-core-container clearfix">
                        <h2 style="color: white;">
                            The most famous octopuses in the world.
                        </h2>
                        <p class="left">
                        A unique art project combining famous people's faces with octopus bodies, making a bold statement about the relationship between humans and animals. These celebrities were selected for the unique roles they play in our society and their ability to reach millions of people with their boldness and thoughtfulness. This project is meant to start a dialogue that will hopefully lead to a change in how we treat animals in today's world. 

                        <p class="left">
                        We used the octopus as a symbol of intelligence and adaptability to create a campaign that raises awareness of animal rights issues. 

                        </p>
                        <p class="left">
                        Our avatars come with dozens of unique accessories, traits and skins, so each avatar has a distinct personality. We have many exclusive features planned for our 2022 roadmap to reward our community's loyalty.

                        </p>
                        <p class="left">
                        We take great pride in the incredible Octo Celebrities community and the positive impact they are having each day. Our Octo Celebrities community members are dedicated to having fun, being positive and working together toward a shared goal. We have a shared vision of our role and an eagerness to make a positive difference.

                        </p>
                        <p class="left">
                        Octo Celebrities is an exclusive set of 8888 rare and valuable NFTs living on the Ethereum blockchain. Octo Celebrities are created in limited quantities so they can retain their value as memberships in a rapidly growing club that has exclusive access to premium content, services, and experiences.

                        </p>
                        <p class="left">
                        When you buy an Octo Celebrity, you are buying a piece of provably-rare digital art. You will receive ongoing benefits due to the collectible nature of your avatar, as well as the continued development—and potential monetization—of its identity.                        </p>

                        </p>
                    </div>
                </section>

                <section class="mint">
                    <div class="gdlr-core-container">
                        <div class="content-mint">
                            <div class="title">
                                <h2>
                                MINT AN <br>
                                <strong> OCTOCELEBRITY</strong>
                                </h2>
                                <p id="ActualMode">Sale live in: 25 days 1 hour 40 minutes</p>   
                            </div>
                            
                            <div class="range-box">
                                <div class="title-range">
                                <p>Total OctoCelebrities Minted</p> 
                                <span class="value-range"><span id="RangeValue"></span>/8888</span> 
                                </div>  
                                <div class="range-section">
                              <div class="range-line range-line-100"></div>
                                </div>
                            </div>
                            
                            <div id="HideBeforeOnline" class="amount"> 
                                <p>Amount to Mint (max 3)</p>
                                <div class="amount-content">
                                    <span class="minusBtn button" id="minusBtn">-</span>
                                    <span class="result" style="border-color: transparent;"><input value="1" id="MintValue" disabled style="border-color: transparent;text-align: center; font-size: 22px;"/></span>
                                    <span class="plusBtn button" id="plusBtn">+</span>
                                </div>

                            </div>

                            <div id="HideAfterOnline" class="amount"> 
                                <p>Amount to Mint (max 3)</p>
                                <div class="amount-content">
                                    <input class="button" type=button value="-" onclick="button2()" id="minusminus" style="flex-flow: column;"></input>
                                    <span class="result" style="margin: 0 20px; border-color: transparent; color:white;font-size: 22px;"><span  type="number" min="1" max="3" id="output-area"></span></span>
                                    <input class="button" type=button onclick="button1()" value="+" id="plusplus" style="flex-flow: column;"></input>
                                </div>

<script>
let x = 1;
var xEth = 0.08;

document.getElementById('output-area').innerHTML = x;


function button1() {


    document.getElementById('output-area').innerHTML = ++x;
  document.getElementById('val2').innerHTML = x * 0.08;

  if (x == 3){
    document.getElementById("plusplus").disabled = true;
    document.getElementById("minusminus").disabled = false;

  }

}

function button2() {

  document.getElementById('output-area').innerHTML = --x;
  document.getElementById('val2').innerHTML = x * 0.08;
    

  if (x == 1){
    document.getElementById("minusminus").disabled = true;
    document.getElementById("plusplus").disabled = false;


  }


}

</script>


                            </div>
                            
                            <a class="cpl-main-menu-right-button cpl-style-default" id="mintBtn" style="cursor:pointer;"><span>MINT NOW</span></a>
                            <p id="HideBConnect" style="margin-top:10px;">Total: <span id="val"></span> ETH</p>
                            <p id="HideAConnect" style="margin-top:10px;">Total: <span id="val2">0.08</span> ETH</p>

                        </div>
                        
                        <div class="container">
                            <div id="countdown">
                                <ul>
                                <li><span id="days"></span>days</li>
                                <li><span id="hours"></span>Hours</li>
                                <li><span id="minutes"></span>Minutes</li>
                                <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                        </div>
                        <style>
                           .swal2-styled.swal2-confirm {
    border: 0;
    border-radius: 4.25em;
    background: initial;
    background-color: #111111;
    color: #fff;
    font-weight: bolder;
    font-size: 1em;
    height: 57px;
    width: 187px;
} 

.swal2-styled.swal2-confirm:hover {
    border: 0;
    border-radius: 4.25em;
    background: initial;
    background-color: #fff;
    color: #111111;
    font-weight: bolder;
    font-size: 1em;
    height: 57px;
    width: 187px;
} 

.swal-footer {
    text-align: center;
    padding-top: 13px;
    margin-top: 13px;
    padding: 13px 16px;
    border-radius: inherit;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.swal-button {
    /* background-color: #7cd1f9; */
    /* color: #fff; */
    border: none;
    box-shadow: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 16px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
    text-align: center;
    background-color: #111111;
    color: #fff;
    width: 187px;
    height: 57px;
}

.swal-button:hover {
    /* background-color: #7cd1f9; */
    /* color: #fff; */
    border: none;
    box-shadow: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 16px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
    text-align: center;
    background-color: #fff;
    color: #111111;
    width: 187px;
    height: 57px;
}
                        </style>
                        <script>
                            (function () {
                        const second = 1000,
                                minute = second * 60,
                                hour = minute * 60,
                                day = hour * 24;

                        //I'm adding this section so I don't have to keep updating this pen every year :-)
                        //remove this if you don't need it
                        let today = new Date(),
                            dd = String(today.getDate()).padStart(2, "0"),
                            mm = String(today.getMonth() + 1).padStart(2, "0"),
                            yyyy = today.getFullYear(),
                            nextYear = yyyy + 1,
                            dayMonth = "09/30/",
                            birthday = dayMonth + yyyy;
                        
                        today = mm + "/" + dd + "/" + yyyy;
                        if (today > birthday) {
                            birthday = dayMonth + nextYear;
                        }
                        //end
                        
                        const countDown = new Date(birthday).getTime(),
                            x = setInterval(function() {    

                                const now = new Date().getTime(),
                                    distance = countDown - now;

                                document.getElementById("days").innerText = Math.floor(distance / (day)),
                                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                                //do something later when date is reached
                                if (distance < 0) {
                                document.getElementById("headline").innerText = "It's my birthday!";
                                document.getElementById("countdown").style.display = "none";
                                document.getElementById("content").style.display = "block";
                                clearInterval(x);
                                }
                                //seconds
                            }, 0)
                        }());
                        </script>
                    </div>
                </section>

                <div class="cpl-page-wrapper" id="cpl-page-wrapper">
                    <div class="gdlr-core-page-builder-body">
                        <div class="gdlr-core-pbf-section">
                            <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px;">

                                        <!-- <div class="filter clearfix gdlr-core-filterer-wrap gdlr-core-js  gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align" id="contactus">
                                            <ul>
                                                <li><a href="#" class="active" data-filter="*">All</a></li>
                                                <li><a href="#" data-filter=".class1" >Hal Finney</a></li>
                                                <li><a href="#" data-filter=".class2" >Adam Back</a></li>
                                                <li><a href="#" data-filter=".class3" >Satoshi Nakamoto</a></li>
                                            </ul>
                                        </div>    -->

                                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix  filter-container" data-layout="masonry">
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class1 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                          
                                                            <img src="img/IMG_0421.png" alt="" width="1000" height="670" title="shutterstock_1067103281" />
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Benjamin Franklin</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class2 gdlr-core-column-30">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0423.png" alt="" width="1000" height="670" title="shutterstock_1067103281" />
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Queen Elizabeth</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class3 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0420.PNG" alt="" width="1000" height="670" title="shutterstock_1067103281" />
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Michael Jackson</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class1 gdlr-core-column-30">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0380.PNG" alt="" width="1000" height="670" title="shutterstock_1067103281" />                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Leonardo DiCaprio</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class2 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/photo_2022-02-19_18-39-48.jpg" alt="" width="1000" height="670" title="shutterstock_1067103281" />   
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">The Notorious B.I.G.</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class2 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0428.png" alt="" width="1000" height="670" title="shutterstock_1067103281" />   
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Che Guevara</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class2 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0424.png" alt="" width="1000" height="670" title="shutterstock_1067103281" />   
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Eminem</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class2 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0425.png" alt="" width="1000" height="670" title="shutterstock_1067103281" />   
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Snoop Dogg</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class2 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0431.png" alt="" width="1000" height="670" title="shutterstock_1067103281" />   
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">Conor Mcgregor</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-item-list gdlr-core-item-pdlr class2 gdlr-core-column-30 gdlr-core-column-first">
                                                <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                            <img src="img/IMG_0230.png" alt="" width="1000" height="670" title="shutterstock_1067103281" />   
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                            <a href="singleport.php">The Clown Putler</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="roadmap" id="roadmap">
                    <div class="gdlr-core-container">
                        <div class="roadmap-content">
                            <div class="title">
                                <h1 class="text-upper color-white" style="opacity: 1;">
                                The roadmap
                                </h1>
                                <p class="color-white">
                                This roadmap lays out our big-picture vision for the future of Octo Celebrities. We have a lot of ideas and we're very excited about what we're working on.
                                </p>
                            </div>
                            <div class="content">
                                <div class="roadmap-item">
                              
                                    <h3 class="color-white">
                                    <span class="roadmap-item-no">1</span>    
                                    Launch Octo Celebrities Zombie version</h3>
                                </div>
                                <div class="roadmap-item">
                                    
                                    <h3 class="color-white">
                                    <span class="roadmap-item-no">2</span>    
                                    Launch Animated 3D collection</h3>
                                </div>
                                <div class="roadmap-item">
                                   
                                    <h3 class="color-white">
                                    <span class="roadmap-item-no">3</span>January 2023 Metaverse + Decentraland</h3>
                                    <div class="text-block">
                                        <p class="color-white">Octo Celebrities Enter the Metaverse</p>
                                    </div>
                                </div>
                                <div class="roadmap-item">
                                  
                                    <h3 class="color-white">
                                    <span class="roadmap-item-no">4</span> Q2 2023 Game Launch</h3>
                                </div>
                                <div class="roadmap-item">
                               
                                    <h3 class="color-white">
                                    <span class="roadmap-item-no">5</span>Merchandise</h3>
                                    <p class="color-white">Our NFTs will be widely distributed to fans throughout the world once we create our own Merch for people to wear and display. All profits from Merch sales will be donated to the charities selected by our community.</p>
                                </div>
                                <div class="roadmap-item">
                   
                                    <h3 class="color-white">
                                    <span class="roadmap-item-no">6</span>Giveaways</h3>
                                    <p class="color-white">We will host regular giveaways with expensive prizes as a way to express our appreciation for your loyalty.</p>
                                </div>
                                <div class="roadmap-item">
                                  
                                    <h3 class="color-white">
                                    <span class="roadmap-item-no">7</span>TBD by our community. Stay tuned</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                            <section class="section-description">
                <div class="d-flex gdlr-core-pbf-section-container gdlr-core-container clearfix">
                    <h3>
                        Want to join our community?
                    </h3>
                    <p>
                        If you’re spreading the word about our brand, then you already belong to Octo Celebrities community.  Connect with us on Twitter or Instagram, or join our Discord server to get updates from the Octo Celebrities community.
                    </p>
                    <a class="cpl-main-menu-right-button no-anim"><span>JOIN US</span></a>
                </div>
            </section>
            <?php
                include("footer.php")
            ?>
            </div>
        </div>
        
    </body>
</html>

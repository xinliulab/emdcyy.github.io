<!-- The software or code is under GPL (General Public License). -->
<!-- W3C recommends lowercase in HTML, and demands lowercase for stricter document types like XHTML. -->

<!DOCTYPE html>
<html lang="en-US"> <!-- how to define the attribute in CSS -->
    <head>
        <title>Xin Liu</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    </head>

    <body><!--style="font-family: -apple-system, BlinkMacSystemFont, sans-serif;"-->
        <div class="introduction">
            <img src="figure.JPG" alt="MyFigure" style="width:160px" align="right"><!-- how to define the image attribute in CSS -->
            <h1 title = "name"    > Xin Liu </h1>
            <blockquote>
                <!-- For ten years, I have been devoting my energy into signal processing, embedded system and hardware design. Now, I am learning computer science from the view of a hardware engineer. To my best knowledge, I believe the machine learning is a good tool, but not the best tool.  -->
            </blockquote>   
            <p  class = "introduction"  > Ph.D.            </p>
            <p  class = "introduction"  > UMBC             </p>
            <p  class = "introduction"  > xinliu1@umbc.edu </p>
            <a href="https://scholar.google.com/citations?user=w-GyGM4AAAAJ&hl=zh-CN" target="_blank"> My Google Scholar </a>&nbsp;
            <a href="https://github.com/EMDCYY" target="_blank"> My Github </a>
            <hr>
        </div>

        <div class="nav-tabs">
            <ul class="nav-tabs"> 
                
                <li class="nav-tabs">
                    <a id="home" onclick="display_home()" class = "active">
                        Home
                    </a>
                </li>

                <li class="nav-tabs">
                    <a id="publication" onclick="display_publication()" class = "state_idle">
                        Publication
                    </a>
                </li>
                
                <li class="nav-tabs">
                    <a id="project" onclick="display_project()" class = "state_idle">
                        Project
                    </a>
                </li>

                <li class="nav-tabs">
                    <a id="continue" onclick="display_continue()" class = "state_idle">
                        Continue
                    </a>
                </li>
            
            </ul>
        </div>

       <div id = "content_home">
            
            <ul>
                <p>
                    Education:
                </p>
                    <ul class="place">
                        <p>
                            <a href="http://www.umbc.edu/">UMBC</a>
                        </p>
                            <ul class="degree">
                                <p>
                                    Ph.D.
                                    in <a href="https://www.csee.umbc.edu/">Computer Engineering</a> 
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                    2016 - Present
                                </p>
                            </ul>

                        <p>
                            <a href="http://english.bit.edu.cn/">Beijing Institute of Technology</a>
                        </p>
                            <ul class="degree">
                                <p>
                                    M.S.
                                    &nbsp;
                                    in <a href="http://pris.bit.edu.cn/home/index.htm">Pattern Recognition and Intelligent System</a>
                                    &nbsp;
                                    2009 - 2012
                                </p>
                                <p>
                                    B.S.
                                    &nbsp;&nbsp;
                                    in <a href="http://ac.bit.edu.cn/english/abouschool/index.htm">Automation</a>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                    2005 - 2009
                                </p>
                            </ul>
                    </ul>

                <p>
                    Experience:
                </p>
                    <ul class="place">
                        <p>
                            <a href="http://english.aoe.cas.cn/"> Academy of Opto-Electronics, Chinese Academy of Sciences</a>
                        </p>
                            <ul class="degree">
                                <p>
                                    Assistant Researcher
                                    &nbsp;&nbsp;
                                    in Division of Laser Measurement Technology 
                                    &nbsp;&nbsp;
                                    2014 - 2016
                                </p>
                                <p>
                                    Research Intern
                                    &emsp;&emsp;&nbsp;&nbsp;&nbsp; 
                                    in Division of Laser Measurement Technology
                                    &nbsp;&nbsp;&nbsp;
                                    2012 - 2014
                                </p>
                            </ul>                           
                    </ul>

            </ul>
        </div>

        <div id = "content_publication">
            <ul>
                    <p>
                        Publication:
                    </p>
                        <ul>
                            <p>
                                <cite>Real-time algorithm for SIFT based on distributed shared memory architecture with homogeneous multi-core DSP</cite>
                            </p>
                        </ul>                   
            </ul>
        </div>

        <div id = "content_project">
            <ul>
                    <p>
                        Project:
                    </p>
                        <ul>
                            <p>
                                <p id="timer"></p>
                            </p>
                        </ul>                   
            </ul>
        </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-100848290-1', 'auto');
      ga('send', 'pageview');

    </script>

    <div class = "counter">
        <a href="http://s11.flagcounter.com/more/1cRi">
            <img class = "counter" src="http://s11.flagcounter.com/count2/1cRi/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0">
        </a>

        <a title="real time web analytics" href="http://statcounter.com/" target="_blank">
                <img class = "counter" src="//c.statcounter.com/11330862/0/942c9e74/0/" alt="real time web analytics" style="border:none; display:none;">
        </a>
    </div>
    
        <script src="myScript.js"></script>
    </body>
</html>

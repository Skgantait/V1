<?php echo $_SESSION['funclist']; ?>
 <nav class="sidebar" id="sidebar">
            <button class="menu__toggle" id="menu-toggle">
                <i class="ri-menu-line"></i>
                <!--<i class="fa fa-bars" style="color: #8C8C8C;"></i>-->
            </button>
            
            <div class="sidebar__container">
                
                <div class="sidebar__content">

                    <div class="sidebar__list">
                        <ul class="collapsible-menu" data-collapsible-menu="slide">

                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/syntax2.png" width="14" height="14"  title="Syntax"><span>Syntax</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Syntax'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Syntax'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Syntax'][$i].'</a></li>';
                                        }
                                    ?>
                                    <!--
                                    <li><a href="#" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>Operators and Special Characters</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>Data Type</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>if</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>while</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>do while</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>for</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>swich</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>goto</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>break</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>return</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>Hello World</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>Function & Arguments</a></li>
                                    -->
                                </ul>
                            </li>

                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/IO2.png" width="14" height="14"  title="IO"><span>IO</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['IO'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['IO'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['IO'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>

                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/bin2.png" width="14" height="14"  title="Binary & Memory"><span>Binary & Memory</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Binary & Memory'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Binary & Memory'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Binary & Memory'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/sys2.png" width="14" height="14" title="System Info"><span>System Info</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['System Info'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['System Info'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['System Info'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/filefolder2.png" width="14" height="14" title="File & Folder"><span>Files & Folders</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Files & Folders'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Files & Folders'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Files & Folders'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/str2.png" width="14" height="14" title="String"><span>String</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['String'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['String'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['String'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/dt2.png" width="14" height="14" title="Date & Time"><span>Date & Time</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Date & Time'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Date & Time'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Date & Time'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/table2.png" width="14" height="14" title="Table & Field"><span>Table & Field</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Table & Field'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Table & Field'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Table & Field'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/mtrx2.png" width="14" height="14" title="Matrix Operation"><span>Matrix Operation</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Matrix Operation'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Matrix Operation'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Matrix Operation'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/sfun2.png" width="14" height="14" title="Mathematics"><span>Mathematics</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Mathematics'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Mathematics'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Mathematics'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/algb2.png" width="14" height="14" title="Linear Algebra"><span>Linear Algebra</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Linear Algebra'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Linear Algebra'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Linear Algebra'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/geom2.png" width="14" height="14" title="Geometry"><span>Geometry</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Geometry'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Geometry'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Geometry'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/int2.png" width="14" height="14" title="Integration"><span>Integration</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Integration'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Integration'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Integration'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/poly2.png" width="14" height="14" title="Polynomial & BSpline"><span>Polynomial & BSpline</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Polynomial & BSpline'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Polynomial & BSpline'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Polynomial & BSpline'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/optm2.png" width="14" height="14" title="Optimization & Equation Solver"><span>Optimization & Equation Solver</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Optimization & Equation Solver'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Optimization & Equation Solver'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Optimization & Equation Solver'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/datafun2.png" width="14" height="14" title="Data Function"><span>Data Function</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Data Function'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Data Function'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Data Function'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/stat2.png" width="14" height="14" title="Statistics"><span>Statistics</span></a>
                                <ul> 
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Statistics'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Statistics'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Statistics'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/reg2.png" width="14" height="14" title="Regression"><span>Regression</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Regression'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Regression'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Regression'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/ml2.png" width="14" height="14" title="Machine Learning"><span>Machine Learning</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Machine Learning'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Machine Learning'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Machine Learning'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/fin2.png" width="14" height="14" title="Finance"><span>Finance</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Finance'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Finance'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Finance'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/sign2.png" width="14" height="14" title="Signal Processing"><span>Signal Processing</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Signal Processing'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Signal Processing'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Signal Processing'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/image2.png" width="14" height="14" title="Image Processing"><span>Image Processing</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Image Processing'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Image Processing'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Image Processing'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/db2.png" width="14" height="14" title="Database Functions"><span>Database Functions</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Database Functions'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Database Functions'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Database Functions'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>


                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/others2.png" width="14" height="14" title="Others"><span>Others</span></a>
                                <ul>
                                    <?php
                                        for ($i=0 ; $i<count($_SESSION['funclist']['Others'],0); $i++){
                                            echo '<li><a href="javascript:"  onclick="funcpost(\''. $_SESSION['funclist']['Others'][$i] . '\')" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>'.$_SESSION['funclist']['Others'][$i].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </li>

                            <!--
                            <li>
                                <a class="sidebar__title collapsed sidebar__link"><img src="images/func/intgration2.png" width="14" height="14" title="Intgration"><span>Intgration</span></a>
                                <ul>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>C</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>C++</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>C#</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>JAVA</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>PHP</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>Python</a></li>
                                    <li><a href="javascript:;" class="sidebar__link"><i class="ri-arrow-drop-right-fill"></i>JavaScript</a></li>
                                </ul>
                            </li>
                            -->
        
                        </ul>
                    </div>

                   
                </div>
                <div class="sidebar__actions">
                </div>
            </div>
        </nav>
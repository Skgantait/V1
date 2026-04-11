
            <div class="row clearfix">

                <div class="funcname">
                    <div class="section-heading">
                        <h3>Found Result</h3>
                        <?php
                            $tmp = "";
                            if ($srch != ""){
                                $tmp = $srch;
                            } elseif ($fnm != ""){
                                $tmp = $fnm;
                            } elseif ($dmn != ""){
                                $tmp = $dmn;
                            }
                        ?>
                        <h4>We Have Found <?php echo $count ?> Results For Key-Word <?php echo '"'. $tmp .'"' ?>.</h4>
                    </div>
                    
                </div>

                <div class="funcdec">
                    <?php
                        for ($i=0 ; $i<$count; $i++){
                           // echo '<h4>'. $rows[$i]['name_val'].'</h4>';
                           // echo '<div class="funcseg">';
                          //  echo '<hr>';
                          //  echo '<a href="#"><i class="ri-arrow-drop-right-fill"></i>' . $rows[$i]['name_val'] . '</a>';
                          //  echo '<p>' $rows[$i]['sort_description'] . '</p>';
                          //  echo '</div>';
                            echo '<div class="funcseg">
                                    <hr>
                                    <div class="section-heading"><h3 style="padding-left: 15px;">' . $_SESSION['search'][$i]['main_categori'] . '</h3></div>
                                    <a href="javascript:"  onclick="funcpost(\''. $_SESSION['search'][$i]['name_val'] . '\')"><i class="ri-arrow-drop-right-fill"></i>' . $_SESSION['search'][$i]['name_val'] . '</a>                                    
                                    <div class="funcsegdesc"><p>' .$_SESSION['search'][$i]['sort_description'] . '</p>
                                    </div></div>';
                        }

                    ?>

                </div>

<script type="text/javascript">
    function opensite(){
        window.open('functions.php', '_blank').focus();
    }
</script>
</div>